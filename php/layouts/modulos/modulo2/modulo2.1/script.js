var resp = [0,0,0];

function correcto(a) {
    resp[a-1] = 1;
    swal({
        title: "¡Correcto!",
        icon: "success",
        button: "Continuar",
    });
    activar();
}

function incorrecto() {
    resp[a-1]=0;
    swal({
        icon: 'error',
        title: 'Oops...',
        text: 'Te equivocaste pero puedes volver a intentarlo'
    });
    activar();
}

function activar() {
    document.getElementById('btn-siguiente').href = "../modulo1.2/module1.2_inicio.php";
    var unid = document.getElementById('unid-sgte');
    unid.classList.remove('inactive');
    unid.href = "../modulo1.2/module1.2_inicio.php";
}