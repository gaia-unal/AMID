<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>

    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod1/css/partes.css" rel="stylesheet">
</head>

<body>
    <link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">
    <?php $this->load->view('initial/nav');?>



    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <div class="list-group list-group-flush">

                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                        class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>


                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>

                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">
                    Módulo 3</a>

                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">
                    Módulo 4</a>

                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">
                    Módulo 5</a>

                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>

                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>

                <a href="<?php echo base_url();?>modulo8" class="list-group-item list-group-item-action bg-light">
                    Módulo 8</a>
                <a href="<?php echo base_url();?>modulo9" class="list-group-item list-group-item-action bg-light">
                    Módulo 9</a>
                <a href="<?php echo base_url();?>modulo10" class="list-group-item list-group-item-action bg-light">
                    Módulo 10</a>
                <a href="<?php echo base_url();?>modulo11" class="list-group-item list-group-item-action bg-light">
                    Módulo 11</a>

                <ul class="list-group-item">

                    <a href="<?php echo base_url();?>modulo11/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo11/unidad2" class="list-group-item">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo11/unidad3" class="list-group-item">Unidad 3</a>

                    <div class="btn-group dropright">

                        <a href="<?php echo base_url();?>modulo11/unidad4" class="list-group-item">Unidad 4</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo11/unidad4/contenidos"
                                    class="list-group-item">Contenidos</a>

                            </ul>
                        </div>
                    </div>

                </ul>


                <a href="<?php echo base_url();?>modulo12" class="list-group-item list-group-item-action bg-light">
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo11">Módulo 11</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo11/unidad4">Unidad 4</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 4: El nacimiento de medios alternativos</h1>

                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido">
						<div id="parte1" style="display:block;">
                            <h4>Medios Alternativos</h4>
                            <p class="card-text">
                                Un medio alternativo de información, medio de comunicación alternativo o medio
                                alternativo es un emisor de información independiente que no constituye una agencia de
                                información ni de los medios masivos de comunicación organizados como empresas. <br>
                                Esta compuesto por:
                            <ul>
                                <li>Periodistas que trabajan de forma independiente</li>
                                <li>Comunicadores individuales</li>
                                <li>Comunicadores de organizaciones sociales, ecologistas, culturales y políticas</li>
                            </ul>
                            Puede, en ocasiones, contener información anónima o no verificable, ni legalmente autorizada
                            o responsable, lo cual es identificado como una posible debilidad en su credibilidad.
                            <i>Definición de medios alternativos</i> (2011).
                            </p>
                        </div>
                        <div id="parte2" style="display:none;">
                            <p class="card-text">
                            <h4>Características</h4>
                            "Las características de la comunicación alternativa están intrínsecamente ligadas a la
                            vocación de cambio de estos medios." <br>
                            Enumerar una serie de características para los denominados medios alternativos se hace
                            necesario, pues, para clasificar este tipo de comunicación. Se trata de medios de
                            comunicación al margen de los mayoritarios o convencionales, ya que los últimos están
                            "estrechamente vinculados con los sectores de poder, son parte de ellos y a su vez mantienen
                            una relación de dependencia, en muchos casos, con un centro transnacional, por lo cual la
                            comunicación se constituye en un canal de esa dominación de la que se depende" (CERIGUA,
                            2003). Esta situación "provoca un monopolio de la información, tanto de parte de los
                            gobiernos, como de intereses privados, lo que permite un uso arbitrario de los medios de
                            información que da lugar a la manipulación de los mensajes, de acuerdo con intereses
                            sectoriales" y por ello "usualmente cuando se habla de libertad de prensa, realmente a lo
                            que se está refiriendo es la libertad de empresa" (CERIGUA, 2003). <br>
                            A modo de síntesis, se toma de Albert (1997) las características definitorias para estos
                            medios alternativos: [1]
                            <ol type="a">
                                <li>Las diferencias en ingresos dentro de las instituciones de medios alternativos
                                    deberían disminuir a un ritmo constante. Tampoco debería haber alguien investido con
                                    más poder que los demás. Si alguna diferencia económica aún persistiese, debería
                                    tener una justificación legítima.</li>
                                <li>Las condiciones de trabajo en las instituciones de medios alternativos no deben ser
                                    ampliamente disparejas. Es decir, dadas las tareas que se tienen que hacer, la
                                    calidad general de la vida en el trabajo debe ser comparable para todos los
                                    trabajadores; y en la medida en que no lo sea, aquellos que tienen las peores
                                    condiciones de trabajo deben ser compensados, y no lo contrario.</li>
                                <li>Las jerarquías típicas de poder e influencia sobre las decisiones que se toman,
                                    deben ser reducidas y, hasta lo posible, eliminadas. Esto tiene un doble significado
                                    práctico. Las maneras y procedimientos de tomar decisiones deben ser participativos
                                    y democráticos, con la meta, compartida por todos, de que los participantes deben
                                    afectar las decisiones en proporción al grado en que ellos son afectados por éstas.
                                    Pero también, las circunstancias del trabajo (y entrenamiento) deben dar poder a
                                    todos los participantes para que sus derechos de votación no sean una formalidad; al
                                    contrario, cada participante debe tener la información, la confianza en sí mismo, el
                                    tiempo, y la seguridad para desarrollar sus propias opiniones, presentarlas y
                                    defenderlas de manera efectiva cuando sea necesario.</li>
                                <li>Debe haber una disminución constante de las divisiones raciales y sexistas del
                                    trabajo, aunque haya obstáculos difíciles que sortear. Esto significa que la cultura
                                    de estas instituciones, sus poblaciones actuales y los roles que se desempeñan en el
                                    trabajo, deben incorporar objetivos feministas y multiculturales.</li>
                                <li>Las relaciones con el público deben respetar los mismos valores y normas que se
                                    siguen dentro de la institución, particularmente los de transparencia, diálogo, y
                                    comunicación general. La audiencia que interesa debería ser amplia y socialmente
                                    relevante (no sólo esos que tienen buenos ingresos y que atraen a los publicistas).
                                </li>
                                <li>Las relaciones con otros proyectos de los medios alternativos deberían ser de apoyo.
                                    La agenda no debería ser exclusivamente la autopreservación, sino el avance de la
                                    totalidad del proyecto alternativo.</li>
                            </ol>
                            
                            </p>
                        </div>
                        <div id="parte3" style="display:none;">
                            <h4>Tipos</h4>
                            <p class="card-text">
                                A continuación se presentan los tipos de medios alternativos expuestos por Lamb, Hair y
                                McDaniel (2002) [2]:
                            <ul>
                                <li>Faxes</li>
                                <li>Carritos de compras con vídeo en las tiendas comerciales.</li>
                                <li>Protectores de pantallas de computadoras.</li>
                                <li>Discos compactos.</li>
                                <li>Kioscos interactivos en tiendas departamentales.</li>
                                <li>Anuncios que pasan antes de las películas en los cines y en los videocasetes
                                    rentados.</li>
                            </ul>
                            Cabe mencionar que casi cualquier cosa puede convertirse en un vehículo para exhibir
                            publicidad. Por ejemplo, los elevadores (ascensores) incluirán o ya incluyen pantallas para
                            exhibir noticias, información y publicidad para captar la atención de trabajadores de altos
                            ingresos en los grandes edificios de oficinas. <br>
                            Marketing, Sexta Edición, de Lamb Charles, Hair Joseph y McDaniel Carl, International
                            Thomson Editores, 2002, Págs. 512 al 516.
                            </p>
                        </div>
                        <div id="parte4" style="display:none;">
                            <h4>Profundización</h4>
                            <p class="card-text">
                                También te recomendamos leer el siguiente artículo para profundizar en el tema. <br>
                                <a target="_blank" rel="noopener noreferrer"
                                    href="http://www.scielo.org.mx/scielo.php?script=sci_arttext&pid=S1870-00632009000200011">Los
                                    medios alternativos e internet: un ánalisis cualitativo del sistema mediático
                                    español</a> <br>
                            </p>
                        </div>
                        <br>
                        <center>
                            <div id="btnAtras">
                                <a onclick="volver();">
                                    <img width=70 src="<?php echo base_url();?>public/assets/img/arrow_l.jpg">
                                </a>
                            </div>
                            <div id="btnAdelante">
                                <a onclick="avanzar();">
                                    <img width=70 src="<?php echo base_url();?>public/assets/img/arrow_r.jpg">
                                </a>
                            </div>
                        </center>
                        </div>
                        <h3 class="subtitle">Bibliografía</h3>
							<p>[1] Fleischman, Luciana. Ginesta, Xavier. Lopez Calzada, Miguel (2009) Los medios alternativos e internet: un ánalisis cualitativo del sistema mediático español</p>
                            <p>[2] Marketing, Sexta Edición, de Lamb Charles, Hair Joseph y McDaniel Carl, International Thomson Editores, 2002, Págs. 512 al 516.</p>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo11/unidad4/contenidos" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo11/unidad4/actividad2" class="btn btn_navegacion">Siguiente</a>
            </center>
            <?php $this->load->view('initial/paginacion');?>


            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative
                    Commons
                    Reconocimiento Compartir igual 4.0</a></p>
            <br>
            <!-- /#page-content-wrapper -->
        </div>

    </div>


    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
	<script src="<?php echo base_url();?>public/assets/modulos/mod11/js/arrows.js"></script>


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>