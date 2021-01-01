<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">
    
</head>

<body id="body">
    <?php $this->load->view('initial/nav');?>

    <!-- Page Content -->



    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <div class="list-group list-group-flush">
                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light">
                    Módulo 1</a>
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

                    <li class="breadcrumb-item active" aria-current="page">Inicio</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">
                <center>
                    <br>
                    <h1 class="first_title">Bienvenido a AMID</h1><br>
                </center>
                <div class="contenido">
                <p>Hola <?php echo $this->session->userdata('name'); echo $this->session->userdata('ruta');?>, a continuación, te explicaré como
                    navegar en el sitio web: <br><br>
                    En la parte lateral izquierda podrás ver el menú “Módulos AMID” son 12 módulos divididos en
                    unidades, el número
                    de unidades varia por cada módulo, la mayoría de unidades tienen actividades y evaluaciones,
                    puedes empezar
                    realizando cualquier módulo.
                </p>

                <p>
                    En la parte
                    inferior veras el botón “Siguiente”, este te ayudará a desplazarte entre los módulos de una
                    manera mas sencilla,
                    cuando estés en un módulo también podrás ver el botón “Anterior” que te permitirá regresar a
                    donde estabas anteriormente.
                </p>

                <!-- <p>
                    Debajo de estos botones encontraras nuevamente un menú de módulos pero esta vez te indicaran
                    tu avance en cada uno de ellos,
                    si son de color blanco es porque no has empezado el módulo, amarillo es para indicar que has
                    empezado el módulo pero no lo
                    has terminado aun y verde significa que el módulo ya se ha completado.
                </p> -->
                <p>
                    Espero que sea de gran utilidad este contenido y muchos éxitos.
                </p>
                <?php 
                    $rt = $this->session->userdata('ruta');
                    if(isset($rt)){
                        ?><center><a href="<?php echo base_url().$rt?>" class="btn btn-primary">Continuar donde ibas</a></center>
                    <?php }
                ?>
                </div>
            </div>
            <center><a href="<?php echo base_url();?>modulo1" class="btn btn_navegacion">Siguiente</a></center>
            <?php $this->load->view('initial/paginacion');?>
            <p class="final_contenido">Obra publicada con <a  href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                    Commons
                    Reconocimiento Compartir igual 4.0</a></p>

        </div>
        <!-- /#page-content-wrapper -->

    </div>

    </div>


    <?php $this->load->view('initial/footer');?>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>public/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>

<style>




</style>