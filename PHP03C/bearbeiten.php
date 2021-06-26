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
        <title>Video bearbeiten</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Video bearbeiten</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="get">
        <fieldset>
            <legend>Video-ID</legend>
                <label for="id">Id:</label><br>
                <input type="number" name="id" min="1" max="1000" value="<?php echo
                $id ?>"><br><br>
                <button type="submit" name="auswaehlen">Auswählen</button>
            </fieldset>
        </form>
        <?php
        if(isset($_GET['auswaehlen'])) {
            isset($_GET['id']) ? $id =
            htmlspecialchars((trim(addslashes($_GET['id'])))) : $id = null;
            $video = new Artikel($id, "", "", "", "");
            $daten = $video->videodaten($id);
        ?>
        <br>
        <hr>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="get">
            <fieldset>
            <legend>Bearbeitungsformular</legend>
            <label for="id">Video-Id (nicht veränderbar)</label> <br>
            <input type="number" name="id" min="<?php echo $id; ?>" max="<?php echo
            $id; ?>" value="<?php echo $id; ?>" > <br>

            <label for="name">Videotitel (nicht veränderbar):</label><br>
            <input type="text" name="name" maxlength="50" size="40" disabled
            value="<?php echo $daten['name']; ?>" > <br>

            <label for="beschreibung">Videobeschreibung:</label><br>
            <textarea name="beschreibung" cols="40" rows="20" maxlength="1000"
            wrap="hard" size="40" autofocus><?php echo $daten['beschreibung'];
            ?></textarea><br>

            <label for="menge">Menge:</label><br>
            <input type="number" min="0" max="10000" name="menge" value="<?php echo
            $daten['menge']; ?>" > <br>

            <label for="preis">Preis:</label><br>
            <input type="text" min="0.01" max=1000" name="preis" value="<?php echo
            $daten['preis']; ?>" > <br><br>

            <button type="submit" name="gesendet">Bearbeiten</button>
            </fieldset>
        </form>
        <?php } ?>
        <a href="ausloggen.php">ausloggen</a><br>
        <a href="javascript:history.back()">zurück</a><br>
        <a href="start.php">zurück zum Anwendungsbereich</a>
    </body>
</html>
<?php
    if(isset($_GET['gesendet'])){
        $benutzer = $_SESSION['benutzer'];
        $fehler = "";

       isset($_GET['id']) ? $id = htmlspecialchars(trim(addslashes($_GET['id']))) :
       $id = "";
       isset($_GET['beschreibung']) ? $beschreibung =
       htmlspecialchars((trim(addslashes($_GET['beschreibung'])))) : $beschreibung="";
       isset($_GET['menge']) ? $menge =
       htmlspecialchars((trim(addslashes(str_replace(",", ".", $_GET['menge']))))) :
       $menge="";
       isset($_GET['preis']) ? $preis =
       htmlspecialchars((trim(addslashes(str_replace(",", ".", $_GET['preis']))))) :
       $preis="";

       $heute = date("d. m. Y H:i:s");
       $beschreibung .= " | Geändert von $benutzer am $heute";

        if($beschreibung == null){
            $fehler = "Bitte Beschreibung angeben.<br>";
        }

        if($menge < 1 || $menge >1000 || $menge != (int)$menge ){
            $fehler .= "Bitte gültige Menge angeben.<br>";
        }
        if($preis < 0.01 || $preis > 999.99){
            $fehler .= "Bitte gültige Preisangabe erfassen.<br>";
        }

        if(strlen($fehler) > 0){
            isset($GET_['auswaehlen']);
            echo "<p class='fehler'>$fehler</p>";
        } else {
            $artikel = new Artikel($id, "", $menge, $beschreibung, $preis);
            $artikel->bearbeiten($id, $beschreibung, $menge, $preis);
            echo "<p>Datenübertragung hat stattgefunden.</p>";
            echo "<p>Id: '$id', Beschreibung: '$beschreibung',<br> Menge:
            '$menge',<br> Preis: '$preis'</p>";
        }

    }
