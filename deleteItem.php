<<<<<<< HEAD
<?php

require "config.php";

$product_id = $_GET['id'];
$user_id = $_GET['u_id'];

if (isset($product_id) && isset($user_id) ) {
    $deleteProduct = $conn->query("DELETE FROM cart WHERE cart.product_id=$product_id AND cart.user_id=$user_id");
    header("Location: cart.php");
}     

=======
<?php

require "config.php";

$product_id = $_GET['id'];
$user_id = $_GET['u_id'];

if (isset($product_id) && isset($user_id) ) {
    $deleteProduct = $conn->query("DELETE FROM cart WHERE cart.product_id=$product_id AND cart.user_id=$user_id");
    header("Location: cart.php");
}     

>>>>>>> f32211d3a14c90db3cb01a860fbfdfb50883ad18
?>