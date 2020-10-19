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

    <?php echo form_open('usuario/update'); ?>
    <div class="container">

        <center>
            <br>
            <br>
            <h1 class="first_title_profile">Información personal</h1><br>

        </center>
        <p class="contenido_profile">
            Para actualizar los datos es necesario ingresar la contraseña actual, los únicos
            datos que se pueden actualizar son el nombre, el apellido, la fecha de nacimiento y
            la contraseña actual, si no se ingresa la contraseña nueva no se actualizara la
            contraseña actual pero si los demás datos.
        </p>
        <?php 
			if(isset($mensaje)){
				echo "<p class='mensaje'>¡".$mensaje."!</p>";
			}
		?>
        <div class="card mt-4">
            <div class="card-body">
                <div class="formulario">
                    <h1 class="sub_profile">Perfil</h1><br>
                    <br>

                    
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="nombre">NOMBRE</label>
                                    </div>
                                    <div class="form-group col-md-8">
                                    <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control"
											value="<?php echo $usuario->result()[0]->nombre;?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="nacimiento">FECHA NACIMIENTO</label>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <input type="date" name="nacimiento" id="nacimiento" class="form-control"
                                            value="<?php echo $usuario->result()[0]->fechanmto;?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="apellido">APELLIDO</label>
                                    </div>
                                    <div class="form-group col-md-8">
                                    <input id="apellido" name="apellido" type="text" placeholder="Apellido"
											class="form-control" value="<?php echo $usuario->result()[0]->apellido;?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="apellido">FECHA REGISTRO</label>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <input type="date" name="registro" id="registro" class="form-control"
                                            value="<?php echo $usuario->result()[0]->fecharegistro;?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="email">CORREO</label>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <input id="email" name="correo" type="email" class="form-control"
                                            value="<?php echo $usuario->result()[0]->correo;?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="institucion">INSTITUCIÓN</label>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <input id="institucion" name="institucion" type="text" placeholder="Institución"
                                            class="form-control" value="<?php echo $institucion->result()[0]->nombre ?>"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>



        <!-- ------------------------------------------------------------ -->


        <div class="card mt-4">
            <div class="card-body">
                <div class="formulario">
                    <h1 class="sub_profile">Seguridad</h1><br>
                    <br>

                    
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="pregunta">PREGUNTA SEGURIDAD</label>

                            </div>
                            <div class="form-group col-md-8">
                                <input id="pregunta" name="pregunta" type="text" placeholder="Pregunta"
                                    class="form-control" value="<?php echo $usuario->result()[0]->question;?>" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="passAct">CONTRASEÑA ACTUAL</label>

                            </div>
                            <div class="form-group col-md-8">
                                <input id="passAct" name="passAct" type="password" placeholder="Contraseña actual"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="passNew">CONTRASEÑA NUEVA</label>

                            </div>
                            <div class="form-group col-md-8">
                                <input id="pass" name="passNew" type="password" placeholder="Contraseña nueva"
                                    class="form-control" pattern="(?=.*\d)(?=.*[A-Za-z])(?=.*[@#$%]).{8,}"
                                    title="Debe contener al menos un número, una letra, uno de estos símbolos '@', '#', '$' o '%' y al menos 8 caracteres">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="passNew2">CONFIRMAR CONTRASEÑA</label>

                            </div>
                            <div class="form-group col-md-8">
                                <input id="pass2" name="passNew2" type="password" placeholder="Confirmar contraseña"
                                    class="form-control">
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>



        <br>
        <div class="form-group not-ft">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn_navegacion_profile btn-lg">Actualizar</button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>

    <br>

    <?php $this->load->view('initial/footer');?>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>public/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



</body>

</html>

<style>

</style>