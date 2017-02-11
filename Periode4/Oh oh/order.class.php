<?php

class order {
    
    public $order_id;
    public $reparatie_id;
    public $datum;
    
    function getOrderId() {
        return $this-> order_id;
    }
    
    function setOrderId($id) {
        $this-> order_id = $id;
    }
    
    function getReparatieId() {
        return $this->reparatie_id;
    }
    
    function setReparatieId($id) {
        $this->reparatie_id = $id;
    }
    
    function getDatum() {
        return $this->datum;
    }
    
    function setDatum($datum) {
        $this->datum = $datum;
    }
    
    
    
    
    
    
}







?>