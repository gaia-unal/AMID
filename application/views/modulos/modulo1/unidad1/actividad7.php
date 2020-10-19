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
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item ">
                                <a href="<?php echo base_url();?>modulo1/unidad1/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo1/unidad1/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>


                    <a href="#" onclick="inactivo(1)"
                        class="list-group-item list-group-item-action bg-light inactive">Unidad 2</a>
                    <a href="#" onclick="inactivo(1)"
                        class="list-group-item list-group-item-action bg-light inactive">Unidad 3</a>
                    <a href="#" onclick="inactivo(1)"
                        class="list-group-item list-group-item-action bg-light inactive">Unidad 4</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 7</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Comprender la alfabetización mediática e informacional: Una
                        orientación</h1>
                </center>
                <br>

                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Información sobre los proveedores</h4><br>
                        <div class="contenido">
                            <p class="card-text">

                                El uso adecuado de la información que está disponible a través de los medios y varios de
                                los proveedores de información depende de la habilidad de las personas para entender sus
                                necesidades de información, y para localizar, recuperar y evaluar la calidad de la
                                información a la cual puedan tener acceso. Hoy en día, hay una amplia variedad y diversa
                                selección de material de información, contenido y recursos disponibles, especialmente en
                                Internet, que varía mucho en exactitud, confiabilidad y valor. Adicionalmente, esta
                                información existe en una variedad de formas (por Ej. como texto, imagen o estadística,
                                electrónicamente o en impreso) que puede estar disponible a través de depositarios en
                                línea y portales, bibliotecas virtuales o reales y colecciones de documentales, bases de
                                datos, archivos, museos, etc. Sin embargo, el factor más importante es que la calidad de
                                esta información puede variar desde “muy buena” a “muy mala”. Antes de evaluar las
                                fuentes de información, es importante pensar para qué se usa la información. Esto
                                ayudará a identificar fuentes confiables de información. Las preguntas claves podrían
                                ser: <br>

                            <ul>
                                <li> ¿Qué fuente o qué tipo de fuente sería la más fiable para que provea información en
                                    este caso en particular?</li>
                                <li>¿Qué fuentes pueden ser más justas, objetivas, que no tengan
                                    motivos ocultos, que demuestren control de calidad?</li>
                            </ul>
                            
                            Podemos pensar en la información como algo que tienen los medios y otros proveedores de
                            información como bibliotecas, museos, archivos e Internet. Estos proveedores de
                            información tienen un número de roles, incluyendo: <br><br>
                            <ul>
                                <li>Informar</li>
                                <li>Educar</li>
                                <li>Facilitar los procesos de enseñanza y aprendizaje</li>
                                <li>Proveer acceso a todos los tipos de información (a menudo libre de costos,
                                    plural, confiable y sin restricciones)</li>
                                <li>Servir como una puerta hacia la información</li>
                                <li>Promover los valores universales y los derechos civiles tales como libertad de
                                    expresión e información</li>
                                <li>Servir como memoria colectiva de la sociedad</li>
                                <li>Recolectar información</li>
                                <li>Conservar el patrimonio cultural</li>
                                <li>Entretener</li>
                            </ul>

                            </p>

                        </div>
                    </div>
                </div>

            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo1/unidad1/actividad6" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo1/unidad1/actividad8" class="btn btn_navegacion">Siguiente</a>
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


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>


