function mostrarCaja() {
    let MostrarForm = document.getElementById("right");
    let cambiarTamañoContenido = document.getElementById("container");
    let ocultarBoton = document.getElementById("mostrar");
    MostrarForm.style.visibility="visible";
    cambiarTamañoContenido.style.height="38em";
    ocultarBoton.style.visibility="";
}
function pasoPreFiltro(){
var text=document.getElementById("text").value;
var ar=text.split(' ');
for(var i=0;i<ar.length;i++){
    for(var j=0;j<$prefiltro.length;j++){
        if(ar[i]==$prefiltro[j]){
            return ar[i];
        }
    }
}
document.getElementById("crear").submit();
}