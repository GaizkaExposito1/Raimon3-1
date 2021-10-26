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
        $this->conexion=mysqli_connect(self::RUTA, self::USER,self::PASS,self::NOMBRE_BD);
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
                    $r=$this->lanzarSQL("SELECT max(`id`) from `kalpatarubd`.`users`;");
                    while(($fila=mysqli_fetch_array($r))!=null){
                        $id=$fila['id'];//??
                        var_dump($id+1);
                    }
                        //hash contraseña
                        $hashPass=password_hash($pass, PASSWORD_BCRYPT);
                        echo "$dni,$hashPass,$confPass,$email,$cursoId,$username";
                         $userNew=new User($id,$dni, $email, 1,$cursoId,$username,0);
                        //Introducir algo en la sesion
                        //comprobar el dni de sanluis con el dni del user
                        $userCentro=$this->lanzarSQL("SELECT `dni` from `kalpatarubd`.`alumnosanluis` where (`dni`='$dni')");
                        while((mysqli_fetch_array($userCentro))!=null){
                            $_SESSION['usuario']=$userNew;
                            //insert a la bd
                            $this->lanzarSQL("INSERT INTO `kalpatarubd`.`users`(`dni`, `pass`, `username`, `email`, `rol`, `curso`, `Banned`) VALUES ('$dni','$hashPass','$username','$email','1','$cursoId','0');");
                            return "ok";}
                     return "no eres usuario del centro";
                        
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
               // $hashPass=password_hash($pass, PASSWORD_BCRYPT);
                $hashPass=$pass;
                //comprobar si esta en bd
               $userOBT= $this->lanzarSQL("SELECT * from `kalpatarubd`.`users` where (`username` = '$user' and `pass`='$hashPass')");
               while(($fila=mysqli_fetch_array($userOBT))!=null){
                   extract($fila);
                $usuario=new User($id,$dni, $email, $rol,$curso,$username,$Banned);
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
                    $passBD=$this->lanzarSQL("SELECT `email` from `kalpatarubd`.`users` where (`pass`='$pass')");
                    while((mysqli_fetch_array($passBD))!=null){
                        if($pass!=$passBD){
                    $hashPass=password_hash($pass, PASSWORD_BCRYPT);;
                    $this->lanzarSQL("UPDATE `kalpatarubd`.`users` set (`pass`='$hashPass') where (`id` = '$userId')");}
                    else{
                        return "esa contraseña es la misma que la anterior";
                        }
                    }
                }
            }
            if(($email!=null||$email!='')){
                $emailBD=$this->lanzarSQL("SELECT `email` from `kalpatarubd`.`users` where (`email`='$email')");
                while((mysqli_fetch_array($emailBD))!=null){
                    if($email!=$emailBD){
                $this->lanzarSQL("UPDATE `kalpatarubd`.`users` set (`email`='$email') where (`id` = '$userId')");}
                else{return "ese email es el mismo que el anterior";}
            }}
            if(($username!=null||$username!='')){
                $usernameBD=$this->lanzarSQL("SELECT `username` from `kalpatarubd`.`users` where (`username`='$username')");
                while((mysqli_fetch_array($usernameBD))!=null){
                    if($username!=$usernameBD){
                $this->lanzarSQL("UPDATE `kalpatarubd`.`users` set (`email`='$username') where (`id` = '$userId')");}
                else{return "ese nombre de usuario es el mismo que el anterior";}
            }}
            return "ok";
        }

        function getUsersCurso($idCurso){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`users` where (`curso`='$idCurso');");
            $users=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $user=new User($id,$dni, $email, $rol,$curso,$username,$Banned);
                $users[]=$user;
            }
            return $users;
        }

        function getUsers(){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`users` where (`rol`='1');");
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
            $this->lanzarSQL("UPDATE `kalpatarubd`.`users` set (`Banned`='1') where (`id` = '$userId')");
            return "ok";
        }

        function UnbanUser($userId){
            $this->lanzarSQL("UPDATE `kalpatarubd`.`users` set (`Banned`='0') where (`id` = '$userId')");
        }

        function getBannedUsers(){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`users` where (`Banned`='1');");
            $users=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $user=new User($dni, $email, $rol,$curso,$imgUser,$username,$Banned);
                $users[]=$user;
            }
            return $users;
        }

        function getNotBannedUsers(){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`users` where (`Banned`='0');");
            $users=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $user=new User($id,$dni, $email, $rol,$curso,$username,$Banned);
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
                $user=new User($id,$dni, $email, $rol,$curso,$username,$Banned);
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
                $curso=new Grupo($nombre,$id);
                $grupos[]=$curso;
            }
            return $grupos;
        }

        //Mensajes
        function newMensaje($userId, $tipografia,$colorTipografia,$color,$texto){
            if($tipografia==null){
                $tipografia="Comic Sans";
            }
            if($colorTipografia==null){
                $colorTipografia="#000000";
            }
            if($color==null){
                $color="#000000";
            }
            if($texto==null || $texto==''){
                return "no has escrito el texto";
            }
            else{
            $this->lanzarSQL("INSERT INTO `kalpatarubd`.`mensajes`(`userId`,`activateToken`,`tipografia`,`color`,`colorTipografia`,`texto`,`numLikes`) VALUES ('$userId','null','$tipografia','$color','$colorTipografia','$texto','0');");
           /* $bool=$this->hasTextWordInPrefiltro($texto);
            if($bool=="ok"){*/
                $r=$this->lanzarSQL("SELECT max(`id`) as id from `kalpatarubd`.`mensajes`;");
                while(($fila=mysqli_fetch_array($r))!=null){
                   extract($fila);
                   $Id=$id;
               }
                $sms=new Mensaje($Id,$userId,null, $tipografia,$colorTipografia,$color,$texto,0);
            $this->mensajeAprobarEmail($sms);
            return "ok";/*}else{
                return "la palabra $bool no esta permitida, porfavor cambia el mensaje";
            }*/
        }
        }


        function getUsernameFromUserId($userId){
            $userOBT= $this->lanzarSQL("SELECT 'username' from `kalpatarubd`.`users` where (`id` = '$userId')");
               while(($fila=mysqli_fetch_array($userOBT))!=null){
                   extract($fila);
                $usuario=$username;
                    return $usuario;
                }
        }

        function getUserMensajes($userId){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`mensajes` where(`userId`='$userId');");
            $sms=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $mens=new Mensaje($id,$userId,$activateToken,$tipografia,$color,$colorTipografia,$texto,$numLikes);
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
                $mens=new Mensaje($id,$userId,$activateToken,$tipografia,$color,$colorTipografia,$texto,$numLikes);
                $sms[]=$mens;
            }
            return $sms;
        }

        function getUserMensajesApproved($userId){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`mensajes` where ((`userId`='$userId') and (`activateToken`!='null'));");
            $sms=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $mens=new Mensaje($id,$userId,$activateToken,$tipografia,$color,$colorTipografia,$texto,$numLikes);
                $sms[]=$mens;
            }
            return $sms;
        }

        function getUserMensajesNotApproved($userId){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`mensajes` where ((`userId`='$userId') and (`activateToken`='null'));");
            $sms=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $mens=new Mensaje($userId,$activateToken,$tipografia,$color,$colorTipografia,$forma,$texto,$numLikes);
                $sms[]=$mens;
            }
            return $sms;
        }

        function getMensajesNotApproved(){
            $result= $this->lanzarSQL("SELECT * from `kalpatarubd`.`mensajes` where  (`activateToken`='null');");
            $sms=array();
            while(($fila=mysqli_fetch_array($result))!=null){
                //obtener cada columna--> $fila['nombreColumna']
                extract($fila);
                $mens=new Mensaje($userId,$activateToken,$tipografia,$color,$colorTipografia,$forma,$texto,$numLikes);
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

        function editMensaje($tipografia,$colorTipografia,$color,$id){
            if($tipografia==null){
                return "no has introducido la contraseña";
            }
            if($tipografia!=null){
                    $this->lanzarSQL("UPDATE `kalpatarubd`.`mensajes` set (`tipografia`='$tipografia') where (`id` = '$id')");
                }
            if($colorTipografia!=null){
                $CTipoBD=$this->lanzarSQL("SELECT `colorTipografia` from `kalpatarubd`.`mensajes` where (`colorTipografia`='$colorTipografia')");
                while((mysqli_fetch_array($CTipoBD))!=null){
                $this->lanzarSQL("UPDATE `kalpatarubd`.`mensajes` set (`colorTipografia`='$colorTipografia') where (`id` = '$id')");}
            }
            if($color!=null){
                $colorBD=$this->lanzarSQL("SELECT `color` from `kalpatarubd`.`mensajes` where (`color`='$color')");
                while((mysqli_fetch_array($colorBD))!=null){
                $this->lanzarSQL("UPDATE `kalpatarubd`.`mensajes` set (`color`='$color') where (`id` = '$id')");}
            }
            return "ok";
        }

        function aceptarMensaje($id){
            $token=md5(uniqid(Rand(), true));
            $this->lanzarSQL("UPDATE `kalpatarubd`.`mensajes` set (`activateToken`='$token') where (`id` = '$id')");
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
                        $palabra= strtoupper($words[$i]);
                    }
                } 
            }
            return $palabra;
        }

        function addPalabraPrefiltro($word){
            if(($word==null)||($word=='')){
                return "palabra en blanco";
            }else{
                $p=$this->lanzarSQL("SELECT * from `kalpatarubd`.`prefiltro` where (`palabra` = '$word')");
                while((mysqli_fetch_array($p))!=null){
                    return "palabra ya introducida";
                }
                $Uword=strtoupper($word);
                $this->lanzarSQL("INSERT INTO `kalpatarubd`.`prefiltro`(`palabra`) VALUES ('$Uword');");
                return "ok";
            }
        }

        function deletePalabraPrefiltro($word){
            if($word==null){
                return "palabra no seleccionada";
            }else{
                $p=$this->lanzarSQL("SELECT * from `kalpatarubd`.`prefiltro` where (`palabra` = '$word')");
                while((mysqli_fetch_array($p))!=null){
                    $this->lanzarSQL("INSERT INTO `kalpatarubd`.`prefiltro`(`palabra`) VALUES ('$word');");
                    return "ok";
                }
                return "la palabra no ha sido introducida, para ser eliminada debe existir en el prefiltro";
            }
        }

        //Emails
        function recordarPassEmail(){

        }

        function mensajeAprobarEmail($mensaje){
                //esto seria incluido en la clase miclase->enviarCorreo($remitente,$mensaje);
                $email=new PHPMailer\PHPMailer\PHPMailer();
                $email->isSMTP();//servidor
                //$email->SMTPDenug();//salir trazas de error
                $email->SMTPDebug=1;//errores y mensajes//2 solo mesnajes
                $email->SMTPAuth=true;
                $email->SMTPSecure= 'ssl';//para otro tipo de email k no es gmail->datos smtp tipo
                $email->Host='smtp.gmail.com';
                $email->Port='465';
                //cuenta con la k el servidor va a enviar esto
                $email->Username='retoraimon@gmail.com';
                $email->Password='raimon3+1';
                $email->From='retoraimon@gmail.com';
                $email->FromName='Kalpataru';
                $email->AddAddress('retoraimon@gmail.com');
                $email->AddReplyTo('retoraimon@gmail.com');
                $email->IsHTML(true);//poder pner html y css en el correo
                //$email->Subject="$subject"
                $email->Subject="Creado deseo en Kalpataru";
                $email->Body='
                <body>
                    <h1>Han enviado un deseo a revisión</h1>  
                    <form>
                        <label>Mensaje: </label>'. $mensaje->texto .'
                        <a href="172.26.14.18/mikel/Raimon3-1/index.php?section=Acept&id='.$mensaje->id.'">Aceptar</a>
                        <a href="www.localhost/mikel/Raimon3-1/controller/Email/Deny.php&id='.$mensaje->id.'">Denegar</a>
                    </form>
                </body>';
                $email->AltBody="para ver este mensja debes habilitar o utilizar un gestor de correo compatible con html";
                if($email->Send()){
                    //correo enviado
                    echo "correo enviado en breve te responderemos";
                }else{
                    //error
                    echo $email->ErrorInfo;
                }
               

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