<?php
    session_start();

    require_once 'klassen/DB.php';
    require_once 'klassen/Artikel.php';

    if(!isset($_SESSION['benutzer'])){
        die("Bitte zuerst <a href='einloggen.php'>einloggen</a>"); }
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Video löschen</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Video löschen</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="get">
            <fieldset>
            <legend>Id des zu löschenden Videos</legend>
            <label for="id">Id:</label><br>
            <input type="number" name="id" min="1" max="1000" autofocus><br><br>
            <button type="submit" name="auswaehlen">auswählen</button>
            </fieldset>
        </form>
        <?php
            if(isset($_GET['auswaehlen'])){
                isset($_GET['id']) ? $id = htmlspecialchars($_GET['id']) : $id =
                "null";
                $video = new Artikel($id, "", "", "", "");
                $daten = $video->videodaten($id);
        ?>
        <table border="1">
            <tr>
                <th>Id:</th>
                <th>Videotitel:</th>
                <th>Videobeschreibung:</th>
                <th>Menge:</th>
                <th>Preis:</th>
            </tr>
            <tr>
                <td><?php echo $daten['id']; ?></td>
                <td><?php echo $daten['name']; ?></td>
                <td><?php echo $daten['beschreibung']; ?></td>
                <td><?php echo $daten['menge']; ?></td>
                <td><?php echo number_format($daten['preis'], 2) ; ?></td>
            </tr>
        </table>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>"
        method="get">
            <input style="visibility: hidden;" type="number" name="id" value="<?php
            echo $daten['id']; ?>" min="<?php echo $daten['id']; ?>" max="<?php echo
            $daten['id']; ?>" ><br>
        <button style="background-color: red; font-size: 2em;" type="submit"
        name="loeschen" >unwiderruflich LÖSCHEN</button>
        </form>
        <?php }

        if(isset($_GET['loeschen'])){
        $id = isset($_GET['id']) ? htmlspecialchars(trim(addslashes($_GET['id']))) :
        null;
        $video = new Artikel($id, "", "", "", "");
        $video->loeschen($id);
            echo "<p>Video $id gelöscht</p>"; } 
        ?>
        <br>
        <hr>
        <br>
        <a href="ausloggen.php">ausloggen</a><br>
        <a href="javascript:history.back()">zurück</a><br>
        <a href="start.php">zurück zum Anwendungsbereich</a>
    </body>
</html>
