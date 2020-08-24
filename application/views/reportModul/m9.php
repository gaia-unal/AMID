<?php

if(isset($actividad)){
    $modulo9=true;
    $uno=$dos=$tres=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod9=[
            ['m9u1a2',
            'm9u2a2',
            'm9u3a1','m9u3a2'],
            ['m9u1a2'],
            ['m9u2a2'],
            ['m9u3a1','m9u3a2']
        ];
        
        if (in_array($mod, $mod9[0])) {
            
            if (in_array($mod, $mod9[1])) { $modulo9=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm9u1" class="m-all-u m9u" onclick="expandir('Bm9u1','m9u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m9u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m9u1a2'){?>
                    <b class="m9act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_9_color">
                <?php
                }
            
            }else if($uno==false){
                echo "</div>";
                $uno= true;
            }

            if (in_array($mod, $mod9[2])) { $modulo9=false;
                if($dos){ $dos=false;?>
                    <button type="button" id="Bm9u2" class="m-all-u m9u" onclick="expandir('Bm9u2','m9u2Content',2)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 2</b> </button> <br> 
                    <div class="show" id="m9u2Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m9u2a2'){?>
                    <b class="m9act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    
                    <hr class="hr_9_color">
                <?php
                }

            }else if($dos==false){
                echo "</div>";
                $dos= true;
            }

            if (in_array($mod, $mod9[3])) { $modulo9=false;
                if($tres){ $tres=false;?>
                    <button type="button" id="Bm9u3" class="m-all-u m9u" onclick="expandir('Bm9u3','m9u3Content',3)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 3</b> </button> <br> 
                    <div class="show" id="m9u3Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m9u3a1'){?>
                    <b class="m9act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                  
                    <hr class="hr_9_color">

                <?php
                } else if($mod=='m9u3a2'){?>
                    <b class="m9act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                  
                    <hr class="hr_9_color">

                <?php
                }

            }

           

        }
        
    }

    if($tres==false || $dos==false || $uno==false){
        echo "</div>";
        // $tres=$dos=$uno= true;
    }

    if($modulo9){
        echo "No hay datos para mostrar";
        $modulo9=false;
    }
}else{
    echo "No hay datos para mostrar";
}
?>