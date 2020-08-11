function correcto() {
    swal({
        title: "¡Correcto!",
        type: "success"
        // botton: "Continuar"
    });
}

function incorrecto(a) {
    swal({
        type: 'error',
        title: 'Oops...',
        text: 'La respuesta correcta es la "' + a + '"'
    })
}