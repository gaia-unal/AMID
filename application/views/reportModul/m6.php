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
              
                    <hr class="hr_6_color">
                <?php
                } else if($mod=='m6u1a3'){?>
                    <b class="m6act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
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
                    
                    <hr class="hr_6_color">
                <?php
                }else if($mod=='m6u2a2'){?>
                    <b class="m6act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    
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