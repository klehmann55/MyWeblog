<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>Title of the document</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="src/css/styles.css">
		<!--
		<script src="javascript.js"></script>
		-->
	</head>
	<body>
	<form method="post" action="user.php">
		<!--
		  Notice: https://developer.mozilla.org/de/docs/Web/HTML/Element/label
		-->
		<label for="fname">Vorname: <input type="text" name="fname" id="fname" value="" placeholder="Vorname" required></label>
		<label>Nachname: <input type="text" name="lname" id="lname" value="" placeholder="Nachname" required></label>
		<label for="email">E-Mail: <input type="email" name="email" id="email" value="" placeholder="E-Mail" pattern ="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></label>
		<label>Benutzername: <input type="text" name="uname" id="uname" value="" placeholder="Benutzername" required></label>
		<label>Passwort: <input type="password" name="pswd" id="pswd" value="" placeholder="Passwort" pattern=".{8,}" required></label>
		<input type="submit">
	</form>
	</body>
</html> 