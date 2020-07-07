var r1, r2, r3, r4, r5, r6;
var puntos = 0, equiv = 0, punt = 0;
var respuesta = ['d', 'b', 'c', 'f', 'a', 'e'];
var respMay = ['D', 'B', 'C', 'F', 'A', 'E'];

function termino() {
    r1 = document.getElementById('resp1').value;
    r2 = document.getElementById('resp2').value;
    r3 = document.getElementById('resp3').value;
    r4 = document.getElementById('resp4').value;
    r5 = document.getElementById('resp5').value;
    r6 = document.getElementById('resp6').value;

    validar();
}

function validar() {
    if (r1 == respuesta[0] || r1 == respMay[0])
        Correcto();
    else Incorrecto();
    if (r2 == respuesta[1] || r2 == respMay[1])
        Correcto();
    else Incorrecto();
    if (r3 == respuesta[2] || r3 == respMay[2])
        Correcto();
    else Incorrecto();
    if (r4 == respuesta[3] || r4 == respMay[3])
        Correcto();
    else Incorrecto();
    if (r5 == respuesta[4] || r5 == respMay[4])
        Correcto();
    else Incorrecto();
    if (r6 == respuesta[5] || r6 == respMay[5])
        Correcto();
    else Incorrecto();
}

function Correcto() {
    puntos += 1;
    punt += 0.83;
    imp();
}

function Incorrecto() {
    equiv += 1;
    imp();
}

function imp() {
    if (puntos == 6) {
        swal({
            title: "¡Correcto!",
            type: "success",
            button: "Continuar",
            text: "Respondiste correctamente =)"
        });
        enviar();
    } else if (puntos + equiv == 6) {
        swal({
            type: 'error',
            title: 'Oops...',
            button: "Continuar",
            text: "Te equivocaste en algunas :c"
        });
        enviar();
    }
}

function enviar(){
    var inp = document.getElementById('preg');
    inp.value = punt;
}