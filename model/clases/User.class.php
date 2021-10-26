<?php
class User{
    public $id;
    public $dni;
    public $email;
    public $rol;
    public $curso;
   // public $imgUser;
    public $username;
    public $Banned;

    function __construct($id,$dni,$email,$rol,$curso,$username,$Banned){
        $this->dni=$dni;
        $this->id=$id;
        $this->email=$email;
        $this->rol=$rol;
        $this->curso=$curso;
        $this->Banned=$Banned;
        $this->username=$username;
       
    }
    function __toString(){
        return $this->username;
    }
}
?>