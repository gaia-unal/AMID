<?php

if(isset($actividad)){
    $modulo11=true;
    $uno=$dos=$tres=$cuatro=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod11=[
            ['m11u1a2',
            'm11u2a2',
            'm11u3a2',
            'm11u4a2'],
            ['m11u1a2'],
            ['m11u2a2'],
            ['m11u3a2'],
            ['m11u4a2']
        ];
        
        if (in_array($mod, $mod11[0])) {
            
            if (in_array($mod, $mod11[1])) { $modulo11=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm11u1" class="m-all-u m11u" onclick="expandir('Bm11u1','m11u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m11u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m11u1a2'){?>
                    <b class="m11act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_11_color">
                <?php
                }
            
            }else if($uno==false){
                echo "</div>";
                $uno= true;
            }

            if (in_array($mod, $mod11[2])) { $modulo11=false;
                if($dos){ $dos=false;?>
                    <button type="button" id="Bm11u2" class="m-all-u m11u" onclick="expandir('Bm11u2','m11u2Content',2)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 2</b> </button> <br> 
                    <div class="show" id="m11u2Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m11u2a2'){?>
                    <b class="m11act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    
                    <hr class="hr_11_color">
                <?php
                }

            }else if($dos==false){
                echo "</div>";
                $dos= true;
            }

            if (in_array($mod, $mod11[3])) { $modulo11=false;
                if($tres){ $tres=false;?>
                    <button type="button" id="Bm11u3" class="m-all-u m11u" onclick="expandir('Bm11u3','m11u3Content',3)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 3</b> </button> <br> 
                    <div class="show" id="m11u3Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m11u3a2'){?>
                    <b class="m11act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                  
                    <hr class="hr_11_color">

                <?php
                }

            }else if($tres==false){
                echo "</div>";
                $tres= true;
            }

            if (in_array($mod, $mod11[4])) { $modulo11=false;
                if($cuatro){ $cuatro=false;?>
                    <button type="button" id="Bm11u4" class="m-all-u m11u" onclick="expandir('Bm11u4','m11u4Content',4)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 4</b> </button> <br> 
                    <div class="show" id="m11u4Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m11u4a2'){?>
                    <b class="m11act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                   
                    <hr class="hr_11_color">	

                <?php
                }
            }

        }
    }
    if($cuatro==false || $tres==false || $dos==false || $uno==false){
        echo "</div>";
        // $cuatro=$tres=$dos=$uno= true;
    }
    if($modulo11){
        echo "No hay datos para mostrar";
        $modulo11=false;
    }
}else{
    echo "No hay datos para mostrar";
}
?>