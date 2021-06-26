<?php
    require_once 'klassen/DB.php';
    session_start();

        $db = DB::getVerbindung();
        $showFormular = TRUE;

            if(isset($_GET['registrieren'])) {
            $fehler = FALSE;
            $benutzer = htmlspecialchars(trim(addslashes($_POST['name'])));
            $passwort1 = htmlspecialchars(trim(addslashes($_POST['passwort1'])));
            $passwort2 = htmlspecialchars(trim(addslashes($_POST['passwort2'])));

            if(strlen($benutzer) == 0){ 
            echo "<p style='color: red;'>Bitte Benutzernamen eingeben.</p>";
            $fehler = TRUE;}

            if(strlen($passwort1) == 0){
            echo "<p style='color: red;'>Bitte Passwort eingeben.</p>";
            $fehler = TRUE;}

            if($passwort1 != $passwort2){
            echo "<p style='color: red;'>Die Passwörter müssen
            übereinstimmen.<p>";
            $fehler = TRUE;}

            if(!$fehler){
                $abfrage = $db->prepare('SELECT * FROM user WHERE benutzer =
                :benutzer ');
                $ergebnis = $abfrage->execute(array('benutzer' => $benutzer));
                $user = $abfrage->fetch();

                if($user !== FALSE){
                   echo "<p style='color: red;'>Dieser Benutzername ist schon
                   vergeben!</p>";
                   $fehler = TRUE;}
            }
            if(!$fehler){
                $passwort_hash = password_hash($passwort1, PASSWORD_DEFAULT);
                $abfrage = $db->prepare("INSERT INTO user (benutzer, passwort)
                VALUES (:benutzer, :passwort)");
                $ergebnis = $abfrage->execute(array('benutzer' => $benutzer,
                'passwort' => $passwort_hash));

                if($ergebnis){
                    echo "Sie wurden erfolgreich registriert.<br><a
                    href='einloggen.php'>Zum Login</a><br>";
                    $showFormular = FALSE;
                } else {
                    echo "Beim Abspeichern ist leider ein Fehler
                    aufgetreten.<br>";}
            }
        }
?>
<!DOCTYPE html>
<html lang="de">
    <head>
         <meta charset="UTF-8">
         <title>Registrierung</title>
         <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        if($showFormular) { ?>
        <h1>Registrierung</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>?registrieren=1" method="post">
            <fieldset>
                <legend>Registrierung</legend>
                <label for="name">Benutzername:</label><br>
                <input type="text" name="name" maxlength="20" size="20" autofocus><br>
                <label for="passwort1">Passwort:</label><br>
                <input type="password" name="passwort1" maxlength="15" size="20"><br>
                <label for="passwort2">Passwortwiederholung:</label><br>
                <input type="password" name="passwort2" maxlength="15"
                size="20"><br><br>
                <button type="submit">Registrieren</button>
            </fieldset>
            </form>
        <?php
        }
        ?>
    </body>
</html>
