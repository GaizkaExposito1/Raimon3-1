function mostrarCaja() {
    let MostrarForm = document.getElementById("right");
    let cambiarTamañoContenido = document.getElementById("container");
    let ocultarBoton = document.getElementById("mostrar");
    MostrarForm.style.visibility="visible";
    cambiarTamañoContenido.style.height="38em";
    ocultarBoton.style.visibility="";
}
