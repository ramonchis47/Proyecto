<?php
    $dbhost = "127.0.0.1:3307";
    $dbuser = "root";
    $dbpass = "";
    $dbnombre = "tiendavideojuegos";
    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbnombre);

    if(!$con){
        die("No hay conexion. ".mysqli_connect_error());
    }
?>