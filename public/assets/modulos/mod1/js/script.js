function correcto() {
    swal({
        title: "¡Correcto!"
        // icon: "success",
        // button: "Continuar",
    });
}

function incorrecto() {
    swal({
        // icon: 'error',
        title: 'Oops...',
        text: 'Te equivocaste pero puedes volver a intentarlo'
    });
}