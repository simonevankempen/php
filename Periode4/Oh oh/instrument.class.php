<?php

class instrument {
    
    public $instrument_id;
    public $serienummer;
    public $snaardikte;
    public $klant_id;
    
    function getInstrumentId() {
        return $this->instrument_id;
    }
    
    function setInstrumentId($id) {
        $this->instrument_id = $id;
    }
    
    function getSerieNummer() {
        return $this->serienummer;
    }
    
    function setSerieNummer($serienummer) {
        $this->serienummer = $serienummer;
    }
    
    function getSnaarDikte() {
        return $this->snaardikte;
    }
    
    function setSnaarDikte($snaardikte) {
        $this->snaardikte = $snaardikte;
    }
    
    function getKlantId() {
        return $this->klant_id;
    }
    
    function setKlantId($id) {
        $this->klant_id = $id;
    }
    
    
    
  
}


?>