<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>

    <?php $this->load->view('initial/linkGenerico'); ?>

</head>

<body>
    <?php $this->load->view('initial/nav'); ?>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <div class="list-group list-group-flush">

                <a href="<?php echo base_url(); ?>modulo1" class="list-group-item list-group-item-action bg-light"><i class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>
                <ul class="list-group-item">
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url(); ?>modulo1/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item ">
                                <a href="<?php echo base_url(); ?>modulo1/unidad1/contenidos" class="list-group-item">Contenidos</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>


                    <a href="#" onclick="inactivo(1)" class="list-group-item list-group-item-action bg-light inactive">Unidad 2</a>
                    <a href="#" onclick="inactivo(1)" class="list-group-item list-group-item-action bg-light inactive">Unidad 3</a>
                    <a href="#" onclick="inactivo(1)" class="list-group-item list-group-item-action bg-light inactive">Unidad 4</a>
                </ul>


                <a href="<?php echo base_url(); ?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>
                <a href="<?php echo base_url(); ?>modulo3" class="list-group-item list-group-item-action bg-light">
                    Módulo 3</a>
                <a href="<?php echo base_url(); ?>modulo4" class="list-group-item list-group-item-action bg-light">
                    Módulo 4</a>
                <a href="<?php echo base_url(); ?>modulo5" class="list-group-item list-group-item-action bg-light">
                    Módulo 5</a>
                <a href="<?php echo base_url(); ?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>
                <a href="<?php echo base_url(); ?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>
                <a href="<?php echo base_url(); ?>modulo8" class="list-group-item list-group-item-action bg-light">
                    Módulo 8</a>
                <a href="<?php echo base_url(); ?>modulo9" class="list-group-item list-group-item-action bg-light">
                    Módulo 9</a>
                <a href="<?php echo base_url(); ?>modulo10" class="list-group-item list-group-item-action bg-light">
                    Módulo 10</a>
                <a href="<?php echo base_url(); ?>modulo11" class="list-group-item list-group-item-action bg-light">
                    Módulo 11</a>
                <a href="<?php echo base_url(); ?>modulo12" class="list-group-item list-group-item-action bg-light">
                    Módulo 12</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-lg-none">
                <button class="btn " id="menu-toggle"><i class="fas fa-align-justify"></i></button>

            </nav>


            <!--breadcrumbs-->

            <nav class="bread-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>modulo1">Módulo 1</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>modulo1/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 5</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Comprender la alfabetización mediática e informacional: Una
                        orientación</h1>
                </center>
                <br>
                <?php echo form_open('modulo1/unidad1/actividad9');
                $this->session->set_userdata('idAct', 'm1u1a8'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Información de los proveedores</h4><br>
                        <div class="contenido">
                            <p class="card-text">

                                <strong>Tema:</strong> Definición de "información" y "medios". <br><strong>Propósito de la
                                    actividad:</strong> Explorar los roles en una variedad de medios de información.
                                <br><strong>Descripción: </strong> Utilice la descripción sobre proveedores de información
                                que se expone en la lectura <strong>Información sobre los proveedores</strong> y a partir de
                                ella escriba a continuación una lista de su elección <br>
                                <center>
                                    <label class="space" for="p1">1.</label><input type="text" name="proveedor1" id="p1" autofocus required minlength="1" maxlength="50" onkeypress="return check(event)"><br><br>
                                    <label class="space" for="p2">2.</label><input type="text" name="proveedor2" id="p2" required minlength="1" maxlength="50" onkeypress="return check(event)"><br><br>
                                    <label class="space" for="p3">3.</label><input type="text" name="proveedor3" id="p3" required minlength="1" maxlength="50" onkeypress="return check(event)"><br><br>
                                    <label class="space" for="p4">4.</label><input type="text" name="proveedor4" id="p4" required minlength="1" maxlength="50" onkeypress="return check(event)"><br><br>
                                    <label class="space" for="p5">5.</label><input type="text" name="proveedor5" id="p5" required minlength="1" maxlength="50" onkeypress="return check(event)"><br><br>
                                </center>
                                De los proveedores que se presentarán a continuación, determine que papel cumple. Por
                                ejemplo: Si uno de los proveedores de información es un Youtuber (proveedores de videos
                                sobre un tema específico en la plataforma YOUTUBE) que ofrece videos sobre temas de
                                matemáticas para el nivel de secundaria, marque el círculo frente al rol que dice "Facilitar
                                los proceso de enseñanza y aprendizaje".
                            </p>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><strong>Rol</strong></th>
                                        <th>Instagrammer</th>
                                        <th>Bibliotecas virtuales</th>
                                        <th>Recursos digitales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Informar</td>
                                        <td class="center-2">
                                            <input type="checkbox" name="11">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="12">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="13">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Educar</td>
                                        <td class="center-2">
                                            <input type="checkbox" name="21">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="22">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="23">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Facilitar los procesos de enseñanza y aprendizaje</td>
                                        <td class="center-2">
                                            <input type="checkbox" name="31">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="32">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="33">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Proveer acceso a todos los tipos de información (a menudo libre de costos,
                                            plural, confiable y sin restricciones)</td>
                                        <td class="center-2">
                                            <input type="checkbox" name="41">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="42">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="43">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Servir como una puerta hacia la información</td>
                                        <td class="center-2">
                                            <input type="checkbox" name="51">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="52">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="53">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Promover los valores universales y los derechos civiles tales como libertad de
                                            expresión e información</td>
                                        <td class="center-2">
                                            <input type="checkbox" name="61">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="62">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="63">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Servir como memoria colectiva de la sociedad</td>
                                        <td class="center-2">
                                            <input type="checkbox" name="71">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="72">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="73">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Recolectar información</td>
                                        <td class="center-2">
                                            <input type="checkbox" name="81">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="82">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="83">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Conservar el patrimonio cultural</td>
                                        <td class="center-2">
                                            <input type="checkbox" name="91">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="92">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="93">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Entretener</td>
                                        <td class="center-2">
                                            <input type="checkbox" name="101">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="102">
                                        </td>
                                        <td class="center-2">
                                            <input type="checkbox" name="103">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>

            <br>
            <center>
                <a href="<?php echo base_url(); ?>modulo1/unidad1/actividad7" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente" class="btn btn_navegacion" name="submit" type="submit">Siguiente</button>
            </center>
            <?php echo form_close(); ?>
            <?php $this->load->view('initial/paginacion'); ?>


            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative
                    Commons
                    Reconocimiento Compartir igual 4.0</a></p>
            <br>
            <!-- /#page-content-wrapper -->
        </div>

    </div>


    <?php $this->load->view('initial/footer'); ?>
    <?php $this->load->view('initial/scriptGenerico'); ?>


    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>


</body>

</html>