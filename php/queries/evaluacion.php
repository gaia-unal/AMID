<?php
    //$ruta='/proyectos/AMID_1/AMID%20Diego/php/layouts/modulos';
    $ruta = '../layouts/modulos';
    
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

    switch($_GET["id_und"]){
        case "m7u11":
            $id_und = 'm7u1';
            $nota = 0;
            for($i = 1; $i <= 6; $i++){
                $nota = $nota + (double)$_POST['preg'. $i];
            }
            $rt = '/modulo7/modulo7.1/mod7.1_eval2.php';
            $des = asigDes($nota);
            if($nota <= 0){
                $nota = 1;
            }
            nota($id_und,$nota,$des);
            header ("Location: $ruta.$rt");
            break;
        case "m7u12":
            $id_und = 'm7u1';
            $nota = $_POST['preg'];
            $nota = round(($nota + prom($id_und))/2,2);
            $rt = '/modulo7/modulo7.2/mod7.2_inicio.php';
            $des = asigDes($nota);
            if($nota <= 0){
                $nota = 1;
            }
            nota($id_und,$nota,$des);
            header ("Location: $ruta.$rt");
            break;
        case "m7u21":
            $id_und = 'm7u2';
            $nota = 0;
            for($i = 1; $i <= 6; $i++){
                $nota = $nota + (double)$_POST['preg'. $i];
            }
            $rt = '/modulo7/modulo7.2/mod7.2_eval2.php';
            $des = asigDes($nota);
            if($nota <= 0){
                $nota = 1;
            }
            nota($id_und,$nota,$des);
            header ("Location: $ruta.$rt");
            break;
        case "m7u22":
            $id_und = 'm7u2';
            $nota = $_POST['preg'];
            $nota = ($nota + prom($id_und))/2;
            $rt = '/modulo8/module8.php';
            $des = asigDes($nota);
            if($nota <= 0){
                $nota = 1;
            }
            nota($id_und,$nota,$des);
            estadoMod(7,2);
            header ("Location: $ruta.$rt");
            break;
        case "m8u1":
            $id_und = $_GET["id_und"];
            $nota = (double)$_POST['preg'];
            $des = asigDes($nota);
            if($nota <= 0){
                $nota = 1;
            }
            nota ($id_und,$nota,$des);
            header ("Location: $ruta/modulo8/modulo8.2/module8.2_inicio.php");
            break;
        case "m8u2":
            $id_und = $_GET["id_und"];
            $nota = (double)($_POST['preg1'] + $_POST['preg2'] + $_POST['preg3']);
            $des = asigDes($nota);
            if($nota <= 0)
                $nota = 1;
            nota ($id_und, $nota, $des);
            header ("Location: $ruta/modulo8/modulo8.3/module8.3_inicio.php");
            break;
        case "m8u3":
            $id_und = $_GET["id_und"];
            $nota = (double)$_POST['preg'];
            $des = asigDes($nota);
            if($nota <= 0)
                $nota = 1;
            nota ($id_und, $nota, $des);
            estadoMod(8,2);
            header ("Location: $ruta/modulo9/module9.php");
            break;
        case "m9u1":
            $id_und = $_GET["id_und"];
            $nota = (double)$_POST['preg'];
            $des = asigDes($nota);
            if($nota <= 0)
                $nota = 1;
            nota ($id_und, $nota, $des);
            header ("Location: $ruta/modulo9/modulo9.2/module9.2_inicio.php");
            break;
        case "m9u2":
            $id_und = $_GET["id_und"];
            $nota = (double)$_POST['preg'];
            $des = asigDes($nota);
            if($nota <= 0)
                $nota = 1;
            nota ($id_und, $nota, $des);
            header ("Location: $ruta/modulo9/modulo9.3/module9.3_inicio.php");
            break;
        case "m9u3":
            $id_und = $_GET["id_und"];
            $nota = (double)$_POST['preg'];
            $des = asigDes($nota);
            if($nota <= 0)
                $nota = 1;
            nota ($id_und, $nota, $des);
            estadoMod(9,2);
            header ("Location: $ruta/modulo10/module10.php");
            break;
        case "m10":
            estadoMod(10,2);
            header ("Location: $ruta/modulo11/module11.php");
            break;
        case "m11u4":
            estadoMod(11,2);
            header ("Location: $ruta/modulo12/module12.php");
            break;
        case "m12":
            estadoMod(12,2);
            header ("Location: ../../../index.php");
            break;
    }

    function prom($idu){
        $id_profe = $_SESSION['id'];
        $sql_consult = "SELECT notaevaluacion FROM profesorunidad 
        WHERE id_unidad = '$idu' AND id_profesor='".$id_profe."'";

        $execute_consult = pg_query($sql_consult);
        if(pg_num_rows($execute_consult)!=0){
            $estado = pg_fetch_array($execute_consult);
            return $estado[0];
        } else 
            return -1; //No ha realizado la primera evaluación
            
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