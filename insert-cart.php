<?php

session_start();

if(isset($_POST['addCart'])){

    $name = $_POST['name'];
    $price = $_POST['price'];

    $check_product = array_column($_SESSION['cart'],'name');

    if(in_array($name,$check_product)){
        echo "
        <script>
        alert('Product already added');
        window.location.href = 'index.php';
        </script>
        ";
    }
    else{
        $_SESSION['cart'][] = array('name' => $name, 'price' => $price);
        header("location:view-cart.php");
    }
}



// Remove Cart

if(isset($_POST['remove'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['name'] === $_POST['item']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location:view-cart.php');
        }
    }
}



// Update Cart

if(isset($_POST['update'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['name'] === $_POST['item']){
            $_SESSION['cart'][$key] = array('name' => $name, 'price' => $price);
            header("location:view-cart.php");
        }
    }
}

?>