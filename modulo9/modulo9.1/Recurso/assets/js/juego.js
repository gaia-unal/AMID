var valor1 = 0;
var valor2 = 0;
var turno = 0;
var i = 0;
var cont = 0;
var im;

var imagen1 = "No olvides que se refiere a la fuente del mensaje (quien lo origina)";
var imagen7 = "No olvides que se refiere a la fuente del mensaje (quien lo origina)";
var imagen2 = "Recuerda que es el medio por donde se transmite el mensaje";
var imagen8 = "Recuerda que es el medio por donde se transmite el mensaje";
var imagen3 = "Ten presente que es quien decodifica el mensaje";
var imagen9 = "Ten presente que es quien decodifica el mensaje";
var imagen4 = "Recuerda que es el proceso: receptor a emisor y viceversa a medida que el enlace continúa";
var imagen10 = "Recuerda que es el proceso: receptor a emisor y viceversa a medida que el enlace continúa";
var imagen5 = "Recuerda que deriva del latín communicatĭo que significa compartir, participar en algo o poner en común.";
var imagen11 = "Recuerda que deriva del latín communicatĭo que significa compartir, participar en algo o poner en común.";
var imagen6 = "No olvides el proceso por medio del cual se adquieren nuevos conocimientos";
var imagen12 = "No olvides el proceso por medio del cual se adquieren nuevos conocimientos";

var imagenes = [imagen1, imagen2, imagen3, imagen4, imagen5, imagen6, imagen7, imagen8, imagen9, imagen10, imagen11, imagen12];

function validar(pieza) {
    if (turno == 0) {
        valor1 = pieza;
        turno = 1;
        document.getElementById("imagen" + valor1).className = "flip3D ";
    } else {
        valor2 = pieza;
        turno = 0;
        document.getElementById("imagen" + valor2).className = "flip3D ";
        setTimeout("espera1()", 400);//espera 4 milesimas, para que la linea de arriba se pueda apreciar
        //despues de esperar 4 milesimas llama a la función espera1
    }


}
function espera1() {
    if ((valor1 == valor2 - 6) || (valor1 - 6 == valor2)) {
        swal({
            title: "¡Correcto!",
            icon: "success",
            button: "Continuar",
           
        });

        setTimeout("espera4()", 1000);
    } else {
        swal({
            icon: 'error',
            title: 'Oops...',
            button: "Continuar",
            text: 'Intentalo de nuevo; ' + imagenes[valor1 - 1]
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
    }).then(function() {
                window.location = "actividad2.html";
    });
}