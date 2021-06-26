<?php
    session_start();
    if(!isset($_SESSION['benutzer'])){
        die("Bitte zuerst <a href='einloggen.php'>einloggen</a>");
    }

    $benutzer = $_SESSION['benutzer'];
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Anwendungsbereich</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Anwendunngsbereich - <?php echo "Guten Tag $benutzer" ?></h1>
        <table>
            <ul>
            <li><a href="anzeigen.php">Alle Videos anzeigen</a></li>
            <li><a href="anlegen.php">Neue Videos hinzufügen</a></li>
            <li><a href="bearbeiten.php">Videos bearbeiten</a></li>
            <li><a href="loeschen.php">Videos löschen</a></li>
            <li><a href="ausloggen.php">Logout</a></li>
            </ul>
        </table>
    </body>
</html>