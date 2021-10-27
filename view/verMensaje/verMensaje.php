<section>
    <a href="$_SERVER['HTTP_REFERER']">Volver</a>
    <div>
<p>Username: </p><?php ?>
<p>Activada: </p><?php if($sms->activateToken!=null){//sms activado

}else{//sms no activado

} ?>
<p>Nombre de Tipografia: </p><?php $sms->tipografia ?>
<p>Color de Tipografia: </p><?php $sms->colorTipografia ?>
<p>Color fondo: </p></p><?php $sms->color ?>
<p>Texto de Mensaje: </p></p><?php $sms->texto ?>
<p>Número de Likes: </p></p><?php $sms->numLikes ?>
</div>
</section>