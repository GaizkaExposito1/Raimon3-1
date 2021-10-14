<?php
class Rol{
    public $rol;

    function __construct($rol){
        $this->rol=$rol;
       
    }
    function __toString(){
        return $this->rol;
    }
}
?>