var resp1 = document.getElementById('resp1');
var resp2 = document.getElementById('resp2');
var resp3 = document.getElementById('resp3');
var resp4 = document.getElementById('resp4');

var correctas = 0;

function validar() {
    if (resp1.value == 3)
        correctas++;
    if (resp2.value == 1)
        correctas++;
    if (resp3.value == 4)
        correctas++;
    if (resp4.value == 2)
        correctas++;
    if (correctas == 4){
        swal({
            type: 'success',
            title: 'Felicitaciones',
            text: 'Relacionaste correctamente todas las palabras'
        });
    } else {
        swal({
            type: 'error',
            title: 'Ups',
            text: 'Te equivocaste en algunas, te recomendamos repasar los temas y volverlo a intentar'
        });
    }
}