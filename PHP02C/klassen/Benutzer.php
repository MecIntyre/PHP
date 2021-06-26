<?php
  //session_start();
  //require_once 'Beitrag.php';
  require_once 'Einloggen.php';
  require_once 'Administrator.php';
  require_once 'Redakteur.php';

class Benutzer {

    private $name;
    private $passwort;

   function __construct($name, $passwort) {
       $this->name = $name;
       $this->passwort = $passwort; }

    function setName($name) {
       $this->name = $name; }
       
    function setPasswort($passwort) {
       $this->passwort = $passwort; }

    function getName(){
       return $this->name; }

    function getPasswort(){
       return $this->passwort; }

    function einloggen($name, $passwort) {
       if($name == "Reiner" && $passwort=="braun"){
           $benutzer = new Administrator($name, $passwort, true);
           $_SESSION['benutzer'] = $benutzer;
           $_SESSION['eingeloggt'] = TRUE;
           header('Location: start.php');
       }elseif($name == "Berthold" && $passwort == "fuba"){
           $benutzer = new Redakteur($name, $passwort, true);
           $_SESSION['benutzer'] = $benutzer;
           $_SESSION['eingeloggt'] = TRUE;
           header('Location: start.php');
       }else{
           $benutzer = null;
           echo "Benutzer oder Passwort unbekannt."; }
    }
}