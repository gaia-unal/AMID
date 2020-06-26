var opc1 = document.getElementById('opc1');
var opc2 = document.getElementById('opc2');
var opc3 = document.getElementById('opc3');
var opc4 = document.getElementById('opc4');
var opc5 = document.getElementById('opc5');
var opc6 = document.getElementById('opc6');
var correctas = 0;

function validar() {
    if (opc1.value == 'derecho universal') {
        correctas++;
    }
    if (opc2.value == 'mantener una') {
        correctas++;
    }
    if (opc3.value == 'interferencias') {
        correctas++;
    }
    if (opc4.value == 'recibir') {
        correctas++;
    }
    if (opc5.value == 'difundir') {
        correctas++;
    }
    if (opc6.value == 'medio de difusión' || opc6.value == 'medio de difusion') {
        correctas++;
    }
    respuesta();
}

function respuesta(){
    if (correctas == 6){
        swal({
            type: 'success',
            title :'Felicitaciones',
            text: 'Completaste correctamente la frase'
        });
    } else {
        swal({
            type: 'error',
            title :'Ups',
            text: 'Te equivocaste en algunas, puedes volverlo a intentar'
        });
    }
    correctas = 0;
}