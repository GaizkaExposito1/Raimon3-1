function mostrarCaja() {
    let MostrarForm = document.getElementById("right");
    let cambiarTamañoLeft = document.getElementById("left");
    let ocultarBoton = document.getElementById("mostrar");
    MostrarForm.style.visibility="visible";
    cambiarTamañoLeft.style.height="88%";
    ocultarBoton.style.visibility="";
}
