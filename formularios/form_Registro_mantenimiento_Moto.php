<?php

$server = "localhost:3307";/* nombre servidor  */
$username = "root";
$password = "";
$database = "base_de_datos_motonapp"; /* debes cambiar el nombre de la base de datos  */
$enlace_moto = mysqli_connect($server, $username, $password, $database);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina sobre el mantenimiento de motos">
    <meta name="keywords" content="Moto,mantenimiento,seguimiento">
    <meta name="author" content="KEVIN ARIAS">
    <title>FORMULARIO DE REGISTRO DEL MANTENIMIENTO DE UNA MOTO</title>
    <script src="https://kit.fontawesome.com/24ce6da039.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/estilo_main.css">
    <link rel="stylesheet" href="estilos/formulario_registro_matenimiento_moto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="../imagenes/logosinfondo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


</head>
<!-- clase del header  -->
<header class="header">
    <!-- Menu de la pagina  -->
    <nav class="contenedor-menu">
        <div class="nombre">
            <a href="../index.php">MotoNappPro</a>
        </div>

        <!-- opciones del menu -->
        <div class="opciones-menu">

            <!-- boton de menu responsive -->
            <input type="checkbox" id="check"> <!-- palomita del check -->
            <label for="check" class="checkbtn"><!-- icono label -->
                <i class="fa-solid fa-bars"></i>
            </label>

            <ul class="ul-menu">
                <li><a href="../index.php">Sobre Nosotros</a></li>
                <li><a href="formulario_registro.php">Registrate</a></li>
                <li><a href="Form_Contactenos.php">Contactanos</a></li>
                <li><a href="form_Usuario.php">Inicia Sesion</a></li>
            </ul>
        </div>

    </nav>
</header>

<!-- body -->

<body>
    <!-- contenedor general del formulario de registro de mantenimiento de moto -->
    <div class="contenedor_general_registro_mantenimiento_moto">

        <form class="formulario_registro_mantenimiento_moto" method="post"
            action="form_Registro_mantenimiento_Moto.php">
            <h3 style="font-size: 26px;"> Formulario Registro mantenimiento de moto</h3>

            <input name="Nombre_usuario" type="text" placeholder="Nombre de Usuario">

            <div class="tipo_de_mantenimiento">
                <h3>TIPO DE MANTENIMIENTO</h3>

                <input name="tipo_de_mantenimiento" id="tipo_de_mantenimiento"
                    placeholder="especifique el tipo de mantenimiento ">

                <div class="Kilometraje-moto">
                    <h3>Diganos su kilometraje </h3>

                    <input name="kilometraje" type="text" placeholder="Diganos su kilometraje">
                    </select>
                </div>
            </div>

            <div class="descripcion_moto_mantenimiento">

                <input name="descripcion" placeholder="descripcion de moto">
            </div>

            <div class="ultima_revision">
                <h3>FECHA DE ULTIMO MANTENIMIENTO</h3>

                <input name="Fecha_salida" type="date">
            </div>



            <div class="botones_registro_mantenimiento_moto">
                <input name="boton_registro_mantenimiento_moto" value="Enviar" type="submit">
                <button name="reseteo_campos" id="reseteo" type="reset">Resetear campos</button>
            </div>
        </form>

    </div>

</body>

</html>


<?php
if (isset ($_POST["boton_registro_mantenimiento_moto"])) {
    $Nombre_usuarioq = $_POST["Nombre_usuario"];
    $tipo_de_mantenimiento = $_POST["tipo_de_mantenimiento"];
    $kilometraje = $_POST["Nombre_usuario"];
    $descripcion = $_POST["descripcion"];
    $Fecha_salida = $_POST["Fecha_salida"];



    $insertarDatos = "INSERT INTO mantenimiento_moto VALUES('','$Nombre_usuarioq','$tipo_de_mantenimiento','$kilometraje','$descripcion','$Fecha_salida')";

    $ejecutarInsertar = mysqli_query($enlace_moto, $insertarDatos);
    echo "datos registrados correctamente ";
}


?>