/*$(document).ready(function(){
    $("[value=mostrar]").click(function(){
        let MostrarForm=$("#right");
        let cambiarTamañoLeft=$("#left");
        let ocultarBoton=$("#mostrar");
        MostrarForm.css("visibility", "visible");
        cambiarTamañoLeft.css("height", "88%");
        ocultarBoton.css("visibility", "hidden");
    });
  
  });*/
    


function mostrarCaja() {
    let MostrarForm = document.getElementById("right");
    let cambiarTamañoLeft = document.getElementById("left");
    let ocultarBoton = document.getElementById("mostrar");
    MostrarForm.style.visibility="visible";
    cambiarTamañoLeft.style.height="135%";
    ocultarBoton.style.visibility="hidden";
}