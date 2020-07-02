<?php
    function estadoMod($idmod, $est){
    
        $id_profe=$_SESSION['id'];
        
        $sql_consult= "SELECT id_modulo,id_profesor,fkid_estado FROM profesormodulo 
        WHERE id_modulo = $idmod AND id_profesor='".$id_profe."'";

        $execute_consult = pg_query($sql_consult);

        if(pg_num_rows($execute_consult)!=0){
            $estado = pg_fetch_array($execute_consult);
            if($estado['fkid_estado']!=$est && $est!=1){
                $sql_update = "UPDATE profesormodulo SET fkid_estado=$est 
                WHERE id_modulo = $idmod AND id_profesor='".$id_profe."'";
                $execute_update = pg_query($sql_update);
            }
        }else{
            $sql_insert = "INSERT INTO profesormodulo (id_modulo,id_profesor,fkid_estado) VALUES ($idmod,'".$id_profe."', $est)";
            $execute_insert = pg_query($sql_insert);
        }
  
    }
?>