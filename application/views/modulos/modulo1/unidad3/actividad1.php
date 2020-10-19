<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico');?>
</head>

<body>
    <?php $this->load->view('initial/nav');?>



    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <div class="list-group list-group-flush">

                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                        class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>
                <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo1/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo1/unidad3" class="list-group-item list-group-item-action bg-light">Unidad 3</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo1/unidad3/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo1/unidad3/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                    <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
                </ul>


                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>
                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">
                    Módulo 3</a>
                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">
                    Módulo 4</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1">Módulo 1</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1/unidad3">Unidad 3</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>

                    <h1 class="first_title"><br>Unidad 3: Interactuándo con los medios y otros proveedores de
                        información como las bibliotecas, los
                        archivos y el internet</h1>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido">

                        <p class="card-text">
                          

                            <div id="parte1" style="display:block;">
                                Una parte clave de la alfabetización mediática es entender cómo los medios construyen
                                diferentes tipos de historias, cómo le dan forma a la información al presentarla, y qué
                                técnicas utilizan para organizar el material que de otra forma sería caótico y difícil
                                de entender. Es importante tener un entendimiento básico de las diferentes técnicas que
                                se emplean en los medios, los “códigos” que utilizan y cómo interpretarlos. También
                                podría ser relevante considerar quién esta produciendo y arreglando el material y qué
                                tan activos o interactivos son los consumidores de los medios e información – si es que
                                sus propias percepciones tienen impacto sobre la forma en como se presenta la
                                información. En cuanto a AMI, las siguientes áreas claves deben ser examinadas de cerca
                                para poder comprender como los medios y los otros proveedores de información operan,
                                cómo presentan el significado, cómo se puede utilizar, y cómo se puede evaluar la
                                información presentada. Las áreas a continuación también apuntalan los siguientes
                                módulos de este documento del Curriculum AMI: 
                                <br>
                            </div>

                            <div id="parte2" style="display:none;">
                                <h4 class="title_text">Lenguaje en los medios de información</h4>
                                <ul>
                                    <li>¿Cómo los productores de textos mediáticos utilizan diferentes técnicas o
                                        formas de representar diferentes tipos de información para comunicar?</li>
                                    <li>¿Cómo el público en general se identifica y acepta estos usos?</li>
                                    <li>¿Cuáles son los códigos y convenciones o los “ingredientes claves” o gramática
                                        de un medio en particular?</li>
                                    <li>Un comentarista de los medios, Marshall Mcluhan, escribió que “el medio es el
                                        mensaje” implicando que el medio en sí – impreso, transmisión, Internet – afecta
                                        la forma en cómo entendemos al mundo. ¿Cómo la elección de los medios puede
                                        influir en el tipo de información que recibimos? ¿Cómo esto da forma al mensaje
                                        transmitido por los medios?</li>
                                </ul>
                            
                            </div>
                            <div id="parte3" style="display:none;">
                                <h4 class="title_text">Representación en los medios e información</h4>
                                <ul>
                                    <li>Examine las imágenes o representaciones en los medios</li>
                                    <li>Analice las imágenes o textos de los medios</li>
                                    <li>Analice el contexto</li>
                                    <li>¿Quién se beneficia al aceptar las representaciones de los medios y quién
                                        pierde?</li>
                                    <li>¿Cómo estas imágenes influyen en la forma en cómo nos vemos a nosotros mismos y
                                        a otros?</li>
                                    <li>¿Cómo pueden influir en nuestro conocimiento y comprensión del mundo más allá de
                                        nuestra experiencia inmediata?</li>
                                    <li>¿Cómo influyen en nuestra visión de equidad de género, en el empoderamiento de
                                        las mujeres, en las personas que viven con discapacidades, en las personas
                                        indígenas y en los grupos de minorías étnicas?</li>
                                    <li>Examine hasta qué punto la independencia editorial se refleja en los textos
                                        mediático</li>
                                </ul>
                            
                            </div>
                            <div id="parte4" style="display:none;">
                                <h4 class="title_text">Producción/contenido generado por usuarios</h4>
                                <ul>
                                    <li>Aquí es importante la noción de una agencia humana – ¿Quién crea los textos de
                                        medios e información y por qué?</li>
                                    <li>Se conecta a los derechos de comunicación y de expresión de los ciudadanos y del
                                        profesional</li>
                                    <li>Se conecta a la libertad de expresión, a la ciudadanía activa y a la
                                        alfabetización mediática e informacional</li>
                                    <li>Aquí se toman en cuenta los recursos (humanos, financieros, tecnológicos, etc.)
                                        y las regulaciones</li>
                                </ul>
                            </div>
                            <div id="parte5" style="display:none;">
                                <h4 class="title_text">La audiencia como ciudadanos y usuarios/consumidores</h4>
                                <ul>
                                    <li>Audiencias seleccionadas y activas</li>
                                    <li>Ciudadanos activos y usuarios/consumidores negocian sus propios significados
                                        basados en lo que ellos aportan al texto</li>
                                    <li>Las audiencias tienen expectativas en las industrias mediáticas basadas en la
                                        transparencia, la rendición de cuentas e imparcialidad</li>
                                    <li>Los usuarios/consumidores tiene necesidades de información personales,
                                        económicas, sociales y culturales</li>
                                </ul>
                            </div>
                            <div id="parte6" style="display:none;">
                                <h4 class="title_text">Los ciudadanos como usuarios/consumidores de los servicios de los proveedores de
                                    información</h4>
                                <ul>
                                    <li>¿Cómo los proveedores de información seleccionan los recursos de información y
                                        los principales criterios de selección?</li>
                                    <li>¿Cómo los proveedores de información como las bibliotecas, suscriben o compran
                                        los recursos de información como libros, publicaciones periódicas y bases de
                                        datos?</li>
                                    <li>¿Cómo los proveedores de información, incluyendo los proveedores públicos y
                                        privados de Internet, reciben sus fondos?</li>
                                    <li>¿Cómo los proveedores de información generan sus ingresos provenientes de los
                                        servicios de información?</li>
                                </ul>
                            </div>
                            <center>
                                <div id="btnAtras">
                                    <a onclick="volver();">
                                        <img width=70 src="<?php echo base_url();?>public/assets/img/arrow_l.jpg">
                                    </a>
                                </div>
                                <div id="btnAdelante">
                                    <a onclick="avanzar();">
                                        <img width=70 src="<?php echo base_url();?>public/assets/img/arrow_r.jpg">
                                    </a>
                                </div>
                            </center>

                        </p>

                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo1/unidad3/temas" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo1/unidad3/actividad2" class="btn btn_navegacion">Siguiente</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod1/js/arrows.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>

