<?php

// SESSION-START ====================================================================================

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
	
<!-- MODAL ===================================================================================================== -->
	
		<div id="modal"></div>

<!-- TOP-NAVIGATION ============================================================================================ -->

		<nav id="topnav">
			<ul>
				<li>
					<a href="index.php" title="Home" id="ahome" class="active">Home</a>
				</li>			
				<li>
					<a href="#"
				       title="Register"
					   id="aregisterform"
					   class="right"
					   onclick="document.getElementById('forgotform-home').style.display='none';
								document.getElementById('loginform-home').style.display='none';
								document.getElementById('modal').style.display='block';								
								document.getElementById('registerform-home').style.display='block'; 
								return false;">Register</a>
				</li>
				<li>
					<a href="#"
				       title="Login"
					   id="aloginform"
					   class="right"
					   onclick="document.getElementById('forgotform-home').style.display='none';
								document.getElementById('registerform-home').style.display='none';
								document.getElementById('modal').style.display='block';
								document.getElementById('loginform-home').style.display='block'; 
								return false;">Login</a>
				</li>
			</ul>
		</nav>

<!-- REGISTER-FORM-SECTION ============================================================================================ -->
		
		<section id="registerform-home">
		
	<!-- FORM -->
		
			<form action="user.php" method="post" class="modal-content">
			
		<!-- CLOSE-MODAL-BUTTON -->
			
			<span onclick="document.getElementById('modal').style.display='none';
						   document.getElementById('registerform-home').style.display='none';"
						   class="close" title="Close Modal">&times;
			</span>

				<h2>Register Form</h2>
				
				<div class="container">

					<div class="input-container">
						<span class="fa fa-user icon"></span>
							<input class="input-field" type="text" placeholder="Firstname" 
								   name="rfname" id="rfname" required>
					</div>

					<div class="input-container">
						<span class="fa fa-user icon"></span>
							<input class="input-field" type="text" placeholder="Lastname" 
								   name="rlname" id="rlname" required>
					</div>

					<div class="input-container">
						<span class="fa fa-user icon"></span>
							<input class="input-field" type="text" placeholder="Username" 
								   name="runame" id="runame" required>
					</div>

					<div class="input-container">
						<i class="fa fa-envelope icon"></i>
							<input class="input-field" type="text" placeholder="E-Mail" 
								   name="remail" id="remail" pattern ="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
									required>
					</div>

					<div class="input-container">
						<i class="fa fa-key icon"></i>
							<input class="input-field" type="password" placeholder="Password" 
								   name="rpswd" id="rpswd" pattern=".{8,}" required>
					</div>

					<div class="input-container">
						<i class="fa fa-key icon"></i>
							<input class="input-field" type="password" placeholder="Repeat password" 
								   name="rpswd-repeat" id="pswd-repeat" pattern=".{8,}" required>
					</div>

					<p id="terms">By creating an account you agree to our <a href="terms.php" target="_blank">Terms & Privacy</a>.</p>
					
					<input type="hidden" name="rformname" id="rformname" value="register">

					<button type="submit" class="registerbtn">Register</button>
				
				</div>

				<div class="container"  style="background-color:#f1f1f1">
					<button type="button"
							class="cancelbtn"
							onclick="document.getElementById('modal').style.display='none';
									 document.getElementById('registerform-home').style.display='none';">Cancel
					</button>
				</div>
				
				<p class="psw">Already registered? 
					<a href="#" onclick="document.getElementById('registerform-home').style.display='none'; 
										 document.getElementById('loginform-home').style.display='block';">Sign in</a>!
				</p>

			</form>
			
		</section>

