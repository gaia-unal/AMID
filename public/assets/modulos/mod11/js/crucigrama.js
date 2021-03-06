var result;
var correctas = 0;

function validar(){
    for(var i = 1; i < 43; i++){
        result = document.getElementById('opc'+i);
        result.classList.remove('green');
        result.classList.remove('red');
        if(result.value == result.name){
            result.classList.add('green');
            correctas++;
        } else {
            result.classList.add('red');
        }
    }
    resultado();
}

function resultado(){
    var temp = (correctas*100)/42;
    printNote(correctas);
    correctas = 0;
    swal({
        type: 'success',
        title: 'Terminaste',
        text: 'Tu resultado fue del ' + temp.toFixed(2) + '%'
    });
    
}

function printNote(puntos){
    var nota=parseFloat(puntos*5/42);
    if(nota<1){nota=1;}
    
    document.getElementById("pointsNota").value=nota.toFixed(2);
    document.getElementById("pointsGood").value=puntos;
}