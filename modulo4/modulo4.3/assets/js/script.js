var resp = [0, 0, 0, 0, 0];
var respCorre = 0;

function correcto(n) {
    resp[n] = 1;
}

function incorrecto(n) {
    resp[n] = 0;
}

function termino() {
    for (var i = 0; i < 5; i++) {
        if (resp[i] == 1) {
            respCorre++;
        }
    }
    if (respCorre == 5)
        swal({
            icon: 'success',
            title: '¡Correcto!',
            text: 'Felicidades, respondiste correctamente',
        });
    else
        swal({
            icon: 'error',
            title: 'Ooops',
            text: 'Te equivocaste en algunas :c',
        });
}