<?php

// SESSION-START =================================================================================

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

// REQUIRE =======================================================================================

	require('src/includes/dbparms.php');
	require('src/classes/class.db.php');

// $_POST =========================================================================================

	$blog = false;
	$back = false;

	if ( !empty($_POST) ) {
		if ( isset($_POST['blogformname']) ) {
			$blog = true;
			
			$db = new Db($dbms, $host, $port, $dbname, $username, $password); 
			$author = $db->selectDb('uid', 'WHERE uname="' . $_COOKIE['uname'] . '"');
			
			$titel = htmlspecialchars($_POST['blogtitel']);
			$content = htmlspecialchars($_POST['blogcontent']);
		}
	}

// BLOG ===========================================================================================

	if ( $blog ) {
		
		$db = new Db($dbms, $host, $port, $dbname, $username, $password);

		$db->insertDbBlog($titel, $content, $author[0]['uid']);

		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}

// GET DELETE SINGLE POST =========================================================================

	if ( $_GET['bid'] && $_GET['uid'] ) {	
		$db = new Db($dbms, $host, $port, $dbname, $username, $password); 
		$db->deleteDbBlogSingle($_GET['uid'], $_GET['bid']);
		
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}

// GET DELETE ALL POST ============================================================================

	if ( $_GET['uid'] ) {	
		$db = new Db($dbms, $host, $port, $dbname, $username, $password); 
		$db->deleteDbBlog($_GET['uid']);
		
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	