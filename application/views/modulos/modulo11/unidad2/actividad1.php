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

                    <div class="btn-group dropright">
                        

							<a href="<?php echo base_url();?>modulo11/unidad2"  class="list-group-item">Unidad 2</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo11/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
                               
                            </ul>
                        </div>
                    </div>

                    
                    <a href="<?php echo base_url();?>modulo11/unidad3" class="list-group-item">Unidad 3</a>
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
					<li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo11/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Dimensiones Socio-Culturales y Políticas de los Medios Globalizados</h1>
					<?php  $this->session->set_userdata('ruta','modulo11/unidad2/actividad1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido">
						<div id="parte1" style="display:block;">
							<p class="card-text">
							<h4 class="subtitle">Cultura</h4>
							La cultura según UNESCO [1] « ...la cultura puede considerarse actualmente como el
							conjunto de los rasgos distintivos, espirituales y materiales, intelectuales y afectivos
							que caracterizan a una sociedad o un grupo social. Ella engloba, además de las artes y
							las letras, los modos de vida, los derechos fundamentales al ser humano, los sistemas de
							valores, las tradiciones y las creencias y que la cultura da al hombre la capacidad de
							reflexionar sobre sí mismo. Es ella la que hace de nosotros seres específicamente
							humanos, racionales, críticos y éticamente comprometidos. A través de ella discernimos
							los valores y efectuamos opciones. A través de ella el hombre se expresa, toma
							conciencia de sí mismo, se reconoce como un proyecto inacabado, pone en cuestión sus
							propias realizaciones, busca incansablemente nuevas significaciones, y crea obras que lo
							trascienden.» <br>
							(Conferencia Mundial sobre las Políticas Culturales; México, 1982) Puede ampliarse en
							www.unesco.org
							</p>
						</div>
						<div id="parte2" style="display:none;">
							<p class="card-text">
							<h4 class="subtitle">Influencia</h4>
							<br><p>Norton Robledo dice que [2]</p>
							Si dejamos de lado algunas definiciones y conceptos (...) sobre la cultura, podemos
							decir que no hay nada en la actividad humana que no tenga una connotación cultural,
							incluso la producción de bienes destinados a la satisfacción de las necesidades
							materiales o espirituales de la gente. En la difusión de la cultura, los medios de
							comunicación: emisoras de radio y televisión, Internet, prensa alternativa, cine, medios
							comunitarios y otras, prensa escrita, eventos culturales y deportivos, etc., tienen un
							rol muy importante. Entre la cultura y los medios de comunicación hay una relación
							dialéctica. Forman parte del aparato idelógico del estado y ambas se encargan de
							presentar a las gentes la ”realidad” y valores concordantes con la ideología de la clase
							dominante. <br>
							Robledo, Norton (2007). <i>Los medios de comunicación y la cultura.</i> Recuperado de:
							https://critica.cl/ciencias-sociales/los-medios-de-comunicacion-y-la-cultura
							</p>
						</div>
						<div id="parte3" style="display:none;">
							<p class="card-text">
							<h4 class="subtitle">Retroalimentación</h4>
							Le recomendamos realizar las siguientes actividades para que pueda reforzar los conceptos
							aprendidos.
							<ul>
								<li>Vea un documental o una película que se enfoque en un grupo particular religioso,
									cultural o étnico. Identifique las imágenes o las palabras que se usan en estos
									diálogos y que crean o refuerzan las imágenes estereotipadas de grupo. Identifique
									los elementos que reflejan sesgos o prejuicios</li>
								<li>
									Realice una encuesta aleatoria entre los estudiantes de escuela primaria acerca de
									sus héroes contemporáneos o ídolos, y las razones para haberlos elegido. Después de
									cotejar los resultados de la encuesta, analice los resultados en términos de: <br>
									<ol>
										<li>Cuántos son extranjeros y cuántos son locales</li>
										<li>Las posibles razones para haberlos elegido (por Ej. exposición de los
											estudiantes a estos héroes o ídolos a través de los medios)</li>
										<li>Valores ejemplificados por estos héroes o ídolos seleccionados de los varios
											medios</li>
									</ol>
								</li>
								<li>Lea acerca de varios temas de una publicación o vea programas mediáticos destinados
									a los trabajadores migrantes en la comunidad. Identifique los tópicos comunes o
									temas que se discuten en la publicación. Determine si los temas relacionados con el
									país adoptado o el país anfitrión y su país de origen están representados
									adecuadamente.</li>
							</ul>
							</p>
						</div>
						<div id="parte4" style="display:none;">
							<p class="card-text">
							<h4 class="subtitle">Estudio de Caso</h4>
							Visite un sito en la red, u otro sitio en línea como un blog, una red social o un video de
							una organización internacional de defensoría (por Ej. WWF, Plan Internacional, etc.) que
							haya subido a la red un asunto dedicado a los temas trans-fronterizos, como el medio
							ambiente o el desarrollo sostenible, los derechos humanos, etc. Examine cómo se crea el
							diálogo y la construcción de consenso entre los ciudadanos del mundo y cómo se promueve a
							través de características interactivas. [3] <br>
							<br><h4 class="subtitle">Recomendación</h4>
							Le recomendamos entrevistar a miembros de una comunidad de migrantes acerca de los
							siguientes temas:
							<ol>
								<li>Los medios de masas que utilizan para mantenerse al corriente de las noticias y de
									los eventos de actualidad en su país de origen</li>
								<li>Percepciones de cómo los medios internacionales informan sobre su país de origen y
									los temas socio-políticos y eventos en términos de exactitud, coherencia,
									integridad, etc.</li>
								<li>Impacto psico-social para mantener el acceso a las noticias e información del país
									de origen</li>
							</ol>
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
							<p>[1] (Conferencia Mundial sobre las Políticas Culturales; México, 1982) Puede ampliarse en
							www.unesco.org</p>
							<p>[2] Robledo, Norton (2007). <i>Los medios de comunicación y la cultura.</i> Recuperado de:
							https://critica.cl/ciencias-sociales/los-medios-de-comunicacion-y-la-cultura</p>
							<p>[3] UNAOC,UNESCO,"Unidad 11: MEDIOS, TECNOLOGÍA Y EL MUNDO GLOBAL (GLOBAL VILLAGE), en
                            <i>"Media Information Literacy for Teachers </i>, 2020"
                            http://unesco.mil-for-teachers.unaoc.org/modules/module-11/?lang=es
                        </p>

                    </div>
                </div>
            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo11/unidad2/contenidos" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo11/unidad2/actividad2" class="btn btn_navegacion">Siguiente</a>
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