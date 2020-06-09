function correcto() {
    swal({
        title: "¡Correcto!",
        icon: "success",
        button: "Continuar",
    });
}

function incorrecto(a) {
    swal({
        icon: 'error',
        title: 'Oops...',
        text: 'La respuesta correcta era la "' + a + '"'
    })
}