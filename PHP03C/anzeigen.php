<?php 
    session_start();

    require_once 'klassen/DB.php';
    require_once 'klassen/Artikel.php';

    if(!isset($_SESSION['benutzer'])){
        die("Bitte zuerst <a href='einloggen.php'>einloggen</a>"); }

    $artikel = new Artikel('id', 'name', 'beschreibung', 'menge', 'preis');
    $artikelliste = $artikel->anzeigen();
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Videodatenbank</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Videodatenbank</h1>
        <table border="2">
            <tr>
                <th>ID:</th>
                <th>Name:</th>
                <th>Beschreibung:</th>
                <th>Menge:</th>
                <th>Preis:</th>
            </tr>
<?php foreach($artikelliste as $value) { ?>
            <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['beschreibung']; ?></td>
            <td><?php echo $value['menge']; ?></td>
            <td><?php echo str_replace(".", ",", number_format($value['preis'], 2));
            ?>€</td>
            </tr>
<?php } ?>
        </table>
        <br>
        <a href="ausloggen.php">ausloggen</a><br>
        <a href="javascript:history.back()">zurück</a><br>
    </body>
</html>