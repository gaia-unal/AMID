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
    correctas = 0;
}