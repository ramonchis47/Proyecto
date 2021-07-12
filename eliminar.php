<?php
include('conexion.php');
$id = $_POST["idd"];

if (isset($_POST["eliminar"])){
    $query = "CALL BorrarJuego ('$id')";

    $resultado = mysqli_query($con, $query);
    if($resultado){
        echo "<script>alert('Juego eliminado con exito'); window.location='admin.php'</script>";
    }
    else{
        echo "Error ".mysqli_error($con);
    }
}

mysqli_close($con);
?>