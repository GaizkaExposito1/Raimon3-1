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
        $("#editaremail").css("display", "none");
        $("#editarusername").css("display", "none");
    });
    $("#cambiarEmail").click(function(){
        $("#editarContraseña").css("display", "none");
        $("#editaremail").css("display", "inline");
        $("#editarusername").css("display", "none");
    });
        $("#cambiarUsername").click(function(){
            $("#editarContraseña").css("display", "none");
            $("#editaremail").css("display", "none");
            $("#editarusername").css("display", "inline");
    });


});
