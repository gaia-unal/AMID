<?php

if(isset($actividad)){
    $modulo1=true;
    $uno=$dos=$tres=$cuatro=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod1=[
            ['m1u1a1','m1u1a3','m1u1a5','m1u1a6','m1u1a8','m1u1a9',
            'm1u2a2','m1u2a3','m1u2a5',
            'm1u3a3',
            'm1u4a3'],
            ['m1u1a1','m1u1a3','m1u1a5','m1u1a6','m1u1a8','m1u1a9'],
            ['m1u2a2','m1u2a3','m1u2a5'],
            ['m1u3a3'],
            ['m1u4a3']
        ];

        if (in_array($mod, $mod1[0])) {
            if (in_array($mod, $mod1[1])) { $modulo1=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm1u1" class="m-all-u m1u" onclick="expandir('Bm1u1','m1u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m1u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m1u1a1'){?>
                    <b class="m1act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Observación: </b><?php echo $answer['Actividad 1']['Pregunta 1'] ?><br>
                    <hr class="hr_1_color">
                <?php
                }else if($mod=='m1u1a3'){?>
                    <b class="m1act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Medios presentes en la vida de los estudiantes y profesores en la actualidad.<br>
                    <ol class="m-2">
                    <li><?php echo $answer['Actividad 1']['Pregunta 1'] ?></li>
                    <li><?php echo $answer['Actividad 1']['Pregunta 2'] ?></li>
                    <li><?php echo $answer['Actividad 1']['Pregunta 3'] ?></li>
                    <li><?php echo $answer['Actividad 1']['Pregunta 4'] ?></li>
                    <li><?php echo $answer['Actividad 1']['Pregunta 5'] ?></li>
                    </ol>
                    <b>Pregunta 2: </b>Roles y funciones de los medios.<br>
                    <?php echo $answer['Actividad 2']['Pregunta 1'] ?><br>
                    <hr class="hr_1_color">
                <?php
                }else if($mod=='m1u1a5'){?>
                    <b class="m1act">Actividad 3</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Observación: </b><?php echo $answer['Actividad 1']['Pregunta 1'] ?><br>
                    <hr class="hr_1_color">
                <?php
                }else if($mod=='m1u1a6'){?>
                    <b class="m1act">Actividad 4</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué es 'Alfabetización'?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Qué podría significar 'Alfabetización mediática'?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Qué podría significar 'Alfabetización informacional'?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>¿Qué podría significar 'Alfabetización digital'?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?><br>
                    <hr class="hr_1_color">
                <?php
                }else if($mod=='m1u1a8'){?>
                    <b class="m1act">Actividad 5</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Proveedores de información.<br>
                    <ol class="m-2">
                    <li><?php echo $answer['Actividad 1']['Pregunta 1'] ?></li>
                    <li><?php echo $answer['Actividad 1']['Pregunta 2'] ?></li>
                    <li><?php echo $answer['Actividad 1']['Pregunta 3'] ?></li>
                    <li><?php echo $answer['Actividad 1']['Pregunta 4'] ?></li>
                    <li><?php echo $answer['Actividad 1']['Pregunta 5'] ?></li>
                    </ol>
                    <b>Pregunta 2: </b>Papel que cumplen los proveedores.<br>
                    <?php echo $answer['Actividad 2']['Pregunta 1'] ?><br>
                    <hr class="hr_1_color">
                <?php
                }else if($mod=='m1u1a9'){?>
                    <b class="m1act">Actividad 6</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Quién decide qué libros deben ser incluidos en la bibliteca y cuáles deben ser excluidos?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Quién decide que recursos y con qué nivel deben ser asignados a las bibliotecas? <br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Quién decide qué libros son más importantes que otros?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>¿Las bibliotecas cumplen sus propositos?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?><br>
                    <hr class="hr_1_color">

                <?php
                }
            
            }else if($uno==false){
                echo "</div>";
                $uno= true;
            }

            if (in_array($mod, $mod1[2])) { $modulo1=false;
                if($dos){ $dos=false;?>
                    <button type="button" id="Bm1u2" class="m-all-u m1u" onclick="expandir('Bm1u2','m1u2Content',2)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 2</b> </button> <br> 
                    <div class="show" id="m1u2Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m1u2a2'){?>
                    <b class="m1act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Observación: </b><?php echo $answer['Actividad 1']['Pregunta 1'] ?><br>
                    <hr class="hr_1_color">
                <?php
                }else if($mod=='m1u2a3'){?>
                    <b class="m1act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    ¿Qué significan para usted los siguientes términos y a quién se aplican (a la información, al lector, etc.)? <br>
                    <b>Pregunta 1: </b>Proteger la privacidad<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Recolección y preservación<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Proveer acceso sin sesgos<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>Proveer acceso abierto<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?><br>
                    <hr class="hr_1_color">
                <?php
                }else if($mod=='m1u2a5'){?>
                    <b class="m1act">Actividad 3</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué es lo que hace a este medio independiente?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿De qué forma permite que las personas participen en el proceso democratico?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Qué hace a este medio diferente de losmedios principales o no independientes?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>¿Qué considera usted que hace a este medio no independiente?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>
                    <b>Pregunta 5: </b>¿De qué forma impide que las personas participen en el proceso democrático?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 5'] ?> <br>
                    <b>Pregunta 6: </b>¿Qué hace a este medio diferente de los medios alternativos o independientes?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 6'] ?> <br>
                    <b>Pregunta 7: </b>Argumentación obligación de los líderes<br>
                    <?php echo $answer['Actividad 1']['Pregunta 7'] ?> <br>
                    <b>Pregunta 8: </b>Opinión ciudadano bien informado<br>
                    <?php echo $answer['Actividad 1']['Pregunta 8'] ?><br>
                    <hr class="hr_1_color">
                <?php
                }

            }else if($dos==false){
                echo "</div>";
                $dos= true;
            }

            if (in_array($mod, $mod1[3])) { $modulo1=false;
                if($tres){ $tres=false;?>
                    <button type="button" id="Bm1u3" class="m-all-u m1u" onclick="expandir('Bm1u3','m1u3Content',3)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 3</b> </button> <br> 
                    <div class="show" id="m1u3Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m1u3a3'){?>
                    <b class="m1act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué es lo que puede aprender sobre la producción de medios e industrias, los mensajes que se transmiten, así como la audiencia seleccionada?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Cuáles son mis necesidades de información?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Cómo puedo identificar y definir esta necesidad?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>¿Acaso la información que yo necesito existe de la manera en que la necesito? ¿De lo contrario, que acción puedo tomar?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>
                    <b>Pregunta 5: </b>¿Cómo entender, organizar y valorar la información hallada?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 5'] ?> <br>
                    <b>Pregunta 6: </b>¿Cómo puedo presentar esta información en formatos que se puedan utilizar?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 6'] ?> <br>
                    <b>Pregunta 7: </b>¿Cómo puedo preservar, almacenar y reutilizar, grabar y archivar la información? <br>
                    <?php echo $answer['Actividad 1']['Pregunta 7'] ?> <br>
                    <b>Pregunta 8: </b>Actividades que usted hace durante el día.<br>
                    <ol class="m-2">
                    <li><?php echo $answer['Actividad 2']['Pregunta 1'] ?></li>
                    <li><?php echo $answer['Actividad 2']['Pregunta 2'] ?></li>
                    <li><?php echo $answer['Actividad 2']['Pregunta 3'] ?></li>
                    <li><?php echo $answer['Actividad 2']['Pregunta 4'] ?></li>
                    <li><?php echo $answer['Actividad 2']['Pregunta 5'] ?></li>
                    </ol>
                    <b>Pregunta 9: </b>¿Necesita información para participar en estas actividades?<br>
                    <?php echo $answer['Actividad 3']['Pregunta 8'] ?> <br>
                    <b>Pregunta 10: </b>¿Qué información necesita para su realización?<br>
                    <?php echo $answer['Actividad 3']['Pregunta 9'] ?> <br>
                    <b>Pregunta 11: </b>¿Qué tan importante es la información en su vida diaria? ¿Cuántas decisiones serían difíciles de tomar sin tener la información?<br>
                    <?php echo $answer['Actividad 3']['Pregunta 10'] ?> <br>
                    <hr class="hr_1_color">

                <?php
                }

            }else if($tres==false){
                echo "</div>";
                $tres= true;
            }

            if (in_array($mod, $mod1[4])) { $modulo1=false;
                if($cuatro){ $cuatro=false;?>
                    <button type="button" id="Bm1u4" class="m-all-u m1u" onclick="expandir('Bm1u4','m1u4Content',4)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 4</b> </button> <br> 
                    <div class="show" id="m1u4Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m1u4a3'){?>
                    <b class="m1act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>Enfoques con los cuales se siente más familiarizado. <br>
                    <ol class="m-2">
                    <li><?php echo $answer['Actividad 1']['Pregunta 1'] ?></li>
                    <li><?php echo $answer['Actividad 1']['Pregunta 2'] ?></li>
                    <li><?php echo $answer['Actividad 1']['Pregunta 3'] ?></li>
                    <li><?php echo $answer['Actividad 1']['Pregunta 4'] ?></li>
                    <li><?php echo $answer['Actividad 1']['Pregunta 5'] ?></li>
                    </ol>
                    <b>Pregunta 2: </b>Componentes claves que hacen que la enseñanza y el aprendizaje de AMI sean eficaces <br>
                    <?php echo $answer['Actividad 2']['Pregunta 1'] ?> <br>
                    <b>Pregunta 3: </b>Actividades que ilustran estas estrategias en su propio trabajo <br>
                    <?php echo $answer['Actividad 2']['Pregunta 2'] ?> <br>
                    <hr class="hr_1_color">	

                <?php
                }
            }

        }
    }
    if($cuatro==false || $tres==false || $dos==false || $uno==false){
        echo "</div>";
        // $cuatro=$tres=$dos=$uno= true;
    }
    if($modulo1){
        echo "No hay datos para mostrar";
        $modulo1=false;
    }
    
}else{
    echo "No hay datos para mostrar";
}
?>