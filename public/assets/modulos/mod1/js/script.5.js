// Iniciar el Canvas cuando se haya cargado la página
window.addEventListener('load', function () {
    iniciarCanvas();
});

function iniciarCanvas() {

    var canvas = document.getElementById('lienzo');
    var ctx = canvas.getContext('2d');

    var contenedores;
    var objetos;

    var indiceObjetoSeleccionado;
    var arrastrando;
    var mouseX;
    var mouseY;
    var mouseArrastrandoX;
    var mouseArrastrandoY;

    iniciar();

    // Carga los recursos iniciales dentro del canvas
    function iniciar() {

        contenedores = [
            {
                nombre: 'Contenedor',
                src: '../../public/assets/modulos/mod1/img/1.png',
                largo: 353,
                alto: 254,
                img: null,
                posX: 0,
                posY: 0,
                tipo: 'A'
            },
            {
                nombre: 'Contenedor',
                src: '../../public/assets/modulos/mod1/img/2.png',
                largo: 353,
                alto: 254,
                img: null,
                posX: 355,
                posY: 0,
                tipo: 'B'
            },
            {
                nombre: 'Contenedor',
                src: '../../public/assets/modulos/mod1/img/3.png',
                largo: 353,
                alto: 254,
                img: null,
                posX: 0,
                posY: 256,
                tipo: 'C'
            },
            {
                nombre: 'Contenedor',
                src: '../../public/assets/modulos/mod1/img/4.png',
                largo: 353,
                alto: 254,
                img: null,
                posX: 355,
                posY: 256,
                tipo: 'D'
            }
        ];

        objetos = [
            {
                nombre: 'concepto3',
                src: '../../public/assets/modulos/mod1/img/3p.png',
                largo: 314,
                alto: 80,
                img: null,
                posX: 0,
                posY: 510,
                tipo: 'C',
                valor: null
            },
            {
                nombre: 'concepto1',
                src: '../../public/assets/modulos/mod1/img/1p.png',
                largo: 305,
                alto: 74,
                img: null,
                posX: 316,
                posY: 513,
                tipo: 'A',
                valor: null
            },
            {
                nombre: 'concepto2',
                src: '../../public/assets/modulos/mod1/img/2p.png',
                largo: 309,
                alto: 78,
                img: null,
                posX: 0,
                posY: 590,
                tipo: 'B',
                valor: null
            },
            {
                nombre: 'concepto4',
                src: '../../public/assets/modulos/mod1/img/4p.png',
                largo: 314,
                alto: 75,
                img: null,
                posX: 314,
                posY: 592,
                tipo: 'D',
                valor: null
            }
        ];

        cargarImagenes(dibujarCanvas);

        canvas.addEventListener('mousedown', mousePresionado, false);
    }

    // Carga inicial de las imagenes, cuando se han cargado todas, las dibuja en el canvas
    function cargarImagenes(callback) {
        var objetosCargados = 0;
        var contenedoresCargadas = 0;
        objetos.forEach(function (actual) {
            var img = new Image(actual.largo, actual.alto);
            img.src = actual.src;

            img.onload = function () {
                actual.img = img;
                objetosCargados++;
                if (objetosCargados >= objetos.length) {
                    contenedores.forEach(function (cont) {
                        var imgJ = new Image(cont.largo, cont.alto);
                        imgJ.src = cont.src;

                        imgJ.onload = function () {
                            cont.img = imgJ;
                            contenedoresCargadas++;
                            if (contenedoresCargadas >= contenedores.length) {
                                callback();
                            }
                        }
                    });
                }
            }
        });
    }

    // Prepara el canvas para dibujar las imagenes
    function dibujarCanvas() {
        ctx.fillStyle = '#FFF';
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        dibujarImagenes();
    }

    // Dibuja en el canvas todas las imagenes
    function dibujarImagenes() {
        contenedores.forEach(function (cont) {
            ctx.drawImage(cont.img, cont.posX, cont.posY, cont.largo, cont.alto);
        });
        objetos.forEach(function (obj) {
            ctx.drawImage(obj.img, obj.posX, obj.posY, obj.largo, obj.alto);
        });
    }

    // Determina si un objeto ha sido seleccionado según posiciones indicadas
    function objetoSeleccionado(objeto, mx, my) {
        if (
            mx >= (objeto.posX) &&
            mx <= (objeto.posX + objeto.largo) &&
            my >= (objeto.posY) &&
            my <= (objeto.posY + objeto.alto)
        ) {
            return true;
        }

        return false;
    }

    // Evento cuando se presiona el mouse
    function mousePresionado(evento) {
        var i;

        var indiceMasCercano = -1;

        // Obtener posición precisa del mouse
        var bRect = canvas.getBoundingClientRect();
        mouseX = (evento.clientX - bRect.left) * (canvas.width / bRect.width);
        mouseY = (evento.clientY - bRect.top) * (canvas.height / bRect.height);

        for (i = 0; i < objetos.length; i++) {
            if (objetoSeleccionado(objetos[i], mouseX, mouseY)) {
                arrastrando = true;
                if (i > indiceMasCercano) {
                    // Tendremos en cuenta el punto del cual el mouse está sosteniendo el objeto
                    mouseArrastrandoX = mouseX - objetos[i].posX;
                    mouseArrastrandoY = mouseY - objetos[i].posY;
                    indiceMasCercano = i;
                    indiceObjetoSeleccionado = i;
                }
            }
        }

        if (arrastrando) {
            window.addEventListener('mousemove', mouseMoviendose, false);
        }
        canvas.removeEventListener('mousedown', mousePresionado, false);
        window.addEventListener('mouseup', mouseNoPresionado, false);

        // Evita que el evento de mouse presionado tenga efecto fuera de la ventana principal del navegador
        if (evento.preventDefault) {
            evento.preventDefault();
        } else if (evento.returnValue) {
            evento.returnValue = false;
        }

        return false;
    }

    // Evento cuando se mueve el mouse
    function mouseMoviendose(evento) {
        var posX;
        var posY;
        var largoObjeto = objetos[indiceObjetoSeleccionado].largo;
        var altoObjeto = objetos[indiceObjetoSeleccionado].alto;
        //var minX = largoObjeto;
        var minX = 0;
        var maxX = canvas.width - largoObjeto;
        //var minY = altoObjeto;
        var minY = 0;
        var maxY = canvas.height - altoObjeto;

        // Obtener posición precisa del mouse
        var bRect = canvas.getBoundingClientRect();
        mouseX = (evento.clientX - bRect.left) * (canvas.width / bRect.width);
        mouseY = (evento.clientY - bRect.top) * (canvas.height / bRect.height);

        // Evita que el objeto sea movido fuera del canvas
        posX = mouseX - mouseArrastrandoX;
        posX = (posX < minX) ? minX : ((posX > maxX) ? maxX : posX);
        posY = mouseY - mouseArrastrandoY;
        posY = (posY < minY) ? minY : ((posY > maxY) ? maxY : posY);

        objetos[indiceObjetoSeleccionado].posX = posX;
        objetos[indiceObjetoSeleccionado].posY = posY;

        dibujarCanvas();
    }

    // Evento cuando se deja de presionar el mouse
    function mouseNoPresionado(evento) {
        canvas.addEventListener('mousedown', mousePresionado, false);
        window.removeEventListener('mouseup', mouseNoPresionado, false);
        if (arrastrando) {
            arrastrando = false;
            window.removeEventListener('mousemove', mouseMoviendose, false);
            calificarObjeto(objetos[indiceObjetoSeleccionado]);
            completo();
        }
    }

    function calificarObjeto(objeto) {
        var objPosX1 = objeto.posX;
        var objPosX2 = objPosX1 + objeto.largo;
        var objPosY1 = objeto.posY;
        var objPosY2 = objPosY1 + objeto.alto;

        for (var i = 0; i < contenedores.length; i++) {
            if (
                objPosX1 >= contenedores[i].posX &&
                objPosX2 <= contenedores[i].posX + contenedores[i].largo &&
                objPosY1 >= contenedores[i].posY &&
                objPosY2 <= contenedores[i].posY + contenedores[i].alto
            ) {
                if (objeto.tipo == contenedores[i].tipo) {
                    objeto.valor = 1;
                    // alert("Good");
                    console.log("Good");
                    break;
                } else {
                    objeto.valor = 0;
                    // alert("Bad");
                    break;
                }
            }
        }
    }

    function restablecer(){
        for (var i = 0; i < objetos.length; i++) {
            objetos[i].valor = null;
        }
    }

    function completo() {
        var comple = true;
        var puntos = 0;
        for (var i = 0; i < objetos.length; i++) {
            if (objetos[i].valor == null) {
                comple = false;
                break;
            }
            if (objetos[i].valor == 1) {
                puntos += 1;
            }
        }
        if (comple) {
            if (puntos == 4) {
                swal({
                    title: "¡Correcto! "+puntos+" de 4",
                    text: "Da clic en el botón siguiente para continuar con la siguiente actividad.",
                    // icon: "success",
                    // button: "Continuar",
                });
                printNote(puntos);
                restablecer();
            } else {
                swal({
                    title: "Incorrecto "+puntos+" de 4",
                    // icon: 'error',
                    text: 'Te equivocaste pero puedes volver a intentarlo'
                });
                restablecer();
                iniciarCanvas();
            }
        }
    }
}

function printNote(puntos){
    var nota=parseFloat(puntos*5/4);
    if(nota<1){nota=1;}
    document.getElementById("pointsCanvas").value=nota;
    document.getElementById("pointsGood").value=puntos;
}