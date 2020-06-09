// Iniciar el Canvas cuando se haya cargado la página
window.addEventListener('load', function () {
    iniciarCanvas();
});

function iniciarCanvas() {

    var canvas = document.getElementById('lienzo');
    var ctx = canvas.getContext('2d');

    var contenedores;
    var objetos;
    var zonas;

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
                src: 'assets/img/fondo.png',
                largo: 800,
                alto: 445,
                img: null,
                posX: 0,
                posY: 0
            }
        ];

        var contPosX = contenedores[0].posX;
        var contPosY = contenedores[0].posY;
        var contLargo = contenedores[0].largo / 2;
        var contAlto = contenedores[0].alto;

        zonas = [
            {
                nombre: 'CUADRANTE 1',
                posX1: contPosX,
                posX2: contPosX + (1 * contLargo),
                posY1: contPosY,
                posY2: contPosY + contAlto,
                tipo: 'S'
            },
            {
                nombre: 'CUADRANTE 2',
                posX1: contPosX + (1 * contLargo),
                posX2: contPosX + (2 * contLargo),
                posY1: contPosY,
                posY2: contPosY + contAlto,
                tipo: 'N'
            }
        ];

        objetos = [
            {
                nombre: 'frase1',
                src: 'assets/img/5.png',
                largo: 256,
                alto: 50,
                img: null,
                posX: 0,
                posY: 450,
                tipo: 'S',
                valor: null
            },
            {
                nombre: 'frase2',
                src: 'assets/img/1n.png',
                largo: 256,
                alto: 50,
                img: null,
                posX: 260,
                posY: 450,
                tipo: 'N',
                valor: null
            },
            {
                nombre: 'frase3',
                src: 'assets/img/2n.png',
                largo: 256,
                alto: 50,
                img: null,
                posX: 0,
                posY: 505,
                tipo: 'N',
                valor: null
            },
            {
                nombre: 'frase4',
                src: 'assets/img/4n.png',
                largo: 200,
                alto: 28,
                img: null,
                posX: 523,
                posY: 480,
                tipo: 'N',
                valor: null
            },
            {
                nombre: 'frase5',
                src: 'assets/img/5.png',
                largo: 310,
                alto: 52,
                img: null,
                posX: 0,
                posY: 560,
                tipo: 'S',
                valor: null
            },
            {
                nombre: 'frase6',
                src: 'assets/img/6n.png',
                largo: 287,
                alto: 52,
                img: null,
                posX: 315,
                posY: 560,
                tipo: 'N',
                valor: null
            },
            {
                nombre: 'frase7',
                src: 'assets/img/7.png',
                largo: 289,
                alto: 51,
                img: null,
                posX: 0,
                posY: 615,
                tipo: 'S',
                valor: null
            },
            {
                nombre: 'frase8',
                src: 'assets/img/7n.png',
                largo: 290,
                alto: 52,
                img: null,
                posX: 292,
                posY: 615,
                tipo: 'N',
                valor: null
            },
            {
                nombre: 'frase9',
                src: 'assets/img/8.png',
                largo: 289,
                alto: 28,
                img: null,
                posX: 470,
                posY: 510,
                tipo: 'S',
                valor: null
            },
            {
                nombre: 'frase10',
                src: 'assets/img/9n.png',
                largo: 290,
                alto: 53,
                img: null,
                posX: 292,
                posY: 670,
                tipo: 'N',
                valor: null
            },
            {
                nombre: 'frase11',
                src: 'assets/img/10.png',
                largo: 313,
                alto: 78,
                img: null,
                posX: 0,
                posY: 728,
                tipo: 'S',
                valor: null
            },
            {
                nombre: 'frase12',
                src: 'assets/img/11n.png',
                largo: 250,
                alto: 52,
                img: null,
                posX: 0,
                posY: 670,
                tipo: 'N',
                valor: null
            },
            {
                nombre: 'frase13',
                src: 'assets/img/12.png',
                largo: 263,
                alto: 68,
                img: null,
                posX: 0,
                posY: 810,
                tipo: 'S',
                valor: null
            },
            {
                nombre: 'frase14',
                src: 'assets/img/13n.png',
                largo: 211,
                alto: 31,
                img: null,
                posX: 520,
                posY: 448,
                tipo: 'N',
                valor: null
            },
            {
                nombre: 'frase15',
                src: 'assets/img/14.png',
                largo: 205,
                alto: 52,
                img: null,
                posX: 260,
                posY: 505,
                tipo: 'S',
                valor: null
            },
            {
                nombre: 'frase16',
                src: 'assets/img/15n.png',
                largo: 270,
                alto: 78,
                img: null,
                posX: 317,
                posY: 728,
                tipo: 'N',
                valor: null
            },
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

        for (var i = 0; i < zonas.length; i++) {
            if (
                objPosX1 >= zonas[i].posX1 &&
                objPosX2 <= zonas[i].posX2 &&
                objPosY1 >= zonas[i].posY1 &&
                objPosY2 <= zonas[i].posY2
            ) {
                if (objeto.tipo == zonas[i].tipo) {
                    objeto.valor = 1;
                    break;
                } else {
                    objeto.valor = 0;
                    break;
                }
            }
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
            if (puntos >= 8) {
                swal({
                    title: "¡Correcto!",
                    icon: "success",
                    text: "Da clic en el botón siguiente para continuar con la siguiente actividad.",
                });
            } else {
                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Te equivocaste pero puedes volver a intentarlo'
                });
                iniciarCanvas();
            }
        }
    }
}