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
                    <a href="<?php echo base_url();?>modulo4" class="list-group-item active">Módulo 4</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo4/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo4/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo4/unidad3" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo4/unidad3/temas" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
                        
                    </ul>
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
                <h1><br>Unidad 3: Géneros de películas y de cuentos</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Películas</h4>
                        <p class="card-text">
                            Las películas hacen parte de los medios audiovisuales. Estás se clasifican en 5 ramas
                            diferentes y cada una presenta géneros que la conforman. A continuación exploraremos cada
                            género y la clasificación a la que pertenecen:
                            <ol>
                                <h4>Según el momento temporal</h4>
                                Esta se caracteriza por el momento en el cuál fue estrenada la película, y puede ser:
                                <li><strong>Peliculas actuales:</strong> son aquellos largometrajes que hace más o menos
                                    corto tiempo que se estrenaron y que por lo tanto se sirven de los últimos avances
                                    técnicos y tecnológicos. No son películas que estén en el cine necesariamente, pero
                                    son películas recientes.</li>
                                <li><strong>Películas antiguas:</strong> son aquellas que se estrenaron hace muchos años
                                    y que al verlas nos damos cuenta de cómo avanza la tecnología, especialmente cuando
                                    son en blanco y negro y con efectos especiales que nada tienen que ver con los de
                                    las películas actuales.</li>
                                <li><strong>Estrenos:</strong> son películas muy recientes. Se engloban dentro de las
                                    películas actuales, pero hace poco que salieron a la luz. Son las más recientes y
                                    despiertan un gran interés.</li>
                                <li><strong>Clasicos:</strong> son películas que pasaron a la historia por distintos
                                    motivos, entre ellos, por sus efectos especiales innovadores o por lo mucho que han
                                    gustado. <em>“Lo que el viento se llevó”</em>, <em>“Titanic”</em> o <em>“Rambo”</em>
                                    son algunos ejemplos. Los clásicos son obras de arte.</li>
                                <h4>Según su sonoridad</h4>
                                Dependiendo de su sonoridad puede ser:
                                <li><strong>Mudas:</strong> Las primeras películas eran mudas, por lo que los actores no
                                    hablaban. Eran películas muy expresivas en las que se podía interpretar lo que
                                    ocurría solo con ver a los actores y leer algún texto que aparecía entre escena y
                                    escena. La mayoría de peliculas eran silentes hasta finales de los años 20, pues la
                                    tecnología no permitía otro formato.</li>
                                <li><strong>Sonoras:</strong> A partir del año 1927, las películas comenzaron a tener
                                    sonido. Es, entonces, cuando dieron un salto de calidad. El primer largometraje
                                    comercial que no era cine mudo fue <em>“El cantor de jazz”</em></li>
                                <h4>Debido su color</h4>
                                Anteriormente las películas eran a blanco y negro. Las nuevas tecnologías han permitido
                                tener películas con mejor calidad.
                                <li><strong>Películas en blanco y negro:</strong> son películas antiguas. Tenían este
                                    formato porque, al basarse en fotografía, no había posibilidad de filmarlas en color
                                    en esa época. Muchas películas en color han sido reestrenadas en color al cabo de
                                    unos años.</li>
                                <li><strong>Películas en color:</strong> Con el avance de la tecnología las películas
                                    también fueron sofisticándose y aparecieron las películas en color.</li>
                                <h4>Géneros cinematográficos</h4>
                                De acuerdo a su contenido, pueden ser:
                                <li><strong>De acción:</strong> Este tipo de película son de alta tensión y contienen
                                    persecuciones y muchas peleas, además de una dirección que pone énfasis en el
                                    movimiento. Incluyen rescates, batallas, escapadas, explosiones… Su ritmo es
                                    espectacular, donde el bueno o los buenos suelen combatir con los malos. Por
                                    ejemplo, una de las películas de acción paradigmáticas es Speed, en la que un
                                    autobús debe estar moviéndose todo el rato para no explotar.</li>
                                <li><strong>De aventuras:</strong> Si alguna vez has visto “Las Aventuras de Indiana
                                    Jones” sabrás de lo que hablo con este género. Estas películas cuentan historias
                                    interesantes y excitantes en contextos normalmente exóticos, y con un contenido
                                    similar al de las películas de acción. Suelen ocurrir en el desierto, la jungla o en
                                    el mar. Los personajes, generalmente, van en busca de un tesoro.</li>
                                <li><strong>Comedias:</strong> son películas divertidas, construidas para que el
                                    espectador pase un rato divertido y no deje de reír. Suele ocurrir en multitud de
                                    contextos, pero, a diferencia de las películas normales, las comedias exageran la
                                    situación para que el público se ría a carcajadas.</li>
                                <li><strong>Dramáticas:</strong> Son películas serias, con personajes y situaciones muy
                                    realistas, parecidas a la vida cotidiana, que incluyen situaciones tensas y
                                    dramáticas, y que pueden acabar mal o no.</li>
                                <li><strong>De terror:</strong> pretenden despertar nuestro miedo con escenas chocantes,
                                    tensas y terroríficas, o bien mediante una ambientación y una dirección que producen
                                    angustia. Las películas de terror pueden incluir personajes poco realistas, como
                                    muertos vivientes o seres no humanos.</li>
                                <li><strong>Musicales:</strong> se caracterizan por tener escenas donde los actores
                                    bailan coreografías y cantan. La historia se explica en la combinación de momentos
                                    musicales y momentos no musicales. Por ejemplo, Mary Poppins.</li>
                                <li><strong>Ciencia ficción:</strong> Giran en torno a situaciones fantásticas y, en
                                    muchos casos, futurísticas que pueden incluir o no viajes en el tiempo o
                                    tridimensionales. Los personajes de este género no necesariamente son humanos, sino
                                    que pueden ser robots, androides o extraterrestres. Las escenas contienen efectos
                                    especiales muy llamativos.</li>
                                <li><strong>De guerra o bélicas:</strong> Como su nombre indica, las películas de guerra
                                    incluyen historias que giran en torno a la guerra. Puesto que muchas de las
                                    películas son americanas, los soldados son, en muchos casos, de esa nacionalidad. Es
                                    posible ver operaciones militares, el entrenamiento de los soldados, acción en el
                                    campo de batalla, e incluso las historias de amor de los miembros del ejército.</li>
                                <li><strong>Películas del oeste:</strong> se ambientan en el oeste americano. Es uno de
                                    los géneros cinematográficos más antiguos, y la trama suele ser casi siempre la
                                    misma. Pistoleros, caballos, mujeres hermosas, whisky, bares de la época y mucha
                                    acción. Sin embargo, sus contenidos pueden varuiar para dar lugar a diferentes
                                    ambientaciones. Por ejemplo, se dice que la saga Star Wars es prácticamente una
                                    serie de películas del Oeste pasadas por un filtro de ciencia ficción.</li>
                                <li><strong>Crimen (suspense):</strong> contienen un contenido relacionado con
                                    asesinatos o con el crimen organizado. La trama suele incluir un homicidio o un acto
                                    criminal que, a lo largo de la película, se va esclareciendo. También reciben el
                                    nombre de películas de suspense o thrillers.</li>
                                <h4>Según el público al que va destinado</h4>
                                <li><strong>Infantiles:</strong> Son películas para niños. Suelen incluir personajes
                                    mágicos y no no necesariamente son personas. Algunas películas son dibujos animados
                                    y contienen animales como personajes. Aunque sean para niños, algunos adultos
                                    también disfrutan de ellas. Algunos ejemplos son: Toy Story o el Rey León.</li>
                                <li><strong>Adultos:</strong> Las películas para adultos son largometrajes con escenas
                                    de contenido adulto, ya sea por su violencia o por las escenas íntimas que se ven.
                                </li>
                            </ol>
                            <strong>Tomado de:</strong> https://psicologiaymente.com/cultura/tipos-peliculas
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo4/unidad3/temas" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo4/unidad3/actividad2" class="btn btn-success">Siguiente</a>
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