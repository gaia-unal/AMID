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
                <a href="<?php echo base_url();?>modulo4" class="list-group-item">Módulo 4</a>
                <a href="<?php echo base_url();?>modulo5" class="list-group-item active">Módulo 5</a>
                    <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo5/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo5/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo5/unidad3" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo5/unidad3/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo5/unidad3/actividad1" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="<?php echo base_url();?>modulo5/unidad4" class="list-group-item">Unidad 4</a>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 5</a>
                    </ul>
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
                <h1><br>Unidad 3: Publicidad: El proceso creativo</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
                            Haga un tour imaginario de su escuela/colegio/campus y vecindario. Identifique los tipos de
                            publicidad, los anuncios de servicio público, promociones o auspicios que existan. Haga una
                            breve descripción de cada ejemplo de anuncio/ASP/auspicio. Describa el mensaje y la imagen
                            creada a través de cada ejemplo y evalúe su eficacia en transmitir la información necesaria.
                            Identifique la fuente de cada ejemplo (es decir: quién lo creó y quien se beneficia/ saca
                            provecho de eso) <br>
                            <textarea name="preg1" id="p1-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea> <br>
                            A menudo las comunidades consideran si es conveniente o no el vender los derechos de los
                            nombres de áreas, sedes o edificios. Hable sobre los beneficios y desventajas de dichas
                            formas de estrategias de publicidad para el publicista, la comunidad y el individuo.<br>
                            <textarea name="preg2" id="p2-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea> <br>
                            Haga una lista de los jugadores que están en la industria de la publicidad. Esto debería
                            tomar en cuenta a los individuos e instituciones/organizaciones. Describa sus respectivos
                            roles. Tome en cuenta cualquier anuncio audiovisual. ¿Cree usted que el papel de cada uno de
                            los jugadores claves que usted anotó se halla explícitamente reflejado en el anuncio? <br>
                            <textarea name="preg3" id="p3-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea> <br>
                            ¿Cómo cree usted que su conocimiento acerca de aquellos que se encuentran involucrados en la
                            creación y difusión de este anuncio le ayuda a usted a interactuar de una mejor manera o
                            evaluar la utilidad de dar la información que usted necesita? <br>
                            <textarea name="preg4" id="p4-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo5/unidad3/actividad1" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo5/unidad4" class="btn btn-success">Siguiente</a>
                </center>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod"></script>
</body>

</html>