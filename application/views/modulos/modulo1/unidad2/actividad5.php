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
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                        class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>
                <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo1/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo1/unidad2/actividad1" class="list-group-item">Actividades</a>
                                <a href="<?php echo base_url();?>modulo1/unidad2/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo1/unidad3" class="list-group-item">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo1/unidad4" class="list-group-item">Unidad 4</a>
                </ul>
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">Módulo 2</a>
                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">Módulo 3</a>
                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">Módulo 4</a>
                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">Módulo 5</a>
                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">Módulo 6</a>
                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">Módulo 7</a>
                <a href="<?php echo base_url();?>modulo8" class="list-group-item list-group-item-action bg-light">Módulo 8</a>
                <a href="<?php echo base_url();?>modulo9" class="list-group-item list-group-item-action bg-light">Módulo 9</a>
                <a href="<?php echo base_url();?>modulo10" class="list-group-item list-group-item-action bg-light">Módulo 10</a>
                <a href="<?php echo base_url();?>modulo11" class="list-group-item list-group-item-action bg-light">Módulo 11</a>
                <a href="<?php echo base_url();?>modulo12" class="list-group-item list-group-item-action bg-light">Módulo 12</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-lg-none">
                <button class="btn " id="menu-toggle"><i class="fas fa-align-justify"></i></button>
            </nav>
            <nav class="bread-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1">Módulo 1</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 5</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 2: AMI y la participación cívica</h1>
                </center>
                <?php echo form_open('modulo1/unidad2/evaluacion');$this->session->set_userdata('idAct','m1u2a5'); ?>
                <div class="card mt-4">
                    <div class="card-body"><br>
                    <center> <h4 class="subtitle">Libertad de expresión, independencia editorial, pluralidad y diversidad</h4><center><br>
                        <div class="contenido">
                            <p class="card-text">
                                <p class="par_jus">
                                    <strong>Tema: </strong>AMI y su importancia en la democracia y el buen gobierno. Libertad de
                                    expresión, independencia editorial de los medios, pluralidad y diversidad de los medios y
                                    los otros proveedores de información. <br><br>
                                </p>
                                <p class="par_jus">
                                    <strong>Primera Parte</strong> <br>
                                    Identifique un medio alternativo o independiente en su ámbito local o regional y conteste
                                    las siguientes preguntas:
                                </p>
                                <p class="par_jus"> ¿Qué es lo que hace a este medio independiente?</p>
                                <textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea>
                                <br><p class="par_jus">¿De qué forma permite que las personas participen en el proceso democratico?</p>
                                <textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <br><p class="par_jus">¿Qué hace a este medio diferente de losmedios principales o no independientes?</p>
                                <textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <br>
                                <p class="par_jus"> <br>
                                    Así mismo identifique un medio que usted no considere alternativo o independiente en su
                                    ámbito local o regional y conteste preguntas equivalentes a las anteriores, utilizando los
                                    conceptos tratados en la lectura <em>"Libertad de expresión, independencia editorial,
                                    pluralidad y diversidad"</em> de esta unidad:<br><br>
                                </p>
                                <p class="par_jus">¿Qué considera usted que hace a este medio no independiente</p>
                                <textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <p class="par_jus">¿De qué forma impide que las personas participen en el proceso democrático?</p>
                                <textarea name="preg5" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <p class="par_jus">¿Qué hace a este medio diferente de los medios alternativos o independientes?</p>
                                <textarea name="preg6" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <br><br>
                                <p class="par_jus"><strong>Segunda parte</strong></p>
                                <p class="par_jus">Escriba un pequeño texto argumentando sobre la obligación de los líderes respecto a
                                    enfocar las noticias con una mentalidad abierta y no solo con el deseo de que las
                                    noticias sirvan para reforzar las opiniones existentes.</p>
                                <textarea name="preg7" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <p class="par_jus">¿Esta usted de acuerdo con que un ciudadano bien informado está mejor preparado para
                                    tomar decisiones y para participar en una sociedad democrática y por qué?</p>
                                    <textarea name="preg8" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <br><br>
                                <p class="par_jus">
                                    Comparta sus escritos con otra persona que esté realizando las actividades de este Objeto
                                    Virtual. Pídale que le evalúe su escrito considerando la fuerza con la que argumenta las
                                    ideas centrales de su texto
                                    <strong>Actividades opcionales</strong> <br>
                                    Para una mayor información sobre los tema relacionados con esta unidad puede leer el
                                    articulo: <a href="https://dialnet.unirioja.es/servlet/articulo?codigo=4759634"
                                        target="_blank" rel="noopener noreferrer">El derecho, la sociedad de la información y el
                                    principio de la neutralidad de red: cosndieraciones sobre el mercado y el acceso a la
                                    información</a> de Thiago Lopes Matsushita.
                                </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo1/unidad2/actividad4" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente" class="btn btn_navegacion" name="submit" type="submit">Siguiente</button>  
            </center>
            <?php echo form_close(); ?>
            <?php $this->load->view('initial/paginacion');?>
            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative Commons Reconocimiento Compartir igual 4.0</a></p>
            <br>
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