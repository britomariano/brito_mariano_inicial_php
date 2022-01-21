<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];

$cuerpo_mail ="Nombre: ".$nombre_form."\r\n" . "Apellido: " .$apellido_form. "\r\n"."Correo electronico: ".$correo_form."\r\n"."Mensaje: ".$mensaje_form;
mail("mail@gmail.com" , "mensaje enviado desde nuestositio.com", $cuerpo_mail); 

$conexion=mysqli_connect("localhost", "id16100310_marianobrito86", "7L<~fkU{iX=1Fq%Q","id16100310_brito_mariano_php_inicial");

mysqli_query($conexion,"INSERT INTO consultas VALUES( '$nombre_form','$apellido_form','$correo_form','$mensaje_form')");

mysqli_close($conexion);

header("Location: contactenos.php?e=ok");

