<?php
  $menge = isset($_POST['menge']) ?        
    htmlspecialchars($_POST['menge']) : null;
  $name = isset($_POST['name']) ?        
    htmlspecialchars($_POST['name']) : null;
  $preis = isset($_POST['preis']) ?
    htmlspecialchars($_POST['preis']) : null;
  $artikel_arr = array(
      'menge' => $menge,
      'name' => $name,
      'preis' => $preis );
  
$datei = "../artikel.txt";
if(file_exists($datei) == true) {
  $artikel = unserialize(file_get_contents($datei));
  $artikel[] = $artikel_arr;
  file_put_contents($datei, serialize($artikel)); }
else {
  $artikel[] = $artikel_arr;
  file_put_contents($datei, serialize($artikel)); } ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funktion Artikel Eintragen</title>
    </head>
    <body>
    </body>
</html>