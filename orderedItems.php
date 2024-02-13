<?php
session_start();
require 'config.php';

$ordered_items = $_SESSION['cartProductItems'];

foreach ($ordered_items as $item) {
    print_r($item);
    echo "<br>";
    echo "<br>";
    $insert = $conn->prepare("INSERT INTO orders (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");

    $insert->execute([
        ':user_id' => $item['user_id'],
        ':product_id' => $item['id'],
        ':quantity' => $item['quantity'],        
    ]); 
    header("location: cart.php");
}

$user_id = $_SESSION['user_id'];
if (isset($user_id)) {
    $deleteProduct = $conn->query("DELETE FROM cart WHERE cart.user_id=$user_id");
    header("Location: cart.php");
}  

?>