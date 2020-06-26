<?php
    $ruta='/proyectos/AMID_1/AMID/php/layouts/modulos';
    // $ruta='/AMID/php/layouts/modulos';

    require_once "connectionDB.php"; 
    $newConn= new Connection;
    $newConn->connectionDB();
    require_once 'activeSession.php';
    include_once 'estadoMod.php'; 

    
    
    if($_GET["id_und"]=='m1u1'){
        $id_und=$_GET["id_und"];
        $nota= (double)$_POST['pre1'];
        $des=asigDes($nota);
        nota($id_und,$nota,$des);
        header ("Location: $ruta/modulo1/modulo1.2/module1.2_inicio.php");
    }else if($_GET["id_und"]=='m1u2'){
        $id_und=$_GET["id_und"];
        $nota= (double)$_POST['opc1'];
        $des=asigDes($nota);
        nota($id_und,$nota,$des);
        header ("Location: $ruta/modulo1/modulo1.3/module1.3_inicio.php");

    }else if($_GET["id_und"]=='m1u3'){
        $id_und=$_GET["id_und"];
        $nota=0;
        if(isset($_POST['temas_1']) && !is_null($_POST['temas_1']) && !empty($_POST['temas_1'])){
            $nota=$nota+2.5;
        }
        if(isset($_POST['temas_2']) && !is_null($_POST['temas_2']) && !empty($_POST['temas_2'])){
            $nota=$nota+2.5;
        }
        if(isset($_POST['temas_3']) && !is_null($_POST['temas_3']) && !empty($_POST['temas_3'])){
            $nota=$nota-2.5;
        }
        if(isset($_POST['temas_4']) && !is_null($_POST['temas_4']) && !empty($_POST['temas_4'])){
            $nota=$nota-2.5;
        }
        if($nota<=0){
            $nota=1;
        }

        // echo $nota;
        // $nota= (double)$_POST['opc1'];
        $des=asigDes($nota);
        nota($id_und,$nota,$des);
        header ("Location: $ruta/modulo1/modulo1.4/module1.4_inicio.php");

    }else if($_GET["id_und"]=='m1u4'){
        $id_und=$_GET["id_und"];
        $nota= (double)$_POST['pregunta_1'];
        $des=asigDes($nota);
        nota($id_und,$nota,$des);
        estadoMod(1,2); //first number is id module, second number is state
        header ("Location: $ruta/modulo2/module2.php");

    }else if($_GET["id_und"]=='m2u1'){
        $id_und=$_GET["id_und"];
        $nota= round(((double)$_POST['p1']+(double)$_POST['p2']+(double)$_POST['p3'])/3.0,2);
        $des=asigDes($nota);
        nota($id_und,$nota,$des);
        header ("Location: $ruta/modulo2/modulo2.2/module2.2_inicio.php");
    }

    function asigDes($nota){
        if($nota<3){
            return 'Malo';
        }else if ($nota<=4){
            return 'Regular';
        }
        return 'Bueno';
    }

    function nota($id, $nota,$des){

        $id_profe=$_SESSION['id'];
        $time = date("d-m-Y",time());

        $sql_consult= "SELECT id_unidad,id_profesor,desempeñounidad,notaevaluacion FROM profesorunidad 
        WHERE id_unidad = '$id' AND id_profesor='".$id_profe."'";

        $execute_consult = pg_query($sql_consult);

        if(pg_num_rows($execute_consult)!=0){
            $estado = pg_fetch_array($execute_consult);
            if($estado['desempeñounidad']!=$des || $estado['notaevaluacion']!=$nota){
                $sql_update = "UPDATE profesorunidad 
                SET desempeñounidad= '$des' , fecharealizacion='$time' , notaevaluacion = $nota
                WHERE id_unidad = '$id' AND id_profesor='".$id_profe."'";
                $execute_update = pg_query($sql_update);
            }
        }else{
            $sql_insert = "INSERT INTO profesorunidad VALUES ('$id', '".$id_profe."', $nota, '$des','$time')";
            $result = pg_query($sql_insert);
        }
    }
?>