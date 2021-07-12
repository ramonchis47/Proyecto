<?php
$dbhost = "127.0.0.1:3307";
$dbuser = "root";
$dbpass = "";
$dbnombre = "tiendavideojuegos";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbnombre);

if (!$con) {
    die("No hay conexion. " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Administracion-Modificar</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="css/Modificar.css?1.0" />
    <link rel="shortercut icon" href="css/img/registro.ico" />
    <script src="js/Modificar.js"></script>
</head>

<body>
    <header>
        <h1>Modificar juegos</h1>
    </header>
    <section>
        <p id="info">Informacion</p>
        <table>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Creador</td>
                <td>Precio</td>
                <td>Fecha Lanzamiento </td>

            </tr>
            <?php

            $consulta = "SELECT * FROM videojuegos";
            $ejecConsulta = mysqli_query($con, $consulta);
            $verContenido = mysqli_fetch_array($ejecConsulta);

            for ($i = 0; $i <= $verContenido; $i++) {
                echo '
                            <tr>
                                <td>' . $verContenido[0] . '</td>
                                <td>' . $verContenido[1] . '</td>
                                <td>' . $verContenido[2] . '</td>
                                <td>' . $verContenido[3] . '</td>
                                <td>' . $verContenido[4] . '</td>
                            </tr>
                
                            ';
                $verContenido = mysqli_fetch_array($ejecConsulta);
            }

            ?>
        </table>
    </section>
    <form action="ModificarScript.php" method="POST">
        <p class="agr">
            <input type="number" id="id" placeholder=" ID" class="info" name="idd" />
        </p>
        <p class="agr">
            <input type="text" id="nom" placeholder=" Titulo" class="info" name="titulo" />
        </p>
        <p class="agr">
            <input type="text" id="com" placeholder=" Compañia" class="info" name="compañia" />
        </p>
        <p class="agr">
            <input type="text" id="pre" placeholder=" Precio" class="info" name="precio" />
        </p>
        <p class="agr">
            <input type="date" id="fec" class="info" name="fecha" />
        </p>
        <p id="ps">
            <input type="submit" id="sub" value="Guardar" name="guardar2" />
        </p>
    </form>
</body>
</html>