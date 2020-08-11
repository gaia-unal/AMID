function Correcto() {
    swal({
        title: "¡Correcto!",
        text: "Pulsa en el botón 'Siguiente' para continuar"
        // icon: "success",
        // button: "Continuar",
    });
  
}

function Incorrecto() {
    swal({
        // icon: 'error',
        title: 'Oops...',
        text: 'Te equivocaste pero puedes volver a intentarlo'
    });
    
}
