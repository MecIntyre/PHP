<?php
session_start();

require_once 'klassen/Einloggen.php';
require_once 'klassen/Benutzer.php';
require_once 'klassen/Administrator.php';
require_once 'klassen/Redakteur.php';
require_once 'klassen/Beitrag.php'; ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Blogseite</title>
</head>
<body>
<h1>Blogseite</h1>
<form method="post" action="<?php echo
htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<fieldset>
<legend>Bitte einloggen:</legend>
<label for="name">Benutzername:</label><br>
<input type="text" name="name"><br>
<label for="passwort">Passwort:</label><br>
<input type="password" name="passwort"><br>
<br>
<input type="submit" name="login">
</fieldset>
</form>
<p>

<?php

if(isset($_POST['name'])){
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : null;
$passwort = isset($_POST['passwort']) ? htmlspecialchars($_POST['passwort'])
: null;

//echo "$name und $passwort<br><br>\n";
$benutzer = new Benutzer($name, $passwort);
$benutzer->einloggen($name, $passwort); } ?>
</p>
</body>
</html>
