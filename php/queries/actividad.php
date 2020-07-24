<?php

    $ruta = '../layouts/modulos';
    
    require_once "connectionDB.php"; 
    $newConn= new Connection;
    $newConn->connectionDB();

    require_once 'activeSession.php';


    date_default_timezone_set('America/Bogota');
    
    $id_act=$_GET["id_act"];

    switch($id_act){
        case "m1u1a1":
            $nota= $_POST['pointsCanvas'];
            $points=$_POST['pointsGood'];
            $answer="Actividad 1 = ".$points." correctos de 16";
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m1u1a3":
            $r1= "".$_POST['medios1'].", ".$_POST['medios2'].", ".$_POST['medios3'].", ".$_POST['medios4'].", ".$_POST['medios5']."";
            
            $tel=$rad=$rs=0;

            for ($i=1; $i <=8 ; $i++) { 
                for ($j=1; $j <=3 ; $j++) { 
                    if(isset($_POST[''.$i.$j.''])){
                        if($j==1) $tel++;
                        else if ($j==2) $rad++;
                        else if($j==3) $rs++;
                    }
                }
            }  
            $r2="Televisión : ".$tel.", Radio : ".$rad.", Redes Sociales : ".$rs."";
            
            $answer="Actividad 1 = ".$r1."; Actividad 2 = ".$r2;
            $nota="No Aplica";
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.4.php");
        break;
        case "m1u1a5":
            $nota= $_POST['pointsCanvas'];
            $points=$_POST['pointsGood'];
            $answer="Actividad 1 = ".$points." correctos de 4";
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.6.php");
        break;
        case "m1u1a6":
            $nota="No Aplica";
            $answer="Pregunta 1 = ".$_POST['preg1']." Pregunta 2 = ".$_POST['preg2']." Pregunta 3 = ".$_POST['preg3']." Pregunta 4 = ".$_POST['preg4']."";
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.7.php");
        break;
        case "m1u1a8":
            $r1= "".$_POST['proveedor1'].", ".$_POST['proveedor2'].", ".$_POST['proveedor3'].", ".$_POST['proveedor4'].", ".$_POST['proveedor5']."";
            
            $ins=$bv=$rd=0;

            for ($i=1; $i <=10 ; $i++) { 
                for ($j=1; $j <=3 ; $j++) { 
                    if(isset($_POST[''.$i.$j.''])){
                        if($j==1) $ins++;
                        else if ($j==2) $bv++;
                        else if($j==3) $rd++;
                    }
                }
            }  
            $r2="Instagrammer : ".$ins.", Bibliotecas Virtuales : ".$bv.", Recursos  Digitales : ".$rd."";
            
            $answer="Actividad 1 = ".$r1."; Actividad 2 = ".$r2;
            $nota="No Aplica";
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.9.php");
        break;
        case "m1u1a9":
            $nota="No Aplica";
            $answer="Pregunta 1 = ".$_POST['preg1']." Pregunta 2 = ".$_POST['preg2']." Pregunta 3 = ".$_POST['preg3']." Pregunta 4 = ".$_POST['preg4']."";
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.10.php");
        break;
        case "m1u2a2":
            $nota= $_POST['pointsNota'];
            $points=$_POST['pointsGood'];
            $answer="Actividad 1 = ".$points." correctos de 8";
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo1/modulo1.2/recurso/module1.2.3.php");
        break;
        case "m1u2a3":
            $nota="No Aplica";
            $answer="Pregunta 1 = ".$_POST['preg1']." Pregunta 2 = ".$_POST['preg2']." Pregunta 3 = ".$_POST['preg3']." Pregunta 4 = ".$_POST['preg4']."";
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo1/modulo1.2/recurso/module1.2.4.php");
        break;
        case "m1u2a5":
            $nota="No Aplica";
            $answer="Pregunta 1 = ".$_POST['preg1']." Pregunta 2 = ".$_POST['preg2']." Pregunta 3 = ".$_POST['preg3']." Pregunta 4 = ".$_POST['preg4'].
            " Pregunta 5 = ".$_POST['preg5']." Pregunta 6 = ".$_POST['preg6']." Pregunta 7 = ".$_POST['preg7']." Pregunta 8 = ".$_POST['preg8']."";
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo1/modulo1.2/module1.2_eval.php");
        break;
        case "m1u3a3":
            $nota="No Aplica";
            $r1="Pregunta 1 = ".$_POST['preg1']." Pregunta 2 = ".$_POST['preg2']." Pregunta 3 = ".$_POST['preg3']." Pregunta 4 = ".$_POST['preg4'].
            " Pregunta 5 = ".$_POST['preg5']." Pregunta 6 = ".$_POST['preg6']." Pregunta 7 = ".$_POST['preg7']." Pregunta 8 = ".$_POST['preg8'].
            " Pregunta 9 = ".$_POST['preg9']." Pregunta 10 = ".$_POST['preg10']."";
            
            $r2= "".$_POST['m1'].", ".$_POST['m2'].", ".$_POST['m3'].", ".$_POST['m4'].", ".$_POST['m5']."";
            $answer="Actividad 1 = ".$r1."; Actividad 2 = ".$r2;
            
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo1/modulo1.3/module1.3_eval.php");
        break;
        case "m1u4a3":
            $nota="No Aplica";
            $r1= "".$_POST['e1'].", ".$_POST['e2'].", ".$_POST['e3'].", ".$_POST['e4'].", ".$_POST['e5']."";
            $r2="Pregunta 1 = ".$_POST['preg1']." Pregunta 2 = ".$_POST['preg2']."";
            
            $answer="Actividad 1 = ".$r1."; Actividad 2 = ".$r2;
            
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo1/modulo1.4/module1.4_eval.php");
        break;
        case "m2u1a1":
            $nota="No Aplica";
            $answer="Pregunta 1 = ".$_POST['preg1']." Pregunta 2 = ".$_POST['preg2']." Pregunta 3 = ".$_POST['preg3']." Pregunta 4 = ".$_POST['preg4'].
            " Pregunta 5 = ".$_POST['preg5']."";

            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo2/modulo2.1/module2.1_eval.php");

        break;
        case "m2u2a2":
            $nota="No Aplica";
            $answer='{"Pregunta 1": "'.$_POST['preg1'].'",
                "Pregunta 2": "'.$_POST['preg2'].'",
                "Pregunta 3": "'.$_POST['preg3'].'",
                "Pregunta 4": "'.$_POST['preg4'].'",
                "Pregunta 5": "'.$_POST['preg5'].'"}';
            
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo2/modulo2.2/module2.2_eval.php");

        break;
        case "m2u3a2":
            $nota= $_POST['pointsNota'];
            $points=$_POST['pointsGood'];
            $answer='{"Actividad 1": "'.$points.' correctos de 6"}';
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo2/modulo2.3/module2.3_act3.php");
        break;
        case "m2u3a3":
            $nota="No Aplica";
            $answer='{"Pregunta 1": "'.$_POST['preg1'].'",
                "Pregunta 2": "'.$_POST['preg2'].'",
                "Pregunta 3": "'.$_POST['preg3'].'"}';
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo2/modulo2.3/module2.3_eval.php");
        break;
        case "m2u4a2":
            $nota="No Aplica";
            $answer='{"Pregunta 1": "'.$_POST['preg1'].'"}';
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo2/modulo2.4/module2.4_eval.php");
        break;
        case "m3u1a2":
            $nota="No Aplica";
            $answer='{"Pregunta 1": "'.$_POST['preg1'].'",
            "Pregunta 2": "'.$_POST['preg2'].'",
            "Pregunta 3": "'.$_POST['preg3'].'"}';
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo3/modulo3.1/module3.1_eval.php");
        break;
        case "m3u2a1":
            $nota="No Aplica";
            $answer='{"Pregunta 1": "'.$_POST['preg1'].'",
            "Pregunta 2": "'.$_POST['preg2'].'"}';
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo3/modulo3.2/module3.2_eval.php");
        break;
        case "m3u3a1":
            $nota="No Aplica";
            $answer='{"Pregunta 1": "'.$_POST['preg1'].'",
            "Pregunta 2": "'.$_POST['preg2'].'",
            "Pregunta 3": "'.$_POST['preg3'].'"}';
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo3/modulo3.3/module3.3_eval.php");
        break;
        case "m3u4a2":
            $nota="No Aplica";
            $answer='{"Pregunta 1": "'.$_POST['preg1'].'",
            "Pregunta 2": "'.$_POST['preg2'].'",
            "Pregunta 3": "'.$_POST['preg3'].'",
            "Pregunta 4": "'.$_POST['preg4'].'",
            "Pregunta 5": "'.$_POST['preg5'].'",
            "Pregunta 6": "'.$_POST['preg6'].'"}';
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo3/modulo3.4/module3.4_eval.php");
        break;
        case "m3u5a2":
            $nota="No Aplica";
            $answer='{"Pregunta 1": "'.$_POST['preg1'].'",
            "Pregunta 2": "'.$_POST['preg2'].'",
            "Pregunta 3": "'.$_POST['preg3'].'"}';
            actividad($id_act,$nota,$answer);
            header ("Location: $ruta/modulo3/modulo3.5/module3.5_eval.php");
        break;
        case "m2u2a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u3a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u4a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u1a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u2a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u3a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u4a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u1a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u2a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u3a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u4a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u1a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u2a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u3a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u4a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u1a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u2a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u3a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u4a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u1a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u2a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u3a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u4a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u1a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u2a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u3a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u4a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u1a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u2a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u3a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u4a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u1a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u2a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u3a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        case "m2u4a1":
            // $nota= $_POST[''];
            // $answer=;
            // actividad($id_act,$nota,$answer);
            // header ("Location: $ruta/modulo1/modulo1.1/recurso/module1.1.3.php");
        break;
        
    } 
    

    function actividad($id, $nota,$answer){

        $id_profe=$_SESSION['id'];
        $time = date("d-m-Y",time());

        $sql_consult= "SELECT * FROM profesoractividad
        WHERE id_actividad = '$id' AND id_profesor='".$id_profe."'";

        $execute_consult = pg_query($sql_consult);

        if(pg_num_rows($execute_consult)!=0){
            $estado = pg_fetch_array($execute_consult);
            if($estado['respuesta']!=$answer){
                $sql_update = "UPDATE profesoractividad
                SET respuesta= '$answer' , fecharealizacion='$time' , nota = '$nota'
                WHERE id_actividad = '$id' AND id_profesor='".$id_profe."'";
                $execute_update = pg_query($sql_update);
            }
        }else{
            $sql_insert = "INSERT INTO profesoractividad VALUES ('$id', '".$id_profe."', '$answer', '$time','$nota')";
            $result = pg_query($sql_insert);
        }
    }
?>