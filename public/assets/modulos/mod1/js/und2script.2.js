var puntos;

var r1,r2,r3,r4,r5,r6,r7,r8;

function termino() {

    puntos=0;

    r1 = document.getElementById('resp1');
    r2 = document.getElementById('resp2');
    r3 = document.getElementById('resp3');
    r4 = document.getElementById('resp4');
    r5 = document.getElementById('resp5');
    r6 = document.getElementById('resp6');
    r7 = document.getElementById('resp7');
    r8 = document.getElementById('resp8');

    var pre=[r1.value,r2.value,r3.value,r4.value,r5.value,r6.value,r7.value,r8.value];
    var res=[7,3,4,1,6,5,8,2];

    for (let i = 0; i <8; i++) {
        if(res[i]==pre[i])
            puntos ++;
    }

    imp();
}

function imp() {
    if (puntos >= 6) {
        swal({
            title: "¡Correcto! "+puntos+" de 8",
            icon: "success",
            button: "Continuar",
            text: "Respondiste correctamente =)"
        });
    } else {
        swal({
            title: "Incorrecto "+puntos+" de 8",
            icon: 'error',
            button: "Continuar",
            text: "Te equivocaste en algunas :c pero puedes volver a intentarlo"
        });
        // r1.value=r2.value=r3.value=r4.value=r5.value=r6.value=r7.value=r8.value=null;
    }
    printNote(puntos);
}

function printNote(puntos){
    var nota=parseFloat(puntos*5/8);
    if(nota<1){nota=1;}
    
    document.getElementById("pointsNota").value=nota;
    document.getElementById("pointsGood").value=puntos;
}