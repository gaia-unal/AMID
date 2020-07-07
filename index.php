<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="assets/css/shop-item.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="fonts/css/all.css" rel="stylesheet"> <!--load all styles -->
</head>

<body>

  <?php include 'php/layouts/header.php'; ?>
  <?php require "php/queries/consult_institucion.php"; ?>
  
  <!-- Page Content -->
  <div class="container">
    <h1 class="title-self">AMID - Formulario de inicio se sesión</h1>
    <div class="row">
      
      <div class="col-lg-12">
        
        <div class="card mt-4">
          
          <div class="card-body">
            <center><img class="logoAMID" src="assets/img/Logo_AMID.png" alt="Logo AMID"></center>
            <div class="user_card">
              
              <div class="d-flex justify-content-center form_container">

              <form action="php/queries/login.php" method="post" name="form-login">
                  <div class="input-group mb-3">
                    <div class="input-group-append">
                      <span class="input-group-text" title="Your username is your email"><i class="fas fa-user"></i></span>
                    </div>
                    <label for="email_log" class="sr-only">User</label>
                    <input type="email" name="email" id="email_log" class="form-control" value="" placeholder="Username" required>
                    
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <label for="pass_log" class="sr-only">Pass</label>
                    <input type="password" name="pass" id="pass_log" class="form-control input_pass" value="" placeholder="Password" required>
                  </div>
                  <?php
                  if(isset($_GET['mensaje']) && !is_null($_GET['mensaje']) && !empty($_GET['mensaje'])){
                    if($_GET['mensaje']=='passBad'){ ?>
                      <p class="passBad">*Usuario y/o contraseña incorrecta</p>
                    <?php }}
                    ?>   
                  
                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customControlInline">
                      <label class="custom-control-label" for="customControlInline">Remember me</label>
                    </div>
                  </div> -->
                    <div class="d-flex justify-content-center mt-3 login_container">
                      <input type="submit" class="btn btn-self" value="Login" >
                    </div>
                </form>
              </div>
          
              <div class="mt-4">
                <div class="d-flex justify-content-center links">
                ¿No tienes una cuenta? <a href="#formReg" class="ml-2 clr-blue">Regístrate</a>
                </div>
                <div class="d-flex justify-content-center links">
                  <a href="#recuperar" class="clr-blue">¿Olvidaste tu contraseña?</a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->  
  </div>
  <!-- /.container -->

  <br>
  <?php
  if(isset($_GET['mensaje']) && !is_null($_GET['mensaje']) && !empty($_GET['mensaje'])){
    if($_GET['mensaje']=='noCreden'){ ?>
      <div class="modalDialog_two" id="quit">
        <div class=" contentmodal">
          <a href="#" title="Close" class="close" onclick="remove()">X</a>
          <div class="modal-head">
          <center><h2>Credenciales incorrectas</h2></center>
          </div>
          <hr>
          <div class="modal-body">No se ha podido restablecer la contraseña, verifique que los datos sean correctos e intente nuevamente.</div>
        </div>
      </div>
<?php 
    }
    elseif($_GET['mensaje']=='cambio'){?>
      <div class="modalDialog_two" id="quit">
        <div class=" contentmodal">
          <a href="#" title="Close" class="close" onclick="remove()">X</a>
          <div class="modal-head">
          <center><h2>Contraseña reestablecida</h2></center>
          </div>
          <hr>
          <div class="modal-body">La contraseña se ha cambiado exitosamente.</div>
        </div>
      </div>
<?php
    }elseif($_GET['mensaje']=='enUso'){?>
      <div class="modalDialog_two" id="quit">
        <div class=" contentmodal">
          <a href="#" title="Close" class="close" onclick="remove()">X</a>
          <div class="modal-head">
          <center><h2>Registro incorrecto</h2></center>
          </div>
          <hr>
          <div class="modal-body">El correo con el que intenta registrarse ya esta en uso.</div>
        </div>
      </div>
<?php
    }elseif($_GET['mensaje']=='registrado'){?>
      <div class="modalDialog_two" id="quit">
        <div class=" contentmodal">
          <a href="#" title="Close" class="close" onclick="remove()">X</a>
          <div class="modal-head">
          <center><h2>Registro exitoso</h2></center>
          </div>
          <hr>
          <div class="modal-body">El usuario ha sido registrado correctamente, por favor inicie sesión para continuar.</div>
        </div>
      </div>
<?php
    }
  }
?>

