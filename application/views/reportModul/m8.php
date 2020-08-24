<?php

if(isset($actividad)){
    $modulo8=true;
    $uno=$dos=$tres=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod8=[
            ['m8u1a1','m8u1a2',
            'm8u2a2',
            'm8u3a1','m8u3a2'],

            ['m8u1a1','m8u1a2'],
            ['m8u2a2'],
            ['m8u3a1','m8u3a2']
        ];
        
        if (in_array($mod, $mod8[0])) {
            
            if (in_array($mod, $mod8[1])) { $modulo8=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm8u1" class="m-all-u m8u" onclick="expandir('Bm8u1','m8u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m8u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m8u1a1'){?>
                    <b class="m8act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_8_color">
                <?php
                } else if($mod=='m8u1a2'){?>
                    <b class="m8act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_8_color">
                <?php
                }
            
            }else if($uno==false){
                echo "</div>";
                $uno= true;
            }

            if (in_array($mod, $mod8[2])) { $modulo8=false;
                if($dos){ $dos=false;?>
                    <button type="button" id="Bm8u2" class="m-all-u m8u" onclick="expandir('Bm8u2','m8u2Content',2)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 2</b> </button> <br> 
                    <div class="show" id="m8u2Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m8u2a2'){?>
                    <b class="m8act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    
                    <hr class="hr_8_color">
                <?php
                }

            }else if($dos==false){
                echo "</div>";
                $dos= true;
            }

            if (in_array($mod, $mod8[3])) { $modulo8=false;
                if($tres){ $tres=false;?>
                    <button type="button" id="Bm8u3" class="m-all-u m8u" onclick="expandir('Bm8u3','m8u3Content',3)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 3</b> </button> <br> 
                    <div class="show" id="m8u3Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m8u3a1'){?>
                    <b class="m8act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                  
                    <hr class="hr_8_color">

                <?php
                } else if($mod=='m8u3a2'){?>
                    <b class="m8act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                  
                    <hr class="hr_8_color">

                <?php
                }

            }
            

        }
    }
    if($tres==false || $dos==false || $uno==false){
        echo "</div>";
        // $tres=$dos=$uno= true;
        // echo " si entro -----";
    }
    if($modulo8){
        echo "No hay datos para mostrar";
        $modulo8=false;
    }
}else{
    echo "No hay datos para mostrar";
}
?>