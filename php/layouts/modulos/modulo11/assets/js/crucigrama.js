var result;
var correctas = 0;

function validar(){
    for(var i = 1; i < 43; i++){
        result = document.getElementById('opc'+i);
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
    swal({
        type: 'success',
        title: 'Terminaste',
        text: 'Tu resultado fue del ' + temp.toFixed(2) + '%'
    });
}