<?php

if(isset($actividad)){
    $modulo10=true;
    $uno=true;
    foreach($actividad->result() as $act){

        $mod=$act->id_actividad;
        $answer=json_decode($act->respuesta,true);

        $mod10=[
            ['m10u1a1', 'm10u1a2', 'm10u1a3'],

            ['m10u1a1', 'm10u1a2', 'm10u1a3']
        ];
        
        if (in_array($mod, $mod10[0])) {
            
            if (in_array($mod, $mod10[1])) { $modulo10=false;
                if($uno){ $uno=false;?>
                    <button type="button" id="Bm10u1" class="m-all-u m10u" onclick="expandir('Bm10u1','m10u1Content',1)"><b> <i class="fas fa-chevron-circle-right" title="Expandir"></i> Unidad 1</b> </button> <br> 
                    <div class="show" id="m10u1Content" style="visibility: hidden;opacity: 0;height: 0px;transition: all 0.5s;">
                <?php }

                if($mod=='m10u1a1'){?>
                    <b class="m10act">Actividad 1</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_10_color">
                <?php
                } else if($mod=='m10u1a2'){?>
                    <b class="m10act">Actividad 2</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_10_color">
                <?php
                }else if($mod=='m10u1a3'){?>
                    <b class="m10act">Actividad 3</b> <br>
                    <b>Fecha de realización: </b><?php echo $act->fecharealizacion ?><br>
                    <b>Nota: </b><?php echo $act->nota ?><br>
              
                    <hr class="hr_10_color">
                <?php
                }
            
            }


        }
    }
    if($uno==false){
        echo "</div>";
        // $uno= true;
    }
    if($modulo10){
        echo "No hay datos para mostrar";
        $modulo10=false;
    }
}else{
    echo "No hay datos para mostrar";
}
?>