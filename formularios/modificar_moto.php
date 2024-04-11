<?php
include "modelo/conexion.php";
/* almaceno id y se podrias mostrar en pantalla */
    $id= $_GET["id"];
    /* mostraremos todos los datos que tiene este id */
    /* ya hicimos consulta */
    $sql_1 = $conexion->query("select * from motos where id=$id ");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Datos de Moto</title>
    <link rel="stylesheet" href="estilos/estilo_main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/24ce6da039.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/estilos_registro_moto.css">

</head>
<header class="header">
    <!-- Menu de la pagina  -->
    <nav class="contenedor-menu" style="position:relative;margin:0px 0px 2px 0px;">
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
<form  method="POST" class="formulario_moto" style="width:110%;">

<div class="primer_gran_caja">
    <h3>Modificar Moto</h3>
    <!-- ocultamos el id  -->
    <input type="hidden" name="id" value="<?= $_GET["id"]?>">

    <?php
    /* aqui modificamos la moto si la modificamos bien va a decir que bien y si es un error muestra que mal  */
    include "controlador/modificar_moto.php";
    /* MOSTRAMOS TODOS LOS DATOS CON WHILE  */
    /* almacenamos todos los datos en la variable datos  */
    while($datos_motos= $sql_1->fetch_object()){?>
<p>Aqui podras darnos ya todos tus datos de tu moto para que nosotros podamos trabajar con ellos. </p>
    <img src="../imagenes/logosinfondo.png" alt="datos_moto">
</div>
    

<div class="segunda_gran_caja">
<div class="marca_de_moto">
        <label for="marca">marca de tu moto</label>
        <!-- mostramos datos dentro d e value, es el valor del nombre de la tabla en la base de datos  -->
        <input id="marca" name="marca_moto" type=" text" value="<?= $datos_motos->marca_moto ?>">
        <label for="modelo">modelo de su moto</label>
        <input id="modelo" name="modelo_moto" type="text" value="<?= $datos_motos->modelo_moto ?>">
        <label for="cilindraje">cilindraje</label>
        <input id="cilindraje" name="cilindraje_moto" type="text" value="<?= $datos_motos->cilindraje_moto ?>">
    </div>
    <div class="fecha-tecnomecanica">
        <h3>Año de fabricación</h3>
        <input name="fecha_fabricacion" type="date" value="<?= $datos_motos->fecha_fabricacion ?>">
        <h3>Tipo de motor </h3>

        <input name="tecnomecanica" type="text" value="<?= $datos_motos->tecnomecanica?>">
        <h3>Tipo de transmision </h3>
        <input name="sincronizacion" type="text" value="<?= $datos_motos->sincronizacion ?>">

        <h3>Fecha ultima revision tecnico-mecanica</h3>
        <input name="fecha_tecnomecanica" type="date" value="<?= $datos_motos->fecha_tecnomecanica ?>">
    </div>
</div>


<div class="tercera_gran_caja">
    <div class="Placa_seguro">
        <h3>Seguro</h3>
        <input type="text" id="Placa" name="Placa" placeholder="Numero de Placa" value="<?= $datos_motos->Placa ?>">
        <input type="text" name="Numero_Poliza" placeholder="Numero de Poliza" value="<?= $datos_motos->Numero_poliza?>">
        <h3>fecha de vencimiento soat </h3>
        <input id="fecha" type="date" name="fecha_soat" value="<?= $datos_motos->fecha_soat ?>">
    </div>

    <?php }
    ?>
    





<!-- envio de informacion -->

    <div class="envio">
        <button type="reset">Resetear campos</button>
        <button  type="submit" class="btn btn-primary" name="Envio_datos_moto"  value="ok" >Modificar Moto</button>
        <a href="form_Registro_mantenimiento_Moto.php">Mantenimiento de Moto</a>             
    </div>
</div>
</form> 
</body>
</html>