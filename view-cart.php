<?php
include 'header.php';
?>


<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Update</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>
    <?php
    session_start();
    $total = 0;
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key => $value){
            $total = $value['price'] * product_quantity;
            echo"
            <form action='insert-cart.php' method='POST'>
            <tr>
            <td>$key</td>
            <td>$value[name]</td>
            <td>$value[price]</td>
            <td><input type='number' name='quantity' value='$value[quantity]'></td>
            <td>$total</td>
            <td><button name='update'>Update</button></td>
            <td><button name='remove'>Remove</button></td>
            <td><input type='text' name='item' value='$value[name]'></td>
            </tr>
            </form>
            ";
        }
    }
    ?>
  </tbody>
</table>
</div>