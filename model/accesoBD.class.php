<?php
//require
require_once "Grupo.class.php";
require_once "User.class.php";
require_once "Mensaje.class.php";
require_once "Prefiltro.class.php";
require_once "Rol.class.php";

require "PHPMailer.php";
require "Exception.php";
require "SMTP.php";
require "OAuth.php";
require "POP3.php";
//AcessoBD
class AccesoBd{
    const RUTA="localhost";
    const NOMBRE_BD="kalpatarubd";
    const USER="R3+1";
    const PASS="Raimon3+2";
    public $conexion;

    function __construct(){
        $this->establecerConexion();
    }

    function establecerConexion(){
        $this->conexion=mysqli_connect(self::RUTA, self::USER,self::PASS,self::NOMBRE_BD) or 
                        die("bd no conectada puto, mirate el codigo");
        echo "la conexion chuclo congrats </br>";
    }

    function cerrarConexion(){
        mysqli_close($this->conexion);
    }

    function lanzarSQL($sql){
        $tipoSql=substr($sql,0,6);
        $result=mysqli_query($this->conexion,$sql);
        var_dump($result);
        if(strtoupper($tipoSql)=="SELECT"){
            return $result;
        }
    }

    //Funciones especificas
        //Users
        function Registro($dni,$pass,$confPass,$email,$cursoId,$username){
            //confirmar no campos vacios
            if(($dni==null||$dni=='')&&($pass==null||$pass=='')&&($confPass==null||$confPass=='')&&($email==null||$email=='')&&($username==null||$username=='')&&($cursoId==null)){
                return "Hay campos vacios";
            }
            else{
                //ya no hay campos vacios->pass == confirmpass
                if($pass!=$confPass){
                    return "las contraseñas no coinciden";
                }
                else{
                    //las contraseñas coinciden->comprobar si los datos ya introducidos
                    $dniBD=$this->lanzarSQL("SELECT `dni` from `kalpatarubd`.`users` where (`dni`='$dni')");
                    $emailBD=$this->lanzarSQL("SELECT `email` from `kalpatarubd`.`users` where (`email`='$email')");
                    $usernameBD=$this->lanzarSQL("SELECT `username` from `kalpatarubd`.`users` where (`username`='$username')");
                    if($dniBD!=null && $emailBD!=null && $usernameBD!=null){
                        return "datos ya introducidos por otro usuario";
                    }
                    else{
                        //hash contraseña
                        $hashPass="0";
                        //insert a la bd
                        $this->lanzarSQL("INSERT INTO `kalpatarubd`.`users`(`dni`,`pass`,`username`,`email`,`rol`,`curso`,`imgUser`) VALUES ('$dni','$hashPass','$username','$email',1,'$cursoId',null);");
                        return "ok";
                    }
                }
            }
        }

        function newAdmin($dni,$pass,$confPass,$email,$username){
            //confirmar no campos vacios
            if(($dni==null||$dni=='')&&($pass==null||$pass=='')&&($confPass==null||$confPass=='')&&($email==null||$email=='')&&($username==null||$username=='')){
                return "Hay campos vacios";
            }
            else{
                //ya no hay campos vacios->pass == confirmpass
                if($pass!=$confPass){
                    return "las contraseñas no coinciden";
                }
                else{
                    //las contraseñas coinciden->comprobar si los datos ya introducidos
                    $dniBD=$this->lanzarSQL("SELECT `dni` from `kalpatarubd`.`users` where (`dni`='$dni')");
                    $emailBD=$this->lanzarSQL("SELECT `email` from `kalpatarubd`.`users` where (`email`='$email')");
                    $usernameBD=$this->lanzarSQL("SELECT `username` from `kalpatarubd`.`users` where (`username`='$username')");
                    if($dniBD!=null && $emailBD!=null && $usernameBD!=null){
                        return "datos ya introducidos por otro usuario";
                    }
                    else{
                        //hash contraseña
                        $hashPass="0";
                        //insert a la bd
                        $this->lanzarSQL("INSERT INTO `kalpatarubd`.`users`(`dni`,`pass`,`username`,`email`,`rol`,`curso`,`imgUser`) VALUES ('$dni','$hashPass','$username','$email',2,null,null);");
                        return "ok";
                    }
                }
            }
        }

        function Login($user,$pass){
            if(($user==null||$user=='')&&($pass!=null||$pass!='')){
                return "Nombre de Usuario no introducido";
            }
            else if(($user!=null||$user!='')&&($pass==null||$pass=='')){
                return "Contraseña no introducida";
            }
            else if(($user==null||$user=='')&&($pass==null||$pass=='')){
                return "Ni Nombre de Usuario ni Contraseña introducida";
            }
            else {
                //campos no vacios-> hasear pass
                $hashPass="0";
                //comprobar si esta en bd
               $userOBT= $this->lanzarSQL("SELECT * from `kalpatarubd`.`users` where (`username` = '$user' and `pass`='$hashPass')");
                if($userOBT!=null){
                    return "ok";
                }
                else{
                    return "Usuario no encontrado";
                }
            }
        }

        function editUser(){

        }

        function getUsersCurso($idCurso){

        }
        
        function banUser(){

        }

        function getBannedUsers(){

        }

        function getUserRol(){

        }

        //Mensajes
        function newMensaje(){

        }

        function getNumPosit(){

        }

        function getNumHojas(){
            
        }

        function getUserMensajes(){

        }

        function getUserMensajesApproved(){

        }

        function getUserMensajesNotApproved(){

        }

        function deleteMensaje(){

        }

        function editMensaje(){

        }

        //Prefiltro
        function getPrefiltro(){

        }

        function hasTextWordInPrefiltro(){

        }

        function addPalabraPrefiltro(){

        }

        function deletePalabraPrefiltro(){

        }
    
}
?>