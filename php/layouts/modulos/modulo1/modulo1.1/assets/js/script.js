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
    var cont = document.getElementById('btn-siguiente');
    cont.onclick = null;
    // disableClicks();
    // document.getElementById('btn-siguiente').href = "../modulo1.2/module1.2_inicio.php";
    // var unid = document.getElementById('unid-sgte');
    // unid.classList.remove('inactive');
    // unid.href = "../modulo1.2/module1.2_inicio.php";
    
}
// function disableClicks() {
//     var cont = document.getElementById('btn-siguiente');
//     cont.onclick = null;
//   }