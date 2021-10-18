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
    $email->Username='retoraimon@gmail.com';
    $email->Password='raimon3+1';
    $email->From='retoraimon@gmail.com';
    $email->FromName='Kalpataru';
    $email->AddAddress('retoraimon@gmail.com');
    $email->AddReplyTo('el de las pavas');
    $email->IsHTML(true);//poder pner html y css en el correo
    //$email->Subject="$subject"
    $email->Subject="Creado deseo en Kalpataru";
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