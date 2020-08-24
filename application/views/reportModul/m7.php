<?php

if(isset($actividad)){
    $modulo7=true;
    $uno=$dos=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod7=[
            ['m7u1a2', 'm7u1a6', 'm7u1a8', 'm7u1a10',
            'm7u2a3','m7u2a5'],

            ['m7u1a2', 'm7u1a6', 'm7u1a8', 'm7u1a10'],
            ['m7u2a3','m7u2a5']
        ];
        
        if (in_array($mod, $mod7[0])) {
            
            if (in_array($mod, $mod7[1])) { $modulo7=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm7u1" class="m-all-u m7u" onclick="expandir('Bm7u1','m7u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m7u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m7u1a2'){?>
                    <b class="m7act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_7_color">
                <?php
                } else if($mod=='m7u1a6'){?>
                    <b class="m7act">Actividad 3</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_7_color">
                <?php
                }else if($mod=='m7u1a8'){?>
                    <b class="m7act">Actividad 4</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_7_color">
                <?php
                }else if($mod=='m7u1a10'){?>
                    <b class="m7act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_7_color">
                <?php
                }
            
            }else if($uno==false){
                echo "</div>";
                $uno= true;
            }

            if (in_array($mod, $mod7[2])) { $modulo7=false;
                if($dos){ $dos=false;?>
                    <button type="button" id="Bm7u2" class="m-all-u m7u" onclick="expandir('Bm7u2','m7u2Content',2)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 2</b> </button> <br> 
                    <div class="show" id="m7u2Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m7u2a3'){?>
                    <b class="m7act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    
                    <hr class="hr_7_color">
                <?php
                }else if($mod=='m7u2a5'){?>
                    <b class="m7act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    
                    <hr class="hr_7_color">
                <?php
                }

            }
            

        }
    }
    if($dos==false || $uno==false){
        echo "</div>";
        // $dos=$uno= true;
    }
    if($modulo7){
        echo "No hay datos para mostrar";
        $modulo7=false;
    }
}else{
    echo "No hay datos para mostrar";
}
?>