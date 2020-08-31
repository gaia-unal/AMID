<?php

if(isset($actividad)){
    $modulo5=true;
    $uno=$dos=$tres=$cuatro=$cinco=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod5=[
            ['m5u1a1','m5u1a2',
            'm5u2a1' ,'m5u2a2',
            'm5u3a1','m5u3a2',
            'm5u4a1','m5u4a2',
            'm5u5a1','m5u5a2'],
            ['m5u1a1','m5u1a2'],
            ['m5u2a1' ,'m5u2a2'],
            ['m5u3a1','m5u3a2'],
            ['m5u4a1','m5u4a2'],
            ['m5u5a1','m5u5a2']
        ];
        
        if (in_array($mod, $mod5[0])) {
            
            if (in_array($mod, $mod5[1])) { $modulo5=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm5u1" class="m-all-u m5u" onclick="expandir('Bm5u1','m5u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m5u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m5u1a1'){?>
                    <b class="m5act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Identifique qué individuos o grupos han creado las regulaciones mencionadas.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Investigue qué recursos tienen disponibles los consumidores.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Explique cuál es la razón detrás de colocar estos anuncios durante esos programas específicos. También anote cualquier anuncio o colocación de productos que ocurra durante los programas en si. Evalúe la eficacia de las estrategias de publicidad que se utilizan en este marco de tiempo para llegar a las audiencias seleccionadas.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>¿Dado que la publicidad es la principal fuente de ingresos de los medios: se debería sacrificar la libertad de expresión, la libertad de prensa y la libertad de acceso a la información para satisfacer a los publicistas, grandes compañías o al gobierno?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>
                    
                    <hr class="hr_5_color">
                <?php
                }else if($mod=='m5u1a2'){?>
                    <b class="m5act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Haga un resumen de las principales ideas que cubren las regulaciones en la industria de la publicidad y explique su propósito. Explique de qué forma apoyan los intereses de los ciudadanos y consumidores. Explique el impacto potencial de estas regulaciones en la industria.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Evalúe hasta qué punto se cumplen las regulaciones. Dé ejemplos específicos de cada anuncio para sustanciar su respuesta.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Investigue la publicidad como un modelo de ingresos para un medio en particular. Por ejemplo, examine la franja horaria de televisión o programación de radio en su región. Elija una estación en especial y vea o escuche una o dos horas de su programación. Anote todos los anuncios que se transmiten durante este tiempo.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 3: </b>El principal propósito de los medios y otros proveedores de información es obtener ganancias. Hable sobre esta afirmación. Dé argumentos a favor y en contra. ¿Podrían los medios y los otros proveedores de información operar sin anuncios publicitarios?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>

                    <hr class="hr_5_color">
                <?php
                }
            
            }else if($uno==false){
                echo "</div>";
                $uno= true;
            }

            if (in_array($mod, $mod5[2])) { $modulo5=false;
                if($dos){ $dos=false;?>
                    <button type="button" id="Bm5u2" class="m-all-u m5u" onclick="expandir('Bm5u2','m5u2Content',2)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 2</b> </button> <br> 
                    <div class="show" id="m5u2Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m5u2a1'){?>
                    <b class="m5act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Explique los efectos que se crean a través del uso de la toma de cámara y los ángulos. Explique cómo se puede utilizar el sonido para transmitir un significado.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Desarrolle un plan original de un ASP para un tema social o cultural importante. Haga una lluvia de ideas de los posibles temas y utilícelo como la base para un ASP. Hable sobre el propósito y la audiencia. Esta discusión a su vez, ayudará a dar forma al mensaje que se quiere transmitir. Tome en cuenta la información importante y el mensaje principal que tienen que transmitir.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Haga un diseño preliminar de un ASP, incluyendo una oración que describa el concepto, las estrategias técnicas y creativas y la audiencia.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    
                    <hr class="hr_5_color">
                <?php
                }else if($mod=='m5u2a2'){?>
                    <b class="m5act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Basado en los ejemplos incluidos anteriormente, hable sobre el significado y el objetivo de los ASP. Explique cómo los ASP se diferencian de los anuncios públicos: Haga una lluvia de ideas sobre los temas que se tratan en los ASP que usted haya visto. Identifique diversos usos para los ASPs en su región.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Examine un número de ASP – impresos y en video – y hable sobre las principales características de cada uno. Identifique la información más importante y el principal mensaje que se transmite y analice cómo se lo presenta. Tomen en cuenta las estrategias técnicas y creativas.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Analice el uso del recurso emocional en varios de los ASPs. Identifique si algunos de estos ASP hacen algún tipo de afirmaciones y si éstas, están o no basadas en hechos. Analice cómo los elementos técnicos de los ASP refuerzan su significado y mensaje.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    
                    <hr class="hr_5_color">
                <?php
                }

            }else if($dos==false){
                echo "</div>";
                $dos= true;
            }

            if (in_array($mod, $mod5[3])) { $modulo5=false;
                if($tres){ $tres=false;?>
                    <button type="button" id="Bm5u3" class="m-all-u m5u" onclick="expandir('Bm5u3','m5u3Content',3)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 3</b> </button> <br> 
                    <div class="show" id="m5u3Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m5u3a1'){?>
                    <b class="m5act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Haga un tour imaginario de su escuela/colegio/campus y vecindario. Identifique los tipos de publicidad, los anuncios de servicio público, promociones o auspicios que existan. Explique por qué los negocios e instituciones pueden escoger tener sus nombres, productos o logos expuestos ahí. Explique en qué formas estos patrocinios/promociones difieren de la publicidad “tradicional.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Qué promesas o soluciones ofrece el anuncio o el ASP? ¿Cómo son de realistas? ¿Qué visiones de alegría o éxito comunican?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Qué tipo de afirmaciones se hacen en estos anuncios? ¿Quizá algún tipo de información es engañosa o no es clara? Basándose en su análisis, ¿qué recomendaciones haría usted a la audiencia de este anuncio? En otras palabras, ¿aceptaría usted la información que se presenta en este anuncio? ¿Por qué o por qué no? ¿Haría usted algún cambio para que la información o el mensaje fueran más exactos o completos?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>Elija ejemplos de colocación del producto: ¿Están identificados como tal? Si en su país existen regulaciones para la colocación de productos, ¿qué acciones pueden tomar los ciudadanos? ¿Cuál es el mensaje del producto que se transmite en relación al contexto? ¿Qué mensajes se transmiten a través del producto en sí, así como en el contexto en el que está? ¿Acaso un contexto diferente o colocación cambiaría la imagen del producto y su mensaje?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>

                    <hr class="hr_5_color">

                <?php
                }else if($mod=='m5u3a2'){?>
                    <b class="m5act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Haga un tour imaginario de su escuela/colegio/campus y vecindario. Identifique los tipos de publicidad, los anuncios de servicio público, promociones o auspicios que existan. Haga una breve descripción de cada ejemplo de anuncio/ASP/auspicio. Describa el mensaje y la imagen creada a través de cada ejemplo y evalúe su eficacia en transmitir la información necesaria. Identifique la fuente de cada ejemplo (es decir: quién lo creó y quien se beneficia/ saca provecho de eso)<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>A menudo las comunidades consideran si es conveniente o no el vender los derechos de los nombres de áreas, sedes o edificios. Hable sobre los beneficios y desventajas de dichas formas de estrategias de publicidad para el publicista, la comunidad y el individuo.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Haga una lista de los jugadores que están en la industria de la publicidad. Esto debería tomar en cuenta a los individuos e instituciones/organizaciones. Describa sus respectivos roles. Tome en cuenta cualquier anuncio audiovisual. ¿Cree usted que el papel de cada uno de los jugadores claves que usted anotó se halla explícitamente reflejado en el anuncio?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>¿Cómo cree usted que su conocimiento acerca de aquellos que se encuentran involucrados en la creación y difusión de este anuncio le ayuda a usted a interactuar de una mejor manera o evaluar la utilidad de dar la información que usted necesita?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>

                  
                    <hr class="hr_5_color">

                <?php
                }

            }else if($tres==false){
                echo "</div>";
                $tres= true;
            }

            if (in_array($mod, $mod5[4])) { $modulo5=false;
                if($cuatro){ $cuatro=false;?>
                    <button type="button" id="Bm5u4" class="m-all-u m5u" onclick="expandir('Bm5u4','m5u4Content',4)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 4</b> </button> <br> 
                    <div class="show" id="m5u4Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m5u4a1'){?>
                    <b class="m5act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Explique cómo el diseño/forma de los anuncios se utiliza para reforzar el contenido.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Evalúe hasta qué punto los anuncios elegidos se adhieren a estos lineamientos y escríbalo a continuación.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Anote cualquier sugerencia que usted le haría al ente regulatorio en relación a la propaganda política.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>Dado el uso del recurso emocional en la propaganda política, sugiera estrategias para mantener a la ciudadanía informada.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>
                    <hr class="hr_5_color">	

                <?php
                }else if($mod=='m5u4a2'){?>
                    <b class="m5act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>analice el ejemplo proporcionado según cada uno de los siguientes lineamientos.<br>
                    <ul class="m-2">
                    <li>Concepto: <?php echo $answer['Actividad 1']['Pregunta 1'] ?></li> 
                    <li>Estrategias: <?php echo $answer['Actividad 1']['Pregunta 2'] ?></li> 
                    <li>Audiencia: <?php echo $answer['Actividad 1']['Pregunta 3'] ?></li> 
                    <li>Texto: <?php echo $answer['Actividad 1']['Pregunta 4'] ?></li>
                    <li>Producción: <?php echo $answer['Actividad 1']['Pregunta 5'] ?></li> 
                    <li>Componente de la industria/negocio: <?php echo $answer['Actividad 1']['Pregunta 6'] ?></li> 
                    
                    </ul>
                   
                    <hr class="hr_5_color">	

                <?php
                }
            }else if($cuatro==false){
                echo "</div>";
                $cuatro= true;
            }

            if (in_array($mod, $mod5[5])) { $modulo5=false;
                if($cinco){ $cinco=false;?>
                    <button type="button" id="Bm5u5" class="m-all-u m5u" onclick="expandir('Bm5u5','m5u5Content',5)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 5</b> </button> <br> 
                    <div class="show" id="m5u5Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m5u5a1'){?>
                    <b class="m5act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Identifique las diversas estrategias que utilizan las principales compañías para promover sus productos y “vender” una cultura. Hable lo que está implícito – directa o indirectamente – sobre la cultura tradicional vs. la contemporánea<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Explore hasta qué punto es posible que una persona entienda el anuncio, incluso aún si él o ella no entienden el idioma que se usa. (tome en cuenta lo que puede hacer que un anuncio y sus imágenes sean “universales”)<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Muchos críticos dicen que los anuncios transnacionales están centrados en “vender” una cultura. Analice las maneras en las cuales se lleva a cabo esta “venta”. Identifique los mensajes o los valores que se transmiten y escríbalos a continuación:<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>Investigue los ejemplos actuales de publicidad que ilustran el poderoso papel de la tecnología para comunicar y difundir el mensaje del anunciante.Explique a continuación cómo la tecnología se utiliza para tal fin.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>
                   
                    <hr class="hr_5_color">	

                <?php
                }else if($mod=='m5u5a2'){?>
                    <b class="m5act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Identifique la audiencia seleccionada<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Explique las estrategias que serían más eficientes para llegar a esa audiencia.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Explore cómo las nuevas tecnologías hacen que esto sea posible.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>Identifique y explique las estrategias técnicas y creativas que serían más eficientes para llegar a esta audiencia.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>
                    <b>Pregunta 5: </b>Explique cómo sus ideas son diferentes de aquellas desarrolladas por una agencia de publicidad norte americana o europea para llegar al mismo mercado.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 5'] ?> <br>
                   
                    <hr class="hr_5_color">	

                <?php
                }
            }

        }
    }
    if($cinco==false || $cuatro==false || $tres==false || $dos==false || $uno==false){
        echo "</div>";
        // $cinco=$cuatro=$tres=$dos=$uno= true;
    }
    if($modulo5){
        echo "No hay datos para mostrar";
        $modulo5=false;
    }
}else{
    echo "No hay datos para mostrar";
}
?>