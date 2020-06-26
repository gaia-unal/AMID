var correcto = 0;

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
    } else{
        swal({
            type: 'error',
            title: 'Ups',
            text: 'Te qeuivocaste en algunas. Ya puedes continuar con la siguiente unidad'
        });
    }
}