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
                            <a href="<?php echo base_url();?>modulo1/unidad2/evaluacion" class="list-group-item">Evaluación</a>
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
                <?php echo form_open('modulo1/unidad2/evaluacion');$this->session->set_userdata('idAct','m1u2a5'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Libertad de expresión, independencia editorial, pluralidad y diversidad</h4>
                        <p class="card-text">
                            <strong>Tema: </strong>AMI y su importancia en la democracia y el buen gobierno. Libertad de
                            expresión, independencia editorial de los medios, pluralidad y diversidad de los medios y
                            los otros proveedores de información. <br><br>
                            <strong>Primera Parte</strong> <br>
                            Identifique un medio alternativo o independiente en su ámbito local o regional y conteste
                            las siguientes preguntas:
                            <ul>
                                <li>¿Qué es lo que hace a este medio independiente?</li>
                                <textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea>
                                <li>¿De qué forma permite que las personas participen en el proceso democratico?</li>
                                <textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>¿Qué hace a este medio diferente de losmedios principales o no independientes?</li>
                                <textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            </ul>
                            Aspi mismo identifique un medio que usted no considere alternativo o independiente en su
                            ámbito local o regional y conteste preguntas equivalentes a las anteriores, utilizando los
                            conceptos tratados en la lectura <em>Libertad de expresión, independencia editorial,
                                pluralidad y diversidad</em> de esta unidad:
                            <ul>
                                <li>¿Qué considera usted que hace a este medio no independiente</li>
                                <textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>¿De qué forma impide que las personas participen en el proceso democrático?</li>
                                <textarea name="preg5" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>¿Qué hace a este medio diferente de los medios alternativos o independientes?</li>
                                <textarea name="preg6" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            </ul>
                            <strong>Segunda parte</strong> <br>
                            <ul>
                                <li>Escriba un pequeño texto argumentando sobre la obligación de los líderes respecto a
                                    enfocar las noticias con una mentalidad abierta y no solo con el deseo de que las
                                    noticias sirvan para reforzar las opiniones existentes.</li>
                                    <textarea name="preg7" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>¿Esta usted de acuerdo con que un ciudadano bien informado está mejor preparado para
                                    tomar decisiones y para participar en una sociedad democrática y por qué?</li>
                                    <textarea name="preg8" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            </ul>
                            Comparta sus escritos con otra persona que esté realizando las actividades de este Objeto
                            Virtual. Pídale que le evalúe su escrito considerando la fuerza con la que argumenta las
                            ideas centrales de su texto
                            <strong>Actividades opcionales</strong> <br>
                            Para una mayor información sobre los tema relacionados con esta unidad puede leer el
                            articulo: <a href="https://dialnet.unirioja.es/servlet/articulo?codigo=4759634"
                                target="_blank" rel="noopener noreferrer">El derecho, la sociedad de la información y el
                                principio de la neutralidad de red: cosndieraciones sobre el mercado y el acceso a la
                                información</a> de Thiago Lopes Matsushita.
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo1/unidad2/actividad4" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" name="submit" type="submit">Siguiente</button>
                    <!-- <a href="../module1.2_eval.php" class="btn btn-success">Siguiente</a> -->
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