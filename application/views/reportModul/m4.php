<?php

if(isset($actividad)){
    $modulo4=true;
    $uno=$dos=$tres=$cuatro=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod4=[
            ['m4u1a2', 'm4u1a5', 'm4u1a7', 'm4u1a8',
            'm4u2a2','m4u2a3',
            'm4u3a4','m4u3a5',
            'm4u4a1','m4u4a2'],
            ['m4u1a2', 'm4u1a5', 'm4u1a7', 'm4u1a8'],
            ['m4u2a2','m4u2a3'],
            ['m4u3a4','m4u3a5'],
            ['m4u4a1','m4u4a2']
        ];
        
        if (in_array($mod, $mod4[0])) {
            
            if (in_array($mod, $mod4[1])) { $modulo4=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm4u1" class="m-all-u m4u" onclick="expandir('Bm4u1','m4u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m4u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m4u1a2'){?>
                    <b class="m4act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>A continuación escriba una definición de cada palabra listada, dando un ejemplo cercano a su contexto.<br>
                    <ul class="m-2">
                    <li>Código: <?php echo $answer['Actividad 1']['Pregunta 1'] ?></li> 
                    <li>Gesto: <?php echo $answer['Actividad 1']['Pregunta 2'] ?></li> 
                    <li>Lenguaje: <?php echo $answer['Actividad 1']['Pregunta 3'] ?></li> 
                    <li>Semiótica: <?php echo $answer['Actividad 1']['Pregunta 4'] ?></li>
                    <li>Símbolo: <?php echo $answer['Actividad 1']['Pregunta 5'] ?></li> 
                    <li>Paralingüistica: <?php echo $answer['Actividad 1']['Pregunta 6'] ?></li> 
                    <li>Proxémica: <?php echo $answer['Actividad 1']['Pregunta 7'] ?></li>
                    </ul>
                    <b>Pregunta 2: </b>¿Cuáles son las 3 formas de comunicación que considera usted que los estudiantes utilizan más?<br>
                    <ol class="m-2">
                    <li><?php echo $answer['Actividad 2']['Pregunta 1'] ?></li>
                    <li><?php echo $answer['Actividad 2']['Pregunta 2'] ?></li>
                    <li><?php echo $answer['Actividad 2']['Pregunta 3'] ?></li>
                    </ol>

                    <b>Pregunta 3: </b><?php echo $answer['Actividad 3']['Pregunta 1'] ?><br>
                    

                    <hr class="hr_4_color">
                <?php
                } else if($mod=='m4u1a5'){?>
                    <b class="m4act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b><?php echo $answer['Actividad 1']['Pregunta 1'] ?><br>
                    <b>Pregunta 2: </b>¿Qué son los medios audiovisuales?<br>
                    <?php echo $answer['Actividad 2']['Pregunta 1'] ?> <br>
                    <b>Pregunta 3: </b>¿Cómo se pueden usar los medios audiovisuales en el aula de clase?<br>
                    <?php echo $answer['Actividad 2']['Pregunta 2'] ?> <br>
              
                    <hr class="hr_4_color">
                <?php
                }else if($mod=='m4u1a7'){?>
                    <b class="m4act">Actividad 3</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué usos le puede dar a un collage en el salón de clase?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Qué símbolos, iconos o elementos usaría para la realización de un collage?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
              
                    <hr class="hr_4_color">
                <?php
                }else if($mod=='m4u1a8'){?>
                    <b class="m4act">Actividad 4</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué son los códigos?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Qué símbolos puede encontrar en la comunidad?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Qué elementos componen un collage?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
              
                    <hr class="hr_4_color">
                <?php
                }
            
            }else if($uno==false){
                echo "</div>";
                $uno= true;
            }

            if (in_array($mod, $mod4[2])) { $modulo4=false;
                if($dos){ $dos=false;?>
                    <button type="button" id="Bm4u2" class="m-all-u m4u" onclick="expandir('Bm4u2','m4u2Content',2)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 2</b> </button> <br> 
                    <div class="show" id="m4u2Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m4u2a2'){?>
                    <b class="m4act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Cómo este evento va a ser cubierto por un periódico, una estación de radio o una estación de televisión?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Cómo cree usted que la cobertura diferirá y por qué?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Cuántas de estas diferencias se basarían en las características particulares de cada medio?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    
                    <hr class="hr_4_color">
                <?php
                } else if($mod=='m4u2a3'){?>
                    <b class="m4act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Cómo los distintos medios afectan al tipo de cobertura y a la información que se puede dar?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Qué códigos y convenciones se utilizan en el desarrollo de cada historia?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿De qué forma este ejercicio es un ejemplo de la frase “el medio es el mensaje”?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    
                    <hr class="hr_4_color">
                <?php
                }

            }else if($dos==false){
                echo "</div>";
                $dos= true;
            }

            if (in_array($mod, $mod4[3])) { $modulo4=false;
                if($tres){ $tres=false;?>
                    <button type="button" id="Bm4u3" class="m-all-u m4u" onclick="expandir('Bm4u3','m4u3Content',3)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 3</b> </button> <br> 
                    <div class="show" id="m4u3Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m4u3a4'){?>
                    <b class="m4act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué mensajes y valores se transmiten a través del uso de estos elementos en la película?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Qué usos le puede dar a un storyboard en el aula de clase?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Qué impresión de la película se transmite a través de los carteles?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>¿Qué códigos técnicos y simbólicos se utilizan? ¿Cuál es el propósito?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>
                    <b>Pregunta 5: </b>Basándose en los carteles, ¿puede identificar cuál es la audiencia seleccionada para cada película?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 5'] ?> <br>
                    <b>Pregunta 6: </b>A través de los carteles, ¿qué información se transmite sobre cada película?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 6'] ?> <br>
                  
                    <hr class="hr_4_color">

                <?php
                }else if($mod=='m4u3a5'){?>
                    <b class="m4act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué análisis puede realizar a partir de la modificación de los carteles de las películas?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Considera que las películas pueden hacer parte de los medios audiovisuales usados en el aula?¿Por qué?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Cómo cree que las películas influyen en la vida de los estudiantes?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                  
                    <hr class="hr_4_color">

                <?php
                }

            }else if($tres==false){
                echo "</div>";
                $tres= true;
            }

            if (in_array($mod, $mod4[4])) { $modulo4=false;
                if($cuatro){ $cuatro=false;?>
                    <button type="button" id="Bm4u4" class="m-all-u m4u" onclick="expandir('Bm4u4','m4u4Content',4)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 4</b> </button> <br> 
                    <div class="show" id="m4u4Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m4u4a1'){?>
                    <b class="m4act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Describa el significado que se transmite a través de los “lenguajes” de la cámara que se utilizan en cada texto.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Describa cómo se coloca al sujeto en la foto o en el metraje.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Cuál es la impresión que se transmite como resultado?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    
                    <b>Pregunta 4: </b>Describa cuál es la posición de la audiencia en relación al sujeto.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>
                    <b>Pregunta 5: </b>Si usted cambiara o sustituyera un ángulo distinto de la cámara o disparo, ¿cómo cambiaría el significado que se transmite a través de la foto o del metraje?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 5'] ?> <br>
                    <b>Pregunta 6: </b>¿Qué tipo de ángulos de cámara o qué tipos de disparos usted escogería para su cobertura y por qué?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 6'] ?> <br>
                    
                    <b>Pregunta 7: </b>Desarrolle una pequeña lista de tomas para cubrir este evento<br>
                    <?php echo $answer['Actividad 1']['Pregunta 7'] ?> <br>
                    <b>Pregunta 8: </b>¿De qué forma este trabajo de cámara le ayudará a transmitir la información necesaria y la impresión que desea sobre el evento?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 8'] ?> <br>
                    
                   
                    <hr class="hr_4_color">	

                <?php
                } else if($mod=='m4u4a2'){?>
                    <b class="m4act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué trabajo cumple la cámara en los textos mediáticos?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Qué símbolos se pueden encontrar en las imágenes?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    
                   
                    <hr class="hr_4_color">	

                <?php
                }
            }

        }
    }
    if($cuatro==false || $tres==false || $dos==false || $uno==false){
        echo "</div>";
        // $cuatro=$tres=$dos=$uno= true;
    }
    if($modulo4){
        echo "No hay datos para mostrar";
        $modulo4=false;
    }
}else{
    echo "No hay datos para mostrar";
}
?>