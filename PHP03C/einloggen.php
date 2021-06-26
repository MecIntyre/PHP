<?php
    require_once 'klassen/DB.php';
    session_start();

    if(isset($_GET['einloggen'])){
        $name = htmlspecialchars(trim(addslashes($_POST['name'])));
        $passwort = htmlspecialchars(trim(addslashes($_POST['passwort'])));

        $db = DB::getVerbindung();
        $abfrage = $db->prepare("SELECT * FROM user WHERE benutzer = :benutzer");
        $ergebnis = $abfrage->execute(array('benutzer' => $name));
        $user = $abfrage->fetch();

        if($user !== FALSE && password_verify($passwort, $user['passwort'])){
            $_SESSION['benutzer'] = $user['benutzer'];
            header('Location: start.php');
            die();
        } else {
            $fehlerMeldung = "<p style='color: red;'>Benutzername oder Passwort
            ungültig.</p>";}
    } ?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <h1>Login</h1>
    <?php
        if(isset($fehlerMeldung)){
            echo $fehlerMeldung; 
            
        } 
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
    ?>?einloggen=1" method="post">
        <fieldset>
            <legend>Login</legend>
            <label for="name">Benutzername:</label><br>
            <input type="text" name="name" maxlength="20" size="20" autofocus><br>
            <label for="passwort">Passwort:</label><br>
            <input type="password" name="passwort" maxlength="15"
            size="20"><br><br>
            <button type="submit">Einloggen</button>
        </fieldset>
    </form>
    </body>
</html
