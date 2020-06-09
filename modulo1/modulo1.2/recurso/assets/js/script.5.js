function Correcto() {
    swal({
        title: "¡Correcto!",
        icon: "success",
        button: "Continuar",
        text: "Respondiste correctamente =)"
    });
}

function Incorrecto() {
    swal({
        icon: 'error',
        title: 'Oops...',
        button: "Continuar",
        text: "Te equivocaste en algunas :c pero puedes volver a intentarlo"
    }).then(function () {
        location.reload();
    });
}