var valor1 = 0;
var valor2 = 0;
var turno = 0;
var i = 0;
var cont = 0;
var im;

function verificar(pieza) {
    if (turno == 0) {
        valor1 = pieza;
        turno = 1;
        document.getElementById("imagen" + valor1).className = "flip3D";
        
    } else {
        valor2 = pieza;
        turno = 0;
        document.getElementById("imagen" + valor2).className = "flip3D";
        setTimeout("espera1()", 400);//espera 4 milesimas, para que la linea de arriba se pueda apreciar
        //despues de esperar 4 milesimas llama a la función espera1
    }
}
function espera1() {
    if ((valor1 == valor2 - 6) || (valor1 - 6 == valor2)) {
        swal({
            title: "¡Correcto!",
            type: "success",
            button: "Continuar"
        });
        setTimeout("espera4()", 1000);
    } else {
        swal({
            type: 'error',
            title: 'Oops...',
            button: "Continuar",
            text: 'Intentalo de nuevo'
        });
        setTimeout("espera3()", 1000);
    }
}

function espera3() {
    document.getElementById("imagen" + valor1).className = "flip3D2";
    document.getElementById("imagen" + valor2).className = "flip3D2";
}

function espera4() {
    i++;
    printNote(i);
    if (i == 6) {
        setTimeout("final()", 600);
    }
}

function final() {
    swal({
        title: "¡Correcto!",
        type: "success",
        // button: "Continuar",
        text: "Has terminado, ¡FELICITACIONES!, ya puedes continuar con el siguiente modulo"
    });
}

function printNote(puntos){
        
    var nota=parseFloat(puntos*5/6);
    if(nota<1){nota=1;}
    
    document.getElementById("pointsNota").value=nota;
    document.getElementById("pointsGood").value=puntos;
}