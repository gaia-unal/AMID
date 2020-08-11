function correcto() {
    swal({
        title: "¡Correcto!",
        text: "Respondiste correctamente =)"
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