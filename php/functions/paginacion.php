<?php 
function pag($nivel){
    ?>
    <div class='card-body'>
        <ul class='pagination justify-content-center'>
            <?php
            $id_profesor=intval($_SESSION['id']);
            for($i = 1; $i <=12; $i++){

                $consulta = "SELECT fkid_estado FROM profesormodulo WHERE id_profesor = $id_profesor AND id_modulo = $i";
                $result = pg_query($consulta);
                if($i == 7){
                    ?>
                    </ul>
                    <ul class='pagination justify-content-center'>
                    <?php
                }
                
                if ($nivel==0) //Esta en el inicio
                    $ruta="modulos/";
                else if ($nivel==1) //Esta en el inicio de un módulo
                    $ruta="../";
                else if ($nivel==2) //Esta en el inicio de una unidad de un módulo (eval/inicio/temas)
                    $ruta="../../";
                else
                    $ruta="../../../"; //Esta en los recursos de una unidad

                if(pg_num_rows($result) != 0){
                    $estado = pg_fetch_array($result);
                    //1: Iniciado. 2: Finalizado
                    echo "<li class='page-item'><a class='page-link estado_$estado[0]' href='".$ruta."modulo$i/module$i.php'>Módulo $i</a></li>";   
                }else{
                    echo "<li class='page-item'><a class='page-link estado_3' href='".$ruta."modulo$i/module$i.php'>Módulo $i</a></li>";   
                } 
            }
            ?>
        </ul>
        <h4>Avance de la metodología</h4>
    </div>
    <?php  
}
?>