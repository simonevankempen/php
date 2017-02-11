<?php

class klant {
    public $klant_id;
    public $naam;
    public $adres;
    public $woonplaats;
    public $telefoonnummer;
    
    function getklantId() {
        return $this->klant_id;
    }
    
    function setklantId($id) {
        $this -> klant_id = $id;
    }
    
    function getNaam() {
        return $this -> naam;
    }
    
    function setNaam($naam) {
        $this -> naam = $naam;
    }
 
}


?>