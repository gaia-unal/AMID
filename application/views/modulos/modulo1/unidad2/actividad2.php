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
                    <a href="<?php echo base_url();?>modulo1" class="list-group-item active"><i class="dropdown-menu"></i>Módulo 1<span
                        class="arrow"></span></a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo1/unidad2/temas" class="list-group-item">Temas</a>
                        <a href="<?php echo base_url();?>modulo1/unidad2/actividad1" class="list-group-item active">Actividades</a>
                        <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 2: AMI y la participación cívica</h1>
                <?php echo form_open('modulo1/unidad2/actividad3');$this->session->set_userdata('idAct','m1u2a2'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Acceso a la información</h4>
                        <p class="card-text">
                            <strong>Tema: </strong>Funciones de los medios y otros proveedores de información, y lo que
                            los ciudadanos deberían esperar de ellos. <br> Relacione las columnas colocando el número
                            que corresponde en el paréntesis con las características que describen el tipo de función de
                            los medios y otros proveedores de información.
                            <table>
                                <thead>
                                    <tr>
                                        <th width="35%">Característica</th>
                                        <th>Definición</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1) Organizar el conocimiento</td>
                                        <td><input class="respuesta" type="number" name="resp1" id="resp1" min="1" max="8">Brindar un
                                            conocimiento oportuno de los temas importantes y tendencias.</td>
                                    </tr>
                                    <tr>
                                        <td>2) Verdad</td>
                                        <td><input class="respuesta" type="number" name="resp2" id="resp2" min="1" max="8">Dotar a los
                                            ciudadanos de la información necesaria para que puedan tomar parte en los
                                            asuntos públicos.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3) Interés público</td>
                                        <td><input class="respuesta" type="number" name="resp3" id="resp3" min="1" max="8">Estar más
                                            allá de los sesgos personales.</td>
                                    </tr>
                                    <tr>
                                        <td>4) Independencia</td>
                                        <td><input class="respuesta" type="number" name="resp4" id="resp4" min="1" max="8">Hacer que la
                                            información esté organizada y sea comprensible.</td>
                                    </tr>
                                    <tr>
                                        <td>5) Foro para la crítica pública y la resolución de problemas</td>
                                        <td><input class="respuesta" type="number" name="resp5" id="resp5" min="1" max="8">Monitorear
                                            todos los ejercicios de poder</td>
                                    </tr>
                                    <tr>
                                        <td>6) Rendición de cuentas</td>
                                        <td><input class="respuesta" type="number" name="resp6" id="resp6" min="1" max="8">Ofrecer
                                            varios canales para la interacción del público y amplia representación de
                                            las visiones y valores en la cobertura de las noticias.</td>
                                    </tr>
                                    <tr>
                                        <td>7) Noticias proporcionales y relevantes</td>
                                        <td><input class="respuesta" type="number" name="resp7" id="resp7" min="1" max="8">Procurar un
                                            equilibrio entre el derecho público a saber y el derecho personal a la
                                            privacidad.</td>
                                    </tr>
                                    <tr>
                                        <td>8) Equilibrando la privacidad y el derecho a saber</td>
                                        <td><input class="respuesta" type="number" name="resp8" id="resp8" min="1" max="8">Que las
                                            fuentes de información estén claramente identificadas.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <center>
                                <a class="btn btn-outline-success" onclick="termino()">Validar</a>
                            </center>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <input type="text" class="sr-only" id="pointsNota" name="pointsNota" value="1">
                <input type="text" class="sr-only" id="pointsGood" name="pointsGood" value="0">
                <center>
                    <a href="<?php echo base_url();?>modulo1/unidad2/actividad1" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente"  class="btn btn-success" name="submit" type="submit">Siguiente</button>
                    <!-- <a href="module1.2.3.php" class="btn btn-success">Siguiente</a> -->
                </center>
                <?php echo form_close(); ?>
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
  <script src="<?php echo base_url();?>public/assets/modulos/mod1/js/und2script.2.js"></script>
</body>

</html>