<?php
class User{
    public $dni;
    public $pass;
    public $email;
    public $rol;
    public $curso;
    public $imgUser;
    //username??

    function __construct($dni,$pass,$email,$rol,$curso,$imgUser){
        $this->dni=$dni;
        $this->pass=$pass;
        $this->email=$email;
        $this->rol=$rol;
        $this->curso=$curso;
        $this->imgUser=$imgUser;
       
    }
    function __toString(){
        return $this->dni;
    }
}
?>