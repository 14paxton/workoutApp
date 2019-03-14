<?php



class dailyRoutine {
    private $ID, $type, $day, $wo, $w2, $w3, $w4, $w5, $w6, $w7, $w8;
    function __construct() {
        
        
        
    }
    
    function getID() {
        return $this->ID;
    }


    function getType() {
        return $this->type;
    }
    
    function getDay(){
        return $this->day;
    }
    
    function getWo() {
        return $this->wo;
    }
    
    function getW2() {
        return $this->w2;
    }
    
    function getW3() {
        return $this->w3;
    }
    
    function getW4() {
        return $this->w4;
    }
    
    function getW5() {
        return $this->w5;
    }
    
    function getW6() {
        return $this->w6;
    }
    
    function getW7() {
        return $this->w7;
    }
    
    function getW8() {
        return $this->w8;
    }

    function setID($ID) {
        $this->ID = $ID;
    }


    function setType($type) {
        $this->type = $type;
    }
    
    function setDay($day) {
        $this->day= $day;
    }
    
    function setW2($w2) {
        $this->w2 = $w2;
    }
    
    function setW3($w3) {
        $this->w3 = $w3;
    }
    
    function setW4($w4) {
        $this->w4 = $w4;
    }
    
    function setW5($w5) {
        $this->w5 = $w5;
    }
    
    function setW6($w6) {
        $this->w6 = $w6;
    }
    
    function setWo($wo) {
        $this->wo = $wo;
    }
    
    function setW7($w7) {
        $this->w7 = $w7;
    }
    
    function setW8($w8) {
        $this->w8 = $w8;
    }


}
