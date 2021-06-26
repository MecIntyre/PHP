<?php
    session_start(); 
    session_destroy();
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Logout</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Sie sind ausgeloggt</h1>
        <a href="index.php">Zur Startseite</a><br>
        <a href="einloggen.php">Zum Login-Bereich</a><br>
    </body>
</html>