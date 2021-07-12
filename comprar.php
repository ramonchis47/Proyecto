<?php
include('conexion.php');
$id = $_POST["id"];
$id_usu = $_POST["id_usu"];
$cantidad = $_POST["cantidad"];



if (isset($_POST["bt_aceptar"])){
    $query = "CALL Vender ('$id', '$id_usu', '$cantidad')";
    $query2 = "SELECT Precio FROM videojuegos WHERE Id_Jue = $id";
    $c = mysqli_query($con, $query2);
    $cc = mysqli_fetch_array($c);

    $compra = $cc[0] * $cantidad;

    $resultado = mysqli_query($con, $query);
    if($resultado){
        echo "<script>alert('Compra relizada exito a pagar: $compra MXN'); window.location='Chepe_Game.php'</script>";
    }
    else{
        echo "Error ".mysqli_error($con);
    }
}

mysqli_close($con);
?>