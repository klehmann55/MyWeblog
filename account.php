<?php
	require('src/classes/class.user.php');
	require('src/classes/class.db.php');
	require('src/includes/dbparms.php');

	var_dump($data);

?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>News.php</title>
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
					<a href="news.php">News</a>
				</li>
				<li>
					<a href="imprint.php">Imprint</a>
				</li>
				<li>
					<a href="account.php" class="right active" id="account"><span class="fa fa-user"></span> <?= $_COOKIE['remember']; ?></a>
				</li>
				<li>
					<a href="logout.php" class="right">Logout</a>
				</li>
			</ul>
		</nav>
		<br>
		<main class="main">
			<h2>Account-Settings:</h2>
			<p>
				<div class="input-container-account">
					<span class="fa fa-user icon"></span>
						<input class="input-field" type="text" placeholder="Firstname" 
							name="rfname" id="rfname" required>
				</div>
				
				<div class="input-container-account">
					<span class="fa fa-user icon"></span>
						<input class="input-field" type="text" placeholder="Lastname" 
							name="rlname" id="rlname" required>
				</div>

				<div class="input-container-account">
				<label for="accuname" class="container"><b>Username:</b></label>
					
						<input class="input-field" type="text" placeholder="<?= $_COOKIE['remember'];  ?>" 
							name="runame" id="runame" required>
				</div>

				<div class="input-container-account">
					<i class="fa fa-envelope icon"></i>
						<input class="input-field" type="text" placeholder="E-Mail" 
							name="remail" id="remail" pattern ="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
								required>
				</div>

				<div class="input-container-account">
					<i class="fa fa-key icon"></i>
						<input class="input-field" type="password" placeholder="Password" 
							name="rpswd" id="rpswd" pattern=".{8,}" required>
				</div>
			</p>
		</main>
	</body>
</html>