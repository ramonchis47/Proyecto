<?php
include('conexion.php');

$nombre = $_POST["usuario"];
$pass = $_POST["contra"];

//login
if(isset($_POST["ingresar"])){
    $query = mysqli_query($con, "SELECT * FROM usuarios WHERE Nombre = '$nombre' AND Contrasena = '$pass'"); 
    $nu = mysqli_num_rows($query);

    if($nu == 1){
        if($nombre == "Administrador"){
            echo "<script> alert('Bienvenido administrador $nombre'); window.location='admin.php' </script>";
        }else if($nombre != "Administrador"){
            $query2 = "SELECT Id_Usu FROM usuarios WHERE Nombre = '$nombre' AND Contrasena = '$pass'";
            $c = mysqli_query($con, $query2);
            $cc = mysqli_fetch_array($c);

            session_start();
            $_SESSION["nombre"] = $nombre;
            $_SESSION["idd"] = $cc[0];
            echo "<script> alert('Bienvenido usuario $nombre'); window.location='Chepe_Game.php' </script>";
        }
    }
    else{
        echo "<script> alert('Usuario o contraseña incorrectos'); window.location='login.html' </script>";
    }
}

?>