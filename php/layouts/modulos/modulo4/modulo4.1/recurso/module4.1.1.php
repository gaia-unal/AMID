<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  <!-- Bootstrap core CSS -->
  <link href="../../../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../../../../../../assets/css/shop-item.css" rel="stylesheet">
  <link href="../../../../../../assets/css/style.css" rel="stylesheet">
  <!-- <link href="assets/css/estilo.css" rel="stylesheet"> -->
</head>

<body>
  <?php require "../../../../../queries/connectionDB.php";
$newConn= new Connection;
$newConn->connectionDB(); ?>
  <?php require '../../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../../queries/"; include '../../../../header.php'; ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../../../modulo1/module1.php" class="list-group-item">Módulo 1</a>
                    <a href="../../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../../module4.php" class="list-group-item active">Módulo 4</a>
                    <ul class="list-group-item">
                        <a href="../module4.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="../module4.1_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
                    <a href="../../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 1: Lectura de medios y textos de información</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Códigos técnicos</h4>
                        <p class="card-text">
                            El lenguaje a traves de simbolos ha sido fundamental para la comunicacion del ser humano.
                            Para ello es necesario conocer los signos basicos y a partir de alli representar imagenes o
                            dibujos. Es también llamado tecnicismo o voces técnicas que se emplean en el lenguaje
                            científico y tecnológico algunos son uso generalizado pero la mayoría son de empleo
                            particular. En cada rama de la ciencia para conocer el significado de las palabras técnicas
                            es necesario consultar los diccionarios especializados en cada rama (Sanchez, 2014).
                        </p>
                        <h4>Definiciones</h4>
                        <p class="card-text">
                            A continuación se listan algunas definiciones que servirán de apoyo para ampliar el tema
                            de códigos técnicos y simbólicos (Cañaveral & Morales, 2009, pp. 7–9):
                            <em>
                                <ul>
                                    <li><strong>Código:</strong> Sistema de señales o de signos, o de símbolos, que, por
                                        una convención previa está destinada a representar a transmitir la información
                                        entre la fuente- o emisor- de las señales y el punto de destino- o receptor. Por
                                        lo que un código puede estar formado por señales de naturaleza diferente, bien
                                        por sonidos (código lingüístico), bien por signos escritos (código gráfico), o
                                        por señales gestuales (movimientos).</li>
                                    <li><strong>Gesto: </strong>Movimiento de la cara o del cuerpo que comunica un
                                        significado; a modo de ejemplo asentar la cabeza para expresar acuerdo. Muchos
                                        enunciados se emiten acompañados de gestos que apoyan o completan sus
                                        significados.
                                        El lenguaje de signos es un sistema de comunicación basado enteramente en los
                                        gestos. El estudio del papel de los gestos en la comunicación forma parte del
                                        estudio de la comunicación no verbal.</li>
                                    <li><strong>Lenguaje: </strong>Capacidad propia de la especie humana para
                                        comunicarse por medio de un sistema de signos vocales, que pone en juego una
                                        técnica corporal compleja y supone la existencia de una función simbólica y de
                                        centros nerviosos genéticamente especializados. Este sistema de signos vocales
                                        empleados por un grupo social (o comunidad lingüística) determinado constituye
                                        una lengua particular.
                                    </li>
                                    <li><strong>Semiótica: </strong>Disciplina que tiene como objeto de estudio los
                                        signos en el seno de la vida social. Sin embargo, a diferencia de la semiología,
                                        nacida de la enseñanza de Ferdinand de Saussure se niega considerar como objeto
                                        fundamental el lenguaje y la sociedad. La semiótica quiere ser una teoría
                                        general de los modos de significar. Abarca un campo de estudio muy amplio desde
                                        los sistemas de comunicación más naturales, como serían los lenguajes de los
                                        animales, hasta los procesos culturales más complejos. </li>
                                    <li><strong>Símbolo: </strong>Signo intencionado, como el ícono, pero a diferencia
                                        de este, sus relaciones con el objeto representado no son de semejanza, sino que
                                        se basan en la convención. Se trata, pues, de un signo arbitrario. Una realidad
                                        inmaterial y abstracta puede ser representada por un signo material y concreto y
                                        exige un interprete que lo asocie a un significado. </li>
                                    <li><strong>Paralingüistica:</strong>Este término ampliamente tratado en el presente
                                        proyecto será concebido como el estudio o uso de fenómenos no verbales,
                                        verbigracia, las expresiones faciales, los movimientos de la cabeza o de los
                                        ojos, y gestos, que pueden reforzar, enfatizar o añadir, matices de significado
                                        a lo que se está diciendo, estos fenómenos se conocen como rasgos
                                        paralingüísticos. El uso de los rasgos paralingüísticos en este sentido se
                                        domina también: Cinésica. </li>
                                    <li><strong>Proxémica: </strong>Estudio de la distancia física entre las personas
                                        cuando hablan entre sí, así como de posturas y de si se da o no contacto físico
                                        durante la conversación. Estos factores pueden observarse en relación con el
                                        sexo, la edad, y la procedencia social y cultural de las personas, así como las
                                        actitudes hacia los otros y los estados mentales. </li>
                                </ul>
                            </em>
                        </p>
                        <h4>Formas de comunicación</h4>
                        <p class="card-text">Existen diferentes formas de comunicación, tanto virtual como verbal. Las
                            formas de comunicación <strong>verbal</strong> más comunes son: <br>
                            <ul>
                                <li>Oral</li>
                                <li>Escrita</li>
                                <li>Mímica o gestual</li>
                                <li>Gráfica</li>
                                <li>Códigos (en clave)</li>
                            </ul>
                            Las formas más comunes de comunicación <strong>virtual</strong> son aquellos que se dan con
                            el uso del internet y pueden ser:
                            <ul>
                                <li>Correo electrónico</li>
                                <li>Videoconferencia</li>
                                <li>Blogs</li>
                                <li>Chats</li>
                                <li>Redes sociales</li>
                                <li>Juegos en línea</li>
                            </ul>
                        </p>
                        <p class="card-text">
                            <strong>Referencias:</strong>
                            <ul>
                                <li>Sanchez, A. P. M. (2014). Códigos técnicos. Retrieved from
                                    http://informatica2paola.weebly.com/blog/codigos-tecnicos </li>
                                <li>Cañaveral, D. C. H., & Morales, L. A. L. (2009). Lenguaje no
                                    verbal. El silencio de las palabras.</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../module4.1_temas.php" class="btn btn-success">Anterior</a>
                    <a href="module4.1.2.php" class="btn btn-success">Siguiente</a>
                </center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(3);
                ?>
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
        <br><br>
      </div>
      <!-- /.col-lg-9 -->
    </div>
  </div>
  <!-- /.container -->

  <?php $ruta="../../../../../../assets"; include '../../../../footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="../../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../../../../../assets/js/script.js"></script>
  <!-- <script src="assets/js/script.js"></script> -->
</body>

</html>