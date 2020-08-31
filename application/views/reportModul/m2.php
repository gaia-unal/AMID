<?php

if(isset($actividad)){
    $modulo2=true;
    $uno=$dos=$tres=$cuatro=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod2=[
            ['m2u1a1',
            'm2u2a2',
            'm2u3a2','m2u3a3',
            'm2u4a2'],
            ['m2u1a1'],
            ['m2u2a2'],
            ['m2u3a2','m2u3a3'],
            ['m2u4a2']
        ];
        
        if (in_array($mod, $mod2[0])) {
            
            if (in_array($mod, $mod2[1])) { $modulo2=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm2u1" class="m-all-u m2u" onclick="expandir('Bm2u1','m2u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m2u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m2u1a1'){?>
                    <b class="m2act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Cómo fue la evolución de la teoría y práctica de “libertad de palabra” y “libertad de prensa”?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?><br>
                    <b>Pregunta 2: </b>¿Qué periodistas y/o agencias de los medios han hecho contribuciones específicas a la libertad de prensa y a la democracia?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?><br>
                    <b>Pregunta 3: </b>Investigue y describa un evento de movimientos democráticos, en Colombia, en donde los medios y los reportes de noticias han tenido un papel significante.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?><br>
                    <b>Pregunta 4: </b>Realice una reflexión sobre los resultados de las lecturas que realizó en sus investigaciones.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?><br>
                    <b>Pregunta 5: </b>Realice un ensayo sobre temas relacionados con los medios y la democracia, y como abordar estos temas en el aula de clase.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 5'] ?><br>
                    <hr class="hr_2_color">
                <?php
                }
            
            }else if($uno==false){
                echo "</div>";
                $uno= true;
            }

            if (in_array($mod, $mod2[2])) { $modulo2=false;
                if($dos){ $dos=false;?>
                    <button type="button" id="Bm2u2" class="m-all-u m2u" onclick="expandir('Bm2u2','m2u2Content',2)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 2</b> </button> <br> 
                    <div class="show" id="m2u2Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m2u2a2'){?>
                    <b class="m2act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Por qué razón considera usted se debe desarrollar un código de ética que tiene que recibir la aprobación de todos los miembros de la profesión y que no debe ser impuesto por agentes o autoridades externas?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?><br>
                    <b>Pregunta 2: </b>¿De qué manera la ética de información se relaciona con temas como propiedad, acceso, privacidad, seguridad y comunidad?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?><br>
                    <b>Pregunta 3: </b>¿Cómo la ética de la información puede influir en las decisiones personales, la práctica profesional y las políticas públicas?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?><br>
                    <b>Pregunta 4: </b>¿Cómo los nuevos formatos de información evolucionan y las necesidades influyen en los principios éticos, y cómo se aplican estos códigos?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?><br>
                    <b>Pregunta 5: </b>¿Existen organizaciones de libertad de prensa activas en su país? ¿Cómo estas han contribuido a la protección de la libertad de prensa y libertad de expresión?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 5'] ?><br>
                    
                    <hr class="hr_2_color">
                <?php
                }

            }else if($dos==false){
                echo "</div>";
                $dos= true;
            }

            if (in_array($mod, $mod2[3])) { $modulo2=false;
                if($tres){ $tres=false;?>
                    <button type="button" id="Bm2u3" class="m-all-u m2u" onclick="expandir('Bm2u3','m2u3Content',3)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 3</b> </button> <br> 
                    <div class="show" id="m2u3Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m2u3a2'){?>
                    <b class="m2act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Observación: </b><?php echo $answer['Actividad 1']['Pregunta 1'] ?><br>
                    <hr class="hr_2_color">

                <?php
                }else if($mod=='m2u3a3'){?>
                    <b class="m2act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Cuál de las dos noticias tiene más fuerza? ¿por qué?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?><br>
                    <b>Pregunta 2: </b>¿Cuál de las dos noticias es más informativa?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?><br>
                    <b>Pregunta 3: </b>¿Cómo se podrían mejorar otros artículos noticiosos?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?><br>
                  
                    <hr class="hr_2_color">

                <?php
                }

            }else if($tres==false){
                echo "</div>";
                $tres= true;
            }

            if (in_array($mod, $mod2[4])) { $modulo2=false;
                if($cuatro){ $cuatro=false;?>
                    <button type="button" id="Bm2u4" class="m-all-u m2u" onclick="expandir('Bm2u4','m2u4Content',4)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 4</b> </button> <br> 
                    <div class="show" id="m2u4Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m2u4a2'){?>
                    <b class="m2act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Cuál de las dos noticias tiene más fuerza? ¿por qué?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?><br>
                   
                    <hr class="hr_2_color">	

                <?php
                }
            }

        }
    }
    if($cuatro==false || $tres==false || $dos==false || $uno==false){
        echo "</div>";
        // $cuatro=$tres=$dos=$uno= true;
    }
    if($modulo2){
        echo "No hay datos para mostrar";
        $modulo2=false;
    }
}else{
    echo "No hay datos para mostrar";
}
?>