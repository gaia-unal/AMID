<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">
    <?php $this->load->view('initial/nav');?>
    <title>AMID</title>
</head>

<body>
    <?php $this->load->view('initial/linkGenerico');?>
    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light">Módulo 1</a>
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">Módulo 2</a>
                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">Módulo 3</a>
                <div class="btn-group dropright">
                    <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">Módulo 4</a>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    </button>
                    <div class="dropdown-menu">
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo4/unidad1" class="list-group-item">Unidad 1</a>
                            <a href="<?php echo base_url();?>modulo4/unidad2" class="list-group-item">Unidad 2</a>
                            <a href="<?php echo base_url();?>modulo4/unidad3" class="list-group-item">Unidad 3</a>
                            <a href="<?php echo base_url();?>modulo4/unidad4" class="list-group-item">Unidad 4</a>
                        </ul>
                    </div>
                </div>
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
                    <li class="breadcrumb-item active" aria-current="page">Módulo 4</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Módulo 4: Lenguaje en los medios e información</h1>
                </center>
                <div class="card mt-4 contenido">
                    <div class="card-body">
                        <center><h4 class="subtitle">Antecedentes y fundamento</h4></center>
                        <p class="card-text">
                            [1] para el desarrollo del módulo 4 define como antecedentes y fundamento, 
                            <blockquote>
                                “El medio es el mensaje”, ahora es una famosa cita que Marshall Mcluhan hizo en 1964. Si bien el medio
                                puede afectar a la forma en cómo se reciben los mensajes, los propios antecedentes/ experiencia de los
                                usuarios/audiencias también pueden afectar la interpretación de los mensajes. Un primer paso importante
                                para ser alfabetizados en medios e información es entender cómo la información, las ideas y el significado
                                se comunican a través de y por varios medios y otros proveedores de información, tales como bibliotecas,
                                archivos, museos e Internet. Cada medio tiene su propio “lenguaje” o gramática que trabaja de forma única
                                para trasmitir un mensaje. El “lenguaje” en este sentido se refiere a los ingredientes técnicos y
                                simbólicos, los códigos o las convenciones que los profesionales de los medios e información pueden
                                seleccionar y usar en un esfuerzo por comunicar ideas, información y conocimiento. Los códigos técnicos
                                incluyen sonido, ángulos de cámara, tipos de tomas e iluminación. Por ejemplo, pueden incluir música
                                siniestra para comunicar peligro en una película, o utilizar ángulos altos para crear un sentimiento de
                                poder en una fotografía. Los códigos simbólicos incluyen el lenguaje, el vestuario o las acciones del
                                personaje, símbolos icónicos que son fáciles de entender. Por ejemplo, una rosa roja puede usarse
                                simbólicamente para comunicar un romance, o un puño cerrado puede usarse para representar la ira. Los
                                lenguajes de los medios también pueden incluir el uso repetido de palabras particulares, frases o
                                imágenes, también conocidas como lenguaje verbal o visual. Cuando estudiamos los lenguajes de los medios,
                                hay tres preguntas principales que debemos tomar en cuenta: ¿Cómo las audiencias de los medios entienden
                                el lenguaje de los medios? ¿Cuáles son algunos de los principales códigos y convenciones que las personas
                                que trabajan en los medios e información utilizan hoy en día? Otra pregunta importante es si distintas
                                personas pueden obtener distintos significados que provienen de un mismo texto o pieza de información.
                                Este módulo busca capacitar a los profesores para que adquieran conocimiento sobre una variedad de
                                lenguajes de los medios para permitirles que entiendan las formas en las cuales la información y los
                                mensajes pueden ser transmitidos y cómo su interpretación de la información o de las ideas de los medios y
                                de otros proveedores de información pueden estar relacionadas con el tipo de lenguajes utilizados.
                            </blockquote>
                        </p>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] UNAOC, UNESCO, "Módulo 4: Lenguaje en los medios e información", en <em>Media Information Literacy for Teachers</em>, 2020.
                            <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-4-lenguaje-en-los-medios-e-informacion/?lang=es" 
                            target="_blank" rel="noopener noreferrer">
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-4-lenguaje-en-los-medios-e-informacion/?lang=es</a>
                        </p>
                    </div>
                </div>
                <br>
            </div>
            <center>
                <a href="<?php echo base_url();?>modulo3/unidad5/evaluacion" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo4/unidad1" class="btn btn_navegacion">Siguiente</a>
            </center>
            <br>
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