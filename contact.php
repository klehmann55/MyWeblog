<?php

// SESSION-START =================================================================================================

	session_start();
	
	if( isset($_COOKIE['remember']) ) {
		header('Location: contactbackend.php');
		exit;
	}
?>

<!-- HTML ========================================================================================================= -->

<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>Contact Us</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="src/css/styles.css">
		<link rel="stylesheet" type="text/css" href="src/fontawesome/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap" rel="stylesheet">
		<script src="src/js/javascript.js"></script>
	</head>
	
	<body>
	
<!-- INCLUDING: MODAL + TOP-NAVIGATION + REGISTER/LOGIN/FORGOT FORMS ============================================== -->

		<?php require('src/includes/forms.php'); ?>
		
		<br>
		
<!-- MAIN CONTACT-FORM ============================================================================================ -->

		<main id="contact-main">
		
			<h2>Contact:</h2>
			<p>You need help or just want to give a feedback?<br>
			Write us here:</p>
		
			<div id="contactform">
				<form action="mailto:lehmann.kevin@outlook.de" method="post" enctype="text/plain">
					<p>
						<label><b>Your E-Mail</b></label><br> 
						<input class="input-field" type="email" id="contemail" name="contemail"
						pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
					</p>
					
					<p>
						<label><b>Your Message</b></label><br>
						<textarea class="input-field" id="text" name="conttext" rows="10" required></textarea>
					</p>
					
					<p>
						<input type="checkbox" id="check1" name="check1" checked required>
						<label>I agree with the transfer of my data.</label>
					</p>
					
					<p id="loginbtn">
						<button class="loginbtn" type="submit">Send E-Mail</button>
					</p>
				</form>
			</div>
			
		</main>
		
<!-- FOOTER-NAVIGATION ============================================================================================ -->

		<footer id="footernav">
			<ul>			
				<li>
					<a href="legal.php" title="Legal" id="legal"
					   class="">Legal</a>
				</li>
				<li>
					<a href="contact.php" title="Contact" id="contact"
					   class="active">Contact</a>
				</li>
				<li>
					<a href="terms.php" title="Terms" id="terms"
					   class="">Terms & Privacy</a>
				</li>
			</ul>
		</footer>
		
<!-- INCLUDE: PHP+JS FORMS-ERRORMESSAGE ========================================================================= -->		

		<?php require('src/includes/forms-error.php'); ?>
		
	</body>
</html>