<!-- LOGIN-FORM-SECTION ============================================================================================ -->

		<section id="loginform-home">
					
	<!-- FORM -->
					
			<form action="user.php" method="post" class="modal-content">
			
		<!-- CLOSE-MODAL-BUTTON -->
			
				<span onclick="document.getElementById('modal').style.display='none';
							   document.getElementById('loginform-home').style.display='none';"
							   class="close" title="Close Modal">&times;
				</span>
			
				<h2>Login Form</h2>
				
				<div class="imgcontainer">
					<img src="src/images/img_avatar2.png" alt="Avatar" class="avatar">
				</div>

				<div class="container">
				
					<label for="luname"><b>Username</b></label>
					
					<div style="display:flex;">
						<span class="fa fa-user icon" style="background-color: #4CAF50;"></span>
							<input class="input-field" type="text" placeholder="Username" 
								   name="luname" id="luname" required>
					</div>

					<label for="lpswd"><b>Password</b></label>
					
					<div style="display:flex;">
						<span class="fa fa-key icon" style="background-color: #4CAF50;"></span>
							<input class="input-field" type="password" placeholder="Password" 
								   name="lpswd" id="lpswd" pattern=".{8,}" required>
					</div>

					<button class="loginbtn" type="submit">Login</button>
					
					<label id="labelremember">
						<input type="checkbox" checked="checked" name="remember" id="remember"> Remember me
					</label>
					
				</div>

				<input type="hidden" name="lformname" id="lformname" value="login">

				<div class="container" style="background-color:#f1f1f1">
					<button type="button"
							class="cancelbtn"
							onclick="document.getElementById('modal').style.display='none'; 
									 document.getElementById('loginform-home').style.display='none';">Cancel
					</button>
				</div>
				
				<p class="psw">
				Forgot 
						<a href="#" onclick="document.getElementById('loginform-home').style.display='none'; 
											 document.getElementById('forgotform-home').style.display='block';">password?</a>
				- No account? 
						<a href="#" onclick="document.getElementById('loginform-home').style.display='none'; 
											 document.getElementById('registerform-home').style.display='block';">Sign up</a>!
				</p>
				
			</form>
			
		</section>
		
<!-- FORGOT-FORM-SECTION ============================================================================================ -->
		
		<section id="forgotform-home">
		
	<!-- FORM -->
			
			<form action="mailto:lehmann.kevin@outlook.de" method="post" class="modal-content">
			
		<!-- CLOSE-MODAL-BUTTON -->
			
				<span onclick="document.getElementById('modal').style.display='none';
							   document.getElementById('forgotform-home').style.display='none';"
							   class="close" title="Close Modal">&times;
				</span>
			
				<h2>Forgot Password Form</h2>
				
				<div class="container">
					<label for="femail"><b>Email</b></label>
					<div style="display:flex;">
						<span class="fa fa-envelope icon" style="background-color: #4CAF50;"></span>
							<input class="input-field" type="email" placeholder="E-Mail" 
								   name="femail" id="femail" pattern ="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
								   required>
					</div>

					<button class="loginbtn" type="submit">Send</button>
				</div>

				<div class="container" style="background-color:#f1f1f1">
					<button type="button"
							class="cancelbtn"
							onclick="document.getElementById('modal').style.display='none';
									 document.getElementById('forgotform-home').style.display='none';">Cancel
					</button>
				</div>
				<p class="psw">Password recovered? 
						<a href="#" onclick="document.getElementById('forgotform-home').style.display='none'; 
											 document.getElementById('loginform-home').style.display='block';">Sign in</a>.
				</p>
				
			</form>
			
		</section>
		
<!-- FOOTER-NAVIGATION ============================================================================================ -->

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
		
<!-- HEADER-BANNER ============================================================================================ -->
		
		<header class="header-banner"></header>
		
<!-- INDEX-MAIN CONTENT  ============================================================================================ -->
		
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

<!-- PHP+JS-ERRORMESSAGE ============================================================================================ -->		

<?php
if ( isset($_SESSION['form']) ) { ?>

		<script>
		
			var myform = '<?= $_SESSION['form'] ?>';
			document.getElementById('a' + myform).click();
				
				<?php
				if ( isset($_SESSION['errormsg']) ) {
					
					foreach ( $_SESSION['errormsg'] as $key => $msg ) { ?>
					
						var field = document.getElementById('<?= $key ?>');
						field.placeholder = '<?= $msg ?>';
			
						field.setAttribute('style', 'color: red; border-color: red; background-color: #ef7e7e36;');
						field.focus(); //@todo: Fokus auf das ERSTE 'Fehlerfeld'!
					<?php }
				} ?>
						
		</script>
		
<?php } ?>

	</body>
</html> 