<div id="recuperar" class="modalDialog">
  <div class="contentmodal">
    <a href="#close" title="Close" class="close">X</a>
    <div class="modal-head">
      <center><h2>Restablecer contraseña</h2></center>
      </div>
      <hr>
      <div class="modal-body">
        <form action="php/queries/restore_pass.php" method="post">
          <div class="input-group center  mb-10">
            <label for="name" class="sr-only">name</label>
            <input type="text" name="name_r" id="name" class="form-control mb-10 space_between"  value="" placeholder="Nombre(s)" required>
    
            <label for="lastname" class="sr-only">lastname</label>
            <input type="text" name="lastname_r" id="lastname" class="form-control mb-10" value="" placeholder="Apellidos" required>
    
          </div>
        
          <label for="email" class="sr-only">email</label>
          <input type="email" name="email_r" id="email" class="form-control mb-10" value="" placeholder="Correo" required>
        
          <label for="qt" class="space cl-label">Pregunta de seguridad*</label>
          <div class="input-group center  mb-10">
            
            <select name="question_r" class="form-control" id="qt">
              <option value="Mejor amigo de la infancia" selected>Mejor amigo de la infancia</option> 
              <option value="Nombre de la primera mascota" >Nombre de la primera mascota</option>
              <option value="Primer número telefónico">Primer número telefónico</option>
            </select>
          </div>
  
          <label for="answer" class="sr-only">Respuesta</label>
          <input type="text" name="answer_r" id="answer" class="form-control mb-10" value="" placeholder="Respuesta" required>
  
          <div class="input-group center  mb-10">
            <label for="pass1" class="sr-only">Pass</label>
            <input type="password" name="pass1_r" id="pass1" class="form-control mb-10 space_between" value="" placeholder="Nueva contraseña"required>
  
            <label for="pass2" class="sr-only">confirmpass</label>
            <input type="password" name="pass2_r" id="pass2" class="form-control " value="" placeholder="Confirmar contraseña" required>
          </div>
          <hr>
          <label class="min_ad">*Debe seleccionar la pregunta y respuesta que proporciono al momento de registrarse</label>
          <div class="d-flex justify-content-center">
            <!-- <input type="button" class="btn btn-success space" value="Enviar" onClick="comprobarClave()"> -->
            <input type="submit" class="btn btn-success space" value="Enviar" >
            <input type="reset" class="btn btn-danger" value="Borrar">
          </div>
        </form>

      </div>

  </div>
</div>

 
<div id="formReg" class="modalDialog">
	<div class="contentmodal">
    <a href="#close" title="Close" class="close">X</a>
    <div class="modal-head">
    <center><h2>Registro</h2></center>
    </div>
    <hr>
    
    <div class="modal-body">
      <form action="php/queries/insert_user.php" method="post" name="form-registro">

      <div class="input-group center  mb-10">
        <label for="name" class="sr-only">name</label>
        <input type="text" name="name" id="name" class="form-control mb-10 space_between"  value="" placeholder="Nombre(s)" required>

        <label for="lastname" class="sr-only">lastname</label>
        <input type="text" name="lastname" id="lastname" class="form-control mb-10" value="" placeholder="Apellidos" required>

      </div>
        <div class="input-group center  mb-10">
          <label for="datebirth" class="space cl-label">Fecha de nacimiento</label>
          <input type="date" name="datebirth" id="datebirth" class="form-control" value="" placeholder="Fecha de nacimiento">
        </div>

        <div class="input-group center  mb-10">
          <label for="institucion" class="space cl-label">Institución</label>
          <select name="institucion" id="institucion" class="form-control">
            <?php
            while($row = pg_fetch_array($instituciones)){ 
              echo "<option value='$row[id_institucion]'>$row[nombre]</option>";
            } ?>
          </select>
        </div>

        <label for="qt" class="space cl-label">Pregunta de seguridad</label>
        <div class="input-group center  mb-10">
          
          <select name="question" class="form-control" id="qt">
            <option value="Mejor amigo de la infancia" selected>Mejor amigo de la infancia</option> 
            <option value="Nombre de la primera mascota" >Nombre de la primera mascota</option>
            <option value="Primer número telefónico">Primer número telefónico</option>
          </select>
        </div>

        <label for="answer" class="sr-only">Respuesta</label>
        <input type="text" name="answer" id="answer" class="form-control mb-10" value="" placeholder="Respuesta" required>


        <label for="email" class="sr-only">email</label>
        <input type="email" name="email" id="email" class="form-control mb-10" value="" placeholder="Correo" required>
        
        <div class="input-group center  mb-10">
          <label for="pass1" class="sr-only">Pass</label>
          <input type="password" name="pass1" id="pass1" class="form-control mb-10 space_between" value="" placeholder="Contraseña"required>

          <label for="pass2" class="sr-only">confirmpass</label>
          <input type="password" name="pass2" id="pass2" class="form-control " value="" placeholder="Confirmar contraseña" required>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
          <!-- <input type="button" class="btn btn-success space" value="Enviar" onClick="comprobarClave()"> -->
          <input type="submit" class="btn btn-success space" value="Enviar" >
          <input type="reset" class="btn btn-danger" value="Borrar">
        </div>

      </form>
    </div>
    
	</div>
</div>

  <?php $ruta="assets"; include 'php/layouts/footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="assets/js/code.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    function remove(){
      document.getElementById('quit').style.display="none";
    }
  </script>
</body>

</html>