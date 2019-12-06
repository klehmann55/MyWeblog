<?php

// SESSION-START ===============================================================================================

	session_start();
	
	if( isset($_COOKIE['remember']) ) {
		header('Location: legalbackend.php');
		exit;
	}
?>

<!-- HTML ====================================================================================================== -->

<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>Legal Disclosure</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="src/css/styles.css">
		<link rel="stylesheet" type="text/css" href="src/fontawesome/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap" rel="stylesheet">
		<script src="src/js/javascript.js"></script>
	</head>
	
	<body>

<!-- INCLUDING: MODAL + TOP-NAVIGATION + REGISTER/LOGIN/FORGOT FORMS =========================================== -->

		<?php require('src/includes/forms.php'); ?>
		
		<br>
		
<!-- MAIN LEGAL-DISCLOSURE  ==================================================================================== -->
		
		<main class="main">
		
			<h2>Legal Disclosure</h1>
			<p>
			Information in accordance with Section 5 TMG
			<br><br>Elli-Voigt-Str. 17<br>10367 Berlin<br>
			</p>
			<h2>Contact Information</h2>
			<p>
			Telephone: 015735277190<br>E-Mail: <a href="mailto:lehmann.kevin@outlook.de">lehmann.kevin@outlook.de</a><br>
			Internet address: <a href="https://klehmann.000webhostapp.com/" target="_blank">https://klehmann.000webhostapp.com/</a><br><br>
			</p>
			<h2>Disclaimer</h2>
			<p>
			Accountability for content<br>
			The contents of our pages have been created with the utmost care.<br>
			However, we cannot guarantee the contents' accuracy, completeness or topicality.<br>
			According to statutory provisions, we are furthermore responsible for our own content on these web pages.<br>
			In this matter, please note that we are not obliged to monitor the transmitted or saved information of third parties,<br>
			or investigate circumstances pointing to illegal activity.<br>
			Our obligations to remove or block the use of information under generally applicable laws remain unaffected<br>
			by this as per §§ 8 to 10 of the Telemedia Act (TMG).
			</p>

			<p>
			<br><br>Accountability for links<br>
			Responsibility for the content of 
			external links (to web pages of third parties) lies solely with the operators of the linked pages.<br>
			No violations were evident to us at the time of linking. Should any legal infringement become known to us,<br>
			we will remove the respective link immediately.
			
			<br><br>Copyright<br> Our web pages and their contents are subject to German copyright law.<br>
			Unless expressly permitted by law, every form of utilizing, reproducing or processing <br>
			works subject to copyright protection on our web pages requires the prior consent of the respective owner of the rights.<br>
			Individual reproductions of a work are only allowed for private use.<br>
			The materials from these pages are copyrighted and any unauthorized use may violate copyright laws.
			</p>

			<p>
			<br><br>
			<i>Quelle: </i><a href="http://www.translate-24h.de" target="_blank">translate-24h.de - Das Übersetzungsbüro im Internet</a> <br><br>
			</p>
			
		</main>
		
<!-- FOOTER-NAVIGATION ========================================================================================== -->

		<footer id="footernav">
			<ul>			
				<li>
					<a href="legal.php" title="Legal" id="legal"
					   class="active">Legal</a>
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
		
<!-- INCLUDE: PHP+JS FORMS-ERRORMESSAGE ========================================================================= -->		

		<?php require('src/includes/forms-error.php'); ?>
		
	</body>
</html>