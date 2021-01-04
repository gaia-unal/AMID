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
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-lg-none">
                <button class="btn " id="menu-toggle"><i class="fas fa-align-justify"></i></button>
            </nav>
            <nav class="bread-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1">Módulo 1</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 2: AMI y la participación cívica</h1>
                </center>
                <?php $this->session->set_userdata('ruta','modulo1/unidad2/actividad4');?>
                <div class="card mt-4">
                    <div class="card-body"><br>
                    <p class="card-text">Segun [1]:</p>
                        <div class="contenido">
                            <p class="card-text">
                                <blockquote>
                                    <h4 class="subtitle">Libertad de expresión, independencia editorial, pluralidad y diversidad</h4>
                                    La libertad de información y expresión apuntalan a la alfabetización mediática e
                                    informacional. En este contexto, el uso del término relacionado con libertad de
                                    información se refiere al acceso a la información pública. “La información es clave para
                                    entender el mundo que nos rodea, para nuestra habilidad de encontrar un papel importante
                                    en él, y para nuestra capacidad para sacar ventaja de los recursos que están disponibles
                                    para nosotros. Cuando la información se concentra en las manos de pocos o sólo en las
                                    manos de las élites, se reduce la habilidad del público tanto para tomar decisiones como
                                    para evaluar decisiones. Un medio ético y pluralista puede garantizar la transparencia,
                                    la rendición de cuentas y el estado de derecho” (Paquete de Herramientas para la
                                    Libertad de Expresión de UNESCO) Los medios independientes obtienen su poder al informar
                                    con responsabilidad a las comunidades que sirven. <br><br> 
                                
                                    <h3 class="subtitle">La libertad de expresión y la prensa</h3>                                    
                                    La libertad de expresión es la libertad de expresar e intercambiar visones y
                                    opiniones sin miedo a amenazas o acciones punitivas. La libertad de expresión es un
                                    derecho fundamental de los seres humanos. La libertad de expresión protege no sólo a
                                    la libertad de palabra sino a cualquier acto de buscar, recibir o impartir
                                    información o ideas, sin tomar en cuenta el medio que se utilice. La libertad de
                                    prensa es un pilar fundamental de este derecho ya que posibilita que la libertad de
                                    expresión sea pública y compartida, por lo tanto, es esencial para la construcción y
                                    el apoyo a las comunidades y a la sociedad civil. La libertad de expresión puede
                                    promover un verdadero sentido de propiedad dentro de una sociedad al permitir que
                                    los individuos comunes puedan examinar y expresar diferentes pensamientos y
                                    opiniones. La libertad de expresión es una parte integral de la responsabilidad
                                    cívica, y es esencial para un pensamiento crítico. Las restricciones a la libertad
                                    de expresión se permiten sólo cuando dichas restricciones son necesarias para
                                    proteger la libertad de otros. Limitaciones, tales como las leyes que impiden el
                                    “discurso de odio” deberían ser definidas con precisión para evitar su mal
                                    uso.<br><br>

                                    <h3 class="subtitle">El pluralismo en los medios</h3>
                                    Un sector de medios pluralistas – uno que atraviesa plataformas mediáticas
                                    (imprenta, transmisión, en línea) local (nacional, provincial y comunitario) y
                                    perspectivas políticas – ayuda a las sociedades a reflexionar de una mejor manera
                                    sobre sí mismas. Cuando la operación de los medios pasa a ser manejada por muchas
                                    manos, las opiniones que no son populares pueden encontrar aún un foro. Una mezcla
                                    eficaz de medios internacionales, nacionales y locales puede dar a las personas
                                    medios para participar en los procesos democráticos. La forma más amplia de
                                    diseminación de la información desde fuentes diversas y antagonistas contribuye al
                                    bienestar de las personas. Mientras los periódicos y transmisiones que son de
                                    distintos propietarios generalmente critican el contenido de otros, la concentración
                                    de los medios bajo una propiedad común está lejos de ofrecer una crítica mutua y
                                    podría terminar en medios promocionales o de defensoría. <br><br>

                                    <h3 class="subtitle">Independencia editorial</h3>
                                    La independencia editorial se refiere a la libertad profesional que se da a los
                                    editores para que realicen decisiones editoriales sin interferencia de los
                                    propietarios de los medios o cualquier otro estado o actores no estatales. La
                                    independencia editorial se prueba, por ejemplo, cuando una organización de medios
                                    saca artículos que pueden ser impopulares para sus propietarios o anunciantes.
                                </blockquote>
                            </p>
                            <h4 class="subtitle">Bibliografía:</h4>
                            <p>[1] UNAOC, UNESCO, "Unidad 2: AMI y la participación cívica", 
                            en <em>Media Information Literacy for Teachers</em>, 2020. <a target="_blank" rel="noopener noreferrer" 
                            href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-1/unidad-2-ami-y-la-participacion-civica/?lang=es"> 
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-1/unidad-2-ami-y-la-participacion-civica/?lang=es</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo1/unidad2/actividad3" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo1/unidad2/actividad5" class="btn btn_navegacion">Siguiente</a>
            </center>
            <?php $this->load->view('initial/paginacion');?>
            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative Commons Reconocimiento Compartir igual 4.0</a></p>
            <br>
        </div>
    </div>
    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>