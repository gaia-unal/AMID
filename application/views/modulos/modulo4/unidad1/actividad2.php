<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod1/css/estilo.css" rel="stylesheet">

</head>

<body>
  <?php $this->load->view('initial/nav');?>

  <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                <a href="<?php echo base_url();?>modulo1" class="list-group-item">Módulo 1</a>
                    <a href="<?php echo base_url();?>modulo2" class="list-group-item">Módulo 2</a>
                    <a href="<?php echo base_url();?>modulo3" class="list-group-item">Módulo 3</a>
                    <a href="<?php echo base_url();?>modulo4" class="list-group-item active">Módulo 4</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo4/unidad1" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo4/unidad1/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo4/unidad1/actividad1" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
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
                <h1><br>Unidad 1: Lectura de medios y textos de información</h1>
                <?php echo form_open('modulo4/unidad1/actividad3');$this->session->set_userdata('idAct','m4u1a2'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        A continuación escriba una definición de cada palabra listada, dando un ejemplo cercano a su
                        contexto
                        <ul>
                            <li>Código</li>
                            <textarea name="preg1" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea>
                            <li>Gesto</li>
                            <textarea name="preg2" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            <li>Lenguaje</li>
                            <textarea name="preg3" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            <li>Semiótica</li>
                            <textarea name="preg4" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            <li>Símbolo</li>
                            <textarea name="preg5" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            <li>Paralingüistica</li>
                            <textarea name="preg6" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            <li>Proxémica</li>
                            <textarea name="preg7" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            <li>¿Cuáles son las 3 formas de comunicación que considera usted que los estudiantes
                                utilizan más?</li> <br/>
                            <label>1. <input type="text" name="f1" required minlength="1" maxlength="50" onkeypress="return check(event)"></label> 
                            <label>2. <input type="text" name="f2" required minlength="1" maxlength="50" onkeypress="return check(event)"></label> 
                            <label>3. <input type="text" name="f3" required minlength="1" maxlength="50" onkeypress="return check(event)"></label> 
                        </ul>
                        <p class="card-text">
                            Seleccione aquellos elementos que <strong>no</strong> hacen parte de las formas de
                            comunicación virtual:
                            <ol>
                                <label><li><input type="checkbox" name="opc1" id="opc1">Redes sociales
                                </li></label> <br/>
                                <label><li><input type="checkbox" name="opc2" id="opc2">Foros</li></label><br/>
                                <label><li><input type="checkbox" name="opc3" id="opc3">Blogs</li></label><br/>
                                <label><li><input type="checkbox" name="opc4" id="opc4">Correo Electrónico
                                </li></label><br/>
                                <label><li><input type="checkbox" name="opc5" id="opc5">Oral</li></label><br/>
                                <label><li><input type="checkbox" name="opc6" id="opc6">Escrita</li></label><br/>
                                <label><li><input type="checkbox" name="opc7" id="opc7">Juegos en línea
                                </li></label><br/>
                                <label><li><input type="checkbox" name="opc8" id="opc8">Gráfica</li></label><br/>
                            </ol>
                            <a class="btn btn-outline-success" onclick="term()">Validar</a>
                        </p>
                        <input type="text" class="sr-only" id="pointsNota" name="pointsNota" value="1">
                        <input type="text" class="sr-only" id="pointsGood" name="pointsGood" value="0">
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo4/unidad1/actividad1" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" name="submit" type="submit">Siguiente</button>
                    <!-- <a href="module4.1.3.php" class="btn btn-success">Siguiente</a> -->
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
<script src="<?php echo base_url();?>public/assets/modulos/mod4/js/u1script.js"></script>
</body>

</html>