<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">
<?php $this->load->view('initial/nav');?>
<title>AMID</title>



</head>

<body>
    <?php $this->load->view('initial/linkGenerico');?>


    <!-- Page Content -->

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <div class="list-group list-group-flush">

                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light">
                    Módulo 1</a>

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

                <div class="btn-group dropright">
                    
                <a href="<?php echo base_url();?>modulo12" class="list-group-item list-group-item-action bg-light">
                    Módulo 12</a>


                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">

                    </button>
                    <div class="dropdown-menu">
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo12/unidad1/actividad1" class="list-group-item">Unidad 1</a>
                            

                        </ul>
                    </div>
                </div>


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
                    <li class="breadcrumb-item active" aria-current="page">Módulo 12</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Módulo 12: Libertad de expresión</h1>
                </center>
                <div class="card mt-4 contenido">
                    <div class="card-body"><br>
                    <p class="card-text">
                            Sabemos que la libertad de expresión es un elemento crítico para la democracia, el
                            desarrollo y el diálogo – sin ella ninguna de estas palabras podría funcionar o prosperar.
                            La libertad de expresión es un derecho universal que todo el mundo debe gozar. Todos tienen
                            el derecho a la libertad de opinión y de expresión; este derecho incluye el derecho a
                            mantener una opinión sin interferencias y a buscar, recibir y difundir información e ideas a
                            través de cualquier medio de difusión sin limitación de fronteras, tal como lo establece la
                            Declaración Universal de los Derechos Humanos. <br>
                            La UNESCO es la Agencia de las Naciones Unidas con el mandato especializado de promover la
                            libertad de expresión y sus corolarios, la libertad de prensa y la libertad de información.
                            Durante décadas la UNESCO ha trabajado para promover estos derechos humanos fundamentales
                            alrededor del mundo, entre profesionales de los medios de comunicación, formuladores de
                            políticas, políticos, gobiernos, organizaciones no gubernamentales, el mundo académico y
                            otros. La Caja de Herramientas para la Libertad de Expresión: una Guía acerca de los
                            Conceptos y Temas, es una continuación de este permanente esfuerzo. <br>
                            Todos deberían disponer de las herramientas y los mecanismos necesarios para permitir la
                            libre circulación de la información. Se ha escrito mucho acerca de la libertad de expresión,
                            de hecho es uno de los conceptos o temas más discutidos en nuestros tiempos. Sin embargo,
                            son pocas las publicaciones elaboradas que tengan a los jóvenes como lectores meta, en
                            especial las y los adolescentes y jóvenes a nivel de estudiantes de secundaria o
                            pre-universitarios. Se debe empoderar y alfabetizar a las y los jóvenes acerca de los temas
                            y conceptos de libertad de expresión para que puedan convertirse en ciudadanos con
                            discernimiento en una democracia.
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>



            </div>

            <center>
                <a href="<?php echo base_url();?>modulo11/unidad4/actividad2" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo12/unidad1/contenidos" class="btn btn_navegacion">Siguiente</a>
            </center>
            <br>

            <?php $this->load->view('initial/paginacion');?>

            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative
                    Commons
                    Reconocimiento Compartir igual 4.0</a></p>

            <br>

        </div>
        <!-- /#page-content-wrapper -->

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