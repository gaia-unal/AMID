var result = [0, 0, 0, 0, 0, 0, 0, 0, 0];
var correctas = 0;

function correcto(a) {
    result[a - 1] = 1;
}
function incorrecto(a) {
    result[a - 1] = 0;
}

function validar() {
    for (var i = 0; i < 9; i++) {
        if (result[i] == 1) {
            correctas++;
        }
    }
    resultado();
}

function resultado() {
    var temp = (correctas * 100) / 7;
    swal({
        type: 'success',
        title: 'Terminaste',
        text: 'Tu resultado fue del ' + temp.toFixed(2) + '%'
    });
    printNote(correctas);
    correctas = 0;
}

function printNote(puntos){
    var nota=parseFloat(puntos*5/7);
    if(nota<1){nota=1;}
    
    document.getElementById("pointsNota").value=nota.toFixed(2);
    document.getElementById("pointsGood").value=puntos;
}