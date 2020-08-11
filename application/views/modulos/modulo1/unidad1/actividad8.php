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
                        <a href="<?php echo base_url();?>modulo1/unidad1/actividad1" class="list-group-item active">Actividades</a>
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
                <h1><br>Unidad 1: Comprender la alfabetización mediática e informacional: una orientación</h1>
                <?php echo form_open('modulo1/unidad1/actividad9');$this->session->set_userdata('idAct','m1u1a8'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Información de los proveedores</h4>
                        <p class="card-text">
                            <strong>Tema:</strong> Definición de "información" y "medios". <br><strong>Propósito de la
                                actividad:</strong> Explorar los roles en una variedad de medios de información.
                            <br><strong>Descripción: </strong> Utilice la descripción sobre proveedores de información
                            que se expone en la lectura <strong>Información sobre los proveedores</strong> y a partir de
                            ella escriba a continuación una lista de su elección <br>
                           <center>
                                <label class="space" for="p1">1.</label><input type="text" name="proveedor1" id="p1" autofocus required minlength="1" maxlength="50" onkeypress="return check(event)"><br><br>
                                <label class="space" for="p2">2.</label><input type="text" name="proveedor2" id="p2" required minlength="1" maxlength="50" onkeypress="return check(event)"><br><br>
                                <label class="space" for="p3">3.</label><input type="text" name="proveedor3" id="p3" required minlength="1" maxlength="50" onkeypress="return check(event)"><br><br>
                                <label class="space" for="p4">4.</label><input type="text" name="proveedor4" id="p4" required minlength="1" maxlength="50" onkeypress="return check(event)"><br><br>
                                <label class="space" for="p5">5.</label><input type="text" name="proveedor5" id="p5" required minlength="1" maxlength="50" onkeypress="return check(event)"><br><br>
                            </center>
                            De los proveedores que se presentarán a continuación, determine que papel cumple. Por
                            ejemplo: Si uno de los proveedores de información es un Youtuber (proveedores de videos
                            sobre un tema específico en la plataforma YOUTUBE) que ofrece videos sobre temas de
                            matemáticas para el nivel de secundaria, marque el círculo frente al rol que dice "Facilitar
                            los proceso de enseñanza y aprendizaje".
                        </p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><strong>Rol</strong></th>
                                    <th>Instagrammer</th>
                                    <th>Bibliotecas virtuales</th>
                                    <th>Recursos digitales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Informar</td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="11">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="12">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="13">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Educar</td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="21">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="22">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="23">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Facilitar los procesos de enseñanza y aprendizaje</td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="31">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="32">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="33">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Proveer acceso a todos los tipos de información (a menudo libre de costos,
                                        plural, confiable y sin restricciones)</td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="41">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="42">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="43">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Servir como una puerta hacia la información</td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="51">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="52">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="53">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Promover los valores universales y los derechos civiles tales como libertad de
                                        expresión e información</td>
                                        <td class="center-2">
                                        <input type="checkbox"  name="61">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="62">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="63">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Servir como memoria colectiva de la sociedad</td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="71">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="72">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="73">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Recolectar información</td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="81">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="82">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="83">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Conservar el patrimonio cultural</td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="91">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="92">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="93">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Entretener</td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="101">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="102">
                                    </td>
                                    <td class="center-2">
                                        <input type="checkbox"  name="103">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo1/unidad1/actividad7" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente"  class="btn btn-success" name="submit" type="submit">Siguiente</button>
                    <!-- <a href="module1.1.9.php" class="btn btn-success">Siguiente</a> -->
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
</body>

</html>