<?php

require_once ("connectionDB.php");
$newConn= new Connection;
$newConn->connectionDB();

$name=$_POST["name"];
$lastName=$_POST["lastname"];
$dateBirth=$_POST["datebirth"];
$email=$_POST["email"];
$pass=$_POST["pass1"];
$inst=$_POST["institucion"];
$qt=$_POST["question"];
$ans=$_POST["answer"];
$dateNow=(new DateTime("now", new DateTimeZone('America/Lima')))->format('d-m-y, H:i:s');

$passHash = password_hash($pass,PASSWORD_DEFAULT);

$sqlprev="SELECT correo FROM profesor WHERE correo='".$email."'";
$executeprev = pg_query($sqlprev);

if (pg_num_rows($executeprev) == 0) {

    $sql = "INSERT INTO profesor (nombre,apellido,contraseña,correo,fecharegistro,fechanmto,fkid_institucion,question,answer) 
    VALUES ('".$name."','".$lastName."','".$passHash."','".$email."','".$dateNow."','".$dateBirth."','".$inst."','".$qt."','".$ans."')";
    
    $execute = pg_query($sql);

    if(!$execute){
    	echo "Ha ocurrido un error, consulte con el administrador";
    }else{
        $mensaje='registrado';
    	header("Location: ../../index.php?mensaje=$mensaje");
    }
    
}else{
    $mensaje='enUso';
    header("Location: ../../index.php?mensaje=$mensaje");
}
?>