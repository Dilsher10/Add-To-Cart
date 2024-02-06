<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $count = 0;
    if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
    }
    ?>


   <a href="view-cart.php"><i class="fas fa-shopping-cart"></i> Cart (<?php echo $count ?>)</a>
</body>
</html>