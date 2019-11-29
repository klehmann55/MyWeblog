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
					<a href="news.php" class="active">News</a>
				</li>
				<li>
					<a href="imprint.php">Imprint</a>
				</li>
				<li>
					<!-- <span class="fa fa-user icon"></span> -->
					<a href="account.php" class="right" id="account"><span class="fa fa-user"></span> <?= $_COOKIE['remember']; ?></a>
				</li>
				<li>
					<a href="logout.php" class="right">Logout</a>
				</li>
			</ul>
		</nav>
		<br>
		<main class="main">
			<h2>Hier finden Sie Neuigkeiten:</h2>
			<p>Voll aktuell !</p>
		</main>
	</body>
</html>