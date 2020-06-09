function Correcto() {
    swal({
        title: "¡Correcto!",
        icon: "success",
        button: "Continuar",
    });
    activar();
}

function Incorrecto() {
    swal({
        icon: 'error',
        title: 'Oops...',
        text: 'Te equivocaste pero puedes volver a intentarlo'
    }).then(function () {
        location.reload();
    });
    activar();
}

function activar() {
    document.getElementById('btn-sgte').href = "../../modulo3/module3.html";
    var unid = document.getElementById('mod-sgte');
    unid.href = "../../modulo3/module3.html";
}