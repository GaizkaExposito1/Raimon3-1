/*
function mostrarCaja() {
    let MostrarForm = document.getElementById("right");
    let cambiarTamañoLeft = document.getElementById("left");
    let ocultarBoton = document.getElementById("mostrar");
    MostrarForm.style.visibility="visible";
    cambiarTamañoLeft.style.height="88%";
    ocultarBoton.style.visibility="hidden";
}*/

$(document).ready(function(){
    $("[value=mostrar]").click(function(){
        let MostrarForm=$("#right");
        let cambiarTamañoLeft=$("#left");
        let ocultarBoton=$("#mostrar");
        MostrarForm.css("visibility", "visible");
        cambiarTamañoLeft.css("height", "88%");
        ocultarBoton.css("visibility", "hidden");
    });
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
