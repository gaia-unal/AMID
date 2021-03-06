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
    <link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">
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

                <ul class="list-group-item">

                    <a href="<?php echo base_url();?>modulo11/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo11/unidad2" class="list-group-item">Unidad 2</a>

                    <div class="btn-group dropright">

                        <a href="<?php echo base_url();?>modulo11/unidad3" class="list-group-item">Unidad 3</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo11/unidad3/contenidos"
                                    class="list-group-item">Contenidos</a>

                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo11/unidad4" class="list-group-item">Unidad 4</a>
                </ul>


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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo11">Módulo 11</a></li>
					<li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo11/unidad3">Unidad 3</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 3: La información como un producto (Commodity)</h1>
                    <?php  $this->session->set_userdata('ruta','modulo11/unidad3/actividad1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                       

                        <div class="contenido">
						<div id="parte1" style="display:block;">
                            <h4 class="subtitle">Productos de Información</h4>
                            <p class="card-text">
                                El producto es una de las herramientas más importantes de la mezcla de mercadotecnia
                                porque representa el ofrecimiento de toda empresa u organización (ya sea lucrativa o
                                nolucrativa) a su público objetivo.Con la finalidad de satisfacer sus necesidades y
                                deseos, y de esa manera, lograr también los objetivos de la empresa u organización
                                (utilidades o beneficios). Cualquier producto que en su naturaleza de información, de
                                instrucción o de educación, puede ser considerado como un producto de información. <br>
                                Los productos de información:
                            <ul>
                                <li>Son productos que pueden ser entregados a través de
                                    Internet y que, de manera general, proporcionan información sobre un tema que
                                    despierta suficiente interés como para que la gente pague por ellos. </li>
                                <li>Son Productos Digitales que Generalmente son Comercializados y Entregados vía
                                    Internet.</li>
                                <li>También conocidos como Info-Productos, son creados con el fin de satisfacer la
                                    demanda de millones de personas que diariamente ingresan a Internet en busca de
                                    información que pueda satisfacer sus necesidades más inmediatas.</li>
                            </ul>
                            <i>Qué es un producto de información</i> (2007).
                            </p>
                        </div>
                        <div id="parte2" style="display:none;">
                            <p class="card-text">
                            <h4 class="subtitle">La cultura de consumo</h4>

                            Jose Antonio Zamora [1] dice que: 
                            García Canclini define al consumo cultural como "el conjunto de procesos de apropiación y
                            usos de productos en los que el valor simbólico prevalece sobre los valores de uso y de
                            cambio, o donde al menos estos últimos se configuran subordinados a la dimensión simbólica"
                            (1993:34).
                            Se da por 3 estadios o comportamientos:
                            <ol>
                                <li>El cliente busca el producto. Lo que cuenta es la necesidad y su satisfacción.</li>
                                <li>El producto busca al cliente, domina pues la sobreabundancia y el estímulo del
                                    deseo.</li>
                                <li>En el tercero el consumidor mismo se convierte en producto. Lo que importa es
                                    el sentido y la identidad.</li>
                            </ol>
                          
                            </p>
                        </div>
                        <div id="parte3" style="display:none;">
                            <h4 class="subtitle">Profundización</h4>
                            <p class="card-text">
                                También te recomendamos leer los siguientes artículos para profundizar en el tema. <br>
                                <a target="_blank" rel="noopener noreferrer"
                                    href="https://telos.fundaciontelefonica.com/archivo/numero073/consumo-mediatico-y-cultura-del-consumo/">Consumo
                                    Mediático y cultura del consumo</a> <br>
                                <a target="_blank" rel="noopener noreferrer"
                                    href="http://www.scielo.org.mx/scielo.php?script=sci_arttext&pid=S1870-11912009000200002">Consumo
                                    de bienes culturales: reflexiones sobre un concepto y tres categorías para su
                                    análisis</a> <br>
                                <a target="_blank" rel="noopener noreferrer"
                                    href="http://www.revista-critica.com/la-revista/monografico/analisis/51-el-consumo-como-cultura">El
                                    consumo como cultura</a>
                            </p>
                        </div>
                        <div id="parte4" style="display:none;">
                            <p class="card-text">
                            <h4 class="subtitle">Adicional</h4>
                            <ul>
                                <li>Durante por lo menos dos o tres días, revise los temas que se han cubierto en la
                                    sección de negocios de los principales periódicos o canales de noticias. En una base
                                    diaria, cuente el número de artículos sobre las corporaciones privadas vis-a-vis el
                                    número total de artículos de la sección. Los artículos también pueden ser
                                    clasificados como “buenas” noticias, “malas” noticias o “neutrales” de acuerdo a las
                                    corporaciones</li>
                                <li>Entreviste por lo menos a diez niños de escuela primaria y pregunte por qué
                                    prefieren una marca particular de un producto en especial. Compile las respuestas de
                                    los niños y compare las principales respuestas con las propagandas de los productos
                                    preferidos.</li>
                            </ul>
                            </p>
                        </div>
                        <br>
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
                        </div>
                        <h3 class="subtitle">Bibliografía</h3>
							<p>[1] J. A. Zamora, "Critica," Agosto 2012. [Online]. Available: http://www.revista-critica.com/la-revista/monografico/analisis/51-el-consumo-como-cultura.</p>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo11/unidad3/contenidos" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo11/unidad3/actividad2" class="btn btn_navegacion">Siguiente</a>
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
	<script src="<?php echo base_url();?>public/assets/modulos/mod11/js/arrows.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>