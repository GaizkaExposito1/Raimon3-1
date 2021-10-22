<?php
class Grupo{
    public $nombre;
    public $id;

    function __construct($nombre,$id){
        $this->nombre=$nombre;
        $this->id=$id;
       
    }
    function __toString(){
        return $this->nombre;
    }
}
?>