<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
	<?php 
	$name=$this->session->userdata('name');
	$rol=$this->session->userdata('rol');
    if(isset($name)){ ?>
		<a class="navbar-brand" href="<?php echo base_url();?>inicio/main">AMID</a>

		<p class="navbar-brand-p">Usuario: <?php echo $this->session->userdata('name');?> </p>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
			aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>inicio/main">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>inicio/perfil">Perfil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>inicio/reportes">Reportes</a>
				</li>
				<?php 
				if($rol=='Admin'){ ?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>inicio/gestion">Gestión</a>
				</li>
				<?php } ?>
				<li class="nav-item">
					<a class="bt btn btn-danger" href="<?php echo base_url();?>inicio"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></button>
				</li>
				
			</ul>
		</div>
		<?php }else { ?>
		<a class="navbar-brand" href="#">AMID</a>
		<?php } ?>
	</div>
</nav>
