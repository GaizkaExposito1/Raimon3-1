<?php
require "./controller/librerias/PHPMailer.php";
/*require "PHPMailer.php";
require "Exception.php";
require "SMTP.php";
require "OAuth.php";
require "POP3.php";*/
//hay k investigar
function EnviarEmailAprobar($mensaje){
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
    $email->Username='2daw1021@gmail.com';
    $email->Password='segundodaw';
    $email->From='2daw1021@gmail.com';
    $email->FromName='Pokemons';
    $email->AddAddress('15zun3a1202shi@gmail.com');
    $email->AddReplyTo('2daw1021@gmail.com');
    $email->IsHTML(true);//poder pner html y css en el correo
    //$email->Subject="$subject"
    $email->Subject="JoseMaria que vive a 200 metros quiere conocerte";
    $email->Body=file_get_contents('htmlFile.html');
    $email->AltBody="para ver este mensja debes habilitar o utilizar un gestor de correo compatible con html";
    if($email->Send()){
        //correo enviado
        echo "correo enviado en breve te responderemos";
    }else{
        //error
        echo $email->ErrorInfo;
    }
    }
?>