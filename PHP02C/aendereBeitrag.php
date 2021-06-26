<?php
  require_once 'klassen/Einloggen.php';
  require_once 'klassen/Benutzer.php';
  require_once 'klassen/Administrator.php';
  require_once 'klassen/Redakteur.php';
  require_once 'klassen/Beitrag.php';

  session_start();

if(!empty($_SESSION['eingeloggt']) == true){
          $benutzer = $_SESSION['benutzer']; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Beitragsänderung</title>
    </head>
    <body>
        <h1>Guten Tag <?php echo $benutzer->getName(); ?></h1>
        <form method="get" action="<?php echo
        htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <fieldset>
            <legend>Beitragsänderung</legend>
            <label for="id">Beitrags-Id:</label><br>
            <input name="id" id="id" type="number" min="1" max="10" required
            autofocus><br>
            <label for="content">Neuer Inhalt:</label><br>
            <textarea name="content" id="content" cols="50" rows="10"
            maxlength="500" wrap="hard" required></textarea><br><br>
            <button type="submit">Änderung durchführen</button>
            </fieldset>
        </form><br>
        <p>
            <?php
                $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : null;
                $content = isset($_GET['content']) ?
                htmlspecialchars($_GET['content']) : null;

                if(!empty($id)){
                $beitrag = new Beitrag();
                $beitrag->aendereBeitrag($id, $content); } ?>
        </p>
        <a href="start.php" style="font-size: 1.5em;">zurück...</a>
        &emsp;
        <a href="logout.php" style="font-size: 1.5em;">logout...</a>
    </body>
</html>
<?php

}else{
    echo "Sie sind für diese Seite nicht berechtigt!"; }