<?php

require_once ("connectionDB.php");
$newConn= new Connection;
$newConn->connectionDB();

$name=$_POST["name_r"];
$lastName=$_POST["lastname_r"];
$email=$_POST["email_r"];
$pass=$_POST["pass1_r"];
$qt=$_POST["question_r"];
$ans=$_POST["answer_r"];


$passHash = password_hash($pass,PASSWORD_DEFAULT);

$sqlprev="SELECT correo FROM profesor WHERE nombre='".$name."' AND apellido='".$lastName."' AND correo='".$email."' AND question='".$qt."' AND answer='".$ans."'";
$executeprev = pg_query($sqlprev);


if (pg_num_rows($executeprev) != 0) {

    $sql = "UPDATE profesor SET contraseña= '".$passHash."' WHERE correo = '".$email."'";
    
    $execute = pg_query($sql);

    if(!$execute){
    	echo "Ha ocurrido un error, consulte con el administrador";
    }else{
        $mensaje='cambio';
    	header("Location: ../../index.php?mensaje=$mensaje");
    }
    
}else{
    $mensaje='noCreden';
    header("Location: ../../index.php?mensaje=$mensaje");
}
?>