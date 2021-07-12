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

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Administración</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="admin.css" type="text/css">
    <link rel="shortcut icon" href="css/img/registro.ico">
</head>
<body>
    <div id = "main">
        <header>
            <h1>
                Administracion
            </h1>
            <nav>
                <ul>
                    <li id = "frst"><a href="Agregar.html" target="_blank"> Agregar </a></li>
                    <li id = "scnd"><a href="Eliminar.html" target="_blank">Eliminar </a></li>
                    <li id = "thrd"><a href="Modificar.php" target="_blank"> Modificar </a></li>
                </ul>
            </nav>
        </header>
        <section>
            <article id = "venta">
                <p>
                    Juegos en venta
                </p>
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

                    for($i=0; $i<=$verContenido; $i++){
                        echo'
                            <tr>
                                <td>'.$verContenido[0].'</td>
                                <td>'.$verContenido[1].'</td>
                                <td>'.$verContenido[2].'</td>
                                <td>'.$verContenido[3].'</td>
                                <td>'.$verContenido[4].'</td>
                            </tr>
                
                            ';
                            $verContenido = mysqli_fetch_array($ejecConsulta);
                    }

                ?>
            </table>
            </article>
            <article id = "preventa">
                <p>
                    Preventa
                </p>
                <table>
                <?php
                    $consulta = "SELECT * FROM preventas";
                    $ejecConsulta = mysqli_query($con, $consulta);
                    $verContenido = mysqli_fetch_array($ejecConsulta);

                    for($i=0; $i<=$verContenido; $i++){
                        echo'
                            <tr>
                                <td>'.$verContenido[0].'</td>
                                <td>'.$verContenido[1].'</td>
                                <td>'.$verContenido[2].'</td>
                                <td>'.$verContenido[3].'</td>
                                <td>'.$verContenido[4].'</td>
                            </tr>

                            ';
                            $verContenido = mysqli_fetch_array($ejecConsulta);
                    }

                    ?>
                </table>
            </article>
            <article id="usuario">
                <p>
                    Usuarios
                </p>
                <table>
                <?php

                    $consulta = "SELECT * FROM usuarios";
                    $ejecConsulta = mysqli_query($con, $consulta);
                    $verContenido = mysqli_fetch_array($ejecConsulta);

                    for($i=0; $i<=$verContenido; $i++){
                        echo'
                            <tr>
                                <td>'.$verContenido[0].'</td>
                                <td>'.$verContenido[1].'</td>
                                <td>'.$verContenido[2].'</td>
                                <td>'.$verContenido[3].'</td>
                                <td>'.$verContenido[4].'</td>
                            </tr>

                            ';
                            $verContenido = mysqli_fetch_array($ejecConsulta);
                    }

                ?>
                </table>
            </article>
        </section>
    </div>
</body>
</html>