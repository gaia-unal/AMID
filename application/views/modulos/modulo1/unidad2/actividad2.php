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
    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                        class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>
                <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo1/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo1/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url(); ?>modulo1/unidad2/evaluacion"  class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo1/unidad3" class="list-group-item">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo1/unidad4" class="list-group-item">Unidad 4</a>
                </ul>
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">Módulo 2</a>
                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">Módulo 3</a>
                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">Módulo 4</a>
                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">Módulo 5</a>
                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">Módulo 6</a>
                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">Módulo 7</a>
                <a href="<?php echo base_url();?>modulo8" class="list-group-item list-group-item-action bg-light">Módulo 8</a>
                <a href="<?php echo base_url();?>modulo9" class="list-group-item list-group-item-action bg-light">Módulo 9</a>
                <a href="<?php echo base_url();?>modulo10" class="list-group-item list-group-item-action bg-light">Módulo 10</a>
                <a href="<?php echo base_url();?>modulo11" class="list-group-item list-group-item-action bg-light">Módulo 11</a>
                <a href="<?php echo base_url();?>modulo12" class="list-group-item list-group-item-action bg-light">Módulo 12</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-lg-none ">
                <button class="btn " id="menu-toggle"><i class="fas fa-align-justify"></i></button>
            </nav>
            <nav class="bread-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1">Módulo 1</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 2: AMI y la participación cívica</h1>
                </center>
                <?php 
                    echo form_open('modulo1/unidad2/actividad3');
                    $this->session->set_userdata('idAct','m1u2a2'); 
                    $this->session->set_userdata('ruta','modulo1/unidad2/actividad2');
                ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Acceso a la información</h4><br>
                        <div class="contenido">
                            <p class="card-text">
                                <strong>Tema: </strong>Funciones de los medios y otros proveedores de información, y lo
                                que los ciudadanos deberían esperar de ellos. <br> Relacione las columnas colocando el
                                número que corresponde en el paréntesis con las características que describen el tipo de
                                función de los medios y otros proveedores de información.
                            </p>
                            <div class="row" id="table_container">
                                <table>
                                    <thead>
                                        <tr>
                                            <th width="35%">Característica</th>
                                            <th>Definición</th>
                                        </tr>
                                    </thead><br>
                                    <tbody>
                                        <tr>
                                            <td>1) Organizar el conocimiento</td>
                                            <td><input class="respuesta" type="number" name="resp1" id="resp1" min="1"
                                                    max="8">&nbsp; Brindar un conocimiento oportuno de los temas importantes y tendencias.</td>
                                        </tr>
                                        <tr>
                                            <td>2) Verdad</td>
                                            <td><input class="respuesta" type="number" name="resp2" id="resp2" min="1"
                                                    max="8"> &nbsp;Dotar a los ciudadanos de la información necesaria para que puedan tomar parte en
                                                los asuntos públicos.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3) Interés público</td>
                                            <td><input class="respuesta" type="number" name="resp3" id="resp3" min="1"
                                                    max="8"> &nbsp;Estar más allá de los sesgos personales.</td>
                                        </tr>
                                        <tr>
                                            <td>4) Independencia</td>
                                            <td><input class="respuesta" type="number" name="resp4" id="resp4" min="1"
                                                    max="8"> &nbsp; Hacer que la información esté organizada y sea comprensible.</td>
                                        </tr>
                                        <tr>
                                            <td>5) Foro para la crítica pública y la resolución de problemas</td>
                                            <td><input class="respuesta" type="number" name="resp5" id="resp5" min="1"
                                                    max="8"> &nbsp; Monitorear todos los ejercicios de poder</td>
                                        </tr>
                                        <tr>
                                            <td>6) Rendición de cuentas</td>
                                            <td><input class="respuesta" type="number" name="resp6" id="resp6" min="1"
                                                    max="8"> &nbsp; Ofrecer varios canales para la interacción del público y amplia representación
                                                de las visiones y valores en la cobertura de las noticias.</td>
                                        </tr>
                                        <tr>
                                            <td>7) Noticias proporcionales y relevantes</td>
                                            <td><input class="respuesta" type="number" name="resp7" id="resp7" min="1"
                                                    max="8"> &nbsp; Procurar un equilibrio entre el derecho público a saber y el derecho personal a la
                                                privacidad.</td>
                                        </tr>
                                        <tr>
                                            <td>8) Equilibrando la privacidad y el derecho a saber</td>
                                            <td><input class="respuesta" type="number" name="resp8" id="resp8" min="1"
                                                    max="8"> &nbsp;Que las fuentes de información estén claramente identificadas.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <center>
                                    <a class="btn btn_navegacion_validacion" onclick="termino()">Validar</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <input type="text" class="sr-only" id="pointsNota" name="pointsNota" value="1">
            <input type="text" class="sr-only" id="pointsGood" name="pointsGood" value="0">
            <center>
                <a href="<?php echo base_url();?>modulo1/unidad2/actividad1" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente" class="btn btn_navegacion" name="submit" type="submit">Siguiente</button>
            </center>
            <?php echo form_close(); ?>
            <?php $this->load->view('initial/paginacion');?>
            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative Commons Reconocimiento Compartir igual 4.0</a></p>
            <br>
        </div>
    </div>
    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
    <script src="<?php echo base_url();?>public/assets/modulos/mod1/js/und2script.2.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
<style>
    .btn_navegacion_validacion {
        margin-top: 40px;
        background-color: #105963;
        color: #FFFFFF !important;
        font-size: 1.2em;
        font-family: 'Roboto', sans-serif;
        width: 90px;
        height: 40px;
    }
    #table_container{
        margin-left:50px;
        margin-right:50px;
    }
</style> 