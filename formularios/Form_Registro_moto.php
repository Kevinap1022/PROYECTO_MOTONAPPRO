
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <nav class="contenedor-menu" style="position:relative;margin:0px 0px 100px 0px;">
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
    <script>
        function eliminar(){
            var respuesta= confirm("¿Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script>
<?php
    /* primero se llama la conexion despues los  controladores  */
    include "modelo/conexion.php";
    include "controlador/eliminar_moto.php";
?>
<div class="contenedor_formulario_moto">
<form action="Form_Registro_moto.php" method="post" class="formulario_moto">

        <div class="primer_gran_caja">
            <h3>REGISTRA TU MOTO AQUI</h3>
            <?php
            
            /* include "modelo/conexion.php"; */
            include "controlador/registro_moto.php"

            ?>
            <p>Aqui podras darnos ya todos tus datos de tu moto para que nosotros podamos trabajar con ellos. </p>
            <img src="../imagenes/logosinfondo.png" alt="datos_moto">
        </div>
            

        <div class="segunda_gran_caja">
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
        </div>
            
        <div class="tercera_gran_caja">
            <div class="Placa_seguro">

                <h3>Seguro</h3>
                <input type="text" id="Placa" name="Placa" placeholder="Numero de Placa">
                <input type="text" name="Numero_Poliza" placeholder="Numero de Poliza">
                <h3>fecha de vencimiento soat </h3>
                <input id="fecha" type="date" name="fecha_soat">
            </div>

            <div class="envio">
                <button type="reset">Resetear campos</button>

                <button name="Envio_datos_moto" type="submit" value="Enviar informacion">Registrar moto</button>

                <a href="form_Registro_mantenimiento_Moto.php">Mantenimiento de Moto</a>             
            </div>
            </div>
    </form> 


<div class="col-11 p-3">
<table  class="table table-striped" >
<thead class="table-dark">

    <tr>
        <th scope="col">ID</th>
        <th scope="col">MARCA DE MOTO</th>
        <th scope="col">Modelo Moto</th>
        <th scope="col">cilindraje</th>
        <th scope="col">Año de fabricacion</th>
        <th scope="col">Tipo de Motor</th>
        <th scope="col">Tipo de Transmision</th>
        <th scope="col">fecha ultima revision tecnico-mecanica</th>
        <th scope="col">Numero de placa</th>
        <th scope="col">Numero de poliza</th>
        <th scope="col">fecha vencimiento soat</th>
        <th scope="col"></th>
    </tr>

</thead>
<tbody class="table-dark">
    <?php 
    
    include "modelo/conexion.php";
    /* selecciona todo de la tabla motos  */    
    $sql_1= $conexion->query("select * from motos ");
    /* vamos a recorrer los datos  */
    /* mostramos los datos que tenemos pero aqui y el numero de registro que tenemos en la base de datos  */
    while($datos_motos= $sql_1->fetch_object()){ ?>

    <tr>
        <th scope="row"><?= $datos_motos->id?></th>
        <td><?= $datos_motos->marca_moto?></td>
        <td><?= $datos_motos->modelo_moto?></td>
        <td><?= $datos_motos->cilindraje_moto?></td>
        <td><?= $datos_motos->fecha_fabricacion?></td>
        <td><?= $datos_motos->tecnomecanica?></td>
        <td><?= $datos_motos->sincronizacion?></td>
        <td><?= $datos_motos->fecha_tecnomecanica?></td>
        <td><?= $datos_motos->Placa?></td>
        <td><?= $datos_motos->Numero_poliza?></td>
        <td><?= $datos_motos->fecha_soat?></td>
        <td style="width:130px;" >
        <!-- con el id nos vamos a comunicar entre forms -->
        <!-- nos envia a la vista de modificar producto pero tambien quiero que me envie un valor dentro de una variable Que sera un id  -->
            <a href="modificar_moto.php?id=<?= $datos_motos->id?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <!-- cuando presionemos el boton de eliminar el id se va a enviar a la url, este id lo controlamos en el controlador  -->
            <!-- colocamos un javacript para mostrar un mensaje de advertencia si quiere o no eliminar el registro  -->
            <a onclick="return eliminar()"  href="Form_Registro_moto.php?id=<?= $datos_motos->id?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
        </td>
    </tr>
    <?php  }
    ?>

</tbody>
</table>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>





