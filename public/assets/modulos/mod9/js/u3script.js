var correcto = 0, punt;

function correcto() {
    correcto++
}

function validar() {
    if(correcto == 3){
        swal({
            type: 'success',
            title: 'Felicitaciones',
            text: 'Respondiste correctamente, ya puedes continuar con la siguiente unidad'
        });
        punt = 5;
    } else{
        swal({
            type: 'error',
            title: 'Ups',
            text: 'Te equivocaste en algunas. Ya puedes continuar con la siguiente unidad'
        });
        if(correcto == 2)
            punt = 2 * 1.66;
        else 
            punt = 1.66;
    }
    var inp = document.getElementById('preg');
    inp.value = punt;
}