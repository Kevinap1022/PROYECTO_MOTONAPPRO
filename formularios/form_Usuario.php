

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

            <h3 style="transform:translateY(30px);">INICIAR SESION</h3> <!-- TITULO -->
            <a class="signup" href="formulario_registro.php">OR SIGN UP</a>
            <?php 
            include("modelo/conexion.php");
            include("controlador/controlador_login.php");
            ?>



            <!-- DENTRO DE ESTOS CAMPOS INTRODUCIMOS Y ENVIAMOS DATOS  -->
            <input name="usuario" type="text"  placeholder="Nombre de Usuario">
            <input name="contraseña" type="password"  placeholder="Clave de usuario">

            <div class="botones_usuario">

                <input name="boton_usuario" type="submit" value="Iniciar Sesion">
                <button id="reseteo" type="reset">Resetear campos</button>
            </div>                
                

            </div>
        </form>
    </div>


<!-- codigo para enviar a formulario registra tu moto 
    <script>
        // Función para redireccionar a index.html
        function redireccionar() {
            window.location.href = "Form_Registro_moto.php";
        }

        // Al presionar el botón de inicio de sesión,
        // se ejecuta la función redireccionar()
        document.querySelector("input[type='submit']").addEventListener("click", redireccionar);
    </script>
-->
</body>






</body>

</html>