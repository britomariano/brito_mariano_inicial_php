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

<div id="portada"><h2>Verduleria y Fruteria</h2></div>    
<?php
define('FRUTA', array ('Manzana ', 'Pera ','Frutilla '));
define('PRECIO', array ('200', '150','400'));

$precio_canasta1 = PRECIO[0] + PRECIO[1]*2 + PRECIO [2]*0.5;
$precio_canasta2 = PRECIO[0]*0.5 + PRECIO[1]*0.5 + PRECIO [2]*0.5;
$precio_canasta3 = PRECIO[0]*0.5 + PRECIO [2]*0.5;
?>

<div id="cuerpo">

<ul>
<h2>Promociones</h2>
<li> Canasta familiar:<br> $ <?php echo round ($precio_canasta1) ?><br>
Contiene:<br> <?php echo FRUTA[0], FRUTA[1], FRUTA[2] ?>  </li>
<li> Canasta Pareja:<br> $ <?php echo round ($precio_canasta2) ?><br>
Contiene:<br> <?php echo FRUTA[0], FRUTA[1], FRUTA[2] ?> </li>
<li> Canasta individual:<br> $ <?php echo round ($precio_canasta3) ?><br>
Contiene:<br> <?php echo FRUTA[0], FRUTA[2] ?> </li>
</ul>
<div class = "producto_descripcion1">  <a href="canasta.php?producto=cf"title="canasta"> <img src="img/promociones.jpg" alt=""> </div> 

</div>    

</body>

<?php include("footer.php") ?>
echo "# brito_mariano_inicial_php" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/britomariano/brito_mariano_inicial_php.git
git push -u origin main
</html>