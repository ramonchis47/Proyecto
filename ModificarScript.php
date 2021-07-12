<?php
include('conexion.php');

$id = $_POST["idd"];
$na = $_POST["titulo"];
$compa = $_POST["compañia"];
$pre = $_POST["precio"];
$fe = $_POST["fecha"];

if (isset($_POST["guardar2"])){
    $query = "CALL EditarJUego ('$id', '$na','$compa','$pre', '$fe', '')";

    $resultado = mysqli_query($con, $query);
    if($resultado){
        echo "<script>alert('Juego modificado con exito'); window.location='admin.php'</script>";
    }
    else{
        echo "Error ".mysqli_error($con);
    }
}

mysqli_close($con);
?>