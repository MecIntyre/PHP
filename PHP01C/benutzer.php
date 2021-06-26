<?php require_once 'funktionen/func_benutzer.php'; ?>
<?php
session_start();
if (!isset($_SESSION["benutzername"])) {
 header("Location: login.php");
 exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>interner Bereich</title>
    </head>
    <body>
      <h1><?php echo "Liste der registrierten Nutzer"; ?></h1>
      <h2><?php echo "Daten:"; ?></h2>

      <ul>
      <li><a href="logout.php">Log-out</a></li>
      </ul>
      
      <table border=”2”>
        <tr>
          <th>Name</th>
          <th>Alternative</th>
          <th>Passwort</th>
          <th>Email-Adresse</th>
        </tr>
        <tr>
          <td><?php echo $benutzerdaten[0][0]; ?></td>
          <td><?php echo $benutzerdaten[0][1]; ?></td>
          <td><?php echo $benutzerdaten[0][2]; ?></td>
          <td><?php echo $benutzerdaten[0][3]; ?></td>
        </tr>
        <tr>
          <td><?php echo $benutzerdaten[1][0]; ?></td>
          <td><?php echo $benutzerdaten[1][1]; ?></td>
          <td><?php echo $benutzerdaten[1][2]; ?></td>
          <td><?php echo $benutzerdaten[1][3]; ?></td>
        </tr>
        <tr>
          <td><?php echo $benutzerdaten[2][0]; ?></td>
          <td><?php echo $benutzerdaten[2][1]; ?></td>
          <td><?php echo $benutzerdaten[2][2]; ?></td>
          <td><?php echo $benutzerdaten[2][3]; ?></td>
        </tr>
        <tr>
          <td><?php echo $benutzerdaten[3][0]; ?></td>
          <td><?php echo $benutzerdaten[3][1]; ?></td>
          <td><?php echo $benutzerdaten[3][2]; ?></td>
          <td><?php echo $benutzerdaten[3][3]; ?></td>
        </tr>
        <tr>
          <td><?php echo $benutzerdaten[4][0]; ?></td>
          <td><?php echo $benutzerdaten[4][1]; ?></td>
          <td><?php echo $benutzerdaten[4][2]; ?></td>
          <td><?php echo $benutzerdaten[4][3]; ?></td>
        </tr>
      </table>
    </body>
</html>