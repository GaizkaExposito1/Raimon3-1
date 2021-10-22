<?php
//require
/*require_once "/model/clases/Grupo.class.php";
require_once "/model/clases/User.class.php";
require_once "/model/clases/Mensaje.class.php";
require_once "/model/clases/Prefiltro.class.php";
require_once "/model/clases/Rol.class.php";


require "PHPMailer.php";
require "Exception.php";
require "SMTP.php";
require "OAuth.php";
require "POP3.php";*/
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
        //var_dump($result);
        if(strtoupper($tipoSql)=="SELECT"){
            return $result;
        }
    }

    //Funciones especificas
        //Users
        function Registro($dni,$pass,$confPass,$email,$cursoId,$username){
            //CHUCLA
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
                    while((mysqli_fetch_array($dniBD))!=null){
                        return "dni ya introducido por otro usuario";
                    }
                    while((mysqli_fetch_array($emailBD))!=null){
                        return "email ya introducido por otro usuario";
                    }
                    while((mysqli_fetch_array($usernameBD))!=null){
                        return "nombre de usuario ya introducido por otro usuario";
                    }
                        //hash contraseña
                        $hashPass=password_hash($pass, PASSWORD_BCRYPT);
                        echo "$dni,$hashPass,$confPass,$email,$cursoId,$username";
                         $userNew=new User($dni, $email, 1,$cursoId,$username);
                        $_SESSION['usuario']=$userNew; //Introducir algo en la sesion
                        //comprobar el dni de sanluis con el dni del user
                        //$userCentro=$this->lanzarSQL("SELECT `dni` from `kalpatarubd`.`usersSanluis` where (`dni`='$dni')");
                        //while((mysqli_fetch_array($userCentro))!=null){
                        //insert a la bd
                        $this->lanzarSQL("INSERT INTO `kalpatarubd`.`users`(`dni`, `pass`, `username`, `email`, `rol`, `curso`, `Banned`) VALUES ('$dni','$hashPass','$username','$email','1','$cursoId','0');");
                        return "ok";
                    //} return "no eres usuario del centro";
                        
                }
            }
        }

        function newAdmin($dni,$pass,$confPass,$email,$username){
            //CHUCLA
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
                    while(($fila=mysqli_fetch_array($dniBD))!=null){
                        return "dni ya introducido por otro usuario";
                    }
                    while(($fila=mysqli_fetch_array($emailBD))!=null){
                        return "email ya introducido por otro usuario";
                    }
                    while(($fila=mysqli_fetch_array($usernameBD))!=null){
                        return "nombre de usuario ya introducido por otro usuario";
                    }
                     //comprobar el dni de sanluis con el dni del user
                        //$userCentro=$this->lanzarSQL("SELECT `dni` from `kalpatarubd`.`usersSanluis` where (`dni`='$dni')");
                        //while((mysqli_fetch_array($userCentro))!=null){
                        //hash contraseña
                        $hashPass=password_hash($pass, PASSWORD_BCRYPT);
                        //insert a la bd
                        $this->lanzarSQL("INSERT INTO `kalpatarubd`.`users`(`dni`, `pass`, `username`, `email`, `rol`, `curso`, `Banned`) VALUES ('$dni','$hashPass','$username','$email','2','16','0');");
                        return "ok";
                         //} return "no es usuario del centro";
                }
            }
        }

        function Login($user,$pass){
            //CHUCLA
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
                $hashPass=password_hash($pass, PASSWORD_BCRYPT);
                //comprobar si esta en bd
               $userOBT= $this->lanzarSQL("SELECT * from `kalpatarubd`.`users` where (`username` = '$user' and `pass`='$hashPass')");
               while(($fila=mysqli_fetch_array($userOBT))!=null){
                   extract($fila);
                $usuario=new User($dni, $email, $rol,$curso,$username);
                    $_SESSION['usuario']=$usuario; //Introducir algo en la sesion
                    return "ok";
                }
                    return "Usuario no encontrado";
            }
        }

        function Logout(){
            session_destroy();
        }

        function editUser($pass,$confPass,$email,$username,$userId){
            //hacer comprobacion que antigua sea dif de nuevo
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
                    $hashPass=password_hash($pass, PASSWORD_BCRYPT);;
                    $this->lanzarSQL("UPDATE `kalpatarubd`.`users` set (`pass`='$hashPass') where (`id` = '$userId')");
                }
            }
            if(($email!=null||$email!='')){
                $emailBD=$this->lanzarSQL("SELECT `email` from `kalpatarubd`.`users` where (`email`='$email')");
                while((mysqli_fetch_array($emailBD))!=null){
                $this->lanzarSQL("UPDATE `kalpatarubd`.`users` set (`email`='$email') where (`id` = '$userId')");}
            }
            if(($username!=null||$username!='')){
                $usernameBD=$this->lanzarSQL("SELECT `username` from `kalpatarubd`.`users` where (`username`='$username')");
                while((mysqli_fetch_array($usernameBD))!=null){
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
                $user=new User($dni, $email, $rol,$curso,$username);
                $users[]=$user;
            }
            return $users;
        }

        function getUsers(){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`users` where (`rol`='2'");
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
                $user=new User($dni, $email, $rol,$curso,$imgUser,$username);
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
                $user=new User($dni, $email, $rol,$curso,$imgUser,$username);
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
            else{
            $this->lanzarSQL("INSERT INTO `kalpatarubd`.`mensajes`(`userId`,`activateToken`,`tipografia`,`color`,`colorTipografia`,`forma`,`texto`,`anonimo`,`numLikes`) VALUES ('$userId','null','$tipografia','$color','$colorTipografia','$form','$texto','$anonimo','0');");
            $bool=$this->hasTextWordInPrefiltro($texto);
            if($bool=="ok"){
            $this->mensajeAprobarEmail();
            return "ok";}else{
                return "la palabra $bool no esta permitida, porfavor cambia el mensaje";
            }
        }
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
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`mensajes`,`kalpatarubd`.`users` where `kalpatarubd`.`users`.`id`= `kalpatarubd`.`mensajes`.`userId` and `kalpatarubd`.`users`.`curso`='$cursoId';");
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

        function deleteMensaje($id, $userId){
            $sms=$this->lanzarSQL("SELECT * from `kalpatarubd`.`mensajes` where (`id`='$id');");
            $u=$this->lanzarSQL("SELECT * from `kalpatarubd`.`users` where (`id` = '$userId')");
            if($sms->userId==$userId || $u->rol==2 || $u->rol==3){
            $this->lanzarSQL("DELETE from `kalpatarubd`.`mensajes` where (`id`='$id');");
            return "ok";}
            else{
                return "no tienes permiso para borrar este mensaje";
            }
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
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`prefiltro`;");
            $PF=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $palabra=new Prefiltro($palabra);
                $PF[]=$palabra;
            }
            return $PF;
        }

        function hasTextWordInPrefiltro($text){
            $words=array(str_word_count($text,1));
            $PF=$this->getPrefiltro();
            $palabra="ok";
            for($i=0; $i<count($words);$i++){
                for($j=0;$j<count($PF);$j++){
                    if($words[$i]==$PF[$j]){
                        $palabra= $words[$i];
                    }
                } 
            }
            return $palabra;
        }

        function addPalabraPrefiltro($word){
            if(($word==null)||($word=='')){
                return "palabra en blanco";
            }else{
                $this->lanzarSQL("INSERT INTO `kalpatarubd`.`prefiltro`(`palabra`) VALUES ('$word');");
                return "ok";
            }
        }

        function deletePalabraPrefiltro($word){
            if($word==null){
                return "palabra no seleccionada";
            }else{
                $this->lanzarSQL("INSERT INTO `kalpatarubd`.`prefiltro`(`palabra`) VALUES ('$word');");
                return "ok";
            }
        }

        //Emails
        function recordarPassEmail(){

        }

        function mensajeAprobarEmail(){

        }

        //estadisiticas
        function getMensajeMaxLike(){
            $mensajeOBT=$this->lanzarSQL("SELECT * from `kalpatarubd`.`mensajes` where (SELECT max(`numLikes`) from `kalpatarubd`.`mensajes`)");
            while(($fila=mysqli_fetch_array($mensajeOBT))!=null){
                extract($fila);
             $mensaje=new Mensaje($userId, $activateToken, $tipografia,$color,$colorTipografia,$forma,$texto,$anonimo,$numLikes);
             return $mensaje;
             }
            
        }
    
}
?>