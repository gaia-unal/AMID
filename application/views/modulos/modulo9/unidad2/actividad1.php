<<!DOCTYPE html>
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

                <ul class="list-group-item">

				<a href="<?php echo base_url();?>modulo9/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <div class="btn-group dropright">
                        
							<a href="<?php echo base_url();?>modulo9/unidad2" class="list-group-item">Unidad 2</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo9/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                   
                    <a href="#" class="list-group-item">Unidad 3</a>
                </ul>

               
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo9">Módulo 9</a></li>
					<li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo9/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Teorías de aprendizaje y AMI</h1>

                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Teorías de aprendizaje</h4><br>

                        <div class="contenido">

						<p class="card-text">
							<div id="parte1" style="display:block;">
								<h4 class="subtEv">Meta-cognición</h4>
								Se puede definir la meta cognición como “la cognición sobre la cognición” o “el
								conocimiento
								sobre el conocimiento”. Esto puede tomar muchas formas e incluye el conocimiento sobre
								cuándo y cómo utilizar una estrategia en particular para aprender o para resolver
								problemas.
								En la práctica, estas capacidades se utilizan para regular nuestro propio conocimiento,
								para
								maximizar nuestro propio potencial para pensar y aprender, y para evaluar las reglas
								adecuadas de ética/moral (adaptado de la Wikipedia).
							</div>
							<div id="parte2" style="display:none;">
								<h4 class="subtEv">Estrategias de meta-cognición</h4>
								Son una serie de pasos y procedimientos que nos permiten acceder, procesar e
								interiorizar
								conocimientos, las estrategias metacognitivas son acciones concretas que realizamos
								conscientemente para mejorar o facilitar el aprendizaje.<br>
								Algunas veces, por ejemplo, clasificamos la información, otras veces tomamos apuntes de
								lo
								más importante, en otras ocasiones hacemos esquemas o tratamos de asociar los nuevos
								conocimientos con algo que ya sabemos para que así no se nos olvide.
							</div>
							<div id="parte3" style="display:none;">
								<h4 class="subtEv">¿Qué papel tiene la meta-cognición en la transferencia de aprendizaje? </h4>
								Montse Tesouro [1] dice que: «El objetivo de enseñar las habilidades del pensamiento no se tendría que considerar
								como
								algo opuesto a enseñar el contenido convencional, sino como un complemento de éste. Las
								personas razonan con frecuencia de una manera inferior a la óptima; por lo tanto, son
								importantes los esfuerzos para desarrollar métodos que permitan mejorar las habilidades
								de
								pensamiento. El auténtico protagonismo de la escuela tiene que dirigirse a ayudar a
								pensar a
								la persona y a enseñar a aprender. Es decir, el docente tiene que enseñar estrategias de
								aprendizaje y debe promover el esfuerzo del estudiante para propiciar la construcción de
								esquemas y facilitar el aprendizaje permanente. Finalmente, cabe destacar que una de las
								áreas prioritarias actuales y futuras en investigación es la de las intervenciones en
								estrategias metacognitivas, su impacto en el desarrollo cognitivo de los alumnos y la
								transferencia y la perdurabilidad de sus efectos en el aprendizaje»<br> 
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
						</p>
                        <h4 class="subtitle">Bibliografía:</h4>
                            <p>[1] M. Tesouro, "La metacongnicion en la escuela: la importancia de enseñar a pensar," Universitat de Girona, departament de pedagogia, Girona.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo9/unidad2/temas" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo9/unidad2/actividad2" class="btn btn_navegacion">Siguiente</a>
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
	<script src="<?php echo base_url();?>public/assets/modulos/mod9/js/arrows.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>