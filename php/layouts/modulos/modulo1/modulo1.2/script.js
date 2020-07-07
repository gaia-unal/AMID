function correcto() {
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
    // disableClicks();
    var cont = document.getElementById('btn-siguiente');
    cont.onclick = null;
    // document.getElementById('btn-siguiente').href = "../modulo1.3/module1.3_inicio.php";
    // var unid = document.getElementById('unid-sgte');
    // unid.classList.remove('inactive');
    // unid.href = "../modulo1.3/module1.3_inicio.php";
}
// function disableClicks() {
//     var cont = document.getElementById('btn-siguiente');
//     cont.onclick = null;
//   }