<?php
include('conexion.php');
$n = $_POST["titulo"];
$c = $_POST["compañia"];
$p = $_POST["precio"];
$f = $_POST["fecha"];


if (isset($_POST["guardar"])){
    $query = "CALL AgregarJuego ('$n', '$c', '$p','$f','')";

    $resultado = mysqli_query($con, $query);
    if($resultado){
        echo "<script>alert('Juego registrado exito'); window.location='admin.php'</script>";
    }
    else{
        echo "Error ".mysqli_error($con);
    }
}

mysqli_close($con);
?>