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
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>
                <ul class="list-group-item">
                    <div class="btn-group dropright">
                    <a href="<?php echo base_url();?>modulo2/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo2/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo2/unidad1/evaluacion"  class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo2/unidad2" class="list-group-item">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo2/unidad3" class="list-group-item">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo2/unidad4" class="list-group-item">Unidad 4</a>
                </ul>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo2">Módulo 2</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo2/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 1: Periodismo y sociedad</h1>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Investigue</h4><br>
                        <?php 
                            echo form_open('modulo2/unidad1/evaluacion');
                            $this->session->set_userdata('idAct','m2u1a1'); 
                            $this->session->set_userdata('ruta','modulo2/unidad1/actividad1');
                        ?>
                        <div class="contenido">
                            <p class="card-text">
                            En [1] se encuentra que:
                                <center>
                                    <blockquote>
                                        <em>
                                            “La civilización ha producido una idea más poderosa que otra – la noción de que
                                            las personas se pueden gobernar a sí mismas. Y ha creado una teoría ampliamente
                                            articulada de la información para mantener esta idea, llamada periodismo. Las
                                            dos surgen y caen juntas.”
                                        </em> Bill Kovach and Tom Rosenstiel, The Elements of Journalism
                                    </blockquote>
                                </center>
                                <blockquote>
                                    Libertad de expresión– a veces también conocida como libertad de palabra – por mucho tiempo
                                    ha sido vista como un derecho fundamental, esencial para la realización de nuestro potencial
                                    humano, la base para los otros derechos y las libertades y que apuntalen en el desarrollo
                                    social y económico. Sin embargo, la libertad de expresión necesita plataformas públicas que
                                    permitan el intercambio de información e ideas para que sea eficaz, de ahí el papel
                                    importante de los medios para proveer estas plataformas. Sin embargo, a fin de cumplir con
                                    esta función, los medios necesitan ser independientes del control del estado o del gobierno.
                                    Esta libertad de la regulación a su vez implica que los periodistas tienen la obligación de
                                    comportarse con ética, de ahí nace el desarrollo de los códigos profesionales que tienen que
                                    ver con los estándares de los periodistas. 
                                </blockquote>
                                <br><br>
                                A partir de esto, realice una investigación y un informe sobre la evolución de la “libertad
                                de palabra” y la “libertad de prensa” en su país, y responda: <br><br>
                                <ul>
                                    <li>¿Cómo fue la evolución de la teoría y práctica de “libertad de palabra” y “libertad
                                        de prensa”?</li>
                                    <textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="300" onkeypress="return check(event)"
                                        placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                    <li>¿Qué periodistas y/o agencias de los medios han hecho contribuciones específicas a
                                        la libertad de prensa y a la democracia?</li>
                                    <textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                        placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                    <li>Investigue y describa un evento de movimientos democráticos, en Colombia, en donde
                                        los medios y los reportes de noticias han tenido un papel significante</li>
                                    <textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="300" onkeypress="return check(event)"
                                        placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                    <li>Realice una reflexión sobre los resultados de las lecturas que realizó en sus
                                        investigaciones</li>
                                    <textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="300" onkeypress="return check(event)"
                                        placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                    <li>Realice un ensayo sobre temas relacionados con los medios y la democracia, y como
                                        abordar estos temas en el aula de clase</li>
                                    <textarea name="preg5" style="width: 100%;" rows="6" minlength="1" maxlength="600" onkeypress="return check(event)"
                                        placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                </ul>
                            </p>
                            <h4 class="subtitle">Bibliografía:</h4>
                            <p>[1] UNAOC, UNESCO, "Unidad 1: Periodismo y sociedad", en <em>Media Information Literacy for Teachers</em>, 2020.
                                <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-2-entendiendo-las-noticias-los-medios-y-la-etica-de-informacion/unidad-1-periodismo-y-sociedad/?lang=es" target="_blank" rel="noopener noreferrer">
                                http://unesco.mil-for-teachers.unaoc.org/modules/modulo-2-entendiendo-las-noticias-los-medios-y-la-etica-de-informacion/unidad-1-periodismo-y-sociedad/?lang=es</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo2/unidad1/contenidos" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente" class="btn btn_navegacion" name="submit" type="submit">Siguiente</button>
            </center>
            <?php $this->load->view('initial/paginacion');?>
            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative Commons Reconocimiento Compartir igual 4.0</a></p>
            <br>
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