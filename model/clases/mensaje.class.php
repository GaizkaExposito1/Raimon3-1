<?php
class Mensaje{
    public $userId;
    public $activateToken;
    public $tipografia;
    public $color;
    public $colorTipografia;
    public $texto;
    public $anonimo;
    public $numLikes;

    function __construct($userId, $activateToken, $tipografia,$color,$colorTipografia, $texto,$anonimo,$numLikes){
        $this->userId=$userId;
        $this->activateToken=$activateToken;
        $this->tipografia=$tipografia;
        $this->color=$color;
        $this->colorTipografia=$colorTipografia;
        $this->activateToken=$activateToken;
        $this->texto=$texto;
        $this->color=$color;
        $this->anonimo=$anonimo;
        $this->numLikes=$numLikes;
    }
   /* function __toString(){
        return $this->nombre." el ".$this->especie;
    }*/
}
?>