var correctas = 0;

function validar() {
    var nombre;
    var valor;
    for( var i = 1; i < 16; i++){
        nombre = document.getElementById('opc' + i).name;
        valor = document.getElementById('opc' + i).value;
        console.log(nombre + ' + ' +  valor);
        if(nombre == valor){
            document.getElementById('opc' + i).classList.remove('red');
            document.getElementById('opc' + i).classList.add('green');
            correctas++;
        } else{
            document.getElementById('opc' + i).classList.add('red');
        }
    }
    respuesta();
}

function respuesta(){
    if (correctas == 15){
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
    printNote(correctas);
    correctas = 0;
}

function printNote(puntos){
    var nota=parseFloat(puntos*5/15);
    if(nota<1){nota=1;}
    
    document.getElementById("pointsNota").value=nota.toFixed(2);
    document.getElementById("pointsGood").value=puntos;
}