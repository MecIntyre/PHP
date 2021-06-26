<?php require_once 'DB.php';

class Artikel {
    private $id;
    private $name;
    private $menge;
    private $beschreibung;
    private $preis;

    function __construct($id, $name, $menge, $beschreibung, $preis) {
        $this->id = htmlspecialchars(trim(addslashes($id)));
        $this->name = htmlspecialchars(trim(addslashes($name)));
        $this->menge = htmlspecialchars(trim(addslashes($menge)));
        $this->beschreibung = htmlspecialchars(trim(addslashes($beschreibung)));
        $this->preis = htmlspecialchars(trim(addslashes(str_replace(',', '.',
        $preis)))); }

    function getId(){
        return $this->id; }
 
    function getName(){
        return $this->name; }
 
    function getMenge(){
        return $this->menge; }
 
    function getBeschreibung(){
        return $this->beschreibung; }
 
    function getPreis(){
        return $this->preis; }
 
    function setId($id){
        $this->id = $id; }
 
    function setName($name){
        $this->name = $name; }
 
    function setMenge($menge){
        $this->menge = $menge; }
 
    function setBeschreibung($beschreibung){
        $this->beschreibung = $beschreibung; }
 
    function setPreis($preis){
        $this->preis = $preis; }

    function anzeigen(){
        $db = DB::getVerbindung();

        $sql = "SELECT * FROM videoliste";
        $abfrage = $db->query($sql);
        $daten = $abfrage->fetchAll();
        return $daten; }

    function anlegen($name, $beschreibung, $menge, $preis){
        $db = DB::getVerbindung();

        $abfrage = $db->prepare("SELECT * FROM videoliste WHERE name = :name");
        $ergebnis = $abfrage->execute(array('name' => $name));
        $video = $abfrage->fetch();

        if($video['name'] !== $name){
            $sql = $db->prepare("INSERT INTO videoliste (name, beschreibung, menge,
            preis) VALUES(:name, :beschreibung, :menge, :preis)");
            $sql = $sql->execute(array('name' =>$name, 'beschreibung'
            =>$beschreibung, 'menge' => $menge, 'preis' => $preis));
        } else {
            die("<p class='fehler'>Videotitel bereits gelistet. Änderungen bitte
            über 'Video Bearbeiten' durchführen.</p><a
            href='javascript:history.back()'>zurück</a><br>"); 
            
        }
    }

        function videodaten($id){
            $db = DB::getVerbindung();

            $abfrage = $db->prepare("SELECT * FROM videoliste WHERE id = :id");
            $ergebnis = $abfrage->execute(array('id' => $id));
            $video = $abfrage->fetch();

            if($video['id'] !== $id){
                die("<p class='fehler'>Video-Id ist nicht existent!</p>");
            } else {
                return $video; 
                
            }
        }
        function bearbeiten($id, $beschreibung, $menge, $preis){
            $db = DB::getVerbindung();

            $abfrage = $db->prepare("UPDATE videoliste SET beschreibung = :beschreibung,
            menge = :menge, preis = :preis WHERE id = $id");
            $ergebnis = $abfrage->execute(array('beschreibung' => $beschreibung, 'menge'
            => $menge, 'preis' => $preis)); 
            
        }

        function loeschen($id){
            $db = DB::getVerbindung();

            $abfrage = $db->prepare("DELETE FROM videoliste WHERE id = :id");
            $abfrage = $abfrage->execute(array('id' => $id)); 
            
        }
    }