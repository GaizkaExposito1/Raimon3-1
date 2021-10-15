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
                        $this->lanzarSQL("INSERT INTO `kalpatarubd`.`users`(`dni`,`pass`,`username`,`email`,`rol`,`curso`,`imgUser`) VALUES ('$dni','$hashPass','$username','$email','2','null','null');");
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
                return "no has introducido la confirmacion de contraseña";
            }
            else if(($pass==null||$pass=='')&&($confPass!=null||$confPass!='')){
                return "no has introducido la contraseña";
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
                $grupos[]=$curso;
            }
            return $grupos;
        }

        //Mensajes
        function newMensaje($userId, $tipografia,$colorTipografia,$color, $form,$texto,$anonimo){
            if($tipografia==null){
                $tipografia="Comic Sans";
            }
            if($colorTipografia==null){
                $colorTipografia="#000000";
            }
            if($color==null){
                $color="#000000";
            }
            if($form==null){
                $form="post-it";
            }
            if($anonimo==null){
                $anonimo=0;
            }
            if($texto==null || $texto==''){
                return "no has escrito el texto";
            }
            $this->lanzarSQL("INSERT INTO `kalpatarubd`.`mensajes`(`userId`,`activateToken`,`tipografia`,`color`,`colorTipografia`,`forma`,`texto`,`anonimo`,`numLikes`) VALUES ('$userId','null','$tipografia','$color','$colorTipografia','$form','$texto','$anonimo','0');");
            $this->mensajeAprobarEmail();
            return "ok";
        }

        function getNumPosit(){
            $num=$this->lanzarSQL("SELECT count(*) from `kalpatarubd`.`mensajes` where (`forma`='post-it');");
            return $num;
        }

        function getNumHojas(){
            $num=$this->lanzarSQL("SELECT count(*) from `kalpatarubd`.`mensajes` where (`forma`='hoja');");
            return $num;
        }

        function getUserMensajes($userId){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`mensajes` where(`userId`='$userId');");
            $sms=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $mens=new Mensaje($userId,$activateToken,$tipografia,$color,$colorTipografia,$forma,$texto,$anonimo,$numLikes);
                $sms[]=$mens;
            }
            return $sms;
        }

        function getMensajesCurso($cursoId){
            //$result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`mensajes` where(`userId`=(SELECT `id` from `kalpatarubd`.`users` where (`curso`='$cursoId');");
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`mensajes`,`kalpatarubd`.`users` where `kalpatarubd`.`users`.`id`= `kalpatarubd`.`mensajes`.`userId` and `kalpatarubd`.`users`,`curso`='$cursoId';");
            $sms=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $mens=new Mensaje($userId,$activateToken,$tipografia,$color,$colorTipografia,$forma,$texto,$anonimo,$numLikes);
                $sms[]=$mens;
            }
            return $sms;
        }

        function getUserMensajesApproved($userId){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`mensajes` where ((`userId`='$userId') and (`activateToken`='null'));");
            $sms=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $mens=new Mensaje($userId,$activateToken,$tipografia,$color,$colorTipografia,$forma,$texto,$anonimo,$numLikes);
                $sms[]=$mens;
            }
            return $sms;
        }

        function getUserMensajesNotApproved($userId){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`mensajes` where ((`userId`='$userId') and (`activateToken`!='null'));");
            $sms=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $mens=new Mensaje($userId,$activateToken,$tipografia,$color,$colorTipografia,$forma,$texto,$anonimo,$numLikes);
                $sms[]=$mens;
            }
            return $sms;
        }

        function deleteMensaje($id){
            $this->lanzarSQL("DELETE from `kalpatarubd`.`mensajes` where (`id`='$id');");
            return "ok";
        }

        function editMensaje($tipografia,$colorTipografia,$color, $form,$id){
            if($tipografia==null){
                return "no has introducido la contraseña";
            }
            if($tipografia!=null){
                    $this->lanzarSQL("UPDATE `kalpatarubd`.`mensajes` set (`tipografia`='$tipografia') where (`id` = '$id')");
                }
            if($colorTipografia!=null){
                $CTipoBD=$this->lanzarSQL("SELECT `colorTipografia` from `kalpatarubd`.`mensajes` where (`colorTipografia`='$colorTipografia')");
                if($CTipoBD==null){
                $this->lanzarSQL("UPDATE `kalpatarubd`.`mensajes` set (`colorTipografia`='$colorTipografia') where (`id` = '$id')");}
            }
            if($color!=null){
                $colorBD=$this->lanzarSQL("SELECT `color` from `kalpatarubd`.`mensajes` where (`color`='$color')");
                if($colorBD==null){
                $this->lanzarSQL("UPDATE `kalpatarubd`.`mensajes` set (`color`='$color') where (`id` = '$id')");}
            }
            if($color!=null){
                $colorBD=$this->lanzarSQL("SELECT `color` from `kalpatarubd`.`mensajes` where (`color`='$color')");
                if($colorBD==null){
                $this->lanzarSQL("UPDATE `kalpatarubd`.`mensajes` set (`color`='$color') where (`id` = '$id')");}
            }
            if($form!=null){
                $formBD=$this->lanzarSQL("SELECT `forma` from `kalpatarubd`.`mensajes` where (`forma`='$form')");
                if($formBD==null){
                $this->lanzarSQL("UPDATE `kalpatarubd`.`mensajes` set (`forma`='$form') where (`id` = '$id')");}
            }
            return "ok";
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