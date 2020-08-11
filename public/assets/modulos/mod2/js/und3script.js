var valor1 = 0;
var valor2 = 0;
var turno = 0;
var i = 0;
var cont = 0;
var im;

var cor1 = "No olvides que es la circunstancia, momento o medio adecuado para realizar o conseguir algo";
var cor2 = "Recuerda que sobresale en relación con lo que está alrededor";
var cor3 = "Ten presente que es la oposición o desacuerdo entre personas o cosas";
var cor4 = "Recuerda que es la idea inesperada de hacer algo o pensamiento original y repentino sobre algo que hay que hacer";
var cor5 = "Recuerda que es la precisión (que los hechos sean correctos) y coherencia (que los hechos tengan sentido)";
var cor6 = "No olvides que está constituido por elementos de la misma naturaleza, pero con características diferentes";

var val1 = "Es la circunstancia, momento o medio adecuado para realizar o conseguir algo";
var val2 = "Sobresale en relación con lo que está alrededor";
var val3 = "Es la oposición o desacuerdo entre personas o cosas";
var val4 = "Es la idea inesperada de hacer algo o pensamiento original y repentino sobre algo que hay que hacer";
var val5 = "Es la precisión (que los hechos sean correctos) y coherencia (que los hechos tengan sentido)";
var val6 = "Que está constituido por elementos de la misma naturaleza, pero con características diferentes";

var correccion = [cor1, cor2, cor3, cor4, cor5, cor6, cor1, cor2, cor3, cor4, cor5, cor6];
var validacion = [val1, val2, val3, val4, val5, val6, val1, val2, val3, val4, val5, val6];

function validar(pieza) {
    if (turno == 0) {
        valor1 = pieza;
        turno = 1;
        document.getElementById("imagen" + valor1).className = "flip3D";

    } 
    else {
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
            // icon: "success",
            // button: "Continuar",
            text: validacion[valor1 - 1]
        });
        setTimeout("espera4()", 1000);
    } else {
        swal({
            // icon: 'error',
            title: 'Oops...',
            // button: "Continuar",
            text: 'Intentalo de nuevo; ' + correccion[valor1 - 1]
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
    if (i == 6) {
        setTimeout("final()", 800);
    }
}

function final() {
    swal({
        title: "¡Correcto!",
        icon: "success",
        button: "Continuar",
        text: "Has terminado, ¡FELICITACIONES!"
    });
    printNote(6);

}
function printNote(puntos){
    var nota=parseFloat(puntos*5/6);
    if(nota<1){nota=1;}
    document.getElementById("pointsNota").value=nota;
    document.getElementById("pointsGood").value=puntos;
}