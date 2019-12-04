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
		
<!-- FOOTER-NAVIGATION -->

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
		
	</body>
</html>