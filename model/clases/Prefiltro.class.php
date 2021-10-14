<?php
class Prefiltro{
    public $palabra;

    function __construct($palabra){
        $this->palabra=$palabra;
       
    }
    function __toString(){
        return $this->palabra;
    }
}
?>