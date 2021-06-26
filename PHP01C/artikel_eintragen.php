<?php require_once 'funktionen/func_artikel_eintragen.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Artikeleintrag</title>
    </head>
    <body>
<form action="funktionen/func_artikel_eintragen.php"      
      method="post">
<table>
  <tr>
    <td><label for="menge">Menge</label></td>
    <td><input type="text" name="menge" id="menge"      
           maxlength="2" size="2"></td>
  </tr>
  <tr>
    <td><label for="name">Artikel</label></td>
    <td><input type="text" name="name" id="artikel"      
           maxlength="150" size="30"></td>
  </tr>
  <tr>
    <td><label for="preis" id="preis">Preis</label></td>
    <td><input type="text" name="preis" id="preis"      
           maxlength="8" size="8"></td>
  </tr>
</table>
<button type="submit">Artikel speichern</button>
</form>
</body>
</html>
