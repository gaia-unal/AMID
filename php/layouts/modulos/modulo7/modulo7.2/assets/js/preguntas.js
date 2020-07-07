var result = [0, 0, 0, 0, 0, 0]
var cont = 0;

function correcto(a) {
    result[a - 1] = 1;
}

function incorrecto(a) {
    result[a - 1] = 0;
}

function validar() {
    for (i = 0; i < 6; i++) {
        if (result[i] == 1) {
            cont++;
        }
    }
    if (cont == 6) {
        swal({
            title: "¡Correcto!",
            type: "success",
            button: "Continuar",
            text: "Respondiste correctamente todas las preguntas"
        });
    }
    else {
        swal({
            type: 'error',
            title: 'Oops...',
            button: "Continuar",
            text: "Te equivocaste en algunas :c pero puedes volver a intentarlo"
        });
    }
}