<?php

// SESSION-START =================================================================================

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	$_SESSION['form'] = '';
	$_SESSION['formfield'] = [];
	$_SESSION['errormsg'] = [];

// REQUIRE =======================================================================================

	require('src/includes/dbparms.php');
	require('src/classes/class.db.php');

// $_POST ========================================================================================

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

// REGISTER =======================================================================================

	if ( $register ) {
		
		$data = [$fname, $lname, $email, $uname, password_hash($pswd, PASSWORD_DEFAULT), $_SERVER['REMOTE_ADDR']];
		$db = new Db($dbms, $host, $port, $dbname, $username, $password);

		$sel = $db->selectDb('email, uname', 'WHERE email="' . $email. '" OR uname="' . $uname . '"');

		if (empty($sel)) {

			$db->insertDb($data);

			setcookie('uname', $uname, time()+86400); // 3600 = 1 hour // 86400 = 1 day

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
	} else { // LOGIN =======================================================================================
		
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

						setcookie('uname', $sel[0]['uname'], time()+86400); // 3600 = 1 hour // 86400 = 1 day
						setcookie('remember', 'logged', time()+86400); // 3600 = 1 hour // 86400 = 1 day

					}
				setcookie('uname', $sel[0]['uname'], time()+86400); // 3600 = 1 hour // 86400 = 1 day
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

// FORWARDING =======================================================================================

	if ( $back ) {	
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
