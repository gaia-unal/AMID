<?php $this->load->view('initial/linkGenerico');?>
<link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark  fixed-top nav-color">

    <?php 
	$name=$this->session->userdata('name');
	$lastname = $this->session -> userdata ('lastname');
	$rol=$this->session->userdata('rol');

    if(isset($name)){ ?>


    <i  class="fas fa-book-reader" id="book"></i> 
    <a class="navbar-brand brand-title"  href="<?php echo base_url();?>inicio/main" data-toggle="tooltip" title="Alfabetización mediática informacional Digital">AMID</a>



    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">



            <li class="nav-item dropdown">
                <div class="bienvenido">
                    <h3 class="title_welcome"><i class="far fa-user nav-link"></i>Bienvenido de nuevo,</h3>
                </div>

                <div class="name_drop">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('name');?>
                        <?php echo $this->session->userdata('lastname');?></a>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="<?php echo base_url();?>inicio/perfil"><i
                                class="fas fa-user-cog"></i> Perfil</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url();?>inicio/reportes"><i
                                class="fas fa-chart-line"></i> Reportes</a>

                        <div class="dropdown-divider"></div>

                        <?php
                            echo form_open('usuario/logout2');
                        ?>
                        <button class="bt btn btn-danger dropdown-item" type="submit" name="submit" href="<?php echo base_url();?>inicio"><i
                                class="fas fa-sign-out-alt"></i> Cerrar sesión</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </li>
            <li class="nav-item">

            <li class="nav-item">
                <a class="bt btn btn-inicio" href="<?php echo base_url();?>inicio/main"> Inicio</a></button>
            </li>
            </li>

            <?php 
				if($rol=='Admin'){ ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>inicio/gestion">Gestión</a>
            </li>
            <?php } ?>


        </ul>
    </div>
    <?php }else { ?>
    <a class="navbar-brand brand-title" href="#">AMID</a>
    <?php } ?>

</nav>

<style>

</style>