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
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item ">
                                <a href="<?php echo base_url();?>modulo1/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo1/unidad3" class="list-group-item list-group-item-action bg-light">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo1/unidad4" class="list-group-item list-group-item-action bg-light">Unidad 4</a>
                </ul>
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light"> Módulo 2</a>
                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light"> Módulo 3</a>
                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light"> Módulo 4</a>
                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light"> Módulo 5</a>
                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light"> Módulo 6</a>
                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light"> Módulo 7</a>
                <a href="<?php echo base_url();?>modulo8" class="list-group-item list-group-item-action bg-light"> Módulo 8</a>
                <a href="<?php echo base_url();?>modulo9" class="list-group-item list-group-item-action bg-light"> Módulo 9</a>
                <a href="<?php echo base_url();?>modulo10" class="list-group-item list-group-item-action bg-light"> Módulo 10</a>
                <a href="<?php echo base_url();?>modulo11" class="list-group-item list-group-item-action bg-light"> Módulo 11</a>
                <a href="<?php echo base_url();?>modulo12" class="list-group-item list-group-item-action bg-light"> Módulo 12</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Evaluación</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 1: Comprender la alfabetización mediática e informacional: Una
                        orientación</h1>
                </center>
                <br>
                <?php 
                    echo form_open('modulo1/unidad2/inicio');
                    $this->session->set_userdata('idAct','m1u1');
                    $this->session->set_userdata('ruta','modulo1/unidad1/evaluacion');
                ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Evaluación</h4><br>
                        <div class="contenido">
                            <p class="card-text">
                                La edición virtual del periódico El Espectador, del 17 de mayo de 2018, presenta un artículo
                                titulado "Cúcuta, un oasis para los venezolanos antes de las presidenciales en su pais". <br><br>
                                <i class="fas fa-info"></i>
                                Para ver el artículo completo, presione sobre la Figura 1 <br><br>
                                <div>
                                    <a href="https://www.elespectador.com/noticias/el-mundo/cucuta-un-oasis-para-los-venezolanos-antes-de-las-presidenciales-en-su-pais-articulo-789059"
                                            target="_blank"><img class="noticia" style="width:100%;"
                                                src="<?php echo base_url();?>public/assets/modulos/mod1/img/noticia.png" alt="noticia"></a>
                                    <center>
                                        <p class="card-text titImg">Fig. 1. Noticia: Cúcuta, un oasis para los venezolanos antes de las presidenciales en su país</p>
                                    </center>
                                </div><br>
                                Uno de los apartes del articulo expresa [1]: <br><br>
                            <center>
                                <em>
                                    "Los cruces fronterizos del departamento colombiano de Norte de Santander, principal conexión con
                                    Venezuela, son testigos de la odisea de las cerca de 50.000 personas que entran y salen de ese país a
                                    diario por estas fechas, unos 15.000 más de lo habitual. <br>
                                    Lo hacen para abastecerse de alimentos, medicinas y artículos de higiene para los días venideros
                                    porque, según dicen, no saben lo que pueda pasar después de las elecciones presidenciales del domingo
                                    20, por lo cual la frontera se cerrará antes".
                                </em> <br>
                            </center>
                            <br>
                                <strong>Marque: </strong>¿Qué rol cumple el texto?<br> <br>
                                <input class="space" type="radio" name="pre1" id="resp1" onclick="incorrecto()" value="1">
                                <label for="resp1">Entretener</label> <br>
                                <input class="space" type="radio" name="pre1" id="resp2" onclick="incorrecto()" value="1">
                                <label for="resp2">Proveer acceso a todos los tipos de información </label> <br>
                                <input class="space" type="radio" name="pre1" id="resp3" onclick="incorrecto()" value="1">
                                <label for="resp3">Servir como una puerta hacia la información </label> <br>
                                <input class="space" type="radio" name="pre1" id="resp4" onclick="incorrecto()" value="1">
                                <label for="resp4">Promover los valores universales y los derechos civiles </label> <br>
                                <input class="space" type="radio" name="pre1" id="resp5" onclick="correcto()" value="5">
                                <label for="resp5">Informar </label> <br>
                                <input class="space" type="radio" name="pre1" id="resp6" onclick="incorrecto()" value="1">
                                <label for="resp6">Educar </label> <br>
                                <input class="space" type="radio" name="pre1" id="resp7" onclick="incorrecto()" value="1">
                                <label for="resp7">Facilitar los procesos de enseñanza y aprendizaje </label> <br>
                                <input class="space" type="radio" name="pre1" id="resp8" onclick="incorrecto()" value="1">
                                <label for="resp8">Servir como memoria colectiva de la sociedad </label> <br>
                                <input class="space" type="radio" name="pre1" id="resp9" onclick="incorrecto()" value="1">
                                <label for="resp9">Recolectar información</label> <br>
                                <input class="space" type="radio" name="pre1" id="resp10" onclick="incorrecto()" value="1">
                                <label for="resp10">Conservar el patrimonio cultural</label>
                            </p>
                            <h4 class="subtitle">Bibliografía:</h4>
                            <p>[1] Neira Rangel, H., "Cúcuta, un oasis para los venezolanos antes de las presidenciales en su país", 
                                en <em>El Espectador</em>, May. 17, 2020. <a target="_blank" rel="noopener noreferrer" 
                                href="https://www.elespectador.com/noticias/el-mundo/cucuta-un-oasis-para-los-venezolanos-antes-de-las-presidenciales-en-su-pais/"> 
                                https://www.elespectador.com/noticias/el-mundo/cucuta-un-oasis-para-los-venezolanos-antes-de-las-presidenciales-en-su-pais/</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo1/unidad1/actividad10" class="btn btn_navegacion">Anterior</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod1/js/script.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>