<?php

require "activeSession.php";
require_once ("connectionDB.php");
$newConn= new Connection;
$newConn->connectionDB();

$email_user=$_POST['email'];
$pass_user=$_POST['pass'];
$_SESSION['email']=$email_user;

$sql="SELECT id_profesor,correo, contraseña, nombre FROM profesor WHERE correo = '$email_user'";

$ejecutar_sql= pg_query($sql);

$extraer=pg_fetch_array($ejecutar_sql);

if(password_verify($pass_user, $extraer['contraseña'])){

	$_SESSION['id']=$extraer['id_profesor'];
	$_SESSION['name']=$extraer['nombre'];

	header ("Location:../layouts/inicio.php");
	
}else{
	$mensaje='passBad';
	header ("Location:../../index.php?mensaje=$mensaje");
}

?>