<?php

	setcookie('uname', '', time()-3600);
	setcookie('remember', '', time()-3600);
	setcookie('PHPSESSID', '', time()-3600, '/');
	header('Location: index.php');
	exit;
