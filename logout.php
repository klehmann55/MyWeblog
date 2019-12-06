<?php

// UNSET COOKIE ==========================================

	setcookie('uname', '', time()-86400);
	setcookie('remember', '', time()-86400);
	setcookie('PHPSESSID', '', time()-86400, '/');

// FORWARDING ==========================================
	
	header('Location: index.php');
	exit;
