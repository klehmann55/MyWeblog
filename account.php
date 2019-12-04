<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

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
		<title>Account Settings</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="src/css/styles.css">
		<link rel="stylesheet" type="text/css" href="src/fontawesome/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap" rel="stylesheet">
		<!-- <script src="js/javascript.js"></script> -->
	</head>
	<body>

<!-- NAVIGATION -->

		<nav id="topnav">
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="account.php" class="right active" id="account"><span class="fa fa-user"></span> <?= $_COOKIE['uname']; ?></a>
				</li>
				<li>
					<a href="logout.php" class="right">Logout</a>
				</li>
			</ul>
		</nav>
		<br>

<!-- ACCOUNT-FORM -->		

		<main class="main">
			<form method="post" action="useracc.php">
			<h2>Account-Settings:</h2>
				<p>
					<div class="input-container-account">
						<label for="accfname" class="container-acc"><b>Firstname:</b></label>
							<input class="input-field" type="text" value="<?= $sel[0]['fname']; ?>" 
								name="accfname" id="accfname" required>
					</div>
					
					<div class="input-container-account">
						<label for="acclname" class="container-acc"><b>Lastname:</b></label>
							<input class="input-field" type="text" value="<?= $sel[0]['lname']; ?>" 
								name="acclname" id="acclname" required>
					</div>

					<div class="input-container-account">
						<label for="accuname" class="container-acc"><b>Username:</b></label>					
							<input class="input-field" type="text" value="<?= $sel[0]['uname']; ?>" 
								name="accuname" id="accuname" disabled>
					</div>

					<div class="input-container-account">
						<label for="accemail" class="container-acc"><b>E-Mail:</b></label>
							<input class="input-field" type="text" value="<?= $sel[0]['email']; ?>" 
								name="accemail" id="accemail">
					</div>

					<div class="input-container-account">
						<label for="accpswd" class="container-acc"><b>Password:</b></label>
							<input class="input-field" type="password" placeholder="Confirm changes with your password" 
								name="accpswd" id="accpswd" required>
					</div>

					<input type="hidden" name="accformname" id="accformname" value="accformname">

					<button type="submit" class="registerbtn">Confirm changes</button>
				</p>
			</form>

		</main>
			
<!-- ACCOUNT-DELETE-FORM -->

		<main class="main">

			<form method="post" action="useracc.php">
			
			<h2>Delete Account and all Post's:</h2>
			
			<div class="input-container-account">
						<label for="delpswd" class="container-acc"><b>Password:</b></label>
							<input class="input-field" type="password" placeholder="Confirm DELETE with your password" 
								name="delpswd" id="delpswd" required>
			</div>

			<input type="hidden" name="delformname" id="delformname" value="delformname">

			<button type="submit" class="cancelbtn">DELETE your ACCOUNT and ALL your POST's</button>
			
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
					   class="">Contact</a>
				</li>
				<li>
					<a href="termsbackend.php" title="Terms" id="terms"
					   class="">Terms & Privacy</a>
				</li>
			</ul>
		</footer>

<!-- PHP+JS-ERRORMESSAGE -->		

<?php
if ( isset($_SESSION['form']) ) { ?>

		<script>
		
			var myform = '<?= $_SESSION['form'] ?>';
			// document.getElementById(myform).click();
			
			// Diese Verzweigung ist nicht notwendig:
			// if ( myform == 'accform') {
				
				<?php
				if ( isset($_SESSION['errormsg']) ) {
					
					foreach ( $_SESSION['errormsg'] as $key => $msg ) { ?>
					
						var field = document.getElementById('<?= $key ?>');
						field.placeholder = '<?= $msg ?>';
			
						// document.getElementById('luname').value = $uname;
						// document.getElementById('lpswd').value = $pswd;
						/*
						 * Das Folgende:
						 *
						 * field.style.color = 'red';
						 * field.style.borderColor = 'red';
						 * field.style.backgroundColor = '#ef7e7e36';
						 *
						 * Kann ersetzt werden durch:
						 */
						field.setAttribute('style', 'color: red; border-color: red; background-color: #ef7e7e36;');
						field.focus(); //@todo: Fokus auf das ERSTE 'Fehlerfeld'!
					<?php }
				} ?>
			// }
			
		</script>
		
<?php } ?>
	</body>
</html>