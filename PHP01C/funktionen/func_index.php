<?php require_once 'index.php'; ?>
<?php
  $artikel_titel = "Prozessor";
  $artikel_inhalt = "Prozessoren sind das Herzstück eines
    Computers. In ihnen werden sämtliche Prozesse
    durchgeführt.";
          
  function artikelDatenAusgeben1() {
  $datum = "23.03.2015";
  $status = "Auf Lager";
  $lieferung = "sofort lieferbar";
  echo 'Im Sortiment seit: ' . $datum . ' Status: ' . 
  $status . ' Lieferung: ' . $lieferung;
  }
  function artikelDatenAusgeben2() {
  $datum1 = "15.03.2015";
  $status1 = "in 3 Tagen auf Lager";
  $lieferung1 = "in 6 Tagen";
  echo 'Im Sortiment seit: ' . $datum1 . ' Status: ' . 
  $status1 . ' Lieferung: ' . $lieferung1;
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funktionenindex</title>
    </head>
    <body>
    </body>
</html>


