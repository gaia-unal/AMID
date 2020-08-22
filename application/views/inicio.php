<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">
  <title>AMID</title>

</head>

<body id="body">
<?php $this->load->view('initial/nav');?>

<!-- Page Content -->
 
  <div class="container">

    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Módulos AMID</h1>
        <div class="list-group">
          <!-- <a href="www.google.com">asdsad</a> -->
          <a href="<?php echo base_url();?>modulo1" class="list-group-item">Módulo 1</a>
          <a href="<?php echo base_url();?>modulo2" class="list-group-item">Módulo 2</a>
          <a href="<?php echo base_url();?>modulo3" class="list-group-item">Módulo 3</a>
          <a href="<?php echo base_url();?>modulo4" class="list-group-item">Módulo 4</a>
          <a href="<?php echo base_url();?>modulo5" class="list-group-item">Módulo 5</a>
          <a href="<?php echo base_url();?>modulo6" class="list-group-item">Módulo 6</a>
          <a href="<?php echo base_url();?>modulo7" class="list-group-item">Módulo 7</a>
          <a href="<?php echo base_url();?>modulo8" class="list-group-item">Módulo 8</a>
          <a href="<?php echo base_url();?>modulo9" class="list-group-item">Módulo 9</a>
          <a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
          <a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
          <a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
        </div>
        <br />
        <br />
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <div class="card mt-4">
          <div class="card-body">
          <center>
          <h1 class="title">Bienvenido a AMID</h1><br>
          </center>
          <p>Hola <?php echo $this->session->userdata('name');?>, a continuación, te explicare como navegar en AMID: <br><br>
          En la parte lateral izquierda podrás ver el menú “Módulos AMID” son 12 módulos divididos en unidades, el número 
          de unidades varia por cada módulo, la mayoría de unidades tienen actividades y evaluaciones, puedes empezar 
          realizando cualquier módulo, el orden no interesa, pero una vez estés en un módulo es importante 
          realizar las unidades en orden para poder avanzar.
          </p>

          <p>
          Las evaluaciones de las unidades solo las podrás contestar una vez que hayas terminado las actividades, en la parte 
          inferior veras el botón “Siguiente”, este te ayudará a desplazarte entre los módulos de una manera mas sencilla, 
          cuando estés en un módulo también podrás ver el botón “Anterior” que te permitirá regresar a donde estabas anteriormente.
          </p>

          <p>
          Debajo de estos botones encontraras nuevamente un menú de módulos pero esta vez te indicaran tu avance en cada uno de ellos, 
          si son de color blanco es porque no has empezado el módulo, amarillo es para indicar que has empezado el módulo pero no lo 
          has terminado aun y verde significa que el módulo ya se ha completado.
          </p>
          <p>
          Espero que sea de gran utilidad este contenido y muchos éxitos. 
          </p>

          
            <a href="https://www.youtube.com/watch?v=baJ4FDVgCbU">Introducción al programa AMI (Sugerido video)</a>
            <ul>
              <li>Audiencia </li>
              <li>Características del programa</li>
              <li>Adaptación del programa</li>
              <li>Integración</li>
            </ul>
            <a href="https://www.youtube.com/watch?v=baJ4FDVgCbU">Presentación del Objeto Virtual (Sugerido video)</a>
            <ul>
              <li>Texto y video de presentación </li>
              <li>Descripción del Objeto Virtual</li>
              <li>Vínculos a los módulos de Contenido</li>
            </ul>
            <center>
              <h2>Textos de Créditos y reconocimiento a las instituciones y entidades aportantes || licencias || Otros
              </h2>
            </center>
          </div>
        </div>
        <br />
        <center><a href="<?php echo base_url();?>modulo1" class="btn btn-success">Siguiente</a></center>
        
        <?php $this->load->view('initial/paginacion');?>
        
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
        <br>
        <!-- /.card -->
        <br><br>
        <!-- /.card -->
      </div>
      <!-- /.col-lg-9 -->
    </div>
  </div>
  
  <?php $this->load->view('initial/footer');?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url();?>public/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>