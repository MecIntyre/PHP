<?php

class Administrator extends Benutzer implements Einloggen {
    private $isAdnimistrator; //wird in dieser Anwendung nicht verwendet.

    function __construct($name, $passwort, $isAdministrator) {
        parent::__construct($name, $passwort);
        $this->isAdnimistrator = $isAdministrator; }

    function setIsAdministrator($isAdministrator){
        $this->isAdnimistrator = $isAdministrator; }

    function getIsAdministrator(){
        return $this->isAdnimistrator; }

    function loescheNutzer(){
        echo "Nutzer gelöscht."; }

    function loescheBeitrag(){
        echo "Beitrag gelöscht."; }
}