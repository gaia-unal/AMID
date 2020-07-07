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
    });
    activar();
}

function activar() {
    var cont = document.getElementById('btn-siguiente');
    cont.onclick = null;
    // document.getElementById('btn-sgte').href = "../../modulo3/module3.php";
}