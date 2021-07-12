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
    <title>Chepe's Games</title>
    <link rel="shortcut icon" href="registro.ico" />
    <link rel="stylesheet" href="Main_Chepe_Games.css?5.2" type="text/css" />
    <meta charset="utf-8" />
</head>

<body>
    <header>
        <h1>Chepe's Games</h1>
    </header>

    <div class="box">
        <form action="comprar.php" method="POST">
            <?php
                session_start();
                echo "<p>Compra <br><br>Usuario: ".$_SESSION["nombre"]."</p>";
                echo "<input type='number' readonly class='hola' min='1' required name='id_usu' placeholder='Ingrese ID de usuario' value=".$_SESSION["idd"].">";
            ?>
            <input type="number" min="1" required name="id" placeholder="Ingrese ID del juego">
            <input type="number" min="1" required name="cantidad" placeholder="Ingrese Cantidad">
            <input type="submit" name="bt_aceptar" value="Compra">
        </form>
    </div>

    <div class="Xbox">
        <h1>Xbox</h1>
        <br />

        <article>
            <strong>
                <?php
                    $consulta = "SELECT Nombre FROM videojuegos WHERE Id_Jue = 23";
                    $c = mysqli_query($con, $consulta);
                    $cc = mysqli_fetch_array($c);

                    echo "<p> ".$cc[0]."</p>";
                ?>
            </strong>
            <img src="gatos.jfif" alt="fifa" />
            <p class="descripcion">
                <?php
                    $consulta = "SELECT Id_Jue FROM videojuegos WHERE Id_Jue = 23";
                    $c = mysqli_query($con, $consulta);
                    $cc = mysqli_fetch_array($c);

                    echo "<p> ID del juego: ".$cc[0]."</p>";
                ?>
                <?php
                    $consulta = "SELECT Creador FROM videojuegos WHERE Id_Jue = 23";
                    $c = mysqli_query($con, $consulta);
                    $cc = mysqli_fetch_array($c);

                    echo "<p> Creador: ".$cc[0]." </p>";
                ?>
                <?php
                    $consulta = "SELECT Precio FROM videojuegos WHERE Id_Jue = 23";
                    $c = mysqli_query($con, $consulta);
                    $cc = mysqli_fetch_array($c);

                    echo "<p> Precio: ".$cc[0]." MXN</p>";
                ?>
                <?php
                    $consulta = "SELECT Disponibles FROM videojuegos WHERE Id_Jue = 23";
                    $c = mysqli_query($con, $consulta);
                    $cc = mysqli_fetch_array($c);

                    echo "<p> En Stock: ".$cc[0]." </p>";
                ?>
            </p>
        </article>
        <article>
            <strong>
            <?php
                    $consulta = "SELECT Nombre FROM videojuegos WHERE Id_Jue = 17";
                    $c = mysqli_query($con, $consulta);
                    $cc = mysqli_fetch_array($c);

                    echo "<p> ".$cc[0]."</p>";
                ?>
            </strong>
            <img src="halo.jfif" alt="halo" />
            <p class="descripcion">
            <?php
                    $consulta = "SELECT Id_Jue FROM videojuegos WHERE Id_Jue = 17";
                    $c = mysqli_query($con, $consulta);
                    $cc = mysqli_fetch_array($c);

                    echo "<p> ID del juego: ".$cc[0]."</p>";
                ?>
                <?php
                    $consulta = "SELECT Creador FROM videojuegos WHERE Id_Jue = 17";
                    $c = mysqli_query($con, $consulta);
                    $cc = mysqli_fetch_array($c);

                    echo "<p> Creador: ".$cc[0]." </p>";
                ?>
                <?php
                    $consulta = "SELECT Precio FROM videojuegos WHERE Id_Jue = 17";
                    $c = mysqli_query($con, $consulta);
                    $cc = mysqli_fetch_array($c);

                    echo "<p> Precio: ".$cc[0]." MXN</p>";
                ?>
                <?php
                    $consulta = "SELECT Disponibles FROM videojuegos WHERE Id_Jue = 17";
                    $c = mysqli_query($con, $consulta);
                    $cc = mysqli_fetch_array($c);

                    echo "<p> En Stock: ".$cc[0]." </p>";
                ?>
            </p>
        </article>
        <article>
            <strong>
            <?php
                    $consulta = "SELECT Nombre FROM videojuegos WHERE Id_Jue = 3";
                    $c = mysqli_query($con, $consulta);
                    $cc = mysqli_fetch_array($c);

                    echo "<p> ".$cc[0]."</p>";
                ?>
            </strong>
            <img src="gta.jfif" alt="gta" />
            <p class="descripcion">
                <?php
                        $consulta = "SELECT Id_Jue FROM videojuegos WHERE Id_Jue = 3";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ID del juego: ".$cc[0]."</p>";
                    ?>
                    <?php
                        $consulta = "SELECT Creador FROM videojuegos WHERE Id_Jue = 3";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> Creador: ".$cc[0]." </p>";
                    ?>
                    <?php
                        $consulta = "SELECT Precio FROM videojuegos WHERE Id_Jue = 3";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> Precio: ".$cc[0]." MXN</p>";
                    ?>
                    <?php
                        $consulta = "SELECT Disponibles FROM videojuegos WHERE Id_Jue = 3";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> En Stock: ".$cc[0]." </p>";
                    ?>
            </p>
        </article>
        <article>
            <strong>
                <?php
                        $consulta = "SELECT Nombre FROM videojuegos WHERE Id_Jue = 11";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ".$cc[0]."</p>";
                    ?>
            </strong>
            <img src="dark.jpg" alt="dark souls" />
            <p class="descripcion">
                <?php
                        $consulta = "SELECT Id_Jue FROM videojuegos WHERE Id_Jue = 11";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ID del juego: ".$cc[0]."</p>";
                    ?>
                    <?php
                        $consulta = "SELECT Creador FROM videojuegos WHERE Id_Jue = 11";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> Creador: ".$cc[0]." </p>";
                    ?>
                    <?php
                        $consulta = "SELECT Precio FROM videojuegos WHERE Id_Jue = 11";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> Precio: ".$cc[0]." MXN</p>";
                    ?>
                    <?php
                        $consulta = "SELECT Disponibles FROM videojuegos WHERE Id_Jue = 11";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> En Stock: ".$cc[0]." </p>";
                    ?>
            </p>
        </article>
        <article>
            <strong>
                    <?php
                        $consulta = "SELECT Nombre FROM videojuegos WHERE Id_Jue = 19";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ".$cc[0]."</p>";
                    ?>
            </strong>
            <img src="forza.jfif" alt="forza" />
            <p class="descripcion">
                <?php
                            $consulta = "SELECT Id_Jue FROM videojuegos WHERE Id_Jue = 19";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> ID del juego: ".$cc[0]."</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Creador FROM videojuegos WHERE Id_Jue = 19";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Creador: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Precio FROM videojuegos WHERE Id_Jue = 19";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Precio: ".$cc[0]." MXN</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Disponibles FROM videojuegos WHERE Id_Jue = 19";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> En Stock: ".$cc[0]." </p>";
                        ?>
            </p>
        </article>
    </div>

    <div class="Piperos">
        <h1>Piperos</h1>
        <br>
        <article>
            <strong>
            <?php
                        $consulta = "SELECT Nombre FROM videojuegos WHERE Id_Jue = 4";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ".$cc[0]."</p>";
                    ?>
            </strong>
            <img src="the_last.jfif" alt="the last of us" />
            <p class="descripcion">
            <?php
                            $consulta = "SELECT Id_Jue FROM videojuegos WHERE Id_Jue = 4";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> ID del juego: ".$cc[0]."</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Creador FROM videojuegos WHERE Id_Jue = 4";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Creador: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Precio FROM videojuegos WHERE Id_Jue = 4";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Precio: ".$cc[0]." MXN</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Disponibles FROM videojuegos WHERE Id_Jue = 4";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> En Stock: ".$cc[0]." </p>";
                        ?>
            </p>
        </article>
        <article>
            <strong>
            <?php
                        $consulta = "SELECT Nombre FROM videojuegos WHERE Id_Jue = 2";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ".$cc[0]."</p>";
                    ?>
            </strong>
            <img src="mortal.jfif" alt="mortal" />
            <p class="descripcion">
            <?php
                            $consulta = "SELECT Id_Jue FROM videojuegos WHERE Id_Jue = 2";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> ID del juego: ".$cc[0]."</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Creador FROM videojuegos WHERE Id_Jue = 2";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Creador: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Precio FROM videojuegos WHERE Id_Jue = 2";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Precio: ".$cc[0]." MXN</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Disponibles FROM videojuegos WHERE Id_Jue = 2";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> En Stock: ".$cc[0]." </p>";
                        ?>
            </p>
        </article>
        <article>
            <strong>
            <?php
                        $consulta = "SELECT Nombre FROM videojuegos WHERE Id_Jue = 15";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ".$cc[0]."</p>";
                    ?>
            </strong>
            <img src="god.jfif" alt="god of war" />
            <p class="descripcion">
            <?php
                            $consulta = "SELECT Id_Jue FROM videojuegos WHERE Id_Jue = 15";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> ID del juego: ".$cc[0]."</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Creador FROM videojuegos WHERE Id_Jue = 15";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Creador: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Precio FROM videojuegos WHERE Id_Jue = 15";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Precio: ".$cc[0]." MXN</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Disponibles FROM videojuegos WHERE Id_Jue = 15";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> En Stock: ".$cc[0]." </p>";
                        ?>
            </p>
        </article>
        <article>
            <strong>
            <?php
                        $consulta = "SELECT Nombre FROM videojuegos WHERE Id_Jue = 8";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ".$cc[0]."</p>";
                    ?>
            </strong>
            <img src="rocket.jfif" alt="rocket" />
            <p class="descripcion">
            <?php
                            $consulta = "SELECT Id_Jue FROM videojuegos WHERE Id_Jue = 8";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> ID del juego: ".$cc[0]."</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Creador FROM videojuegos WHERE Id_Jue = 8";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Creador: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Precio FROM videojuegos WHERE Id_Jue = 8";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Precio: ".$cc[0]." MXN</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Disponibles FROM videojuegos WHERE Id_Jue = 8";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> En Stock: ".$cc[0]." </p>";
                        ?>
            </p>
        </article>
        <article>
            <strong>
            <?php
                        $consulta = "SELECT Nombre FROM videojuegos WHERE Id_Jue = 21";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ".$cc[0]."</p>";
                    ?>
            </strong>
            <img src="ratchet.jfif" alt="clank" />
            <p class="descripcion">
            <?php
                            $consulta = "SELECT Id_Jue FROM videojuegos WHERE Id_Jue = 21";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> ID del juego: ".$cc[0]."</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Creador FROM videojuegos WHERE Id_Jue = 21";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Creador: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Precio FROM videojuegos WHERE Id_Jue = 21";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Precio: ".$cc[0]." MXN</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Disponibles FROM videojuegos WHERE Id_Jue = 21";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> En Stock: ".$cc[0]." </p>";
                        ?>
            </p>
        </article>
    </div>

    <div class="Preventas">
        <h1>Preventas All Exclusive</h1>
        <br>

        <article>
            <strong>
            <?php
                        $consulta = "SELECT Nombre FROM preventas WHERE Id_Pre = 1";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ".$cc[0]."</p>";
                    ?>
            </strong>
            <img src="forza 5.jfif" alt="forza 5" />
            <p class="descripcion">
            <?php
                            $consulta = "SELECT Id_Pre FROM preventas WHERE Id_Pre = 1";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> ID del juego: ".$cc[0]."</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Creador FROM preventas WHERE Id_Pre = 1";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Creador: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Descripcion FROM preventas WHERE Id_Pre = 1";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Descripcion: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Fecha FROM preventas WHERE Id_Pre = 1";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Fecha:  ".$cc[0]." </p>";
                        ?>
            </p>
        </article>
        <article>
            <strong>
            <?php
                        $consulta = "SELECT Nombre FROM preventas WHERE Id_Pre = 2";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ".$cc[0]."</p>";
                    ?>
            </strong>
            <img src="far.jfif" alt="far" />
            <p class="descripcion">
            <?php
                            $consulta = "SELECT Id_Pre FROM preventas WHERE Id_Pre = 2";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> ID del juego: ".$cc[0]."</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Creador FROM preventas WHERE Id_Pre = 2";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Creador: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Descripcion FROM preventas WHERE Id_Pre = 2";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Descripcion: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Fecha FROM preventas WHERE Id_Pre = 2";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Fecha:  ".$cc[0]." </p>";
                        ?>
            </p>
        </article>
        <article>
            <strong>
            <?php
                        $consulta = "SELECT Nombre FROM preventas WHERE Id_Pre = 3";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ".$cc[0]."</p>";
                    ?>
            </strong>
            <img src="dying.jfif" alt="dying" />
            <p class="descripcion">
            <?php
                            $consulta = "SELECT Id_Pre FROM preventas WHERE Id_Pre = 3";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> ID del juego: ".$cc[0]."</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Creador FROM preventas WHERE Id_Pre = 3";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Creador: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Descripcion FROM preventas WHERE Id_Pre = 3";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Descripcion: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Fecha FROM preventas WHERE Id_Pre = 3";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Fecha:  ".$cc[0]." </p>";
                        ?>
            </p>
        </article>
        <article>
            <strong>
            <?php
                        $consulta = "SELECT Nombre FROM preventas WHERE Id_Pre = 4";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ".$cc[0]."</p>";
                    ?>
            </strong>
            <img src="scartlet.jfif" alt="scarlet" />
            <p class="descripcion">
            <?php
                            $consulta = "SELECT Id_Pre FROM preventas WHERE Id_Pre = 4";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> ID del juego: ".$cc[0]."</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Creador FROM preventas WHERE Id_Pre = 4";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Creador: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Descripcion FROM preventas WHERE Id_Pre = 4";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Descripcion: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Fecha FROM preventas WHERE Id_Pre = 4";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Fecha:  ".$cc[0]." </p>";
                        ?>
            </p>
        </article>
        <article>
            <strong>
            <?php
                        $consulta = "SELECT Nombre FROM preventas WHERE Id_Pre = 6";
                        $c = mysqli_query($con, $consulta);
                        $cc = mysqli_fetch_array($c);

                        echo "<p> ".$cc[0]."</p>";
                    ?>
            </strong>
            <img src="blood.jfif" alt="blood" />
            <p class="descripcion">
            <?php
                            $consulta = "SELECT Id_Pre FROM preventas WHERE Id_Pre = 6";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> ID del juego: ".$cc[0]."</p>";
                        ?>
                        <?php
                            $consulta = "SELECT Creador FROM preventas WHERE Id_Pre = 6";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Creador: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Descripcion FROM preventas WHERE Id_Pre = 6";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Descripcion: ".$cc[0]." </p>";
                        ?>
                        <?php
                            $consulta = "SELECT Fecha FROM preventas WHERE Id_Pre = 6";
                            $c = mysqli_query($con, $consulta);
                            $cc = mysqli_fetch_array($c);

                            echo "<p> Fecha:  ".$cc[0]." </p>";
                        ?>
            </p>
        </article>
    </div>

</body>

</html>