 // Iniciar el Canvas cuando se haya cargado la página
 window.addEventListener('load', function () {
    iniciarCanvas();
});

function iniciarCanvas() {
    var canvas = document.getElementById('lienzo1');
    var ctx = canvas.getContext('2d');

    var fondo;
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

        fondo = {
            nombre: 'FONDO',
            src: '../../public/assets/modulos/mod8/img/fondo.png',
            largo: 800,
            alto: 400,
            img: null,
            posX: 0,
            posY: 0,
        };

        contenedores = [
            {
                nombre: 'contenedor',
                src: '../../public/assets/modulos/mod8/img/contenedor.png',
                largo: 225,
                alto: 97,
                img: null,
                posX: 41,
                posY: 80,
                tipo: 'A'
            },
            {
                nombre: 'contenedor',
                src: '../../public/assets/modulos/mod8/img/contenedor.png',
                largo: 225,
                alto: 97,
                img: null,
                posX: 287,
                posY: 80,
                tipo: 'B'
            },
            {
                nombre: 'contenedor',
                src: '../../public/assets/modulos/mod8/img/contenedor.png',
                largo: 225,
                alto: 97,
                img: null,
                posX: 523,
                posY: 80,
                tipo: 'C'
            },
        ];

        objetos = [
            {
                nombre: 'uno',
                src: '../../public/assets/modulos/mod8/img/img1.jpg',
                largo: 215,
                alto: 85,
                img: null,
                posX: 25,
                posY: 220,
                tipo: 'B',
                valor: null
            }, 
            {
                nombre: 'dos',
                src: '../../public/assets/modulos/mod8/img/img2.jpg',
                largo: 215,
                alto: 85,
                img: null,
                posX: 292,
                posY: 200,
                tipo: 'C',
                valor: null
            },
            {
                nombre: 'tres',
                src: '../../public/assets/modulos/mod8/img/img3.jpg',
                largo: 215,
                alto: 85,
                img: null,
                posX: 540,
                posY: 210,
                tipo: 'A',
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
                                var imgF = new Image(fondo.largo, fondo.alto);
                                imgF.src = fondo.src;

                                imgF.onload = function(){
                                    fondo.img = imgF;
                                    callback();
                                }
                            }
                        }
                    });
                }
            }
        });
    }

    // Prepara el canvas para dibujar las imagenes
    function dibujarCanvas() {
        ctx.drawImage(fondo.img, fondo.posX, fondo.posY, fondo.largo, fondo.alto);
        
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
            if (puntos == 3) {
                swal({
                    title: "¡Correcto!",
                    type: "success"
                });
            } else {
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Te equivocaste en algunas pero puedes volverlo a internar'
                });
                for (var i = 0; i < objetos.length; i++) {
                    objetos[i].valor = null;
                }
                iniciar();
                
            }
            punt(puntos);
        }
    }
    function punt(a){
        if(a == 3)
            a = 5;
        else if(a >= 2)
            a = 3;
        else if( a >= 1)
            a = 1;
        else 
            a = 0;
        var inp = document.getElementById('preg');
        inp.value = a;
    }
}