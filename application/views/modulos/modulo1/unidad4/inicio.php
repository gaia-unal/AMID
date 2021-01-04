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
                    <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo1/unidad3" class="list-group-item list-group-item-action bg-light">Unidad 3</a>
                    <div class="btn-group dropright">
                    <a href="<?php echo base_url();?>modulo1/unidad4"  class="list-group-item list-group-item-action bg-light">Unidad 4</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo1/unidad4/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url(); ?>modulo1/unidad4/evaluacion"  class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
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
                    <li class="breadcrumb-item active" aria-current="page">Unidad 4</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 4: AMI, enseñanza y aprendizaje</h1>
                </center><br>
                <?php $this->session->set_userdata('ruta','modulo1/unidad4'); ?>
                <div class="card mt-4"><br>
                    <div class="card-body">
                        <p class="card-text">La UNESCO [1] menciona en su metodología AMID para la unidad 4 del módulo 1 un conjunto 
                            de objetivos de aprendizaje que se deben alcanzar mediante la revisión de contenido y la realización de 
                            actividades acordes a unos temas establecidos; estos se pueden observar a continuación. </p>
                        <h4 class="subtitle">Objetivos de aprendizaje</h4><br>
                        <div class="contenido">
                            <ul>
                                <li>Identificar las formas en como AMI puede mejorar el proceso de enseñanza y aprendizaje.</li>
                                <li>Explorar los enfoques pedagógicos asociados con AMI.</li>
                                <li>Desarrollar actividades particulares que utilizan estos enfoques pedagógicos.</li>
                            </ul>
                        </div>
                        <h4 class="subtitle">Temas Claves</h4><br>
                        <div class="contenido">
                            <ul>
                                <li>Entendimiento básico de AMI y el proceso de enseñanza aprendizaje.</li>
                                <li>Enfoques pedagógicos para AMI.</li>
                                <li>Enseñanza sobre y a través de AMI.</li>
                            </ul>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] UNAOC, UNESCO, "Unidad 4: AMI, enseñanza y aprendizaje", en <em>Media Information Literacy for Teachers</em>, 2020. 
                            <a target="_blank" rel="noopener noreferrer" 
                            href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-1/unidad-4-ami-ensenanza-y-aprendizaje/?lang=es"> 
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-1/unidad-4-ami-ensenanza-y-aprendizaje/?lang=es</a></p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo1/unidad3/evaluacion" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo1/unidad4/contenidos" class="btn btn_navegacion">Siguiente</a>
            </center>
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