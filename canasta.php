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
<div id="portada"><h2>Mercado</h2></div>   
<section id="canasta">
    <nav class="btn_canasta">
        <ul>
            <li> <a href="canasta.php?producto=cf"> Canasta Familiar </a></li>
            <li> <a href="canasta.php?producto=cp"> Canasta Pareja </a></li>
            <li> <a href="canasta.php?producto=ci"> Canasta individual </a></li>


        </ul>

    </nav>

    <?php 

    if (isset ($_GET['producto'])) {

    
    switch ($_GET['producto']) {
        case 'cf':
        $producto = "Canasta Familiar";
        $contenido = "1 kg de Manzana, 2 Kg de Pera, 1/2 Kg de Frutilla";
        $precio =  "$ 700";
        $img = "img/familiar.jpg";
        break;

        case 'cp':
            $producto = "Canasta Parejas";
            $contenido = "1/2 kg de Manzana, 1/2 Kg de Pera, 1/2 Kg de Frutilla";
            $precio =  "$ 350";
            $img = "img/parejas.jpg";
        break;   
        
        case 'ci':
           $producto = "Canasta Individual";
           $contenido = "1/2 kg de Manzana, 1/2 Kg de Frutilla";
           $precio =  "$ 300";
           $img = "img/individual.jpg";
         break;  
         
         
        }
    }
            
    ?>
   
   

    <div class="producto_descripcion">
        <h2><?php echo $producto; ?> </h2>
        <h3><?php echo $contenido; ?> </h3>
        <h1><?php echo $precio; ?> </h1>
        <div class="img_muestra">
            <img src="<?php echo $img; ?>" /> </div>

    </div> 

</section>    
</body>
<?php include("footer.php") ?>
</html>