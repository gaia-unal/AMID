<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>

    <?php $this->load->view('initial/linkGenerico');?>
	<link href="<?php echo base_url();?>public/assets/modulos/mod1/css/estilo.css" rel="stylesheet">
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

                <ul class="list-group-item">

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo10/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo10/unidad1/actividad1"
                                    class="list-group-item">Actividades</a>
                            </ul>
                        </div>
                    </div>
                </ul>


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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo10">Módulo 10</a></li>
					<li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo10/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Audiencia</h1>
					<?php echo form_open('modulo10/unidad1/actividad2');$this->session->set_userdata('idAct','m10u1a1'); $this->session->set_userdata('ruta','modulo10/unidad1/actividad1');?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <div class="contenido">
						<p class="card-text">
							Recolecte y describa ejemplos de cómo las personas utilizan los medios de masas en sus vidas
							diarias. Tome en cuenta el uso de los medios de información, entretenimiento, monitoreo,
							compañía, e identificación. Encuentre algún material en los sitios de Internet sobre
							programas populares de televisión o música. ¿Qué le dicen estas fuentes sobre cómo las
							audiencias usan y disfrutan estos medios? ¿De qué manera estos usos podrían ser diferentes a
							lo que los productores esperaban? <br> Imagínese cómo una familia con un pasado totalmente
							diferente o un período de tiempo distinto podría interpretar algunos de los programas
							actuales de televisión o anuncios. ¿Qué dirían ellos sobre las audiencias de los medios hoy
							en día? [1]<br>
							<br><textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br><br>

							Usando el Internet, investigue la respuesta de las audiencias a los programas populares de
							televisión en una variedad de países. ¿Cómo las diferentes audiencias de estos programas,
							“leen” o interpretan a los personajes principales?<br>
						<br>	<textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br><br>

							Analice los mensajes y los valores que se transmiten a través de un texto mediático popular
							como un programa de televisión. ¿Cómo los mensajes podrían cambiar si incluyeran personas de
							diferentes grupos sociales (por Ej. edad, origen étnico), o si los personajes femeninos y
							masculinos cambiaran de papeles? ¿Cómo podría impactar esto en la audiencia?<br>
                            <br>	<textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea></textarea> <br><br>

							Utilizando Internet, investigue acerca de las actuales estrategias que los anunciantes
							utilizan para entender y seleccionar las audiencias, temas como psicografías o demografía
							social. Describa a continuación el enfoque, identifique las categorías, y analice los
							supuestos que se han hecho sobre las audiencias en la actualidad <br>
                            <br>	<textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea></textarea> <br><br>

							Haga dos lecturas opuestas de un texto mediático popular, como una película, un programa de
							televisión o un artículo de periódico. Determine las características de la audiencia o
							antecedentes que podrían contribuir a cada lectura crítica. ¿Cómo esto explica la variedad
							de respuestas que los textos mediáticos populares pueden recibir de las audiencias? <br>
                            <br>	<textarea name="preg5" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea></textarea> <br><br>

							Escanee una serie de periódicos o utilice Internet para evaluar los títulos de las películas
							actuales. Basado en los títulos y en los anuncios para estas películas, ¿qué es lo que usted
							espera ver en cada película? ¿Cuál cree usted que es la audiencia seleccionada para cada una
							de estas películas?<br>
							<br><textarea name="preg6" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea></textarea> <br><br>

							Actualmente, en los cines, la audiencia mira anuncios antes de que inicie la película.
							¿Tomando las películas del ejercicio anterior, qué tipo de anuncios antes de la película
							esperaría usted que pasen a las audiencias?<br>
                            <br>	<textarea name="preg7" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea></textarea> <br><br>

							Examine el material promocional que está disponible para las universidades en su región. Si
							este material se les enseña a los estudiantes, ¿cómo se ven? ¿Qué están haciendo? ¿Qué
							imagen de la escuela/colegio se presenta a través de este material? ¿Qué impresión dan de la
							escuela/colegio que representan? ¿Son estudiantes verdaderos o sólo modelos? ¿Si los
							estudiantes no aparecen, qué imágenes se han escogido y qué dicen acerca de la institución?
							Basado en su análisis del material, ¿cuál es la audiencia seleccionada? ¿Cuál es el mensaje
							que se transmite?<br>
							<br><textarea name="preg8" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea></textarea> <br><br>

							Existen muchas marcas independientes, películas, programas de televisión y revistas
							alternativas fuera de las grandes corporaciones mediáticas. Examine algunos de estos
							productos mediáticos para descubrir qué valor – social, artístico o comercial – tienen para
							ofrecer a las audiencias. ¿Cómo estos productores o creadores pagan y mercadean sus
							productos?<br>
                            <br>	<textarea name="preg9" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea></textarea> <br><br>
							Investigue sobre el trabajo realizado por Blumer y Kats (1974), quien dijo que las
							audiencias podrían escoger y utilizar un texto mediático por una o varias de las siguientes
							razones:
							<ul>
								<li>Diversión: un escape de la vida diaria</li>
								<li>Relaciones personales: el verse a usted conectado con un personaje de televisión
									o de la “familia”</li>
								<li>Identidad personal: ser capaz de identificarse con y aprender de un comportamiento,
									actitud o valores que se reflejan en los textos mediáticos</li>
								<li>Supervisión: utilizar los medios y los textos de información para aprender acerca de
									lo que sucede en nuestro mundo de alrededor, y para obtener información que puede
									ser útil para nuestra vida diaria (por Ej. Predicciones climáticas, noticias,
									resultados de elecciones, etc.) </li>
							</ul>
							Identifique ejemplos específicos en su vida o en las vidas de los estudiantes que ilustren
							estas razones para el uso de los textos mediáticos y de información
							<textarea name="preg10" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea></textarea>
						</p>
                        </div>
                        <br>
                                <h4 class="subtitle">Bibliografía:</h4>
                                <p>[1] UNAOC, UNESCO, "Módulo 10: Audiencia", en <em>Media Information Literacy for
                                        Teachers</em>, 2020.
                                    <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-10-audiencia/?lang=es"
                                        target="_blank" rel="noopener noreferrer">
                                        http://unesco.mil-for-teachers.unaoc.org/modules/modulo-10/?lang=es</a>
                                </p>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo10/unidad1/contenidos" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente" class="btn btn_navegacion" name="submit" type="submit">Siguiente</button>
            </center>
			<?php echo form_close(); ?>
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
	<script src="<?php echo base_url();?>public/assets/modulos/mod"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>