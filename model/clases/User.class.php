<?php
class User{
    public $id;
    public $dni;
    public $email;
    public $rol;
    public $curso;
   // public $imgUser;
    public $username;
    //baneo??

    function __construct($id,$dni,$email,$rol,$curso,/*$imgUser,*/$username){
        $this->dni=$dni;
        $this->id=$id;
        $this->email=$email;
        $this->rol=$rol;
        $this->curso=$curso;
        //$this->imgUser=$imgUser;
        $this->username=$username;
       
    }
    function __toString(){
        return $this->username;
    }
}
?>