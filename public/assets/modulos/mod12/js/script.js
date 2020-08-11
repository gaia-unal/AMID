var opc1 = document.getElementById('opc1');
var opc2 = document.getElementById('opc2');
var opc3 = document.getElementById('opc3');
var opc4 = document.getElementById('opc4');
var opc5 = document.getElementById('opc5');
var opc6 = document.getElementById('opc6');
var correctas = 0;

function validar() {
    for (let i = 1; i <=6; i++) {
        document.getElementById('opc'+i).classList.remove('red');
        document.getElementById('opc'+i).classList.remove('green');
    }
    
    if (opc1.value == 'derecho universal') {
        opc1.classList.add('green');
        correctas++;
    }else
        opc1.classList.add('red');
    if (opc2.value == 'mantener una') {
        opc2.classList.add('green');
        correctas++;
    }else
        opc2.classList.add('red');
    if (opc3.value == 'interferencias') {
        opc3.classList.add('green');
        correctas++;
    }else
        opc3.classList.add('red');
    if (opc4.value == 'recibir') {
        opc4.classList.add('green');
        correctas++;
    }else
        opc4.classList.add('red');
    if (opc5.value == 'difundir') {
        opc5.classList.add('green');
        correctas++;
    }else
        opc5.classList.add('red');
    if (opc6.value == 'medio de difusión' || opc6.value == 'medio de difusion') {
        opc6.classList.add('green');
        correctas++;
    }else
        opc6.classList.add('red');
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