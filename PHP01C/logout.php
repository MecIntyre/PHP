<?php
  session_start();
  $_SESSION = array();
  unset($_SESSION['benutzername']);
  header ('location: index.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logout</title>
    </head>
    <body>
    </body>
</html>
