function correcto() {
    swal({
        title: "¡Correcto!",
        type: "success"
        // button: "Continuar",
    });
}

function incorrecto(a) {
    swal({
        type: 'error',
        title: 'Oops...',
        text: 'La respuesta correcta es la ' + a
    })
}