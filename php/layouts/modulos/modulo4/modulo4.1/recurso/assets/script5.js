var totB = 0;
var totM = 0;

function termino() {
    for (let i = 1; i <= 10; i++) {
        var select=document.getElementById("opc"+i+"").checked;    
        if(i==2 || i==3 || i==5 || i==6|| i==9|| i==10){
            if(select){
                totB++;
            }
        }else{
            if(select){
                totM++;
            }
        }
    }
    if (totB == 6 && totM==0) {
        swal({
            title: "¡Correcto! 10 de 10",
            icon: "success",
            button: "Continuar",
            text: 'Felicidades, respondiste correctamente',
        });
        totB = totM= 0;
        printNote(10);
    } else {
        swal({
            title: "Incorrecto ",
            icon: 'error',
            button: "Continuar",
            text: 'Te equivocaste en algunas pero puedes volver a intentarlo',
        });
        totB = totM= 0;
    }
}
function printNote(puntos){
    var nota=parseFloat(puntos*5/10);
    if(nota<1){nota=1;}
    document.getElementById("pointsNota").value=nota;
    document.getElementById("pointsGood").value=puntos;
}