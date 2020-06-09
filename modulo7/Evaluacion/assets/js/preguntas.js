var i = 0;
var j = 0;

function correcto(){
    i++;
    j++;
    completo(i,j);
}

function incorrecto(){
    j++;
    completo(i,j);
}

function completo(m,n){
    if(n == 12 ){
        if(m == 12){
            swal({
                title: "¡Correcto!",
                icon: "success",
                button: "Continuar",
                text: "Respondiste correctamente todas las preguntas"
            });
        }
        else{
            swal({
                icon: 'error',
                title: 'Oops...',
                button: "Continuar",
                text: "Te equivocaste en algunas :c pero puedes volver a intentarlo"
            });
        }
    }
}