<?php

// SESSION-START ===============================================================================================

	session_start();
	
	if( isset($_COOKIE['remember']) ) {
		header('Location: blog.php');
		exit;
	}
?>

<!-- HTML ====================================================================================================== -->

<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>My simple Weblog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="src/css/styles.css">
		<link rel="stylesheet" type="text/css" href="src/fontawesome/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap" rel="stylesheet">
		<script src="src/js/javascript.js"></script>
	</head>
	
	<body>

<!-- INCLUDING: MODAL + TOP-NAVIGATION + REGISTER/LOGIN/FORGOT FORMS =========================================== -->

		<?php require('src/includes/forms-home.php'); ?>
		
<!-- FOOTER-NAVIGATION ========================================================================================= -->

		<footer id="footernav">
			<ul>			
				<li>
					<a href="legal.php" title="Legal" id="legal"
					   class="">Legal</a>
				</li>
				<li>
					<a href="contact.php" title="Contact" id="contact"
					   class="">Contact</a>
				</li>
				<li>
					<a href="terms.php" title="Terms" id="terms"
					   class="">Terms & Privacy</a>
				</li>
			</ul>
		</footer>
		
<!-- HEADER-BANNER ============================================================================================== -->
		
		<header class="header-banner"></header>
		
<!-- INDEX-MAIN CONTENT  ======================================================================================== -->
		
		<main id="index-main">
			<h2>Welcome to my little weblog !</h2>
			<p>
				If u want to preview the site,<br>
				login and write a post with the following login-data:
			</p>
			
			<p>
			<table>
				<tr>
					<td>username:</td>
					<td><b>gast</b></td>
				</tr>
				<tr>
					<td>password:</td>
					<td><b>12345678</b></td>
				</tr>
			</table>
			</p>
			
			<p>
				Or better: <b>register yourself !</b>
			</p>
			
			<p><b>Enjoy!</b></p>
		</main>

<!-- INCLUDE: PHP+JS FORMS-ERRORMESSAGE ========================================================================= -->		

		<?php require('src/includes/forms-error.php'); ?>

	</body>
</html> 