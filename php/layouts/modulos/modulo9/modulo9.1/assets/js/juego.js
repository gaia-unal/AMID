var valor1 = 0, valor2 = 0, turno = 0, i = 0, cont = 0;
var im;
var punt = 0;

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
            type: "success",
            button: "Continuar",
        });
        cont++;
        setTimeout("espera4()", 1000);
    } else {
        swal({
            type: 'error',
            title: 'Oops...',
            button: "Continuar",
            text: 'Intentalo de nuevo; ' + imagenes[valor1 - 1]
        });
        punt++;
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

    if (punt - cont == 12){
        punt = 5;
    } else if(punt - cont < 0){
        punt = 1;
    } else {
        punt = 3;
    }
    var inp = document.getElementById('preg');
    inp.value = punt;
    swal({
        title: "¡Correcto!",
        icon: "success",
        button: "Continuar",
        text: "Has terminado, ¡FELICITACIONES!, ya puedes continuar con la siguiente unidad"
    });
}