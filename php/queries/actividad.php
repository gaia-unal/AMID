<?php
    $ruta='/proyectos/AMID_1/AMID/php/layouts/modulos';
    // $ruta='/AMID/php/layouts/modulos';

    require_once "connectionDB.php"; 
    $newConn= new Connection;
    $newConn->connectionDB();
    require_once 'activeSession.php';

    date_default_timezone_set('America/Bogota');
    
    if($_GET["id_act"]=='m1u1a1'){
        $id_act=$_GET["id_act"];
        $nota= $_POST['pointsCanvas'];
        $points=$_POST['pointsGood'];
        $answer=$points.' correctos de 16';
        
        actividad($id_act,$nota,$answer);
        header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        
    }else if($_GET["id_act"]=='m1u2'){
        echo "hello";

    }

    function actividad($id, $nota,$answer){

        $id_profe=$_SESSION['id'];
        $time = date("d-m-Y",time());

        $sql_consult= "SELECT * FROM profesoractividad
        WHERE id_actividad = '$id' AND id_profesor='".$id_profe."'";

        $execute_consult = pg_query($sql_consult);

        if(pg_num_rows($execute_consult)!=0){
            $estado = pg_fetch_array($execute_consult);
            if($estado['respuesta']!=$answer || $estado['nota']!=$nota){
                $sql_update = "UPDATE profesoractividad
                SET respuesta= '$answer' , fecharealizacion='$time' , nota = $nota
                WHERE id_actividad = '$id' AND id_profesor='".$id_profe."'";
                $execute_update = pg_query($sql_update);
            }
        }else{
            $sql_insert = "INSERT INTO profesoractividad VALUES ('$id', '".$id_profe."', $answer, '$time','$nota')";
            $result = pg_query($sql_insert);
        }
    }
?>