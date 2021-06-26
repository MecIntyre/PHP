<?php
    //session_start();
    $xmlfile = 'klassen/blogbeitraege.xml';

        function suche_datei($datei){
                 if(!file_exists($datei)){
                 throw new Exception("Die Datei " . $datei . " konnte nicht gefunden
                 werden");
                }else{
                    return simplexml_load_file($datei); }
        }

class Beitrag {
    private $id;
    //private $headline; //wird im konkreten Fall nicht benutzt
    private $content;

    function anzeigenBeitraege(){
        global $xmlfile;
        try {
            $xmldaten = suche_datei($xmlfile);

            foreach($xmldaten->beitrag as $value){
                echo "<h3>Id: $value->id Beitragsname: $value->headline</h3>\n";
                echo "<p>$value->content</p>\n"; }
  
            } catch (Exception $ex) {
                echo $ex->getMessage(); }
    }

    function aendereBeitrag($id, $content){
        global $xmlfile;
        try {
            $xmldaten = suche_datei($xmlfile);
             $var;

            foreach($xmldaten->beitrag as $value){
                if($value->id == $id){
                   $value->content = $content;
                   file_put_contents($xmlfile, $xmldaten->asXML() );
                   $var = 1;
                   echo "Änderung durchgeführt."; }
            }
            if(empty($var)){
                echo "Id nicht existen."; }
      
          } catch (Exception $ex) {
              echo $ex->getMessage(); }
   }
}