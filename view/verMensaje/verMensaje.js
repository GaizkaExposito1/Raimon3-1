$(document).ready(function(){
    $("[value=mostrar]").click(function(){
        let MostrarForm=$("#right");
        let cambiarTamañoLeft=$("#left");
        let ocultarBoton=$("#mostrar");
        MostrarForm.css("visibility", "visible");
        cambiarTamañoLeft.css("height", "88%");
        ocultarBoton.css("visibility", "hidden");
    });
});