// Iniciar el Canvas cuando se haya cargado la página
window.addEventListener('load', function () {
    iniciarCanvas();
});

function iniciarCanvas() {
    var puntajes = [];

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
                nombre: 'A',
                src: 'assets/img/contenedor.png',
                largo: 281,
                alto: 48,
                img: null,
                posX: 0,
                posY: 15,
                tipo: 'A'
            },
            {
                nombre: 'B',
                src: 'assets/img/contenedor.png',
                largo: 281,
                alto: 48,
                img: null,
                posX: 285,
                posY: 15,
                tipo: 'B'
            },
            {
                nombre: 'C',
                src: 'assets/img/contenedor.png',
                largo: 281,
                alto: 48,
                img: null,
                posX: 0,
                posY: 65,
                tipo: 'C'
            },
            {
                nombre: 'D',
                src: 'assets/img/contenedor.png',
                largo: 281,
                alto: 48,
                img: null,
                posX: 285,
                posY: 65,
                tipo: 'D'
            },
            {
                nombre: 'E',
                src: 'assets/img/contenedor.png',
                largo: 281,
                alto: 48,
                img: null,
                posX: 0,
                posY: 115,
                tipo: 'E'
            },
        ];

        objetos = [
            {
                nombre: 'parte3',
                src: 'assets/img/parte3.png',
                largo: 177,
                alto: 25,
                img: null,
                posX: 0,
                posY: 170,
                tipo: 'C',
                valor: null
            },
            {
                nombre: 'parte5',
                src: 'assets/img/parte5.png',
                largo: 258,
                alto: 29,
                img: null,
                posX: 180,
                posY: 167,
                tipo: 'E',
                valor: null
            },
            {
                nombre: 'parte1',
                src: 'assets/img/parte1.png',
                largo: 175,
                alto: 23,
                img: null,
                posX: 442,
                posY: 170,
                tipo: 'A',
                valor: null
            },
            {
                nombre: 'parte4',
                src: 'assets/img/parte4.png',
                largo: 177,
                alto: 27,
                img: null,
                posX: 0,
                posY: 200,
                tipo: 'D',
                valor: null
            },
            {
                nombre: 'parte2',
                src: 'assets/img/parte2.png',
                largo: 173,
                alto: 27,
                img: null,
                posX: 180,
                posY: 200,
                tipo: 'B',
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
            verificarPuntajes();
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
                    break;
                } else {
                    objeto.valor = 0;
                    break;
                }
            }
        }
    }

    function verificarPuntajes() {
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
            if (puntos == 5) {
                swal({
                    title: "¡Correcto!",
                    type: "success",
                    text: "Armaste correctamente la frase, ya puedes continuar con el siguiente módulo",
                    button: "Continuar",
                });
            } else {
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Te equivocaste en algunas. La frase correcta es Analizar, localizar, organizar, evaluar, ' +
                    'crear y utilizar la información utilizando la tecnología digital'
                });
            }
        }
    }
}