<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

echo '<br><br><br>';
var_dump($uid);

$_SESSION['form'] = '';
$_SESSION['formfield'] = [];
$_SESSION['errormsg'] = [];

require('src/includes/dbparms.php');
require('src/classes/class.db.php');

$account = false;
$delete = false;
$back = false;

if ( !empty($_POST) ) {
	if ( isset($_POST['accformname']) ) {
		$account = true;
		$fname = ( isset($_POST['accfname']) ) ? htmlspecialchars($_POST['accfname']) : '';
		$lname = htmlspecialchars($_POST['acclname']);
		$email = htmlspecialchars($_POST['accemail']);
		$uname = htmlspecialchars($_COOKIE['uname']);
		$pswd  = htmlspecialchars($_POST['accpswd']);
    }
	else {
		$delete = true;
		$uname = htmlspecialchars($_COOKIE['uname']);
		$pswd  = htmlspecialchars($_POST['delpswd']);
	}
}

if ( $account ) {
	
	// $data = [$fname, $lname, $email, $uname, password_hash($pswd, PASSWORD_DEFAULT), $_SERVER['REMOTE_ADDR']];
	$db = new Db($dbms, $host, $port, $dbname, $username, $password);

	$sel = $db->selectDb('pswd', 'WHERE uname="' . $uname . '"');

	if ( password_verify($pswd, $sel[0]['pswd']) ) {

		$db->updateDb('fname', $fname, $uname);
		$db->updateDb('lname', $lname, $uname);
		$db->updateDb('email', $email, $uname);

		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	} else {
		$back = true;
		$_SESSION['form'] = 'accform';
		$_SESSION['errormsg']['accpswd'] = 'Falsches Passwort!';
		$_SESSION['formfield']['accpswd'] = 'accpswd';
	}
}

if ( $delete ) {
	$db = new Db($dbms, $host, $port, $dbname, $username, $password);

	$sel = $db->selectDb('uid, pswd', 'WHERE uname="' . $uname . '"');

	if ( password_verify($pswd, $sel[0]['pswd']) ) {
		
		
		$db->deleteDbBlog($sel[0]['uid']);
		$db->deleteDb($uname);
		setcookie('uname', '', time()-3600);
		setcookie('PHPSESSID', '', time()-3600, '/');
		header('Location: index.php');
		exit;
	} else {
		$back = true;
		$_SESSION['form'] = 'delform';
		$_SESSION['errormsg']['delpswd'] = 'Wrong password!';
		$_SESSION['formfield']['delpswd'] = 'delpswd';
	}
}


if ( $back ) {	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit;
}
