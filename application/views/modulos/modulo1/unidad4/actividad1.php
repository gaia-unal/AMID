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
  <?php $this->load->view('initial/nav');?>

  <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="<?php echo base_url();?>modulo1" class="list-group-item active">Módulo 1</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item ">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo1/unidad3" class="list-group-item">Unidad 3</a>
                        <a href="<?php echo base_url();?>modulo1/unidad4" class="list-group-item active">Unidad 4</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo1/unidad4/temas" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividades</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                    </ul>
                    <a href="<?php echo base_url();?>modulo2" class="list-group-item">Módulo 2</a>
                    <a href="<?php echo base_url();?>modulo3" class="list-group-item">Módulo 3</a>
                    <a href="<?php echo base_url();?>modulo4" class="list-group-item">Módulo 4</a>
                    <a href="<?php echo base_url();?>modulo5" class="list-group-item">Módulo 5</a>
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
                <h1><br>Unidad 4: AMI, enseñanza y aprendizaje</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            A continuación se exponen enfoques pedagógicos para enseñar AMI: <br>
                            <em>
                            <div id="parte1" style="display:block;">
                                <h4>Enfoque de enseñanza reflexiva</h4>
                                El aprendizaje de enseñanza reflexiva es un enfoque centrado en el estudiante donde la
                                investigación se enfoca en los temas relacionados con la alfabetización mediática e
                                informacional en la sociedad contemporánea. Incorpora muchas de las características
                                asociadas con el aprendizaje inquisitivo, resolución de problemas y toma de decisiones,
                                en donde los estudiantes adquieren su conocimiento y habilidades a través de las
                                siguientes etapas de reflexión: identificación de un tema; reconocimiento de las
                                actitudes y creencias subyacentes; aclaración de los hechos y principios del tema;
                                localización, organización y análisis de la evidencia; interpretación y resolución del
                                tema; tomar acción y reconsiderar las consecuencias y los resultados de cada fase. Este
                                es un método apropiado para enseñar AMI ya que se puede dar a los estudiantes la
                                oportunidad de explorar más temas en profundidad. Algunos ejemplos de esta enseñanza
                                reflexiva en el enfoque de AMI incluyen: explorar las representaciones de género y raza
                                a través de un análisis de los medios; explorar la privacidad y los medios a través de
                                un análisis primario y secundario de documentos, explorar el cyber-bullying
                                (ciber-acoso) a través de una investigación etnográfica. <br><br>
                            </div>

                            <div id="parte2" style="display:none;">   
                                <h4>Aprendizaje basado en problemas</h4>
                                El aprendizaje basado en problemas es un desarrollo curricular y un sistema de
                                instrucción que desarrolla simultáneamente las bases y habilidades de un conocimiento
                                interdisciplinario de los estudiantes, así como estrategias de pensamiento crítico y
                                resolución de problemas. Se originó en la Facultad de Medicina de la Universidad
                                McMaster de Ontario, Canadá. Es un modelo de aprendizaje cooperativo altamente
                                estructurado, que resalta el conocimiento individual y colectivo al involucrar a los
                                estudiantes en problemas de la vida real a través de una interrogación crítica y
                                profunda. Los estudiantes manejan los objetivos de aprendizaje, las preguntas de
                                interrogación y los métodos, así como los resultados. Un ejemplo de un aprendizaje
                                basado en problemas en AMI sería el diseño de una campaña social de mercadeo para una
                                audiencia en particular. <br><br>
                            </div>

                            <div id="parte3" style="display:none;"> 
                                <h4>Interrogación científica</h4>
                                La interrogación científica se refiere a una variedad de técnicas que los científicos
                                utilizan para explorar el mundo natural y proponen explicaciones basadas en las
                                evidencias que encuentran. A menudo, el proceso de indagación se expresa como un grupo
                                simplificado de pasos que se denomina el ciclo de la interrogación, el cual comprende
                                actividades como: hacer observaciones; hacer preguntas; descubrir lo que ya se sabe;
                                planificar investigaciones; revisar el conocimiento a la luz de la evidencia
                                experimental; utilizando herramientas para recolectar, analizar e interpretar los datos;
                                proponer explicaciones y comunicar los resultados. Este método también se puede
                                incorporar dentro de la enseñanza de AMI. Ejemplos de esta interrogación científica en
                                AMI incluyen: investigar el impacto de la violencia en los medios; o investigar los
                                roles de las comunidades en línea. <br><br>
                            </div>

                            <div id="parte4" style="display:none;">                             
                                <h4>Estudio de caso</h4>
                                El método de estudio de caso conlleva un examen profundo de una sola instancia o evento.
                                Esto se originó en la escuela de Negocios de Harvard donde los estudiantes
                                universitarios utilizan los incidentes de la vida real para ver cómo el conocimiento
                                teórico se puede aplicar a los casos reales. Este enfoque se puede adaptar a la
                                enseñanza de AMI si los estudiantes están expuestos diariamente a las distintas formas
                                de mensajes. Esto requiere una forma sistemática de observar los eventos, recolectar
                                información, analizar la información e informar acerca de los resultados, que a la vez
                                brinda apoyo al aprendizaje basado en la indagación entre los alumnos. De esta forma los
                                estudiantes pueden ganar un mayor entendimiento de cómo los eventos o instancias se
                                sucedieron en la forma que lo hicieron. El estudio de caso también se presta para la
                                generación y validación de hipótesis. Por ejemplo, los estudiantes podrían llevar a cabo
                                un estudio de caso de una estrategia de una campaña de mercadeo y lanzamiento de una
                                película muy exitosa, u otro producto de alto perfil en los medios <br><br>
                            </div>

                            <div id="parte5" style="display:none;"> 
                                <h4>Aprendizaje cooperativo</h4>
                                El aprendizaje cooperativo tiene que ver con el enfoque de enseñanza que coloca a los
                                estudiantes a trabajar juntos para alcanzar metas compartidas. El aprendizaje
                                cooperativo puede ir desde el simple trabajo en parejas hacia un modo más complejo como
                                el aprendizaje de un proyecto, aprendizaje jigsaw (en grupos escalonados), preguntas
                                guiadas por los pares y enseñanza reciproca, todo lo cual busca producir ganancias en el
                                aprendizaje como son el desarrollo de entendimientos conceptuales y el pensamiento de
                                orden superior, mejores destrezas interpersonales, actitudes más positivas hacia la
                                escuela/colegio y hacia el ser, y la exploración de cómo manejar la heterogeneidad
                                académica en las aulas con un gran rango de logros en las destrezas básicas. Este es un
                                método apropiado en la enseñanza y aprendizaje de AMI ya que requiere que se compartan
                                las ideas de uno a otro. Un ejemplo de este aprendizaje cooperativo en AMI podría ser
                                trabajar en conjunto en un espacio Wiki (Wiki space). <br><br>
                            </div>

                            <div id="parte6" style="display:none;"> 
                                <h4>Análisis de textos</h4>
                                Los estudiantes aprenden a realizar análisis de textos al identificar los códigos y
                                convenciones de los varios géneros de medios. Con este tipo de análisis semiótico, se
                                puede incrementar el entendimiento de los conceptos claves. Por ejemplo, los estudiantes
                                aprenden a identificar cómo los códigos lingüísticos y las convenciones se utilizan para
                                crear tipos especiales de representaciones que atraen a ciertas audiencias. Se enseña a
                                los estudiantes a identificar los códigos “técnicos”, “simbólicos” y “narrativos” de
                                cualquier texto de los medios. Donde es posible este tipo de análisis de textos se
                                desarrolla en un contexto relevante, en lugar de ser sólo un ejercicio académico por sí
                                mismo. Ejemplo: Se puede solicitar a los estudiantes que elijan una pieza de un texto
                                mediático que les interesa. Esto puede ser una noticia, un video de YouTube, o video
                                clip de una noticia de una fuente en línea. Se distribuye a los estudiantes en grupos y
                                se los guía para que analicen la audiencia, el propósito, el autor, la
                                técnica/características del texto y contexto. <br><br>
                            </div>

                            <div id="parte7" style="display:none;"> 
                                <h4>Análisis contextual</h4>
                                Se enseña a los estudiantes a realizar un análisis contextual básico, especialmente en
                                relación a los conceptos claves de los medios y otros proveedores de información, y
                                también en relación a un rango de enfoques teóricos de AMI. Ejemplos del análisis
                                contextual y de la pedagogía en esta área incluyen ayudar a los estudiantes a clasificar
                                sistemas por películas, televisión y juegos de video que operan en su país, o como la
                                propiedad de los medios y la concentración se relaciona con temas de democracia y
                                libertad de expresión. <br><br>
                            </div>

                            <div id="parte8" style="display:none;"> 
                                <h4>Traducciones</h4>
                                Con este enfoque los estudiantes pueden tomar un artículo que se presenta en un medio y
                                convertirlo o “traducirlo” a otro medio. Por ejemplo:
                                <ul>
                                    <li>Tomando un artículo de periódico que hayan escrito sobre un incidente en la
                                        universidad, lo pueden transformar en una historia para un podcast radial.</li>
                                    <li>Pueden ver una pequeña sección de una película de niños y luego trabajar en
                                        pequeños grupos para hacer un storyboard en donde se encuentra escrita la
                                        historia que corresponde a la escena, identificando las tomas, ángulos y
                                        transiciones que se han utilizado.</li>
                                    <li>Seleccionar un cuento y convertirlo en storyboard para ser filmado.</li>
                                    <li>Ppueden recolectar una variedad de material visual existente relacionado con la
                                        vida de una persona y utilizar esto como un punto de partida para hacer un
                                        documental corto sobre dicha persona.</li>
                                </ul>
                            </div>

                            <div id="parte9" style="display:none;"> 
                                <h4>Simulaciones</h4>
                                A menudo se utiliza la simulación como una estrategia en una película y unidades de un
                                Curriculum sobre medios. Como ya se ha mencionado, los tutores usan la simulación para
                                demostrar a los estudiantes cómo se “ve” el aprendizaje de los medios. Es decir, el
                                tutor asume el papel de un profesor de clase y los profesores actúan como estudiantes de
                                escuela/colegio, por lo menos cuando llevan a cabo las actividades. Esta estrategia se
                                discute luego en conjunto como un proceso pedagógico para los estudiantes. <br> La
                                simulación se puede utilizar de las siguientes formas:
                                <ul>
                                    <li>Los estudiantes asumen el papel de un equipo de producción de un documental para
                                        producir un programa de televisión orientado a los jóvenes.</li>
                                    <li>Los estudiantes toman el papel de periodistas de radio/Internet que están
                                        investigando la enseñanza de medios y tienen que entrevistar a un profesor en el
                                        ejercicio de profesor de medios y luego editar un podcast de la entrevista</li>
                                    <li>Los estudiantes asumen el rol de un equipo de mercadeo de una universidad que
                                        está haciendo un video promocional para enseñar a los futuros estudiantes la
                                        vida de la universidad</li>
                                </ul>
                            </div>

                            <div id="parte10" style="display:none;"> 
                                <h4>Producción</h4>
                                Este enfoque implica aprender haciendo que es un aspecto importante de la adquisición de
                                conocimientos en el siglo XXI. Se incentiva a los estudiantes para que exploren el
                                aprendizaje a un nivel más profundo y significativo. La producción de medios y
                                contenidos de información ofrece a los estudiantes la oportunidad de una inmersión en el
                                aprendizaje a través de explorar y hacer. Por medio de la producción de textos
                                mediáticos (por ejemplo audio, video e impresos) los estudiantes son capaces de explorar
                                su creatividad y expresarse a través de sus propias voces, ideas y perspectivas. Los
                                ejemplos incluyen: los estudiantes utilizan software como el iMovie o Moviemaker (o
                                cualquier otra fuente similar libre y abierta de software) para hacer una historia
                                digital de un minuto sobre un tema ambiental o cualquier otro tema de interés.
                            </div>
                            </em>
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
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo1/unidad4/temas" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo1/unidad4/actividad2" class="btn btn-success">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod1/js/arrows2.js"></script>
</body>

</html>