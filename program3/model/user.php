<?php



class user {
    private $ID, $uName, $image, $pWord;
    function __construct($ID, $uName, $pWord, $image) {
        
        $this->ID = $ID;
        $this->uName = $uName;
        $this->pWord = $pWord;
        $this->image = $image;
        
    }
    
    function getID() {
        return $this->ID;
    }


    function getUName() {
        return $this->uName;
    }
    
    function getPWord(){
        return $this->pWord;
    }
    
    function getImage() {
        return $this->image;
    }

    function setID($ID) {
        $this->ID = $ID;
    }


    function setUName($uName) {
        $this->uName = $uName;
    }
    
    function setPWord($pWord) {
        $this->pWord = $pWord;
    }
    
    function setImage($image) {
        $this->image = $image;
    }


}
