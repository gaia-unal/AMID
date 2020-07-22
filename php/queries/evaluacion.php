<?php
    
    $ruta = '../layouts/modulos';
    
    require_once "connectionDB.php"; 
    $newConn= new Connection;
    $newConn->connectionDB();

    require_once 'activeSession.php';
    include_once 'estadoMod.php'; 

    date_default_timezone_set('America/Bogota');

    switch($_GET["id_und"]){
        case "m1u1":
            $id_und=$_GET["id_und"];
            $nota= (double)$_POST['pre1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            header ("Location: $ruta/modulo1/modulo1.2/module1.2_inicio.php");
            break;
        case "m1u2":
            $id_und=$_GET["id_und"];
            $nota= (double)$_POST['opc1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            header ("Location: $ruta/modulo1/modulo1.3/module1.3_inicio.php");
        break;
        case "m1u3":
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
            if($nota<=0){$nota=1;}
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            header ("Location: $ruta/modulo1/modulo1.4/module1.4_inicio.php");
        
            break;
        case "m1u4":
            $id_und=$_GET["id_und"];
            $nota= (double)$_POST['pregunta_1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            estadoMod(1,2);
            header ("Location: $ruta/modulo2/module2.php");
            break;
        case "m2u1":
            $id_und=$_GET["id_und"];
            $nota= round(((double)$_POST['p1']+(double)$_POST['p2']+(double)$_POST['p3'])/3.0,2);
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            header ("Location: $ruta/modulo2/modulo2.2/module2.2_inicio.php");
            break;
        case "m2u2":
            $id_und=$_GET["id_und"];
            $nota= round(((double)$_POST['pre1']+(double)$_POST['pre2'])/2.0,2);
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            header ("Location: $ruta/modulo2/modulo2.3/module2.3_inicio.php");
            break;
        case "m2u3":
            $id_und=$_GET["id_und"];
            $nota= round(((double)$_POST['pre1']+(double)$_POST['pre2'])/2.0,2);
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            header ("Location: $ruta/modulo2/modulo2.4/module2.4_inicio.php");
            break;
        case "m2u4":
            $id_und=$_GET["id_und"];
            $nota= round(((double)$_POST['pre1']+(double)$_POST['pre2'])/2.0,2);
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            estadoMod(2,2);
            header ("Location: $ruta/modulo3/module3.php");
            break;
        case "m3u1":
            $id_und=$_GET["id_und"];
            $nota= round(((double)$_POST['pre1']+(double)$_POST['pre2'])/2.0,2);
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            header ("Location: $ruta/modulo3/modulo3.2/module3.2_inicio.php");
            break;
        case "m3u2":
            $id_und=$_GET["id_und"];
            $nota= round(((double)$_POST['pre1']+(double)$_POST['pre2'])/2.0,2);
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            header ("Location: $ruta/modulo3/modulo3.3/module3.3_inicio.php");
            break;
<<<<<<< HEAD
=======
        // case "m3u3":
        //     $id_und=$_GET["id_und"];
        //     // $nota= (double)$_POST['pregunta_1'];
        //     $des=asigDes($nota);
        //     nota($id_und,$nota,$des);
        //     // header ("Location: $ruta/modulo2/module2.php");
        //     break;
        // case "m3u4":
        //     $id_und=$_GET["id_und"];
        //     // $nota= (double)$_POST['pregunta_1'];
        //     $des=asigDes($nota);
        //     nota($id_und,$nota,$des);
        //     // header ("Location: $ruta/modulo2/module2.php");
        //     break;
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
        case "m3u5":
            $id_und=$_GET["id_und"];
            $nota= round(((double)$_POST['pre1']+(double)$_POST['pre2'])/2.0,2);
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            estadoMod(3,2);
            header ("Location: $ruta/modulo4/module4.php");
            break;
<<<<<<< HEAD
        case "m4u2":
            $id_und=$_GET["id_und"];
            $nota= (double)$_POST['pre1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            header ("Location: $ruta/modulo4/modulo4.3/module4.3_inicio.php");
            break;
        case "m4u4":
            estadoMod(4,2);
            header ("Location: $ruta/modulo5/module5.php");
            break;
        case "m5u5":
            estadoMod(5,2);
            header ("Location: $ruta/modulo6/module6.php");
            break;
        case "m6u3":
            $id_und=$_GET["id_und"];
            $nota= (double)$_POST['pre1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            estadoMod(6,2);
            header ("Location: $ruta/modulo7/module7.php");
=======
        case "m4u1":
            $id_und=$_GET["id_und"];
            // $nota= (double)$_POST['pregunta_1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            // header ("Location: $ruta/modulo2/module2.php");
            break;
        case "m4u2":
            $id_und=$_GET["id_und"];
            // $nota= (double)$_POST['pregunta_1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            // header ("Location: $ruta/modulo2/module2.php");
            break;
        case "m4u3":
            $id_und=$_GET["id_und"];
            // $nota= (double)$_POST['pregunta_1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            // header ("Location: $ruta/modulo2/module2.php");
            break;
        case "m4u4":
            $id_und=$_GET["id_und"];
            // $nota= (double)$_POST['pregunta_1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            estadoMod(4,2);
            // header ("Location: $ruta/modulo2/module2.php");
            break;
        case "m5u1":
            $id_und=$_GET["id_und"];
            // $nota= (double)$_POST['pregunta_1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            // header ("Location: $ruta/modulo2/module2.php");
            break;
        case "m5u2":
            $id_und=$_GET["id_und"];
            // $nota= (double)$_POST['pregunta_1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            // header ("Location: $ruta/modulo2/module2.php");
            break;
        case "m5u3":
            $id_und=$_GET["id_und"];
            // $nota= (double)$_POST['pregunta_1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            // header ("Location: $ruta/modulo2/module2.php");
            break;
        case "m5u4":
            $id_und=$_GET["id_und"];
            // $nota= (double)$_POST['pregunta_1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            estadoMod(5,2);
            // header ("Location: $ruta/modulo2/module2.php");
            break;
        case "m6u1":
            $id_und=$_GET["id_und"];
            // $nota= (double)$_POST['pregunta_1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            // header ("Location: $ruta/modulo2/module2.php");
            break;
        case "m6u2":
            $id_und=$_GET["id_und"];
            // $nota= (double)$_POST['pregunta_1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            // header ("Location: $ruta/modulo2/module2.php");
            break;
        case "m6u3":
            $id_und=$_GET["id_und"];
            // $nota= (double)$_POST['pregunta_1'];
            $des=asigDes($nota);
            nota($id_und,$nota,$des);
            estadoMod(6,2);
            // header ("Location: $ruta/modulo2/module2.php");
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
            break;
        case "m7u11":
            $id_und = 'm7u1';
            $nota = 0;
            for($i = 1; $i <= 6; $i++){
                $nota = $nota + (double)$_POST['preg'. $i];
            }
<<<<<<< HEAD
            $rt = 'modulo7/modulo7.1/mod7.1_eval2.php';

=======
            $rt = '/modulo7/modulo7.1/mod7.1_eval2.php';
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
            $des = asigDes($nota);
            if($nota < 1){
                $nota = 1;
            }
            nota($id_und,$nota,$des);
<<<<<<< HEAD
            header ("Location: $ruta/$rt");
=======
            header ("Location: $ruta.$rt");
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
            break;
        case "m7u12":
            $id_und = 'm7u1';
            $nota = $_POST['preg'];
            $nota = round(($nota + prom($id_und))/2,2);
<<<<<<< HEAD
            $rt = 'modulo7/modulo7.2/mod7.2_inicio.php';
=======
            $rt = '/modulo7/modulo7.2/mod7.2_inicio.php';
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
            $des = asigDes($nota);
            if($nota < 1){
                $nota = 1;
            }
            nota($id_und,$nota,$des);
<<<<<<< HEAD
            header ("Location: $ruta/$rt");
=======
            header ("Location: $ruta.$rt");
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
            break;
        case "m7u21":
            $id_und = 'm7u2';
            $nota = 0;
            for($i = 1; $i <= 6; $i++){
                $nota = $nota + (double)$_POST['preg'. $i];
            }
<<<<<<< HEAD
            $rt = 'modulo7/modulo7.2/mod7.2_eval2.php';
=======
            $rt = '/modulo7/modulo7.2/mod7.2_eval2.php';
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
            $des = asigDes($nota);
            if($nota < 1){
                $nota = 1;
            }
            nota($id_und,$nota,$des);
<<<<<<< HEAD
            header ("Location: $ruta/$rt");
=======
            header ("Location: $ruta.$rt");
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
            break;
        case "m7u22":
            $id_und = 'm7u2';
            $nota = $_POST['preg'];
            $nota = ($nota + prom($id_und))/2;
<<<<<<< HEAD
            $rt = 'modulo8/module8.php';
=======
            $rt = '/modulo8/module8.php';
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
            $des = asigDes($nota);
            if($nota < 1){
                $nota = 1;
            }
            nota($id_und,$nota,$des);
            estadoMod(7,2);
<<<<<<< HEAD
            header ("Location: $ruta/$rt");
=======
            header ("Location: $ruta.$rt");
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
            break;
        case "m8u1":
            $id_und = $_GET["id_und"];
            $nota = (double)$_POST['preg'];
            $des = asigDes($nota);
            if($nota < 1){
                $nota = 1;
            }
            nota ($id_und,$nota,$des);
            header ("Location: $ruta/modulo8/modulo8.2/module8.2_inicio.php");
            break;
        case "m8u2":
            $id_und = $_GET["id_und"];
            $nota = (double)($_POST['preg1'] + $_POST['preg2'] + $_POST['preg3']);
            $des = asigDes($nota);
            if($nota < 1)
                $nota = 1;
            nota ($id_und, $nota, $des);
            header ("Location: $ruta/modulo8/modulo8.3/module8.3_inicio.php");
            break;
        case "m8u3":
            $id_und = $_GET["id_und"];
            $nota = (double)$_POST['preg'];
            $des = asigDes($nota);
            if($nota < 1)
                $nota = 1;
            nota ($id_und, $nota, $des);
            estadoMod(8,2);
            header ("Location: $ruta/modulo9/module9.php");
            break;
        case "m9u1":
            $id_und = $_GET["id_und"];
            $nota = (double)$_POST['preg'];
            $des = asigDes($nota);
            if($nota < 1)
                $nota = 1;
            nota ($id_und, $nota, $des);
            header ("Location: $ruta/modulo9/modulo9.2/module9.2_inicio.php");
            break;
        case "m9u2":
            $id_und = $_GET["id_und"];
            $nota = (double)$_POST['preg'];
            $des = asigDes($nota);
            if($nota < 1)
                $nota = 1;
            nota ($id_und, $nota, $des);
            header ("Location: $ruta/modulo9/modulo9.3/module9.3_inicio.php");
            break;
        case "m9u3":
            $id_und = $_GET["id_und"];
            $nota = (double)$_POST['preg'];
            $des = asigDes($nota);
            if($nota < 1)
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
            header ("Location: ../layouts/inicio.php");
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
        date_default_timezone_set('America/Bogota');
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