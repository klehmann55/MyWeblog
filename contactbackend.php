<?php
	require('src/classes/class.user.php');
	require('src/classes/class.db.php');
	require('src/includes/dbparms.php');
	
	$db = new Db($dbms, $host, $port, $dbname, $username, $password);
	$sel = $db->selectDb('fname, lname, uname, email, pswd', 'WHERE uname="' . $_COOKIE['uname'] . '"');
?>

<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>Contact US</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="src/css/styles.css">
		<link rel="stylesheet" type="text/css" href="src/fontawesome/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap" rel="stylesheet">
		<!-- <script src="js/javascript.js"></script> -->
	</head>
	<body>
	
		<nav id="topnav">
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="account.php" class="right" id="account"><span class="fa fa-user"></span> <?= $_COOKIE['uname']; ?></a>
				</li>
				<li>
					<a href="logout.php" class="right">Logout</a>
				</li>
			</ul>
		</nav>
		
		<br>
		
		<main id="contact-main">
			<h2>Contact:</h2>
			<p>You need help or just want to give a feedback?</p>
			<p>Write us here:</p>
		
			<div id="contactform">
				<form action="mailto:lehmann.kevin@outlook.de" method="post" enctype="text/plain">
					<p>
					<label><b>Your Username</b></label><br> 
					<input class="input-field" type="email" id="contemail" name="contemail" size="23" 
					value="<?= $sel[0]['uname']; ?>" required>
					</p>
					
					<p>
					<label><b>Your E-Mail</b></label><br> 
					<input class="input-field" type="email" id="contemail" name="contemail"
					pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
					value="<?= $sel[0]['email']; ?>" required>
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
		
<!-- FOOTER-NAVIGATION -->

		<footer id="footernav">
			<ul>			
				<li>
					<a href="legalbackend.php" title="Legal" id="legal"
					   class="">Legal</a>
				</li>
				<li>
					<a href="contactbackend.php" title="Contact" id="contact"
					   class="active">Contact</a>
				</li>
				<li>
					<a href="termsbackend.php" title="Terms" id="terms"
					   class="">Terms & Privacy</a>
				</li>
			</ul>
		</footer>
		
	</body>
</html>