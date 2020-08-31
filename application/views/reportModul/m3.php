<?php

if(isset($actividad)){
    $modulo3=true;
    $uno=$dos=$tres=$cuatro=$cinco=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod3=[
            ['m3u1a2',
            'm3u2a1',
            'm3u3a1','m3u3a2',
            'm3u4a2','m3u4a3',
            'm3u5a2'],

            ['m3u1a2'],
            ['m3u2a1'],
            ['m3u3a1','m3u3a2'],
            ['m3u4a2','m3u4a3'],
            ['m3u5a2']
        ];
        
        if (in_array($mod, $mod3[0])) {
            
            if (in_array($mod, $mod3[1])) { $modulo3=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm3u1" class="m-all-u m3u" onclick="expandir('Bm3u1','m3u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m3u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m3u1a2'){?>
                    <b class="m3act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué mensaje se transmite a través del uso de estas imágenes?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Qué historia cuentan las imágenes?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Qué impacto podrían tener estas imágenes sobre las audiencias?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    
                    <hr class="hr_3_color">
                <?php
                }
            
            }else if($uno==false){
                echo "</div>";
                $uno= true;
            }

            if (in_array($mod, $mod3[2])) { $modulo3=false;
                if($dos){ $dos=false;?>
                    <button type="button" id="Bm3u2" class="m-all-u m3u" onclick="expandir('Bm3u2','m3u2Content',2)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 2</b> </button> <br> 
                    <div class="show" id="m3u2Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m3u2a1'){?>
                    <b class="m3act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué recurso tienen disponible los individuos?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Examine otras áreas donde los medios están cubiertos por estos códigos.Evalúe hasta qué punto se siguen estas regulaciones. Detalle la retroalimentación que usted daría a los entes reguladores y/o productores de estos textos mediáticos.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    
                    <hr class="hr_3_color">
                <?php
                }

            }else if($dos==false){
                echo "</div>";
                $dos= true;
            }

            if (in_array($mod, $mod3[3])) { $modulo3=false;
                if($tres){ $tres=false;?>
                    <button type="button" id="Bm3u3" class="m-all-u m3u" onclick="expandir('Bm3u3','m3u3Content',3)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 3</b> </button> <br> 
                    <div class="show" id="m3u3Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m3u3a1'){?>
                    <b class="m3act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Algunas representaciones son vistas de diferente manera por algunos miembros del grupo. ¿Por qué cree que esto sucede?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Describa quién o qué se representa como parte central de la historia. Explique por qué cree que esta representación pueda gustar a las audiencias?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Cree una lista de películas que se basen en la fórmula mencionada. Haga un recuento, describa al héroe, explique hasta qué punto el héroe representa los deseos y los valores del individuo en la sociedad.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                  
                    <hr class="hr_3_color">

                <?php
                }else if($mod=='m3u3a2'){?>
                    <b class="m3act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué impacto presentan las estrategias técnicas y de forma sobre el contenido y representaciones?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Realice un análisis sobre las organizaciones de filmación nacionales y las compañías de producción independiente para ofrecer historias alternativas, indígenas u originarias, destacando su influencia en la audiencia.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                  
                    <hr class="hr_3_color">

                <?php
                }

            }else if($tres==false){
                echo "</div>";
                $tres= true;
            }

            if (in_array($mod, $mod3[4])) { $modulo3=false;
                if($cuatro){ $cuatro=false;?>
                    <button type="button" id="Bm3u4" class="m-all-u m3u" onclick="expandir('Bm3u4','m3u4Content',4)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 4</b> </button> <br> 
                    <div class="show" id="m3u4Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m3u4a2'){?>
                    <b class="m3act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Presenta el video las creencias de un grupo en particular?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Describa las representaciones de hombres y mujeres en el video.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Se usa alguna clase de estereotipo? ¿Si es así, con qué propósito?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>¿Quién está en la posición de poder? ¿Quién no? ¿Quién se beneficia como resultado?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>
                    <b>Pregunta 5: </b>¿El video excluye a algún grupo de personas o a sus creencias?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 5'] ?> <br>
                    <b>Pregunta 6: </b>¿Qué definiciones de felicidad, éxito o moralidad están implícitas?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 6'] ?> <br>
                   
                    <hr class="hr_3_color">	

                <?php
                }else if($mod=='m3u4a3'){?>
                    <b class="m3act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué representaciones, elementos técnicos, ideología y mensajes de valor puede encontrar en la canción?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>De acuerdo a la letra de la canción, ¿Cómo desarrollaría un storyboard?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                   
                    <hr class="hr_3_color">	

                <?php
                }
            }else if($cuatro==false){
                echo "</div>";
                $cuatro= true;
            }

            if (in_array($mod, $mod3[5])) { $modulo3=false;
                if($cinco){ $cinco=false;?>
                    <button type="button" id="Bm3u5" class="m-all-u m3u" onclick="expandir('Bm3u5','m3u5Content',5)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 5</b> </button> <br> 
                    <div class="show" id="m3u5Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m3u5a2'){?>
                    <b class="m3act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Describa el tipo de cambios que esta tecnología puede hacer posible.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Identifique y describa los ejemplos dónde se ha utilizado esta tecnología en el mundo de la moda y en el reportaje de noticias. Explore la controversia que existe en relación al uso de esta tecnología para las personas que trabajan en la industria de la moda y de las noticias.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Discuta hasta qué punto el conocimiento de esta tecnología afecta la forma en la que las personas responden a las fotos en los editoriales de moda y fotoperiodismo. Describa los beneficios y responsabilidades de esta tecnología para las personas y los eventos que se retratan y para las audiencias que ven estas imágenes.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                   
                    <hr class="hr_3_color">	

                <?php
                }
            }

        }
    }
    if($cinco==false || $cuatro==false || $tres==false || $dos==false || $uno==false){
        echo "</div>";
        // $cinco=$cuatro=$tres=$dos=$uno= true;
    }
    if($modulo3){
        echo "No hay datos para mostrar";
        $modulo3=false;
    }
}else{
    echo "No hay datos para mostrar";
}
?>