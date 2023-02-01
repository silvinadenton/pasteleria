<?php
$nombre_formu=$_POST['nombre'];
$apellido_formu=$_POST['apellido'];
$correo_formu=$_POST['correo'];
$mensaje_o_pedido_formu=$_POST['mensaje_o_pedido'];


$contenido_mail="Nombre:".$nombre_formu."\r\n"."Apellido:".$apellido_formu."\r\n"."Correo:".$correo_formu."\r\n"."Mensaje o Pedidos:".$mensaje_o_pedido_formu;

$respuesta="From: $nombre_formu $apellido_formu <$correo_formu>";


@mail("                                   dentonacebalsilvina@gmail.com,mensaje desde www.lapasteleriademama",
	$contenido_mail,$respuesta);

//$datos_conexion= mysqli_connect('localhost','id10561146_silvina_denton','jazmin2203','id10561146_silvina') or die('No se pudo conectar con la Base de Datos');

$datos_conexion= mysqli_connect('localhost','root','','contactos') or die('No se pudo conectar con la Base de Datos');


mysqli_query($datos_conexion,"INSERT INTO la_pasteleria VALUES (DEFAULT,' $nombre_formu','$apellido_formu','$correo_formu','$mensaje_o_pedido_formu')");



header("location:pasteleria.php");










?>