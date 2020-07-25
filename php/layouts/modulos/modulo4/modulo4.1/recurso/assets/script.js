var totB = 0;
var totM = 0;

function term() {
    for (let i = 1; i <= 8; i++) {
        var select=document.getElementById("opc"+i+"").checked;    
        if(i==2 || i==5 || i==6 || i==8){
            if(select){
                totB++;
            }
        }else{
            if(select){
                totM++;
            }
        }
    }

    if (totB == 4 && totM==0) {
        swal({
            title: "¡Correcto! 8 de 8",
            icon: "success",
            button: "Continuar",
            text: "Respondiste correctamente =)"
        });
        totB = totM= 0;
        printNote(8);
    } else {
        swal({
            title: "Incorrecto ",
            icon: 'error',
            button: "Continuar",
            text: "Te equivocaste en algunas :c pero puedes volver a intentarlo"
        });
        totB = totM= 0;
    }
}
function printNote(puntos){
    var nota=parseFloat(puntos*5/8);
    if(nota<1){nota=1;}
    document.getElementById("pointsNota").value=nota;
    document.getElementById("pointsGood").value=puntos;
}