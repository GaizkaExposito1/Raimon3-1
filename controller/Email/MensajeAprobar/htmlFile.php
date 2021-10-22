<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Han enviado un deseo a revisión</h1>  
    <form>
        <label>Usuario:</label><?php $usuario ?>
        <label>Mensaje</label><?php $mensaje ?>
        <button href="localhost/mikel/Raimon3-1/controller/Email/Acept.php">Aceptar</button>
        <button href="localhost/mikel/Raimon3-1/controller/Email/Deny.php">Denegar</button>
    </form>
</body>
</html>