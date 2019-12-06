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