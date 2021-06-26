<?php require_once 'funktionen/func_index.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
    </head>
    <body>
      <h1><?php echo "Willkommen in unserem Computerladen"; ?></h1>
      <h2><?php echo "Hier sind ihre Auswahlmöglichkeiten:"; ?></h2>
        
       <ul>
       <li><a href="artikel.php">Artikel</a></li>
       <li><a href="artikel_eintragen.php">Artikel eintragen</a></li>
       </ul>
       <ul>
       <li><a href="benutzer.php">Interner Bereich</a></li>
       <li><a href="login.php">Log-in</a></li>
       <li><a href="signin.php">Sign-in</a></li>
       </ul>
      
      <h2><?php echo "Arbeitsspeicher 32 GB"; ?></h2>
      <p><?php artikelDatenAusgeben1(); ?></p>
      <p><?php echo "32 GB Arbeitsspeicher ist der Turbo für "
          . "Ihren Rechner, damit arbeiten große Programme "
          . "zuverlässig."; ?></p>
      <hr>
      <h2><?php echo $artikel_titel; ?></h2>
      <p><?php echo $artikel_inhalt; ?></p>
      <p><?php artikelDatenAusgeben2(); ?></p>
    </body>
</html>
