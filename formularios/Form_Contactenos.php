
<?php
    // requiere conexion para mostrar el error 
    require "conexion.php";

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
    <title>FORMULARIO DE CONTACTO</title>
    <script src="https://kit.fontawesome.com/24ce6da039.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/estilo_main.css">
    <link rel="stylesheet" href="estilos/formulario_contacto.css">

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

    <body>
    <!-- contenedor general del formulario contacto -->

    <div class="contenedor_general_contacto">

        <form class="formulario_contacto" action="Form_Contactenos.php" method="post">
            <h3 name="Tit_Contactenos">FORMULARIO DE CONTACTO</h3>
            <input name="Correo" type="email" placeholder="Digite su correo">
            <input name="Nombre" type="text" placeholder="Digite su nombre">
            <textarea name="Asunto" cols="30" rows="40" placeholder="Desriba el asunto"></textarea>
            <textarea name="Mensaje" cols="30" rows="40" placeholder="Describa su mensaje"></textarea>
            <div class="botones_contacto">
                <button name="boton_contactenos" type="submit">ENVIAR</button>
                <button id="reseteo" type="reset">Resetear campos</button>
            </div>
        </form>
    </div>
    </body>
</html>


<?php 
    if (isset ($_POST["boton_contactenos"])) {
    $Correo = $_POST["Correo"];
    $Nombre = $_POST["Nombre"];
    $Asunto = $_POST["Asunto"];
    $Mensaje = $_POST["Mensaje"];



    $insertarDatos = "INSERT INTO contactenos VALUES('','$Correo','$Nombre','$Asunto','$Mensaje')";

    $ejecutarInsertar = mysqli_query($enlace_moto, $insertarDatos);
    echo "datos registrados correctamente ";
}


?>