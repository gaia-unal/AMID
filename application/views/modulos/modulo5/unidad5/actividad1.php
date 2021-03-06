<<!DOCTYPE html>
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
    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                    class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">Módulo 2</a>
                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">Módulo 3</a>
                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">Módulo 4</a>
                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">Módulo 5</a>
                <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo5/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo5/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo5/unidad3"  class="list-group-item list-group-item-action bg-light">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo5/unidad4"  class="list-group-item list-group-item-action bg-light">Unidad 4</a>
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo5/unidad5" class="list-group-item">Unidad 5</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo5/unidad5/actividad1" class="list-group-item">Actividades</a>
                                <a href="<?php echo base_url();?>modulo5/unidad5/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                </ul>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo5">Módulo 5</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo5/unidad5">Unidad 5</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 5: Publicidad transnacional y "marcas super"</h1>
                    <?php echo form_open('modulo5/unidad5/evaluacion');$this->session->set_userdata('idAct','m5u5a1'); $this->session->set_userdata('ruta','modulo5/unidad5/actividad1');?>
                </center>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Enfoques pedagógicos y actividades</h4>
                        <div class="contenido">
                            [1] menciona que
                            <blockquote>
                                <p class="card-text">
                                    “La estrategia global de mercadeo es tan eficaz que se requiere una subversión consciente.
                                    El mensaje “le venderemos una cultura”, ha dado como resultado una campaña global de
                                    publicidad, un solo mensaje de publicidad que se utiliza en todos los países donde el
                                    producto se fabrica o distribuye. La publicidad a nivel mundial es más económica y más
                                    eficiente, a pesar de que no esté acorde con las condiciones locales” (Noreene Janus,
                                    Advertising and Global Culture, en Cultural Survival Quaterly, 1983.)
                                </p>
                                <h4 class="subtitle"> El atractivo de las “súper marcas”</h4>
                                <p class="card-text">
                                    Lleve a cabo una investigación en línea para determinar las estrategias de mercado que
                                    utilizan las corporaciones transnacionales. Tome en cuenta visitar www.adage.com, el
                                    sitio web de la industria de la publicación Advertising Age. <br>
                                    Identifique las diversas estrategias que utilizan las principales compañías para promover
                                    sus productos y “vender” una cultura. Hable lo que está implícito – directa o indirectamente
                                    – sobre la cultura tradicional vs. la contemporánea <br>
                                    <textarea name="preg1" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                        placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                </p>
                                <h4 class="subtitle">Estrategias que se usan para crear las súper marcas</h4>
                                <p class="card-text">
                                    Visite un sitio en la red de una corporación transnacional y elija uno de sus anuncios para
                                    examinarlo de cerca. Identifique los elementos de este anuncio que hacen que sea llamativo.
                                    Considere el uso de aseveraciones y el recurso emocional. Si es posible, compare este
                                    anuncio con otro del mismo producto que esté enfocado a otra región o mercado. Identifique
                                    las formas en las cuales se ha construido cada anuncio para el mercado seleccionado. <br>
                                    Explore hasta qué punto es posible que una persona entienda el anuncio, incluso aún si él o
                                    ella no entienden el idioma que se usa. (tome en cuenta lo que puede hacer que un anuncio y
                                    sus imágenes sean “universales”) <br>
                                    <textarea name="preg2" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                        placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                </p>
                                <h4 class="subtitle">Temas claves y mensajes que se transmiten a través de las campañas globales de publicidad
                                </h4>
                                <p class="card-text">
                                    “Ya que una característica importante de la cultura transnacional es la velocidad y el
                                    aliento con los que se transmite, los sistemas de comunicación e información juegan un papel
                                    importante, permitiendo que el mensaje sea distribuido globalmente a través de las series de
                                    televisión, noticias, revistas, historietas, películas” (Noreene Janus, “Advertising and
                                    Global Culture” en Cultural Survival Quarterly, 1983) y, quizá más importante hoy en día,
                                    Internet <br>
                                    Muchos críticos dicen que los anuncios transnacionales están centrados en
                                    “vender” una cultura. Analice las maneras en las cuales se lleva a cabo esta “venta”.
                                    Identifique los mensajes o los valores que se transmiten y escríbalos a continuación: <br>
                                    <textarea name="preg3" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                        placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                    Investigue los ejemplos actuales de publicidad que ilustran el poderoso papel de la
                                    tecnología para comunicar y difundir el mensaje del anunciante. <br>
                                    Explique a continuación cómo la tecnología se utiliza para tal fin <br/>
                                    <textarea name="preg4" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                        placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                </p>
                            </blockquote>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] UNAOC, UNESCO, "Unidad 5: Publicidad transnacional y 'marcas super'", en <em>Media Information Literacy for Teachers</em>, 2020.
                            <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-5-publicidad/unidad-5-publicidad-transnacional/?lang=es" 
                            target="_blank" rel="noopener noreferrer">
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-5-publicidad/unidad-5-publicidad-transnacional/?lang=es</a>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo5/unidad5/contenidos" class="btn btn_navegacion">Anterior</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>