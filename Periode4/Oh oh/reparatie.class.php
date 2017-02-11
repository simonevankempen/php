<?php

class reparatie {
    
    public $reparatie_id;
    public $kosten;
    
    function getReparatieId() {
        return $this->reparatie_id;
    }
    
    function setReparatieId($id) {
        $this->reparatie_id = $id;
    }
    
    function getKosten() {
        return $this->kosten;
    }
    
    function setKosten($kosten) {
        $this-> kosten = $kosten;
    }
    
    
}


?>