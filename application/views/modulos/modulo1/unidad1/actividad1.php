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

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Módulos AMID</h1>
        <div class="list-group">
          <a href="<?php echo base_url();?>modulo1" class="list-group-item active">Módulo 1</a>
          <ul class="list-group-item">
            <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item active">Unidad 1</a>
            <ul class="list-group-item">
              <a href="<?php echo base_url();?>modulo1/unidad1/temas" class="list-group-item">Temas</a>
              <a href="#" class="list-group-item active">Actividades</a>
              <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
            </ul>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
          </ul>
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
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <h1><br>Unidad 1: Comprender la alfabetización mediática e informacional: Una orientación</h1>
        <div class="card mt-4">
          <div class="card-body">
            <center>
              <h4><em>Los múltiples papeles de los medios</em></h4>
            </center>
            <p class="card-text">
              Los proveedores de información juegan un papel central en los procesos de información y comunicación. Son
              una forma de comunicar la información, aunque su rol es mucho más amplio que esto. Para propósitos de este
              Curriculum AMI, los medios se definen (sin tomar en cuenta la naturaleza y las tecnologías utilizadas)
              como fuentes de información confiable y actualizada creados a través de un proceso editorial determinado
              por valores periodísticos donde la confiabilidad editorial se pueda atribuir a una organización específica
              o persona legal. Hasta el punto que los medios son una parte importante del sistema de comunicación de la
              sociedad, su representación institucional puede mezclarse con una variedad de proveedores de información
              que no pertenecen a los medios, tales como bibliotecas, museos, archivos, proveedores de información de
              Internet, otras organizaciones de información y ciudadanos que proveen su propio contenido.

              <ul>
                <li>Actúan como canales de información y conocimiento a través de los cuales los ciudadanos se comunican
                  entre ellos y toman decisiones informadas</li>
                <li>Facilitan debates informados entre diversos actores</li>
                <li>Nos ofrecen mucho de lo que aprendemos sobre el mundo más allá de nuestra experiencia inmediata</li>
                <li>Son los medios a través de los cuales la sociedad conoce acerca de si misma y construye un sentido
                  de comunidad</li>
                <li>Funcionan como un fiscalizador del gobierno en todas sus formas, promoviendo la transparencia en la
                  vida pública y el escrutinio público de aquellos que están en el poder al exponer la corrupción, mala
                  administración y mal manejo corporativo</li>
                <li>Son facilitadores esenciales de los procesos democráticos y uno de los garantes de las elecciones
                  libres y justas</li>
                <li>Son un vehículo para la expresión cultural y la cohesión cultural dentro y entre naciones</li>
                <li>Funcionan como un defensor o un actor social en su propio derecho mientras que respetan los valores
                  pluralistas (Adaptado de los MDIs de UNESCO)</li>
              </ul>
            </p>
            <br />
          </div>
        </div>
        <!-- /.card -->
        <br>
        <center>
          <a href="<?php echo base_url();?>modulo1/unidad1/temas" class="btn btn-success">Anterior</a>
          <a href="<?php echo base_url();?>modulo1/unidad1/actividad2" class="btn btn-success">Siguiente</a>
          </center>
        <?php $this->load->view('initial/paginacion');?>

        <br />
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
        <br><br>
        <!-- /.card -->
      </div>
      <!-- /.col-lg-9 -->
    </div>
  </div>
  <!-- /.container -->

  <?php $this->load->view('initial/footer');?>
  <?php $this->load->view('initial/scriptGenerico');?>
  
</body>

</html>