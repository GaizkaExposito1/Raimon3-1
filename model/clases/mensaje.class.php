<?php
class Mensaje{
    public $id;
    public $userId;
    public $activateToken;
    public $tipografia;
    public $color;
    public $colorTipografia;
    public $texto;
    public $numLikes;

    function __construct($id,$userId, $activateToken, $tipografia,$color,$colorTipografia, $texto,$numLikes){
        $this->id=$id;
        $this->userId=$userId;
        $this->activateToken=$activateToken;
        $this->tipografia=$tipografia;
        $this->color=$color;
        $this->colorTipografia=$colorTipografia;
        $this->activateToken=$activateToken;
        $this->texto=$texto;
        //$this->color=$color;
        $this->numLikes=$numLikes;
    }
   /* function __toString(){
        return $this->nombre." el ".$this->especie;
    }*/
}
?>