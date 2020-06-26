<?php

require_once ("connectionDB.php");
$newConn= new Connection;
$newConn->connectionDB();

$sql="SELECT id_institucion, nombre FROM institucion ";
$instituciones = pg_query($sql);


?>