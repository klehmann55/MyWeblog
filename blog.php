<?php
	require('src/classes/class.db.php');
	require('src/classes/class.user.php');
	require('src/includes/dbparms.php');
	
	if ( !empty($_POST) ) {
		if ( isset($_POST['blog']) ) {
			$titel = htmlspecialchars($_POST['titel']);
			$content = htmlspecialchars($_POST['content']);
			$uname = htmlspecialchars($_COOKIE['uname']);
			$data = [$titel, $content, $uname];
		} 
	}
	
	
	$db = new Db($dbms, $host, $port, $dbname, $username, $password);
	$sel = $db->selectDbBlog();
?>

<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>Blog</title>
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
					<a href="blog.php" class="active">Blog</a>
				</li>
				<li>
					<!-- <span class="fa fa-user icon"></span> -->
					<a href="account.php" class="right" id="account"><span class="fa fa-user"></span> <?= $_COOKIE['uname']; ?></a>
				</li>
				<li>
					<a href="logout.php" class="right">Logout</a>
				</li>
			</ul>
		</nav>
		
		<br>
		
<!-- HEADER-BANNER 
		<header class="header-banner"></header>
-->
		
		<main class="main">
			<form method="post" action="userblog.php">
				<h2>Your new post:</h2>
				<p>
					<div class="input-container-account">
						<label for="blogtitel" class="container-acc"><b>Titel:</b></label>
							<input class="input-field" type="text" value="" 
								name="blogtitel" id="blogtitel" required>
					</div>
					
					<div class="input-container-account">
						<label for="blogcontent" class="container-acc"><b>Content:</b></label>
							<textarea class="input-field" value="Your Post.." 
								name="blogcontent" id="blogcontent" rows="5" cols="50" required></textarea>
					</div>
					
					<input type="hidden" name="blogformname" id="blogformname" value="blogformname">

					<button type="submit" class="registerbtn">Send your post</button>
				</p>
			</form>
		</main>
		
		<main class="main">

		<!-- SINGLE-DELETE-BUTTON -->
			<?php 
				if ( $sel[0]['uname'] == $_COOKIE['uname'] ) { ?>
					<a href="userblog.php?uid=<?= $sel[0]['uid'] ?>"
						class="del-post" title="Close Modal"> delete ALL your post <!-- &times; -->
					</a>
			<?php } ?>
			
			<h2>Here are the news:</h2>
			
			<?php foreach ( $sel as $key ) {  ?>
			
			<table>
			<hr>
			<!-- SINGLE-DELETE-BUTTON -->
				<?php 
					if ( $key['uname'] == $_COOKIE['uname'] ) { ?>
						<a href="userblog.php?uid=<?= $key['uid'] ?>&bid=<?= $key['bid'] ?>"
							class="del-post" title="Close Modal"> delete post <!-- &times; -->
						</a>
				<?php } ?>
				<tr>
					<td>ID: </td>
					<td><?= $key['bid'] ?></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>Author: </td>
					<td><b><?= $key['uname'] ?></b></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>Titel: </td>
					<td><b><?= $key['titel'] ?></b></td>
				</tr>
				<tr>
					<td>Text: </td>
					<td><?= $key['content'] ?></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>Date: </td>
					<td><?= $key['created'] ?></td>
				</tr>
			
			</table>
			<?php }  ?>
			<hr>
			
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
		
	</body>
</html>