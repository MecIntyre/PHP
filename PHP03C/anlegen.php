<?php
    session_start();
    require_once 'klassen/Artikel.php';

    if(!isset($_SESSION['benutzer'])){
        die("Bitte zuerst <a href='einloggen.php'>einloggen</a>"); }
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Video hinzufügen</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Video hinzufügen</h1>
        <?php
            if(isset($_POST['gesendet'])){
                formverarbeiten();
            } else {
                fehlerbearbeitung();
            }

            function fehlerbearbeitung($name="", $beschreibung="", $menge="",
            $preis="", $fehler=""){
                if(!empty($fehler)){
                    echo "<p class='fehler'>$fehler</p>"; 
                    
                }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="post">
            <fieldset>
            <legend>Videoanlagemaske</legend>

            <label for="name">Name:</label><br>
            <input type="text" name="name" maxlength="50" size="40" autofocus
            required value="<?php echo $name; ?>"><br>

            <label for="beschreibung">Beschreibung:</label><br>
            <textarea name="beschreibung" cols="40" rows="20" maxlength="1000"
            wrap="hard" size="40" require><?php echo $beschreibung; ?></textarea><br>

            <label for="menge">Menge:</label><br>
            <input type="text" size="4" name="menge" required value="<?php echo
            $menge; ?>" > <br>

            <label for="preis">Preis:</label><br>
            <input type="text" size="4" name="preis" required value="<?php echo
            $preis; ?>" > <br><br>

            <button type="submit" name="gesendet">anlegen</button>
            </fieldset>
        </form>
            <?php } ?>
        <br>
        <a href="ausloggen.php">ausloggen</a><br>
        <a href="javascript:history.back()">zurück</a><br>
    </body>
</html>

<?php

    function formverarbeiten(){
        $benutzer = $_SESSION['benutzer'];
        $fehler = "";

       isset($_POST['name']) ? $name =
       htmlspecialchars((trim(addslashes($_POST['name'])))) : $name="";
       isset($_POST['beschreibung']) ? $beschreibung =
       htmlspecialchars((trim(addslashes($_POST['beschreibung'])))) :
       $beschreibung="";
       isset($_POST['menge']) ? $menge =
       htmlspecialchars((trim(addslashes(str_replace(",", ".", $_POST['menge'])))))
       : $menge="";
       isset($_POST['preis']) ? $preis =
       htmlspecialchars((trim(addslashes(str_replace(",", ".", $_POST['preis'])))))
       : $preis="";

       $heute = date("d. m. Y H:i:s");
       $beschreibung .= " | Hinzugefügt von $benutzer am $heute";

        if($name == null || $beschreibung == null){
            $fehler = "Bitte Videotitel und Beschreibung angeben.<br>"; 
            
        }

        if($menge < 1 || $menge >1000 || $menge != (int)$menge ){
            $fehler .= "Bitte gültige Menge angeben.<br>"; 
            
        }
        if($preis < 0.01 || $preis > 999.99){
            $fehler .= "Bitte gültige Preisangabe erfassen.<br>";
        }

        if(strlen($fehler) > 0){
            fehlerbearbeitung($name, $beschreibung, $menge, $preis, $fehler);
        } else {
            $artikel = new Artikel(0, $name, $menge, $beschreibung, $preis);
            $artikel->anlegen($name, $beschreibung, $menge, $preis);
            echo "<p>Datenübertragung hat stattgefunden.</p>";
            echo "<p>Videotitel: '$name',<br> Beschreibung: '$beschreibung',<br>
            Menge: '$menge',<br> Preis: '$preis'</p>";
    }
}