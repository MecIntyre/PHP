<?php require_once 'funktionen/func_benutzer.php'; ?>
<!DOCTYPE html>
<?php
  session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log-in</title>
    </head>
    <body>
<?php
$nutzer = isset($_POST['benutzer']) ?
    htmlspecialchars($_POST['nutzer']) : null;
  
$passwort = isset($_POST['passwort']) ?
    htmlspecialchars($_POST['passwort']) : null;
  
if($nutzer == "Thomas" || "thomas" && $passwort == "passwort"){
   echo "Hallo Thomas, Sie sind jetzt eingeloggt!"; 
   $_SESSION['benutzername'] = true;
   die(' Weiter zu <a href="benutzer.php">internen Bereich</a>'); }
   
else if($nutzer == "Sandra" || "sandra" && $passwort == "buch"){
   echo "Hallo Sandra, Sie sind jetzt eingeloggt!";
   $_SESSION['benutzername'] = true;
   die(' Weiter zu <a href="benutzer.php">internen Bereich</a>'); } 
   
else if ($nutzer == "Maik" || "maik" && $passwort == "computer"){
   echo "Hallo Maik, Sie sind jetzt eingeloggt!";
   $_SESSION['benutzername'] = true;
   die(' Weiter zu <a href="benutzer.php">internen Bereich</a>'); }
   
else if ($nutzer == "Paul" || "paul" && $passwort == "pw1234"){
   echo "Hallo Paul, Sie sind jetzt eingeloggt!";
   $_SESSION['benutzername'] = true;
   die(' Weiter zu <a href="benutzer.php">internen Bereich</a>'); }
   
else if ($nutzer == "Claudia" || "claudia" && $passwort == "monitor"){
   echo "Hallo Claudia, Sie sind jetzt eingeloggt!";
   $_SESSION['benutzername'] = true;
   die(' Weiter zu <a href="benutzer.php">internen Bereich</a>'); }
   
else {
   echo "Der Benutzer ist nicht im System registriert.";}
?>
    <h1>Anmeldeformular</h1>
    
    <form action="?login=1" method="post">
    Dein Name:<br>
    <input type="text" size="40" maxlength="250" name="name"><br><br>
    Dein Passwort:<br>
    <input type="password" size="40"  maxlength="250" name="passwort"><br>
    <input type="submit" value="Anmelden">
      </form>
    </body>
</html>
