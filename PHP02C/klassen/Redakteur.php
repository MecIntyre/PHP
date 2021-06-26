<?php

class Redakteur extends Benutzer implements Einloggen{
    private $isRedakteur; //wird in dieser Anwendung nicht verwendet.

    function __construct($name, $passwort, $isRedakteur) {
        parent::__construct($name, $passwort);
        $this->isRedakteur = $isRedakteur; }

    function setIsARedakteur($isRedakteur){
        $this->isRedakteur = $isRedakteur; }

    function getIsRedakteur(){
        return $this->isRedakteur; }

    function schreibeBeitrag(){
        echo "Beitrag wird geschrieben."; }

    function loescheBeitrag(){
        echo "Zum Löschen von Beiträgen bitte an den Administrator wenden."; }
}