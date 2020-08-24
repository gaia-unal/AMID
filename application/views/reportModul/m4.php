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
              
                    <hr class="hr_4_color">
                <?php
                } else if($mod=='m4u1a5'){?>
                    <b class="m4act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_4_color">
                <?php
                }else if($mod=='m4u1a7'){?>
                    <b class="m4act">Actividad 3</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_4_color">
                <?php
                }else if($mod=='m4u1a8'){?>
                    <b class="m4act">Actividad 4</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
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
                    
                    <hr class="hr_4_color">
                <?php
                } else if($mod=='m4u2a3'){?>
                    <b class="m4act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    
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
                  
                    <hr class="hr_4_color">

                <?php
                }else if($mod=='m4u3a5'){?>
                    <b class="m4act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                  
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
                   
                    <hr class="hr_4_color">	

                <?php
                } else if($mod=='m4u4a2'){?>
                    <b class="m4act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                   
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