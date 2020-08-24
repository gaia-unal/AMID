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
                  
                    <hr class="hr_3_color">

                <?php
                }else if($mod=='m3u3a2'){?>
                    <b class="m3act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                  
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
                   
                    <hr class="hr_3_color">	

                <?php
                }else if($mod=='m3u4a3'){?>
                    <b class="m3act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                   
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