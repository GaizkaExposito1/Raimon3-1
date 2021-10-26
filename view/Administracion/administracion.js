function mostrarCaja() {
    let MostrarForm = document.getElementById("right");
    let cambiarTamañoLeft = document.getElementById("left");
    let ocultarBoton = document.getElementById("mostrar");
    MostrarForm.style.visibility="visible";
    cambiarTamañoLeft.style.height="88%";
    ocultarBoton.style.visibility="";
}

$(document).ready(function(){
    $("#cambiarContraseña").click(function(){
        $("#editarContraseña").css("display", "inline");
        $("#editarEmail").css("display", "none");
        $("#editarUsername").css("display", "none");
        $('input[type="text"]').val('');
        $('input[type="email"]').val('');
    });

    $("#cambiarEmail").click(function(){
        $("#editarContraseña").css("display", "none");
        $("#editarEmail").css("display", "inline");
        $("#editarUsername").css("display", "none");
        $('input[type="password"]').val('');
        $('input[type="text"]').val('');
    });

    $("#cambiarUsername").click(function(){
        $("#editarContraseña").css("display", "none");
        $("#editarEmail").css("display", "none");
        $("#editarUsername").css("display", "inline");
        $('input[type="password"]').val('');
        $('input[type="email"]').val('');
    });


});
$('#aceptms').click(function(){
    let valor = $("#sel option:selected").val();
    $('#mensajes').attr('action', 'controller/actions/Acept.php?id='+valor);
    $('#mensajes').submit();
 });
 
 
 $('#denyms').click(function(){
    let valor = $("#sel option:selected").val();
    $('#mensajes').attr('action', 'controller/actions/Deny.php?id='+valor);
    $('#mensajes').submit();
 });