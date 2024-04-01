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
    <title>FORMULARIO_REGISTRO_MOTO</title>
    <script src="https://kit.fontawesome.com/24ce6da039.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/estilo_main.css">
    <link rel="stylesheet" href="estilos/estilos_registro_moto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="../imagenes/logosinfondo.png" type="image/x-icon">
    <link rel="shortcut icon" href="../index.html" type="image/x-icon">
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

<body>
    <div class="contenedor_formulario_moto">

        <form action="Form_Registro_moto.php" method="post" class="formulario_moto">

            <h3>FORMULARIO DEL REGISTRO TU MOTO</h3>
            <p>Aqui podras darnos ya todos tus datos de tu moto para que nosotros podamos trabajar con ellos. </p>
            <img src="../imagenes/logosinfondo.png" alt="datos_moto">


            <div class="marca_de_moto">
                <label for="marca">Dinos la marca de tu moto</label>
                <input id="marca" name="marca_moto" type=" text">
                <label for="modelo">Dinos el modelo de su moto</label>
                <input id="modelo" name="modelo_moto" type="text">
                <label for="cilindraje">cilindraje</label>
                <input id="cilindraje" name="cilindraje_moto" type="text">
            </div>

            <div class="fecha-tecnomecanica">
                <h3>Año de fabricación</h3>
                <input name="fecha_fabricacion" type="date">
                <h3>Tipo de motor </h3>

                <input name="tecnomecanica" type="text">

                <h3>Tipo de transmision </h3>
                <input name="sincronizacion" type="text">

                <h3>Fecha ultima revision tecnico-mecanica</h3>
                <input name="fecha_tecnomecanica" type="date">

            </div>




            <div class="Placa_seguro">

                <h3>Seguro</h3>
                <input type="text" id="Placa" name="Placa" placeholder="Numero de Placa">
                <input type="text" name="Numero_Poliza" placeholder="Numero de Poliza">
                <h3>fecha de vencimiento soat </h3>
                <input id="fecha" type="date" name="fecha_soat">
            </div>

            <div class="envio">
                <button type="reset">Resetear campos</button>
                <input name="Envio_datos_moto" value="Send" type="submit">
                <a href="form_Registro_mantenimiento_Moto.php">Mantenimiento de Moto</a>
<<<<<<< HEAD
=======
                
>>>>>>> c9fdefd (cambios formulario)
            </div>




        </form>



    </div>
</body>

</html>


<?php
if (isset ($_POST["Envio_datos_moto"])) {
    $marca_moto = $_POST["marca_moto"];
    $modelo_moto = $_POST["modelo_moto"];
    $cilindraje_moto = $_POST["cilindraje_moto"];
    $fecha_fabricacion = $_POST["fecha_fabricacion"];
    $tecnomecanica = $_POST["tecnomecanica"];
    $sincronizacion = $_POST["sincronizacion"];
    $fecha_tecnomecanica = $_POST["fecha_tecnomecanica"];
    $Placa = $_POST["Placa"];
    $Numero_Poliza = $_POST["Numero_Poliza"];
    $fecha_soat = $_POST["fecha_soat"];



    $insertarDatos = "INSERT INTO motos VALUES('','$marca_moto','$modelo_moto','$cilindraje_moto','$fecha_fabricacion','$tecnomecanica','$sincronizacion','$fecha_tecnomecanica','$Placa','$Numero_Poliza','$fecha_soat')";

    $ejecutarInsertar = mysqli_query($enlace_moto, $insertarDatos);
    echo "Registro de moto exitoso";
}


?>