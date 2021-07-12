<?php
include('conexion.php');
$n = $_POST["nombre"];
$a = $_POST["apellido"];
$c = $_POST["correo"];
$cc = $_POST["contrasenna"];


if (isset($_POST["aceptar"])){
    $query = "CALL AgregarUsuario ('$n', '$a', '$c','$cc')";

    $resultado = mysqli_query($con, $query);
    if($resultado){
        echo "<script>alert('Usuario registrado exito'); window.location='login.html'</script>";
    }
    else{
        echo "Error ".mysqli_error($con);
    }
}

mysqli_close($con);
?>