<?php

require "formularios/conexion.php";

/* si existe isset session vamos a mandarlo a traves  de user id */
if (isset ($_SESSION['user_id'])) {
    // Hacemos consulta  al resto de los datos
    $records = $conn->prepare('SELECT id,Nombre_usuario, Contraseña FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    /* obtenemos resultado y almacenamos en result */
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;

    if (count($results) > 0) {
        $user = $results;
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
    <title>INICIO_MOTONAPPRO</title>
    <script src="https://kit.fontawesome.com/24ce6da039.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="formularios/estilos/estilo_main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="imagenes/logosinfondo.png" type="image/x-icon">
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
            <a href="index.php">MotoNappPro</a>
        </div>

        <!-- opciones del menu -->
        <div class="opciones-menu">

            <!-- boton de menu responsive -->
            <input type="checkbox" id="check"> <!-- palomita del check -->
            <label for="check" class="checkbtn"><!-- icono label -->
                <i class="fa-solid fa-bars"></i>
            </label>

            <ul class="ul-menu">
                <li><a href="#NOSOTROS">Sobre Nosotros</a></li>
                <li><a href="formularios/formulario_registro.php">Registrate</a></li>
                <li><a href="#Contactanos">Contactanos</a></li>
                <li><a href="formularios/form_Usuario.php">Inicia Sesion</a></li>

            </ul>


        </div>

    </nav>
</header>


<body>

    <?php if (!empty ($user)): ?>
        <br>Welcome.
        <?= $user['Email'] ?>
        <br> You are succesfully Logged In
        <a href="formularios/logout.php">Logout</a>

    <?php else: ?>


        <!-- Contenedor general -->
        <div class="contenedor-general">
            <section class="primer-seccion"><!-- primer-seccion -->

                <img src="imagenes/logosinfondo.png" alt="logo"> <!--imagen de primer seccion -->

                <h3>
                    Bienvenido a MotoNappPro.Tu Compañero de Viaje de ruedas en MotoNappPro .Entendemos la passion y la
                    libertad qeu viene con el mundo de las motocicletas
                </h3>

                <a href="formularios/formulario_registro.php">Registrate</a>

            </section>


            <!-- segunda  seccion -->
            <section id="NOSOTROS" class="segunda-seccion">

                <h3>Sobre Nosotros</h3> <!-- titulo de segunda seccion -->
                <p>Somos una aplicacion integral que permite a los usuarios crear perfiles individuales para multiples
                    motocicletas
                    ,almacenando informacion detallada sobre el modelo, accesorios, fechas de visita al mecanico, reemplazo
                    de repuestos y kilometraje.
                </p>
                <img src="imagenes/moto-removebg-preview.png" alt="MOTo">

                <div class="nosotros_botones">
                    <ul class="nosotros_botones_ul">
                        <li class="nosotros_botones_ul__li"><a href="formularios/Mision_empresa.html">MISION</a></li>
                        <li class="nosotros_botones_ul__li"><a href="formularios/vision.html">VISION</a></li>
                        <li class="nosotros_botones_ul__li"><a href="formularios/objetivos.html">OBJETIVOS ESPECIFICOS</a>
                        </li>
                        <li class="nosotros_botones_ul__li"><a href="formularios/requerimientos.html">REQUERIMIENTOS</a>
                        </li>
                    </ul>
                </div>
            </section>


            <!-- tercera seccion -->
            <section class="tercera-seccion-caracteristicas">

                <div class="primer-caja-caracteristica"> <!-- primera caja de la tercera seccion -->

                    <img src="imagenes/chasis.jpg" alt="Moto-1">

                    <div class="caja-texto-primer-caracteristica">
                        <h3>Mantenimiento Predictivo</h3>
                        <p>
                            Programa recordatorios para el mantenimiento de rutina. Recibe alertas anticipadas sobre
                            posibles problemas mecánicos
                        </p>
                    </div>
                </div>


                <!-- segundo contenedor de las caracteristicas 3 y 4 , este esta dentro de seccion 3 -->
                <div class="segundo-contenedor-caracteristicas"> <!-- segunda caja de seccion tres -->

                    <div class="caja-imagen-caracteristica-2"><!-- caja de la imagen de caracteristica/2 -->
                        <img src="imagenes/cilindrraje.jpg" alt="Moto-2">
                    </div>

                    <div class="caja-texto-caracteristica-2"> <!-- caja de la texto de caracteristica/2 -->
                        <h3>Navegación Especializada para Motociclistas</h3>
                        <p> Rutas personalizadas adaptadas a las preferencias de los motociclistas, Puntos de interés y
                            paradas recomendadas para una experiencia única. Sigue la ubicación en tiempo real de tu moto a
                            través de GPS integrado </p>
                    </div>

                    <div class="caja-texto-caracteristica-3"> <!-- caja del texto de caracteristica 3 -->
                        <h3>Comunidad de Motociclitas</h3>
                        <p>Únete a una comunidad exclusiva de apasionados por las motos de alto rendimiento, comparte
                            experiencias y descubre rutas épicas.</p>
                    </div>

                    <div class="caja-imagen-caracteristica-3"> <!-- caja de la imagen de caracteristica 3 -->

                        <img src="imagenes/cadena.png" alt="Moto-3">
                    </div>


                </div>

            </section>




            <!-- Cuarta seccion formulario -->
            <section class="Cuarta-seccion-contactanos">

                <div class="formulario-suscripcion"><!-- formulario de suscripcion -->

                    <img src="fondo_3.jpg" alt="Fondo"> <!-- fondo de la seccion  -->
                    <i class="fa-regular fa-paper-plane"></i>

                    <div class="titulo-suscrito"> <!-- titulo  de la seccion  -->
                        <h2>Subscribe to receive updates!</h2>
                    </div>

                    <div class="formulario-correo"> <!-- input del formulario -->

                        <input type="text" placeholder="ENTER EMAIL ADDRESS">
                        <button type="submit">NOTIFY ME!</button>

                    </div>


                </div>





                <!-- seccion de contactos como gamil telefono y direccion -->
                <div id="Contactanos" class="cajas-contactos">

                    <div class="address"> <!-- caja de  direccion -->
                        <i class="fa-solid fa-map-location-dot"></i>
                        <div class="nombre-address">
                            <h3>ADDRESS</h3>
                        </div>

                        <div class="texto-address"> <!-- texto de direccion -->
                            <p>4923 Market Street Orlando FL</p>
                        </div>
                    </div>

                    <div class="email"> <!-- caja de email -->
                        <i class="fa-solid fa-envelope"></i>
                        <div class="nombre-email"> <!-- texto de email -->

                            <h3>EMAIL</h3>
                        </div>

                        <div class="texto-email"> <!-- texto del email -->
                            <a>david.ap1022@gmail.com</a>
                        </div>
                    </div>


                    <div class="phone"> <!-- caja de teleforno -->
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        <div class="nombre-phone"> <!-- el nombre del telefono -->
                            <h3>PHONE</h3>
                        </div>
                        <div class="texto-phone"> <!-- texto dentro del telefono  -->
                            <p>+57 31243543436</p>
                        </div>
                    </div>

                </div>




                <div class="redes"> <!-- contenedor de redes -->

                    <div class="iconos-redes"> <!-- iconos -->
                        <div><i class="fa-brands fa-twitter"></i></div>
                        <div><i class="fa-brands fa-facebook-f"></i></div>
                        <div><i class="fa-brands fa-instagram"></i></div>

                    </div>
                    <div class="copy"> <!-- texto de copyright -->
                        <h3>Copyright &copy; YOur Website 2023</h3>
                    </div>

                </div>

            </section>



        </div>




    <?php endif; ?>
</body>

</html>