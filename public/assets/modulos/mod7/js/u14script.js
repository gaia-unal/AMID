var valor1 = 0;
var valor2 = 0;
var turno = 0;
var i = 0;
var cont = 0;
var im;

var cor1 = "No olvides que se refiere a la negación de la adicción";
var cor2 = "Recuerda que la persona necesita efectuar la actividad para no sentir malestar";
var cor3 = "Ten presente que quiere decir aumentar la duración de la actividad";
var cor4 = "Recuerda que se comienzan a olvidar otras actividades";
var cor5 = "Recuerda que incluye cambios emocionales, físicos y sociales";
var cor6 = "No olvides que sucede cuando la persona no puede realizar la actividad";

var val1 = "Se refiere a la negación de la adicción";
var val2 = "La persona necesita efectuar la actividad para no sentir malestar";
var val3 = "Quiere decir aumentar la duración de la actividad";
var val4 = "Comienzan a olvidar otras actividades";
var val5 = "Incluye cambios emocionales, físicos y sociales";
var val6 = "Sucede cuando la persona no puede realizar la actividad";

var correccion = [cor1, cor2, cor3, cor4, cor5, cor6, cor1, cor2, cor3, cor4, cor5, cor6];
var validacion = [val1, val2, val3, val4, val5, val6, val1, val2, val3, val4, val5, val6];

function validar(pieza) {
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
            button: "Continuar",
            text: validacion[valor1 - 1]
        });
        setTimeout("espera4()", 1000);
    } else {
        swal({
            type: 'error',
            title: 'Oops...',
            button: "Continuar",
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
        type: "success",
        button: "Continuar",
        text: "Has terminado, ¡FELICITACIONES!"
    });
    activar();
}

function activar() {
    document.getElementById('btn-sgte').href = "../../modulo7.2/mod7.2_inicio.html";
    var unid = document.getElementById('unid-sgte');
    unid.href = "../../modulo7.2/mod7.2_inicio.html";
}