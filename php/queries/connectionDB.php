<?php
class Connection{
    function connectionDB(){
        $host="localhost";
        $port="5432";
        $db="amid";
        $user="postgres";
        $pass="root";

        $conexion=pg_connect ("host = $host port = $port dbname = $db user = $user password = $pass") 
        or die("No fue posible conectar con la base de datos");
    }
}
