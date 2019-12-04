<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['form'] = '';
$_SESSION['formfield'] = [];
$_SESSION['errormsg'] = [];

require('src/includes/dbparms.php');
require('src/classes/class.db.php');

$register = false;
$back = false;

if ( !empty($_POST) ) {
	if ( isset($_POST['rformname']) ) {
		$register = true;
		$fname = ( isset($_POST['rfname']) ) ? htmlspecialchars($_POST['rfname']) : '';
		$lname = htmlspecialchars($_POST['rlname']);
		$email = htmlspecialchars($_POST['remail']);
		$uname = htmlspecialchars($_POST['runame']);
		$pswd  = htmlspecialchars($_POST['rpswd']);
	} 
	 else {
		$uname = htmlspecialchars($_POST['luname']);
		$pswd  = htmlspecialchars($_POST['lpswd']);
	}
}

if ( $register ) {
	
	$data = [$fname, $lname, $email, $uname, password_hash($pswd, PASSWORD_DEFAULT), $_SERVER['REMOTE_ADDR']];
	$db = new Db($dbms, $host, $port, $dbname, $username, $password);

	$sel = $db->selectDb('email, uname', 'WHERE email="' . $email. '" OR uname="' . $uname . '"');

	if (empty($sel)) {

		$db->insertDb($data);

		setcookie('uname', $uname, time()+3600);

		header('Location: blog.php');
		exit;

	} else {

		$back = true;
		$_SESSION['form'] = 'registerform';

		foreach ($sel as $v) {
			
			if ($v['email'] == $email) {
				$_SESSION['errormsg']['remail'] = 'E-Mail already exists.';
				$_SESSION['formfield']['remail'] = 'remail';
			}
			if ($v['uname'] == $uname) {
				$_SESSION['errormsg']['runame'] = 'Username already exists.';
				$_SESSION['formfield']['runame'] = 'runame';
			}
		}
	}
} else { // Hier beginnt der Login-Teil.
	
	$db = new Db($dbms, $host, $port, $dbname, $username, $password);
	$sel = $db->selectDb('fname, lname, uname, email, pswd', 'WHERE uname="' . $uname . '"');

	if (empty($sel)) {
		$back = true;
		$_SESSION['form'] = 'loginform';
		$_SESSION['errormsg']['luname'] = 'Wrong username!';
		$_SESSION['formfield']['luname'] = 'luname';
	} else {
		if ( password_verify($pswd, $sel[0]['pswd']) ) {
			if( isset($_POST['remember']) ) {

					setcookie('uname', $sel[0]['uname'], time()+3600);
					setcookie('remember', 'logged', time()+3600);

				}
			setcookie('uname', $sel[0]['uname'], time()+3600);
			header('Location: blog.php');
			exit;
		} else {
			$back = true;
			$_SESSION['form'] = 'loginform';
			$_SESSION['errormsg']['lpswd'] = 'Wrong password!';
			$_SESSION['formfield']['lpswd'] = 'lpswd';
		}
	}
}

if ( $back ) {	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit;
}
