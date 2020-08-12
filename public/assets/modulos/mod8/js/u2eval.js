var resul = [0,0,0];
var cont = 0;

function correcto(a){
    resul[a-1] = 1;
}

function incorrecto(b){
    resul[b-1] = 0;
}

function validar(){
    for(var i = 0; i<3; i++){
        if(resul[i] == 1){
            cont++;
        }
    }
    if(cont ==3){
        swal({
            type: 'success',
            title: 'Lo lograste!',
            text: 'Felicidades, respondiste todo correctamente. Ya puedes continuar con la siguiente unidad.'
        });
    }else {
        swal({
            type: 'info',
            title: 'Completado',
            text: 'Ups. Te equivocaste en algunas. Puedes continuar con la siguiente unidad'
        })
    }
}