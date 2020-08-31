<?php

if(isset($actividad)){
    $modulo6=true;
    $uno=$dos=$tres=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod6=[
            ['m6u1a2','m6u1a3',
            'm6u2a1','m6u2a2',
            'm6u3a1'],

            ['m6u1a2','m6u1a3'],
            ['m6u2a1','m6u2a2'],
            ['m6u3a1']
        ];
        
        if (in_array($mod, $mod6[0])) {
            
            if (in_array($mod, $mod6[1])) { $modulo6=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm6u1" class="m-all-u m6u" onclick="expandir('Bm6u1','m6u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m6u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m6u1a2'){?>
                    <b class="m6act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Cuál considera usted que es la medida en la cual el conocimiento y la información han cambiado o han permanecido iguales a medida que los nuevos medios y las nuevas tecnologías mediáticas han emergido en nuestra sociedad?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Cómo la emergencia de los nuevos medios ha tenido impacto sobre la forma en cómo las personas interactúan y cómo esto las beneficia?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Discuta sobre la diferencia entre los temas de noticia de opinión de un bloguero individual y un reportaje noticioso que aparece en la versión en línea de un periódico.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
              
                    <hr class="hr_6_color">
                <?php
                } else if($mod=='m6u1a3'){?>
                    <b class="m6act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Cómo se utilizó Internet en sus inicios y cómo se ha ido utilizando ahora?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Evalúe las aplicaciones y beneficios del uso de los medios en la educación, la sociedad cívica y la gobernabilidad<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>Investigue cómo los medios digitales presentan oportunidades para la libertad de palabra en su sociedad y su alcance. Preste atención a cómo las personas utilizan los nuevos medios para la auto-expresión. También debe anotar cómo los medios tradicionales (periódicos, radio y televisión) convergen con los nuevos medios (por Ej. sitios de noticias en línea con acceso de multimedia) en sus sociedades.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    
                    <b>Pregunta 4: </b>Investigue hasta qué punto los nuevos medios son un reto para los medios tradicionales de noticias en su sociedad, los distintos tipos de medios que las personas en su sociedad están utilizando para expresar sus propios puntos de vista en temas de noticias importantes, y los usuarios de las diferentes plataformas mediáticas, junto con los temas/tópicos que están discutiendo.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>
                    <b>Pregunta 5: </b>Escriba párrafo sobre las principales diferencias entre los medios tradicionales y los nuevos, discutiendo hasta qué punto las diferencias son reales o artificiales. En el párrafo, evalúe las similitudes y diferencias entre los medios tradicionales y los electrónicos o digitales. Se deberán resaltar temas como responsabilidad editorial, verificación y otros principios del periodismo.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 5'] ?> <br>
                                  
                    <hr class="hr_6_color">
                <?php
                }
            
            }else if($uno==false){
                echo "</div>";
                $uno= true;
            }

            if (in_array($mod, $mod6[2])) { $modulo6=false;
                if($dos){ $dos=false;?>
                    <button type="button" id="Bm6u2" class="m-all-u m6u" onclick="expandir('Bm6u2','m6u2Content',2)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 2</b> </button> <br> 
                    <div class="show" id="m6u2Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m6u2a1'){?>
                    <b class="m6act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué tipo de proyecto de e-gobernanza usted recomendaría para su gobierno local? ¿Por qué?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Cree usted que las mujeres tienen igual acceso a las tecnologías que los hombres?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Hasta qué punto cree que las personas con discapacidades o personas que viven en comunidades remotas tienen acceso?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    
                    <b>Pregunta 4: </b>¿Qué se debería hacer si ciertos grupos están marginalizados al acceso a las nuevas tecnologías?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>
                    <b>Pregunta 5: </b>¿Cómo cree usted que la tecnología de los teléfonos móviles ha ayudado a cerrar la brecha de comunicación entre los ricos y los pobres en la sociedad?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 5'] ?> <br>
                    <b>Pregunta 6: </b>¿Cuáles son los riesgos y desafíos que los profesores podrían encontrar al usar las redes sociales para propósitos educativos?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 6'] ?> <br>
                    
                    <hr class="hr_6_color">
                <?php
                }else if($mod=='m6u2a2'){?>
                    <b class="m6act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Cómo la tecnología de los teléfonos móviles ha ayudado a cerrar la brecha de comunicación entre los ricos y los pobres en la sociedad?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>Explore cómo la comunicación digital está cambiando la forma en la que las personas interactúan en la sociedad, comparten el conocimiento e intercambian información.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Cuáles son los riesgos y desafíos que los profesores podrían encontrar al usar las redes sociales para propósitos educativos? Identifique los riesgos y sugiera formas para reducir su impacto.<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>Utilice Internet para investigar el grado de gobierno electrónico que existe en su país. Debe elegir dos ejemplos como evidencia de que dichas actividades existen e indicar hasta qué punto ellos están involucrados o se les consulta en el proceso. ¿Se les consultó a los ciudadanos en general? Hable sobre la eficacia de estos proyectos de e-gobernanza. ¿Cuáles son los beneficios y las desventajas?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>

                    <hr class="hr_6_color">
                <?php
                }

            }else if($dos==false){
                echo "</div>";
                $dos= true;
            }

            if (in_array($mod, $mod6[3])) { $modulo6=false;
                if($tres){ $tres=false;?>
                    <button type="button" id="Bm6u3" class="m-all-u m6u" onclick="expandir('Bm6u3','m6u3Content',3)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 3</b> </button> <br> 
                    <div class="show" id="m6u3Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m6u3a1'){?>
                    <b class="m6act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    <b>Respuestas: </b> <br>
                    <b>Pregunta 1: </b>¿Qué criterio utilizó?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 1'] ?> <br>
                    <b>Pregunta 2: </b>¿Cuáles son sus observaciones?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 2'] ?> <br>
                    <b>Pregunta 3: </b>¿Está de acuerdo con el criterio de los expertos?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 3'] ?> <br>
                    <b>Pregunta 4: </b>En su lista de herramientas interactivas de multimedia, ¿puede identificar herramientas que podrían alterar o facilitar de una manera importante la cooperación y discusión en el proceso de enseñanza-aprendizaje? ¿Por qué escogió esas herramientas?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 4'] ?> <br>
                    <b>Pregunta 5: </b>¿Cómo cree usted que las tecnologías de multimedia podrían permitir a los estudiantes y profesores interactuar con la información de una nueva forma, cambiar el contenido, y crear su propio conocimiento?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 5'] ?> <br>
                    <b>Pregunta 6: </b>¿De qué forma un juego de computadora le puede ayudar a pensar creativamente sobre temas globales?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 6'] ?> <br>
                    <b>Pregunta 7: </b>¿Cuáles son los resultados de aprendizaje con estos juegos?<br>
                    <?php echo $answer['Actividad 1']['Pregunta 7'] ?> <br>
                    
                    <hr class="hr_6_color">

                <?php
                }

            }
            

        }
    }
    if($tres==false || $dos==false || $uno==false){
        echo "</div>";
        // $tres=$dos=$uno= true;
    }
    if($modulo6){
        echo "No hay datos para mostrar";
        $modulo6=false;
    }
}else{
    echo "No hay datos para mostrar";
}
?>