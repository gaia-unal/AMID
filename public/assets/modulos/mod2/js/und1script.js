var resp = [0,0,0];

function correcto(a) {
    resp[a-1] = 1;
    swal({
        title: "¡Correcto!",
        icon: "success",
        button: "Continuar",
    });

}

function incorrecto() {
    resp[a-1]=0;
    swal({
        icon: 'error',
        title: 'Oops...',
        text: 'Te equivocaste pero puedes volver a intentarlo'
    });

}
