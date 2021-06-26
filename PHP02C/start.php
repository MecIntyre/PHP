<?php
  require_once 'klassen/Einloggen.php';
  require_once 'klassen/Benutzer.php';
  require_once 'klassen/Administrator.php';
  require_once 'klassen/Redakteur.php';
  require_once 'klassen/Beitrag.php';
  session_start();

if(!empty($_SESSION['eingeloggt']) == true){
  $admin = ["Beiträge anzeigen", "Beitrag ändern", "Beitrag löschen", "Nutzer
  löschen"];
  $redakteur = ["Beitrag schreiben", "Beiträge anzeigen", "Beitrag ändern",
  "Beitrag löschen"];
  $auswahlliste;

  $benutzer = $_SESSION['benutzer'];
  if ($benutzer instanceof Administrator){
  $auswahlliste = $admin;}

  if ($benutzer instanceof Redakteur){
  $auswahlliste = $redakteur; } ?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Start</title>
    </head>
    <body>
        <h1>Guten Tag <?php echo $benutzer->getName(); ?></h1>
        <p>Sie haben folgende Möglichkeiten:</p>
        <form method="get" action="<?php echo
        htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
            <fieldset>
            <legend>Aktion:</legend>
            <select name="aktion">
              <?php
                  foreach($auswahlliste as $aktionswahl){
                     if($aktionswahl == $auswahlliste){
                        $gewaehlt = " selected";
                    }else{
                        $gewaehlt = ""; }
                        
                    echo "<option value='$aktionswahl
                    $gewaehlt'>$aktionswahl</option>\n"; } ?>
            </select>
            <input type="submit">
            <button type="submit" name="logout" value="logout">Logout</button>
            </fieldset>
        </form>
        <p>
        <?php
        $aktion = isset($_GET['aktion']) ? htmlspecialchars($_GET['aktion']) : null;

        switch ($aktion){
            case "Beiträge anzeigen ":
               $beitrag = new Beitrag();
               $beitrag->anzeigenBeitraege();
               break;
            case "Beitrag schreiben ":
               $benutzer->schreibeBeitrag();
               break;
            case "Beitrag ändern ":
               header('Location: aendereBeitrag.php');
               break;
            case "Beitrag löschen ":
               $benutzer->loescheBeitrag();
               break;
            case "Nutzer löschen ":
               $benutzer->loescheNutzer();
               break;
            default:
               echo "";
               break; } ?>
        </p>
    </body>
</html>
<?php
    if(!empty($_GET['logout']) == "logout"){
      header('Location: logout.php'); }
      
   }else{
      echo "Sie sind für diese Seite nicht berechtigt!"; }