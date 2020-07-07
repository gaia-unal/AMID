var respuesta = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var totB = 0;

function correcto(a) {
    respuesta[a] = 1;
}
function incorrecto(a) {
    respuesta[a] = 0;
}

function termino() {
    for (var i = 0; i < 10; i++) {
        if (respuesta[i] == 1) {
            totB++;
        }
    }
    if (totB == 6) {
        swal({
            icon: 'success',
            title: 'Oops',
            text: 'Felicidades, respondiste correctamente',
        });
    } else {
        swal({
            icon: 'error',
            title: 'Oops',
            text: 'Te equivocaste en algunas pero puedes volver a intentarlo',
        }).then(
            setTimeout(function () { location.reload() }, 2000)
        );
    }
}