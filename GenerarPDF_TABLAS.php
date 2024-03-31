<?php
// paginas de referencias
//https://huguidugui.wordpress.com/2013/11/21/fpdf-cabeceras-datos/
// https://huguidugui.wordpress.com/2013/11/22/fpdf-reporte-estatico/
//https://huguidugui.wordpress.com/2013/11/28/fpdf-reporte-dinamico/
//https://huguidugui.wordpress.com/2013/11/12/pdf-2-de-2-texto-dinamico-con-llamada-a-la-bd/


include_once('Generar_PDF_TABLAS2.php');
$pdf = new PDF();
 
$pdf->AddPage();
 
 
$miCabecera = array('Nombre', 'Apellido', 'Nombre_usuario');
 
$misDatos = array(
            array('nombre' => 'Olga Lucia', 'apellido' => 'Perez Vilvoa', 'Nombre_usuario' => 'Olgaperez0101'),
            array('nombre' => 'Jhon Jairo', 'apellido' => 'Arias Guzman', 'Nombre_usuario' =>  'Jairo_aroas21'),
            array('nombre' => 'Hellen Joana', 'apellido' => 'Perez Carrazco', 'Nombre_usuario' =>  'Hellen21'),
            array('nombre' => 'Jairo', 'apellido' => 'Guzman', 'Nombre_usuario' => 'JairoGarzon21'),
            array('nombre' => 'Jairo', 'apellido' => 'Guzman', 'Nombre_usuario' => 'JairoGarzon21'),
            array('nombre' => 'Jairo', 'apellido' => 'Guzman', 'Nombre_usuario' => 'JairoGarzon21'),
            array('nombre' => 'Jairo', 'apellido' => 'Guzman', 'Nombre_usuario' => 'JairoGarzon21'),

            );
 
$pdf->tablaHorizontal($miCabecera, $misDatos);
 
$pdf->Output(); //Salida al navegador
?>