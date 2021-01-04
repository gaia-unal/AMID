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

    <div class="container">
        <br>
        <h1>Gestión de Ubicación, Institución y Usuario</h1>
        <p>
            A continuación.
            
        </p>

        <div class="card shadow p-4">
            <div class="row ">
				<div class="col-md-6">
					<h2>Ubicaciones</h2>
					
					<div class="table-responsive">
					<table class="table table-hover table-border table-responsive">
						<thead>
							<tr class="clr-table">
								<th scope="col">Id</th>
								<th scope="col-2">Municipio</th>
								<th scope="col-2">Departamento</th>
								<th scope="col">Actualizar</th>
								<th scope="col">Eliminar</th>
							</tr>
						</thead>
						<tbody>
						<?php
							if(isset($ubicaciones)){
								foreach($ubicaciones->result() as $ubicacion){
									echo "<tr>";
										echo "<th scope='row'>$ubicacion->id_ubicacion</th>";
										echo "<td>$ubicacion->municipio</td>";
										echo "<td>$ubicacion->departamento</td>";
										echo "<td><i class='fas fa-highlighter'></i></td>";
										echo "<td><i class='fas fa-trash'></i></td>";
									echo "</tr>";
								}
							}
						?>
						<tr>
							<th><input type="text" name="" id="" class="col-1"></th>
							<th><input type="text" name="" id="" class="col"></th>
							<th><input type="text" name="" id="" class="col"></th>
						</tr>
						</tbody>
					</table>
					<button type="submit" class="btn btn-primary ml-1">Agregar</button>	
					<br> <br>
				</div>
					
				</div>
<!-- ----------------------------------------------------------------------------------------->
				<div class="col-md-6">
					<h2>Instituciones</h2>

					<div class="table-responsive">
					<table class="table table-hover table-border">
						<thead>
							<tr class="clr-table">
								<th scope="col">Id</th>
								<th scope="col">Nombre</th>
								<th scope="col">Id ubicación</th>
								<th scope="col">Actualizar</th>
								<th scope="col">Eliminar</th>
							</tr>
						</thead>
						<tbody>
						<?php
							if(isset($instituciones)){
								foreach($instituciones->result() as $institucion){
									echo "<tr>";
										echo "<th scope='row'>$institucion->id_institucion</th>";
										echo "<td>$institucion->nombre</td>";
										echo "<td>$institucion->fkid_ubicacion</td>";
										echo "<td><i class='fas fa-highlighter'></i></td>";
										echo "<td><i class='fas fa-trash'></i></td>";
										
									echo "</tr>";
								}
							}
						?>
						</tbody>
					</table>
					<button type="submit" class="btn btn-primary  ml-1"><i class="fas fa-plus-circle"></i> Agregar</button>
					<br> <br>
					</div>
					
							
					</div>
			</div>
        </div>

        <div class="row">
            <!-- ------------------------------------------------------------ -->
            <div class="col-md-12">

                <div class="card shadow  mt-4">
                    <div class="card-body">

						<h2>Usuarios</h2>
						
						<div class="table-responsive">
						<table class="table table-hover table-border">
							<thead>
								<tr class="clr-table ct-h" >
									<th scope="col" class="ct-vb">Id</th>
									<th scope="col" class="ct-vb">Nombre</th>
									<th scope="col" class="ct-vb">Apellido</th>
									<th scope="col" class="ct-vb" >Correo</th>
									<th scope="col" class="ct-vb">Fecha registro</th>
									<th scope="col" class="ct-vb">Fecha nacimiento</th>
									<th scope="col" class="ct-vb">Id institución</th>
									<th scope="col" class="ct-vb">Pregunta</th>
									<th scope="col" class="ct-vb">Respuesta</th>
									<th scope="col" class="ct-vb">Rol</th>
									<th scope="col" class="ct-vb">Actualizar</th>
									<th scope="col" class="ct-vb">Eliminar</th>
								</tr>
							</thead>
							<tfoot>
								<tr class="clr-table ct-h">
									<th scope="col" class="ct-vt">Id</th>
									<th scope="col" class="ct-vt">Nombre</th>
									<th scope="col" class="ct-vt">Apellido</th>
									<th scope="col" class="ct-vt">Correo</th>
									<th scope="col" class="ct-vt">Fecha registro</th>
									<th scope="col" class="ct-vt">Fecha nacimiento</th>
									<th scope="col" class="ct-vt">Id institución</th>
									<th scope="col" class="ct-vt">Pregunta</th>
									<th scope="col" class="ct-vt">Respuesta</th>
									<th scope="col" class="ct-vt">Rol</th>
									<th scope="col" class="ct-vt">Actualizar</th>
									<th scope="col" class="ct-vt">Eliminar</th>
								</tr>
							</tfoot>
							<tbody>
							<?php
								if(isset($usuarios)){
									foreach($usuarios->result() as $usuario){
										echo "<tr>";
											echo "<th scope='row'>$usuario->id_usuario</th>";
											echo "<td>$usuario->nombre</td>";
											echo "<td>$usuario->apellido</td>";
											echo "<td>$usuario->correo</td>";
											echo "<td>$usuario->fecharegistro</td>";
											echo "<td>$usuario->fechanmto</td>";
											echo "<td>$usuario->fkid_institucion</td>";
											echo "<td>$usuario->question</td>";
											echo "<td>$usuario->answer</td>";
											echo "<td>$usuario->rol</td>";
											echo "<td>Actualizar</td>";
											echo "<td>Eliminar</td>";
										echo "</tr>";
									}
								}
							?>
							</tbody>
						</table>
						<button type="submit" class="btn btn-primary  ml-1">Agregar</button>
						<br> <br>
						</div>
					</div>
				</div>
			</div>
			<!-- ------------------------------------------------------------ -->

		</div>
	</div>
	<br>

	<?php $this->load->view('initial/footer');?>

	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url();?>public/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>