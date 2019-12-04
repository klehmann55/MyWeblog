<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>Terms & Privacy</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="src/css/styles.css">
		<link rel="stylesheet" type="text/css" href="src/fontawesome/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap" rel="stylesheet">
		<script src="src/js/javascript.js"></script>
	</head>
	<body>
	
		<div id="modal"></div>

<!-- TOP-NAVIGATION -->

		<nav id="topnav">
			<ul>
				<li>
					<a href="index.php" title="Home" id="ahome" class="">Home</a>
				</li>			
				<li>
					<a href="#"
				       title="Register"
					   id="aregisterform"
					   class="right"
					   onclick="document.getElementById('forgotform').style.display='none';
								document.getElementById('loginform').style.display='none';
								document.getElementById('modal').style.display='block';								
								document.getElementById('registerform').style.display='block'; 
								return false;">Register</a>
				</li>
				<li>
					<a href="#"
				       title="Login"
					   id="aloginform"
					   class="right"
					   onclick="document.getElementById('forgotform').style.display='none';
								document.getElementById('registerform').style.display='none';
								document.getElementById('modal').style.display='block';
								document.getElementById('loginform').style.display='block'; 
								return false;">Login</a>
				</li>
			</ul>
		</nav>

<!-- REGISTER-FORM-SECTION -->
		
		<section id="registerform">
		
	<!-- FORM -->
		
			<form action="user.php" method="post" class="modal-content">
			
		<!-- CLOSE-MODAL-BUTTON -->
			
			<span onclick="document.getElementById('modal').style.display='none';
						   document.getElementById('registerform').style.display='none';"
						   class="close" title="Close Modal">&times;
			</span>

				<h2>Register Form</h2>

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

				<p id="terms">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
				
				<input type="hidden" name="rformname" id="rformname" value="register">

				<button type="submit" class="registerbtn">Register</button>

				<div class="container"  style="background-color:#f1f1f1">
					<button type="button"
							class="cancelbtn"
							onclick="document.getElementById('modal').style.display='none';
									 document.getElementById('registerform').style.display='none';">Cancel
					</button>
				</div>
				
				<p class="psw">Already registered? 
						<a href="#" onclick="document.getElementById('registerform').style.display='none'; 
							document.getElementById('loginform').style.display='block';">Sign in</a>!
					</p>

			</form>
			
		</section>

<!-- LOGIN-FORM-SECTION -->

		<section id="loginform">
					
	<!-- FORM -->
					
			<form action="user.php" method="post" class="modal-content">
			
		<!-- CLOSE-MODAL-BUTTON -->
			
				<span onclick="document.getElementById('modal').style.display='none';
							   document.getElementById('loginform').style.display='none';"
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
									 document.getElementById('loginform').style.display='none';">Cancel
					</button>
				</div>
					<p class="psw">Forgot 
						<a href="#" onclick="document.getElementById('loginform').style.display='none'; 
											 document.getElementById('forgotform').style.display='block';">password?</a>
					- No account? 
						<a href="#" onclick="document.getElementById('loginform').style.display='none'; 
											 document.getElementById('registerform').style.display='block';">Sign up</a>!
					</p>
				
				
			</form>
			
		</section>
		
<!-- FORGOT-FORM-SECTION -->
		
		<section id="forgotform">
		
	<!-- FORM -->
			
			<form action="mailto:lehmann.kevin@outlook.de" method="post" class="modal-content">
			
		<!-- CLOSE-MODAL-BUTTON -->
			
				<span onclick="document.getElementById('modal').style.display='none';
							   document.getElementById('forgotform').style.display='none';"
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
									 document.getElementById('forgotform').style.display='none';">Cancel
					</button>
				</div>
				<p class="psw">Password recovered? 
					<a href="#" onclick="document.getElementById('forgotform').style.display='none'; 
										 document.getElementById('loginform').style.display='block';">Sign in</a>!
				</p>
			</form>
			
		</section>
		
		<br>
		
		<main class="main">

			<h2>Privacy Policy</h2>
			<p>Your privacy is important to us.<br>
			It is Privat's policy to respect your privacy regarding any information we may collect from you across our website,<br>
			<a href="https://klehmann.000webhostapp.com/">https://klehmann.000webhostapp.com/</a>, and other sites we own and operate.</p>

			<p>We only ask for personal information when we truly need it to provide a service to you.<br>
			We collect it by fair and lawful means, with your knowledge and consent.<br>
			We also let you know why we’re collecting it and how it will be used.</p>

			<p>We only retain collected information for as long as necessary to provide you with your requested service.<br>
			What data we store, we’ll protect within commercially acceptable means to prevent loss and theft,<br>
			as well as unauthorised access, disclosure, copying, use or modification.</p>

			<p>We don’t share any personally identifying information publicly or with third-parties, except when required to by law.</p>

			<p>Our website may link to external sites that are not operated by us.<br>
			Please be aware that we have no control over the content and practices of these sites,<br>
			and cannot accept responsibility or liability for their respective privacy policies.</p>

			<p>You are free to refuse our request for your personal information,<br>
			with the understanding that we may be unable to provide you with some of your desired services.</p>

			<p>Your continued use of our website will be regarded as acceptance of our practices around privacy and personal information.<br>
			If you have any questions about how we handle user data and personal information, feel free to contact us.</p>

			<p>This policy is effective as of 6 December 2019.</p>

			<p>Generated by <a title="Privacy Policy Template Generator" href="https://getterms.io/">GetTerms.io</a></p>

		</main>
		
<!-- FOOTER-NAVIGATION -->

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
					<a href="terms.php" title="terms" id="terms"
					   class="active">Terms & Privacy</a>
				</li>
			</ul>
		</footer>
		
	</body>
</html>