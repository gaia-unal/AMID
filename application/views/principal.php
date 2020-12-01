<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url();?>public/assets/css/styleInicio.css" rel="stylesheet">
  <?php $this->load->view('initial/linkGenerico'); ?>
  <title>AMID</title>

</head>

<body id="body">
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top nav-color">
    <?php
    $name = $this->session->userdata('name');
    $lastname = $this->session->userdata('lastname');
    $rol = $this->session->userdata('rol');
    if (isset($name)) { ?>
      <i class="fas fa-book-reader" id="book"></i>
      <a class="navbar-brand brand-title" href="<?php echo base_url(); ?>inicio/main" data-toggle="tooltip" title="Alfabetización mediática informacional Digital">AMID</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <div class="bienvenido">
              <h3 class="title_welcome"><i class="far fa-user nav-link"></i>Bienvenido de nuevo,</h3>
            </div>

            <div class="name_drop">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('name'); ?>
                <?php echo $this->session->userdata('lastname'); ?></a>
              <div class="dropdown-menu">

                <a class="dropdown-item" href="<?php echo base_url(); ?>inicio/perfil"><i class="fas fa-user-cog"></i> Perfil</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url(); ?>inicio/reportes"><i class="fas fa-chart-line"></i> Reportes</a>

                <div class="dropdown-divider"></div>

                <a class="bt btn btn-danger dropdown-item" href="<?php echo base_url(); ?>inicio"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></button>
              </div>
            </div>
          </li>
          <li class="nav-item">

          <li class="nav-item">
            <a class="bt btn btn-inicio" href="<?php echo base_url(); ?>inicio/main"> Inicio</a></button>
          </li>
          </li>

          <?php
          if ($rol == 'Admin') { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>inicio/gestion">Gestión</a>
            </li>
          <?php } ?>


        </ul>
      </div>
    <?php } else { ?>
      <i class="fas fa-book-reader" id="book"></i>
      <a class="navbar-brand brand-title" href="<?php echo base_url(); ?>inicio/principal" data-toggle="tooltip" title="Alfabetización mediática informacional Digital">AMID</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <li class="nav-item">
            <a class="bt btn btn-inicio" style="width: 250px; height:30px;" href="<?php echo base_url(); ?>inicio/login"> Iniciar sesión o Registrarse</a></button>
          </li>
          </li>
        <?php } ?>

  </nav>

  <?php echo form_open('usuario/update'); ?>
  <div class="row">
    <div class="col-md-12 button-container">
      <center>
        <img src="<?php echo base_url(); ?>public/assets/img/index.png" alt="figura1">
      </center>
    </div>

  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 button-container text-justify">
        <br><br>
        <center>
          <h1>¿PARA QUÉ AMID?</h1>
        </center>
        <br>
        Las siglas AMID significan alfabetización mediática informacional, esto según la UNESCO hace
        referencia a las capacidades criticas adquiridas por las personas, estas habilidades
        les permiten exigir un buen servicio con respecto a la forma en la que se pueden llevar a cabo
        las funciones de comunicación y el tipo de contenido mostrado en internet, bibliotecas,
        archivos y demás proveedores de información dentro de las sociedades democráticas.
        <br><br>
        De acuerdo con esto, AMID es algo que nos involucra a todos y uno de los puntos claves es iniciar
        esta alfabetización en los docentes ya que tienen el efecto multiplicador de pasar este
        conocimiento a sus estudiantes y eventualmente a la sociedad. Una de las principales motivos
        para que los docentes empiecen a trabajar AMID es que a futuro se va a permitir a los
        estudiantes seguir su proceso de aprendizaje de forma autonoma.
        <!-- Referencia:
          http://repositorio.minedu.gob.pe/bitstream/handle/123456789/4586/Alfabetización%20mediática%20e%20informacional%20curriculum%20para%20profesores.pdf?sequence=1&isAllowed=y -->
        <br><br>
        <div>
          <div>
            <div class="Iam">
              <center>
                <p>Aquí encontrarás</p>
                <b>
                  <div class="innerIam">
                    Lecturas<br />
                    Imágenes<br />
                    Test<br />
                    Actividades
                  </div>
                </b>
                <p> que te ayudaran a entender mejor el papel de los medios de comuncación y la tecnología
                  en la actualidad</p>
              </center>

            </div>
          </div>
        </div>
        <br><br>
        <p>
          Para darte una mejor idea de lo que esta herramienta quiere lograr te mostramos algunas temáticas que
          son útiles para la formación en AMID.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-4 contenedor_tarjeta">
        <figure>
          <img src="<?php echo base_url(); ?>public/assets/img/Libertad de expresión.png" clas='frontal' style="width: 100%; height: 255px">
          <figcaption class="trasera text-justify pt-2" style="font-size: 1.4vw; width: 100%; height: 100%">
          La libertad de expresión es visto como la base de los demás derechos.
          <br><br> ¿Cuál es el papel de los medios para promover la libertad de expresión?
          </figcaption>
        </figure>
      </div>
      <div class="col-4 contenedor_tarjeta">
        <figure>
          <img src="<?php echo base_url(); ?>public/assets/img/formas de comunicacion.png" clas='frontal' style="width: 100%; height: 255px">
          <figcaption class="trasera text-justify pt-2" style="font-size: 1.3vw; width: 100%; height: 100%">
            Los medios utilizan diversas formas de comunicación como gráficas, códigos, blogs, redes sociales, etc.
            Por ello es importante reconocer y entender el contexto de cada una de tal forma que  la información
             puede ser asimilada de forma correcta.
        </figcaption>
        </figure>
      </div>
      <div class="col-4 contenedor_tarjeta">
        <figure>
          <img src="<?php echo base_url(); ?>public/assets/img/oportunidades y retos.png" clas='frontal' style="width: 100%; height: 255px">
          <figcaption class="trasera text-justify pt-2" style="font-size: 1.3vw; width: 100%; height: 100%">
            Internet provee grandes cantidades de información para el aprendizaje de niños y jóvenes pero a su vez
            representa grandes amenazas para su desarrollo. De ahí que sea tan importante el acompañamiento
            de personas que sean capaces de empoderarlos y educarlos.
        </figcaption>
        </figure>
      </div>
    </div>
  </div>
  </div>
  <br><br>
  </div>
</body>
<?php $this->load->view('initial/footer'); ?>