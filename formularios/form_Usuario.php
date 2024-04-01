<?php

/* las variables de sesion se necesitan inicializar mediante el siguiente metodo  */

session_start();/* funciona para comprobar si esta guardada o no  */
/* requerimos conexion  */
require 'conexion.php';

/* && = y */
/* si las variables que se mandan a traves de _POST no estan vacios pues comprobemos  */
if (!empty ($POST['Nombre_usuario']) && !empty ($_POST['Contraseña'])) {
    /* ejecutamos una consulta si no estan vacios */
    /* lo hacemos con la conexion $conn */
    $records = $conn->prepare('SELECT id, Nombre_usuario, Contraseña FROM usuarios WHERE Nombre_usuario=:Nombre_usuario');
    /* reemplazamos parametro Nombre_usuario por lo que nos esta enviando a traves del metodo POST */
    $records->bindParam(':Nombre_usuario', $_POST['Nombre_usuario']); /* post recibe a email */
    /* lo ejecutamos */
    $records->execute();
    /* vamos a obtener datos del usuario con la variable result */
    $results = $records->fetch(PDO::FETCH_ASSOC);

    /* si ha ocurrido un error el error lo asignamos aqui  */
    $message = '';
    /* verifica si es correcta la informacion enviada  */
    /* si la respuesta no esta vacia vamos a verificar contraseñas, comparamos tambien contraseña que me da el usuario con el de la base de datos   */
    if (count($results) > 0 && password_verify($_POST['Contraseña'], $results['Contraseña'])) {
        /* si se valido que la contraseña es correcta , lo asignaremos en memoria   */
        $_SESSION['user_id'] = $results['id'];/* almacenamos id */
        /*  cuando tenga el id vamos a redireccionar al usuario */
        header('Location:  /index.php');
    } else {
        /* si la contraseña no es correcta mandamos lo siguiente */
        $message = 'Sorry, Those credentials dont match  ';
        /* ahora tratemos de mandar este mensaje por pantalla, esto sera abajo en html */
    }
}
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
    <title>FORMULARIO DE USUARIO</title>
    <script src="https://kit.fontawesome.com/24ce6da039.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/estilo_main.css">
    <link rel="stylesheet" href="estilos/formulario_usuario.css">
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
    <!-- contenedor general del formulario -->
    <div class="contenedor_general_usuario">
        <form class="formulario_usuario" method="POST" action="form_Usuario.php"><!-- formulario -->

            <h3>INICIAR SESION</h3> <!-- TITULO -->
            <span style="transform:translateY(-21px);"> o <br> <a style="color: #fff;text-decoration:none;"
                    href="formulario_registro.php">Sign up</a></span>


            <!-- ahora tratemos de mandar este mensaje por pantalla, esto sera abajo en html -->
            <!-- si no esta vacio la variable message muestre message a traves de un parrafo  -->
            <?php if (!empty ($message)): ?>
                <p style="color:aqua;">
                    <?= $message ?>
                </p>
            <?php endif; ?>


            <input name="Nombre_usuario" type="text" placeholder="Nombre de Usuario">
            <input name="Contraseña" type="password" placeholder="Clave de usuario">
            <input name="Email" type="email" placeholder="Digite email">

            <div class="botones_usuario">

                <input name="boton_usuario" type="submit" value="Iniciar Sesion">
                <button id="reseteo" type="reset">Resetear campos</button>
                <a href="Form_Registro_moto.php" name="redireccion_moto">Registra tu moto</a>
            </div>                
                

            </div>


        </form>
    </div>



    <script>
        // Función para redireccionar a index.html
        function redireccionar() {
            window.location.href = "index.php";
        }

        // Al presionar el botón de inicio de sesión,
        // se ejecuta la función redireccionar()
        document.querySelector("input[type='submit']").addEventListener("click", redireccionar);
    </script>

</body>






</body>

</html>