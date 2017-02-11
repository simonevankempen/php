<?php

class klant {
    
    public $klant_id;
    public $naam;
    public $adres;
    public $woonplaats;
    public $telefoonnummer;
    
    function getKlantId() {
        return $this->klant_id;
    }
    
    function setKlantId($id) {
        $this-> klant_id = $id;
    }
    
    function getNaam() {
        return $this->naam;
    }
    
    function setNaam($naam) {
        $this-> naam = $naam;
    }
    
     function getAdres() {
        return $this->adres;
     }
     
      function setAdres($adres) {
        $this-> adres = $adres;
    
   }
    
    function getWoonplaats() {
        return $this->woonplaats;
    }
    
    function setWoonplaats($woonplaats) {
        $this->woonplaats = $woonplaats;
    }
    
    function getTelefoonnummer() {
        return $this->telefoonnummer;
    }
    
    function setTelefoonnummer($telefoonnummer) {
        $this->telefoonnummer = $telefoonnummer;
    }
    
    
}


?>