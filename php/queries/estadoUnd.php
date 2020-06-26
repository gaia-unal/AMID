<?php
    function estadoUnd($idu, $est){

        $id_profe=$_SESSION['id'];
        $dateNow = date("d-m-Y",time());

        $sql_consult= "SELECT id_unidad,id_profesor,desempeñounidad FROM profesorunidad 
        WHERE id_unidad = '$idu' AND id_profesor='".$id_profe."'";

        $execute_consult = pg_query($sql_consult);

        if(pg_num_rows($execute_consult)!=0){
            $estado = pg_fetch_array($execute_consult);
            if($estado['desempeñounidad']!=$est){
                $sql_update = "UPDATE profesorunidad SET desempeñounidad= '$est' , fecharealizacion='$dateNow'
                WHERE id_unidad = '$idu' AND id_profesor='".$id_profe."'";
                $execute_update = pg_query($sql_update);
            }
        }else{
            $sql_insert = "INSERT INTO profesorunidad (id_unidad,id_profesor,desempeñounidad,fecharealizacion) 
            VALUES ('$idu', '".$id_profe."', '$est','$dateNow')";
            $execute_insert = pg_query($sql_insert);
        }
    }
?>