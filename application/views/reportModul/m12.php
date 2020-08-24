<?php

if(isset($actividad)){
    $modulo12=true;
    $uno=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod12=[
            ['m12u1a1', 'm12u1a2'],

            ['m12u1a1', 'm12u1a2']
        ];
        
        if (in_array($mod, $mod12[0])) {
            
            if (in_array($mod, $mod12[1])) { $modulo12=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm12u1" class="m-all-u m12u" onclick="expandir('Bm12u1','m12u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m12u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m12u1a1'){?>
                    <b class="m12act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_12_color">
                <?php
                } else if($mod=='m12u1a2'){?>
                    <b class="m12act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_12_color">
                <?php
                }else if($mod=='m12u1a3'){?>
                    <b class="m12act">Actividad 3</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_12_color">
                <?php
                }
            
            }


        }
    }
    if($uno==false){
        echo "</div>";
        // $uno= true;
    }
    if($modulo12){
        echo "No hay datos para mostrar";
        $modulo12=false;
    }
}else{
    echo "No hay datos para mostrar";
}
?>