var puntos = 0;
var equiv = 0;

function termino() {
    r1 = document.getElementById('resp1').value;
    r2 = document.getElementById('resp2').value;
    r3 = document.getElementById('resp3').value;
    r4 = document.getElementById('resp4').value;
    r5 = document.getElementById('resp5').value;
    r6 = document.getElementById('resp6').value;
    r7 = document.getElementById('resp7').value;
    r8 = document.getElementById('resp8').value;

    validar();
}

function validar() {
    if (r1 == 7)
        Correcto();
    else
        Incorrecto();
    if (r2 == 3)
        Correcto();
    else
        Incorrecto();
    if (r3 == 4)
        Correcto();
    else
        Incorrecto();
    if (r4 == 1)
        Correcto();
    else
        Incorrecto();
    if (r5 == 6)
        Correcto();
    else
        Incorrecto();
    if (r6 == 5)
        Correcto();
    else
        Incorrecto();
    if (r7 == 8)
        Correcto();
    else
        Incorrecto();
    if (r8 == 9)
        Correcto();
    else
        Incorrecto();
}

function Correcto() {
    puntos += 1;
    imp();
}

function Incorrecto() {
    equiv += 1;
    imp();
}

function imp() {
    if (puntos == 8) {
        swal({
            title: "¡Correcto!",
            icon: "success",
            button: "Continuar",
            text: "Respondiste correctamente =)"
        });
    } else if (puntos + equiv == 8) {
        swal({
            icon: 'error',
            title: 'Oops...',
            button: "Continuar",
            text: "Te equivocaste en algunas :c pero puedes volver a intentarlo"
        }).then(function () {
            location.reload();
        });
    }
}