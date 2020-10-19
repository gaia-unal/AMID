<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod1/css/partes.css" rel="stylesheet">

</head>

<body>
    <?php $this->load->view('initial/nav');?>



    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <div class="list-group list-group-flush">

                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                        class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>


                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>

                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">
                    Módulo 3</a>

                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">
                    Módulo 4</a>

                <ul class="list-group-item">

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo4/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo4/unidad1/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo4/unidad1/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>


                    <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                    <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                    <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>

                </ul>

                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">
                    Módulo 5</a>
                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>
                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>
                <a href="<?php echo base_url();?>modulo8" class="list-group-item list-group-item-action bg-light">
                    Módulo 8</a>
                <a href="<?php echo base_url();?>modulo9" class="list-group-item list-group-item-action bg-light">
                    Módulo 9</a>
                <a href="<?php echo base_url();?>modulo10" class="list-group-item list-group-item-action bg-light">
                    Módulo 10</a>
                <a href="<?php echo base_url();?>modulo11" class="list-group-item list-group-item-action bg-light">
                    Módulo 11</a>
                <a href="<?php echo base_url();?>modulo12" class="list-group-item list-group-item-action bg-light">
                    Módulo 12</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-lg-none">
                <button class="btn " id="menu-toggle"><i class="fas fa-align-justify"></i></button>

            </nav>


            <!--breadcrumbs-->

            <nav class="bread-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo4">Módulo 4</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo4/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Lectura de medios y textos de información</h1>

                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Códigos técnicos</h4><br>

                        <div class="contenido">

                            <p class="card-text">
                                El lenguaje a traves de simbolos ha sido fundamental para la comunicacion del ser
                                humano.
                                Para ello es necesario conocer los signos basicos y a partir de alli representar
                                imagenes o
                                dibujos. Es también llamado tecnicismo o voces técnicas que se emplean en el lenguaje
                                científico y tecnológico algunos son uso generalizado pero la mayoría son de empleo
                                particular. En cada rama de la ciencia para conocer el significado de las palabras
                                técnicas
                                es necesario consultar los diccionarios especializados en cada rama (Sanchez, 2014).
                            </p>
                            <h4 class="subtitle">Definiciones</h4>
                            <p class="card-text">
                                A continuación se listan algunas definiciones que servirán de apoyo para ampliar el tema
                                de códigos técnicos y simbólicos (Cañaveral & Morales, 2009, pp. 7–9):
                                
                                    <ul>
                                        <div id="parte1" style="display:block;">
                                            <li><strong>Código:</strong> Sistema de señales o de signos, o de símbolos,
                                                que, por
                                                una convención previa está destinada a representar a transmitir la
                                                información
                                                entre la fuente- o emisor- de las señales y el punto de destino- o
                                                receptor. Por
                                                lo que un código puede estar formado por señales de naturaleza
                                                diferente, bien
                                                por sonidos (código lingüístico), bien por signos escritos (código
                                                gráfico), o
                                                por señales gestuales (movimientos).</li>
                                        </div>

                                        <div id="parte2" style="display:none;">
                                            <li><strong>Gesto: </strong>Movimiento de la cara o del cuerpo que comunica
                                                un
                                                significado; a modo de ejemplo asentar la cabeza para expresar acuerdo.
                                                Muchos
                                                enunciados se emiten acompañados de gestos que apoyan o completan sus
                                                significados.
                                                El lenguaje de signos es un sistema de comunicación basado enteramente
                                                en los
                                                gestos. El estudio del papel de los gestos en la comunicación forma
                                                parte del
                                                estudio de la comunicación no verbal.</li>
                                        </div>

                                        <div id="parte3" style="display:none;">
                                            <li><strong>Lenguaje: </strong>Capacidad propia de la especie humana para
                                                comunicarse por medio de un sistema de signos vocales, que pone en juego
                                                una
                                                técnica corporal compleja y supone la existencia de una función
                                                simbólica y de
                                                centros nerviosos genéticamente especializados. Este sistema de signos
                                                vocales
                                                empleados por un grupo social (o comunidad lingüística) determinado
                                                constituye
                                                una lengua particular.</li>
                                        </div>

                                        <div id="parte4" style="display:none;">
                                            <li><strong>Semiótica: </strong>Disciplina que tiene como objeto de estudio
                                                los
                                                signos en el seno de la vida social. Sin embargo, a diferencia de la
                                                semiología,
                                                nacida de la enseñanza de Ferdinand de Saussure se niega considerar como
                                                objeto
                                                fundamental el lenguaje y la sociedad. La semiótica quiere ser una
                                                teoría
                                                general de los modos de significar. Abarca un campo de estudio muy
                                                amplio desde
                                                los sistemas de comunicación más naturales, como serían los lenguajes de
                                                los
                                                animales, hasta los procesos culturales más complejos. </li>
                                        </div>

                                        <div id="parte5" style="display:none;">
                                            <li><strong>Símbolo: </strong>Signo intencionado, como el ícono, pero a
                                                diferencia
                                                de este, sus relaciones con el objeto representado no son de semejanza,
                                                sino que
                                                se basan en la convención. Se trata, pues, de un signo arbitrario. Una
                                                realidad
                                                inmaterial y abstracta puede ser representada por un signo material y
                                                concreto y
                                                exige un interprete que lo asocie a un significado. </li>
                                        </div>

                                        <div id="parte6" style="display:none;">
                                            <li><strong>Paralingüistica:</strong>Este término ampliamente tratado en el
                                                presente
                                                proyecto será concebido como el estudio o uso de fenómenos no verbales,
                                                verbigracia, las expresiones faciales, los movimientos de la cabeza o de
                                                los
                                                ojos, y gestos, que pueden reforzar, enfatizar o añadir, matices de
                                                significado
                                                a lo que se está diciendo, estos fenómenos se conocen como rasgos
                                                paralingüísticos. El uso de los rasgos paralingüísticos en este sentido
                                                se
                                                domina también: Cinésica. </li>
                                        </div>

                                        <div id="parte7" style="display:none;">
                                            <li><strong>Proxémica: </strong>Estudio de la distancia física entre las
                                                personas
                                                cuando hablan entre sí, así como de posturas y de si se da o no contacto
                                                físico
                                                durante la conversación. Estos factores pueden observarse en relación
                                                con el
                                                sexo, la edad, y la procedencia social y cultural de las personas, así
                                                como las
                                                actitudes hacia los otros y los estados mentales. </li>
                                        </div>
                                        <center><br>
                                            <div id="btnAtras">
                                                <a onclick="volver();">
                                                    <img width=70
                                                        src="<?php echo base_url();?>public/assets/img/arrow_l.jpg">
                                                </a>
                                            </div>
                                            <div id="btnAdelante">
                                                <a onclick="avanzar();">
                                                    <img width=70
                                                        src="<?php echo base_url();?>public/assets/img/arrow_r.jpg">
                                                </a>
                                            </div>
                                        </center>
                                    </ul>
                                
                            </p>
                            <h4 class="subtitle">Formas de comunicación</h4>
                            <p class="card-text">Existen diferentes formas de comunicación, tanto virtual como verbal.
                                Las
                                formas de comunicación <strong>verbal</strong> más comunes son: <br>
                            <ul>
                                <li>Oral</li>
                                <li>Escrita</li>
                                <li>Mímica o gestual</li>
                                <li>Gráfica</li>
                                <li>Códigos (en clave)</li>
                            </ul>
                            Las formas más comunes de comunicación <strong>virtual</strong> son aquellos que se dan con
                            el uso del internet y pueden ser:
                            <ul>
                                <li>Correo electrónico</li>
                                <li>Videoconferencia</li>
                                <li>Blogs</li>
                                <li>Chats</li>
                                <li>Redes sociales</li>
                                <li>Juegos en línea</li>
                            </ul>
                            </p>
                            <p class="card-text">
                                <strong>Referencias:</strong>
                            <ul>
                                <li>Sanchez, A. P. M. (2014). Códigos técnicos. Retrieved from
                                    http://informatica2paola.weebly.com/blog/codigos-tecnicos </li>
                                <li>Cañaveral, D. C. H., & Morales, L. A. L. (2009). Lenguaje no
                                    verbal. El silencio de las palabras.</li>
                            </ul>
                            </p>

                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo4/unidad1/temas" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo4/unidad1/actividad2" class="btn btn_navegacion">Siguiente</a>
            </center>
            <?php $this->load->view('initial/paginacion');?>


            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative
                    Commons
                    Reconocimiento Compartir igual 4.0</a></p>
            <br>
            <!-- /#page-content-wrapper -->
        </div>

    </div>


    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
    <script src="<?php echo base_url();?>public/assets/modulos/mod4/js/arrows.js"></script>


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>