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
                  
                    <hr class="hr_2_color">

                <?php
                }else if($mod=='m2u3a3'){?>
                    <b class="m2act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                  
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