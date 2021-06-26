<?php require_once 'funktionen/func_benutzer.php'; ?>
<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign-in</title>
    </head>
    <body>
<?php
    if(isset($_GET['register'])) 
    {
       $fail = false;
       $result = false;
       $name = $_POST['name'];
       $email = $_POST['email'];
       $passwort = $_POST['passwort'];
       $passwort2 = $_POST['passwort2'];
  
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
          $fail = true;}   
       if(strlen($name) == 0) {
          echo 'Bitte einen Namen angeben<br>';
          $fail = true;}  
       if(strlen($passwort) == 0) {
          echo 'Bitte ein Passwort angeben<br>';
          $fail = true;}  
       if($passwort != $passwort2) {
          echo 'Die Passwörter müssen übereinstimmen<br>';
          $fail = true;}  

    if(!$fail) {
        $result = true;
        
        if($result) {        
            echo 'Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>';
        } else {
            echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
        }
    } 
}
?>     
    <h1>Registrierungsformular</h1>
    
    <form action="?register=1" method="post">
    Name:<br>
    <input type="text" size="40" maxlength="250" name="name"><br><br>
    E-Mail:<br>
    <input type="email" size="40" maxlength="250" name="email"><br><br>
    Dein Passwort:<br>
    <input type="password" size="40"  maxlength="250" name="passwort"><br>
    Passwort wiederholen:<br>
    <input type="password" size="40" maxlength="250" name="passwort2"><br><br> 
    <input type="submit" value="Registrieren">
    </form>
    </body>
</html>
