<!DOCTYPE html>
<html lang="es">

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
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <div class="btn-group dropright">
                    <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light">
                        Módulo 1</a>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    </button>
                    <div class="dropdown-menu">
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item">Unidad 1</a>
                            <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item">Unidad 2</a>
                            <a href="<?php echo base_url();?>modulo1/unidad3" class="list-group-item">Unidad 3</a>
                            <a href="<?php echo base_url();?>modulo1/unidad4" class="list-group-item">Unidad 4</a>
                        </ul>
                    </div>
                </div>
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
                    <li class="breadcrumb-item active" aria-current="page">Módulo 1</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                <?php $this->session->set_userdata('ruta','modulo1');?>
                <h1 class="first_title"><br> Módulo 1: Ciudadanía, libertad de expresión e información, acceso a la
                    información, discurso democrático y aprendizaje a lo largo de la vida</h1></center>
                <div class="card mt-4 contenido">
                    <div class="card-body">
                       <center> <h4 class="subtitle">Antecedentes y fundamento</h4></center>
                        <p class="card-text">
                            Haciendo "Clic" en el <b>icono</b> puede conocer los antecedentes y el fundamento para este módulo
                            <br>
                            <div class="imgF"> 
                                <center>
                                    <a href="#" onclick="opc1();">
                                    <i class="fas fa-info-circle"></i>
                                    </a>
                                </center>
                            </div>
                            <br>
                            <h4 class="subtitle">Bibliografía:</h4>
                            <p>[1] UNAOC, UNESCO, "Módulo 1: Ciudadanía, libertad de expresión e información, acceso a la información, 
                                discurso democrático y aprendizaje a lo largo de la vida", en <em>Media Information Literacy for Teachers</em>, 2020.
                                <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-1/?lang=es" target="_blank" rel="noopener noreferrer">
                                http://unesco.mil-for-teachers.unaoc.org/modules/modulo-1/?lang=es</a>
                            </p>
                        </p>
                    </div>
                </div>
                <br>
            </div>
            <center>
                    <a href="<?php echo base_url();?>inicio/main" class="btn btn_navegacion">Anterior</a>
                    <a href="<?php echo base_url();?>modulo1/unidad1" class="btn btn_navegacion">Siguiente</a>
                </center>
                <br>
            <?php $this->load->view('initial/paginacion');?>
            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                    Commons Reconocimiento Compartir igual 4.0</a></p>
                    <br>
        </div>
    </div>
    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
    <script src="<?php echo base_url();?>public/assets/modulos/mod1/js/info.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>