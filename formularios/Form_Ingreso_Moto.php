
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
    <title>FORMULARIO DE INGRESO DE MOTO</title>
    <script src="https://kit.fontawesome.com/24ce6da039.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/estilo_main.css">
    <link rel="stylesheet" href="estilos/Form_ingreso_moto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="../imagenes/logosinfondo.png" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
    <!-- contenedor general del formulario -->
    <div class="contenedor_general_ingreso_moto">
        <form class="formulario_ingreso_moto" action="Form_Ingreso_Moto.php" method="post">
            <h3>Ingresa a tu moto</h3>
            <input name="nombre_usuario"  type="text" placeholder="Nombre de usuario">
            <input name="cedula"  type="text" placeholder="Digite su cedula">
            <input name="direccion" type="text"  required="" placeholder="Digite su direccion">
            <h3>Fecha de ingreso</h3>
            <input name="Fecha_ingreso"   type="date" >
    <div class="botones">
    <input name="boton_ingreso_moto" type="submit" value="Ingresa a tu moto">
    </div>
        </form>

    </div>    

</body>
</html>



<?php 

if (isset ($_POST["boton_ingreso_moto"])) {
    $nombre_usuario = $_POST["nombre_usuario"];
    $cedula = $_POST["cedula"];
    $direccion = $_POST["direccion"];
    $Fecha_ingreso = $_POST["Fecha_ingreso"];



    $insertarDatos = "INSERT INTO ingreso_moto VALUES('','$nombre_usuario','$cedula','$direccion','$Fecha_ingreso')";

    $ejecutarInsertar = mysqli_query($enlace_moto, $insertarDatos);
    echo "datos registrados correctamente ";
}


?>