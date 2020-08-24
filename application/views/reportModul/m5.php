<?php

if(isset($actividad)){
    $modulo5=true;
    $uno=$dos=$tres=$cuatro=$cinco=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod5=[
            ['m5u1a1','m5u1a2',
            'm5u2a1' ,'m5u2a2',
            'm5u3a1','m5u3a2',
            'm5u4a1','m5u4a2',
            'm5u5a1','m5u5a2'],
            ['m5u1a1','m5u1a2'],
            ['m5u2a1' ,'m5u2a2'],
            ['m5u3a1','m5u3a2'],
            ['m5u4a1','m5u4a2'],
            ['m5u5a1','m5u5a2']
        ];
        
        if (in_array($mod, $mod5[0])) {
            
            if (in_array($mod, $mod5[1])) { $modulo5=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm5u1" class="m-all-u m5u" onclick="expandir('Bm5u1','m5u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m5u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m5u1a1'){?>
                    <b class="m5act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    
                    <hr class="hr_5_color">
                <?php
                }else if($mod=='m5u1a2'){?>
                    <b class="m5act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    
                    <hr class="hr_5_color">
                <?php
                }
            
            }else if($uno==false){
                echo "</div>";
                $uno= true;
            }

            if (in_array($mod, $mod5[2])) { $modulo5=false;
                if($dos){ $dos=false;?>
                    <button type="button" id="Bm5u2" class="m-all-u m5u" onclick="expandir('Bm5u2','m5u2Content',2)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 2</b> </button> <br> 
                    <div class="show" id="m5u2Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m5u2a1'){?>
                    <b class="m5act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    
                    <hr class="hr_5_color">
                <?php
                }else if($mod=='m5u2a2'){?>
                    <b class="m5act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                    
                    <hr class="hr_5_color">
                <?php
                }

            }else if($dos==false){
                echo "</div>";
                $dos= true;
            }

            if (in_array($mod, $mod5[3])) { $modulo5=false;
                if($tres){ $tres=false;?>
                    <button type="button" id="Bm5u3" class="m-all-u m5u" onclick="expandir('Bm5u3','m5u3Content',3)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 3</b> </button> <br> 
                    <div class="show" id="m5u3Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m5u3a1'){?>
                    <b class="m5act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                  
                    <hr class="hr_5_color">

                <?php
                }else if($mod=='m5u3a2'){?>
                    <b class="m5act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                  
                    <hr class="hr_5_color">

                <?php
                }

            }else if($tres==false){
                echo "</div>";
                $tres= true;
            }

            if (in_array($mod, $mod5[4])) { $modulo5=false;
                if($cuatro){ $cuatro=false;?>
                    <button type="button" id="Bm5u4" class="m-all-u m5u" onclick="expandir('Bm5u4','m5u4Content',4)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 4</b> </button> <br> 
                    <div class="show" id="m5u4Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m5u4a1'){?>
                    <b class="m5act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                   
                    <hr class="hr_5_color">	

                <?php
                }else if($mod=='m5u4a2'){?>
                    <b class="m5act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                   
                    <hr class="hr_5_color">	

                <?php
                }
            }else if($cuatro==false){
                echo "</div>";
                $cuatro= true;
            }

            if (in_array($mod, $mod5[5])) { $modulo5=false;
                if($cinco){ $cinco=false;?>
                    <button type="button" id="Bm5u5" class="m-all-u m5u" onclick="expandir('Bm5u5','m5u5Content',5)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 5</b> </button> <br> 
                    <div class="show" id="m5u5Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m5u5a1'){?>
                    <b class="m5act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                   
                    <hr class="hr_5_color">	

                <?php
                }else if($mod=='m5u5a2'){?>
                    <b class="m5act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
                   
                    <hr class="hr_5_color">	

                <?php
                }
            }

        }
    }
    if($cinco==false || $cuatro==false || $tres==false || $dos==false || $uno==false){
        echo "</div>";
        // $cinco=$cuatro=$tres=$dos=$uno= true;
    }
    if($modulo5){
        echo "No hay datos para mostrar";
        $modulo5=false;
    }
}else{
    echo "No hay datos para mostrar";
}
?>