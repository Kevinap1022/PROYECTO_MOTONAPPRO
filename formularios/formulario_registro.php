<?php

require "conexion.php";

$server = "localhost:3307";/* nombre servidor  */
$username = "root";
$password = "";
$database = "base_de_datos_motonapp"; /* debes cambiar el nombre de la base de datos  */
$enlace = mysqli_connect($server, $username, $password, $database);

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
    <title>Registrate</title>
    <script src="https://kit.fontawesome.com/24ce6da039.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/estilo_main.css">
    <link rel="stylesheet" href="estilos/formulario_registro_usuario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="../imagenes/logosinfondo.png" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>
<!-- clase del header  -->
<header class="header">
    <!-- requiriendo -->
    <?php
    require "conexion.php";
    ?>


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
            </ul>

        </div>
    </nav>
</header>


<body>
    <div class="contenedor-general-formulario">
        <form name="base_de_datos_motonapp" class="contenedor-formulario" method="post"
            action="formulario_registro.php">
            <header class="nombre-Registro">
                <h3>Registrate</h3>
                <span>o<a href="form_Usuario.php">Inicia Sesion aqui</a></span>
            </header>
            <input name="Nombres" class="caja-input" type="text" placeholder="Nombres" required="">
            <input name="Apellidos" class="caja-input" type="text" required="" placeholder="Digite su apellido">
            <input name="Nombre_usuario" class="caja-input" type="text" required="" placeholder="Nombre de usuario">
            <input name="Correo" class="caja-input" type="text" required="" placeholder="Direccion de correo electronico">
            <input name="Celular" class="caja-input" type="text" placeholder="Escriba su numero">
            <input name="Direccion" class="caja-input" type="text" placeholder="Digite su direccion">
            <input name="Contraseña" class="caja-input" type="password" required placeholder="contraseña">
            <input name="confirmar_contraseña" class="caja-input" type="password" placeholder="Confirma Contraseña">

            <div class="condiciones">
                <input type="checkbox" id="condicion">
                <label for="condicion">
                    Acepta Condiciones
                </label>
            </div>

            <div class="reseteo_envio">
                <input type="submit" name="registro" value="Registrarse">
                <button type="reset" class="caja-boton">Resetea campos</button>
            </div>
            <div class="regreso_login">
                <a href="form_Usuario.php">Inicia Sesion aqui</a>
                <a href="../GenerarPDF_TABLAS.php"><input style="background:transparent;border:none; "  type="button" value="IMPRIMIR TABLA PDF"></a>
            </div>
            
        </form>


    </div>

</body>

</html>

<?php
if (isset ($_POST["registro"])) {
    $nombre = $_POST["Nombres"];
    $apellido = $_POST["Apellidos"];
    $nombreusuario = $_POST["Nombre_usuario"];
    $correo = $_POST["Correo"];
    $celular = $_POST["Celular"];
    $Direccion = $_POST["Direccion"];
    $Contraseña = $_POST["Contraseña"];


    $insertarDatos = "INSERT INTO usuarios VALUES('','$nombre','$apellido','$nombreusuario','$correo','$celular','$Direccion','$Contraseña')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    echo "Inicio de sesion satisfactorio";
}


?>