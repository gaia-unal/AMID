<?php

echo session_id();
session_start();

if(!isset($_SESSION['email']) && !is_null($_SESSION['email']) && !empty($_SESSION['email'])){
    //"Debe iniciar sesion";
    header("Location: ../../index.php");
}
?>