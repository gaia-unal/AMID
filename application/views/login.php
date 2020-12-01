<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php $this->load->view('initial/linkGenerico');?>
  <title>AMID</title>

</head>

<body id="body">


<!-- Page Content -->
<div class="container">
  
    <div class="row">
      
      <div class="col-lg-12">
        
        <div class="card mt-4">
          
          <div class="card-body">

            <center><a href="<?php echo base_url('inicio/principal');?>">
            <img class="logoAMID" src="<?php echo base_url();?>public/assets/img/Logo_AMID.png" alt="Logo AMID">
            </a></center>
            <div class="user_card">
              
              <div class="d-flex justify-content-center form_container">

              <?php echo form_open('inicio/login'); ?>
                  <div class="input-group mb-3">
                    <div class="input-group-append">
                      <span class="input-group-text" title="Your username is your email"><i class="fas fa-user"></i></span>
                    </div>
                    <label for="email_log" class="sr-only">User</label>
                    <input type="email" name="email" id="email_log" class="form-control" value="" placeholder="Correo electrónico" required>
                    
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <label for="pass_log" class="sr-only">Pass</label>
                    <input type="password" name="pass" id="pass_log" class="form-control input_pass" value="" placeholder="Contraseña" required>
                  </div>
                  <?php
                  if(isset($badUserPass)){
                      echo " <p class='passBad'>$badUserPass</option>";
                  }
                  ?>   

                    <div class="d-flex justify-content-center mt-3 login_container">
                      <input type="submit" class="btn btn-self" value="Login" >
                    </div>
                <?php echo form_close(); ?>

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
  if(isset($credenciales)){ //reestablecer pass
    if(!$credenciales){ ?>
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
    }else{?>
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
    }
  }
  if(isset($registro)){
    if(!$registro){?>
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
    }else{?>
      <div class="modalDialog_two" id="quit">
        <div class=" contentmodal">
          <a href="#" title="Close" class="close" onclick="remove()">X</a>
          <div class="modal-head">
          <center><h2>Registro correcto</h2></center>
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
      <?php echo form_open('inicio/restorePass'); ?>
          <div class="input-group center  mb-10">
            <label for="name_r" class="sr-only">name</label>
            <input type="text" name="name_r" id="name_r" class="form-control mb-10 space_between"  value="" placeholder="Nombre(s)" required>
    
            <label for="lastname_r" class="sr-only">lastname</label>
            <input type="text" name="lastname_r" id="lastname_r" class="form-control mb-10" value="" placeholder="Apellidos" required>
    
          </div>
        
          <label for="email_r" class="sr-only">email</label>
          <input type="email" name="email_r" id="email_r" class="form-control mb-10" value="" placeholder="Correo" required>
        
          <label for="qt_r" class="space cl-label">Pregunta de seguridad*</label>
          <div class="input-group center  mb-10">
            
            <select name="question_r" class="form-control" id="qt_r">
              <option value="Mejor amigo de la infancia" selected>Mejor amigo de la infancia</option> 
              <option value="Nombre de la primera mascota" >Nombre de la primera mascota</option>
              <option value="Primer número telefónico">Primer número telefónico</option>
            </select>
          </div>
  
          <label for="answer_r" class="sr-only">Respuesta</label>
          <input type="text" name="answer_r" id="answer_r" class="form-control mb-10" value="" placeholder="Respuesta" required>
  
          <div class="input-group center  mb-10">
            <label for="pass1_r" class="sr-only">Pass</label>
            <input type="password" name="pass1_r" id="pass1_r" class="form-control mb-10 space_between" 
            pattern="(?=.*\d)(?=.*[A-Za-z])(?=.*[@#$%]).{8,}" 
            title="Debe contener al menos un número, una letra, uno de estos símbolos '@', '#', '$' o '%' y al menos 8 caracteres"
            placeholder="Nueva contraseña"required>
  
            <label for="pass2_r" class="sr-only">confirmpass</label>
            <input type="password" name="pass2_r" id="pass2_r" class="form-control " value="" placeholder="Confirmar contraseña" required>
          </div>
          <hr>
          <label class="min_ad">*Debe seleccionar la pregunta y respuesta que proporciono al momento de registrarse</label>
          <div class="d-flex justify-content-center">
            <!-- <input type="button" class="btn btn-success space" value="Enviar" onClick="comprobarClave()"> -->
            <input type="submit" class="btn btn-success space" value="Enviar" >
            <input type="reset" class="btn btn-danger" value="Borrar">
          </div>
          <?php echo form_close(); ?>

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
    <?php echo form_open('inicio/create'); ?>

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
            if(isset($instituciones)){
              foreach($instituciones->result() as $institucion){
                  echo "<option value='$institucion->id_institucion'>$institucion->nombre</option>";
              }
            }else{
              echo "<option >No hay instituciones registradas</option>";
            }
            ?>
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
          <input type="password" name="pass1" id="pass1" class="form-control mb-10 space_between" 
          pattern="(?=.*\d)(?=.*[A-Za-z])(?=.*[@#$%]).{8,}" 
          title="Debe contener al menos un número, una letra, uno de estos símbolos '@', '#', '$' o '%' y al menos 8 caracteres"
          placeholder="Contraseña"required>

          <label for="pass2" class="sr-only">confirmpass</label>
          <input type="password" name="pass2" id="pass2" class="form-control " value="" placeholder="Confirmar contraseña" required>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
          <!-- <input type="button" class="btn btn-success space" value="Enviar" onClick="comprobarClave()"> -->
          <input type="submit" class="btn btn-success space" value="Enviar" >
          <input type="reset" class="btn btn-danger" value="Borrar">
        </div>

        <?php echo form_close(); ?>
    </div>
    
	</div>
</div>

<?php $this->load->view('initial/footer');?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url();?>public/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>public/assets/js/code.js"></script>
  <script src="<?php echo base_url();?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>