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

        function editUser($pass,$confPass,$email,$username,$userId){
            if(($pass!=null||$pass!='')&&($confPass==null||$confPass=='')){
                return "no has introducido la contraseña";
            }
            else if(($pass==null||$pass=='')&&($confPass!=null||$confPass!='')){
                return "no has introducido la confirmacion de contraseña";
            }
            else if(($pass!=null||$pass!='')&&($confPass!=null||$confPass!='')){
                if($pass!=$confPass){
                    return "las contraseñas no coinciden";
                }else{
                    $hashPass="0";
                    $this->lanzarSQL("UPDATE `kalpatarubd`.`users` set (`pass`='$hashPass') where (`id` = '$userId')");
                }
            }
            if(($email!=null||$email!='')){
                $emailBD=$this->lanzarSQL("SELECT `email` from `kalpatarubd`.`users` where (`email`='$email')");
                if($emailBD==null){
                $this->lanzarSQL("UPDATE `kalpatarubd`.`users` set (`email`='$email') where (`id` = '$userId')");}
            }
            if(($username!=null||$username!='')){
                $usernameBD=$this->lanzarSQL("SELECT `username` from `kalpatarubd`.`users` where (`username`='$username')");
                if($usernameBD==null){
                $this->lanzarSQL("UPDATE `kalpatarubd`.`users` set (`email`='$username') where (`id` = '$userId')");}
            }
            return "ok";
        }

        function getUsersCurso($idCurso){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`users` where (`curso`='$idCurso'");
            $users=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $user=new User($dni, $pass, $email, $rol,$curso,$imgUser,$username);
                $users[]=$user;
            }
            return $users;
        }
        
        function banUser($userId){
            $this->lanzarSQL("UPDATE `kalpatarubd`.`users` set (`banned`='1') where (`id` = '$userId')");
            return "ok";
        }

        function UnbanUser($userId){
            $this->lanzarSQL("UPDATE `kalpatarubd`.`users` set (`banned`='0') where (`id` = '$userId')");
        }

        function getBannedUsers(){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`users` where (`banned`='1'");
            $users=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $user=new User($dni, $pass, $email, $rol,$curso,$imgUser,$username);
                $users[]=$user;
            }
            return $users;
        }

        function getUserRol($rol){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`users` where (`rol`='$rol'");
            $users=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $user=new User($dni, $pass, $email, $rol,$curso,$imgUser,$username);
                $users[]=$user;
            }
            return $users;
        }

        function getCursos(){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`grupo`");
            $grupos=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $curso=new Grupo($nombre);
                $grupos[]=$user;
            }
            return $grupos;
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

        //Emails
        function recordarPassEmail(){

        }

        function mensajeAprobarEmail(){

        }
    
}
?>