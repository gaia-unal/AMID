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
                                <a href="<?php echo base_url();?>modulo1/unidad3/evaluacion" class="list-group-item">Evaluación</a>
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
                    <li class="breadcrumb-item active" aria-current="page">Actividad 3</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>

                    <h1 class="first_title"><br>Unidad 3: Interactuándo con los medios y otros proveedores de
                        información </h1>
						<?php echo form_open('modulo1/unidad3/evaluacion');$this->session->set_userdata('idAct','m1u3a3'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Reflexión</h4><br>
                        <div class="contenido">

                            <p class="card-text">

							<ul>
								<li>Seleccione un texto mediático e informacional de su elección y aplique las preguntas
									claves enumeradas anteriormente. ¿Qué es lo que puede aprender sobre la producción
									de medios e industrias, los mensajes que se transmiten, así como la audiencia
									seleccionada?</li><br>
									<textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea>
									<br><br>
								Piense sobre una actividad personal o económica que a usted le gustaría emprender y
								responda:<br>
								<br><li>¿Cuáles son mis necesidades de información?</li><br>
								<textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="150" onkeypress="return check(event)"
									required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
								<li>¿Cómo puedo identificar y definir esta necesidad?</li><br>
								<textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="150" onkeypress="return check(event)"
									required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
								<li>¿Acaso la información que yo necesito existe de la manera en que la necesito? ¿De lo
									contrario, que acción puedo tomar?</li><br>
								<textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="150" onkeypress="return check(event)"
									required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
								<li>¿Cómo entender, organizar y valorar la información hallada?</li><br>
								<textarea name="preg5" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
									required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
								<li>¿Cómo puedo presentar esta información en formatos que se puedan utilizar?</li><br>
								<textarea name="preg6" style="width: 100%;" rows="5" minlength="1" maxlength="150" onkeypress="return check(event)"
									required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
								<li>¿Cómo puedo preservar, almacenar y reutilizar, grabar y archivar la información?
								</li><br>
								<textarea name="preg7" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
									required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea><br>
								Liste actividades que usted hace durante el día, desde el momento en que se despierta en
								la mañana hasta cuando se acuesta por la noche. <br><br>
								1. <input type="text" name="m1" id="m1" maxlength="40" required onkeypress="return check(event)"><br><br>
								2. <input type="text" name="m2" id="m2" maxlength="40" required onkeypress="return check(event)"><br><br>
								3. <input type="text" name="m3" id="m3" maxlength="40" required onkeypress="return check(event)"><br><br>
								4. <input type="text" name="m4" id="m4" maxlength="40" required onkeypress="return check(event)"><br><br>
								5. <input type="text" name="m5" id="m5" maxlength="40" required onkeypress="return check(event)"><br><br>
								Con base en la lista, responda:<br><br>
								<li>¿Necesita información para participar en estas actividades?</li>
								<textarea name="preg8" style="width: 100%;" rows="5" minlength="1" maxlength="150" onkeypress="return check(event)"
									required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
								<li>Seleccione una de las actividades listadas, ¿qué información necesita para su
									realización? Por ejemplo, necesita saber a qué temperatura está afuera para poder
									vestirse; necesita saber la situación del tránsito antes de tomar el bus; necesita
									saber acerca de la economía si es que va a solicitar un préstamo.</li>
								<textarea name="preg9" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
									required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
								<li>¿Qué tan importante es la información en su vida diaria? ¿Cuántas decisiones serían
									difíciles de tomar sin tener la información?</li>
								<textarea name="preg10" style="width: 100%;" rows="5" minlength="1" maxlength="150" onkeypress="return check(event)"
									required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
							</ul>

                            </p>

                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo1/unidad3/actividad2" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente" class="btn btn_navegacion" name="submit" type="submit">Siguiente</button>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>