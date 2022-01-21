<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="e.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("header.php") ?>
<div id="portada"><h2>Contactanos</h2></div>   

<section class="contacto_contenido">

<form action="enviar_consulta.php" method="POST">
<h3>  Envianos tu consulta</h3>
    <input type="text" name="nombre" placeholder="Nombre" class="contacto_input" require>
    <input type="text" name="apellido" placeholder="Apellido" class="contacto_input" require>
    <input type="email" name="correo" placeholder="Email" class="contacto_input" require>
    <textarea name="mensaje" placeholder="Mensaje" class="textarea_input" id="" cols="30" rows="10" require ></textarea>
    <br><input type="submit" value="Enviar" class="contacto_btn">
    <?php 
if(isset ($_GET['e']))
{
    echo"<h4>Mensaje enviado con exito </h4>";
}
?>

</form>



</section>  

</body>
<?php include("footer.php") ?>
</html>