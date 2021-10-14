<?php
class Grupo{
    public $nombre;

    function __construct($nombre){
        $this->nombre=$nombre;
       
    }
    function __toString(){
        return $this->nombre;
    }
}
?>