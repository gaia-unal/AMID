function correcto(params) {
    swal({
        title: "¡Correcto!",
        icon: "success",
        button: "Continuar",
    });
    activar();
}

function incorrecto() {
    swal({
        icon: 'error',
        title: 'Oops...',
        text: 'Te equivocaste pero puedes volver a intentarlo'
    });
    activar();
}

function activar() {
    document.getElementById('btn-siguiente').href = "../modulo1.2/module1.2_inicio.html";
    var unid = document.getElementById('unid-sgte');
    unid.classList.remove('inactive');
    unid.href = "../modulo1.2/module1.2_inicio.html";
}