<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloth-store</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="./css/index.css">
    <!-- <link rel="stylesheet" href="./css/footer-style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
  

</head>
<body>
    <!-- Navbar Begins -->
    <?php require "includes/navbar.php"?>
    <!-- Navbar Ends -->
    <div class="cart-wrap p-3">
        <h3 class="mb-4 shopping-basket">Shopping Basket</h3>
        <div class="row items">
            <div class="col-md-7 product-item-wrap p-2">
                <!-- start here --> 
                <?php require "config.php";
                    if (!isset($_SESSION['user_id']) ) {
                ?>
                 <hr class="cart-line">
                 <p class="fw-bold fs-6">No Item in Cart</p>
                 <div class="total-wrap d-flex flex-column justify-content-end align-items-end">
                    <div class="subtotal-wrap">
                        <p>
                            <span class="me-5 fw-semibold">Subtotal:</span><span class="fw-semibold text-dark">&pound;<span class="subtotal"><?= isset($subTotal) ? $subTotal : 0?></span></span>
                        </p>
                        <p>
                            <span class="me-5 fw-semibold">Shipping:</span><span class="fw-semibold text-dark">free</span>
                        </p>
                        <hr class="cart-line">
                        <p>
                            <span class="me-5 fw-semibold text-dark">Total:</span><span class="fw-bold text-black ml-4">&pound;<span class="total"><?= isset($Total) ? $subTotal : 0?></span></span>
                        </p>
                    </div>
                </div>
                <?php
                    
                    } else {
                    $user_id = $_SESSION['user_id'];

                    $products = $conn->query("SELECT products.*, cart.user_id, cart.quantity FROM `products` INNER JOIN cart on products.id = cart.product_id INNER JOIN users on cart.user_id = users.id WHERE cart.user_id = $user_id;");
                    $products->execute();
                    $data = $products->fetchAll(PDO::FETCH_ASSOC);
                    $subTotal = 0;
                    $_SESSION['cartProductItems'] = $data;
                    // print_r($data);
                    foreach($data as $product ) {                      
                ?>
                <div class="product-item d-flex justify-content-between mb-3">
                    <img src="<?= $product['image'];?>" width="100px" class="mr-4 cloth-item" alt="<?= $product['title'];?>">
                    <div class="product-description p w-100 d-flex">
                        <div class="product-description-details d-flex flex-column justify-content-between">
                            <p class="text-black main-description"><?= $product['description'];?></p>
                    
                            <div>
                                <p class="product-availability m-0 text-success">In stock</p>
                                <!-- <p class="product-color m-0 text-black"><b class="me-1 fw-bold">Colour:</b>Red</p>
                                <p class="product-size m-0 text-black"><b class="me-1 fw-bold">Size:</b>XL</p> -->
                                <div class="action-points d-flex">
                                    <label for="quantity" class="me-1 fw-bold">Qty:</label>
                                    <input type="text" name="quantity" readonly class="qty fs-6 me-2 pl-2" id="quantity" value="<?= $product['quantity'];?>">
                             
                                    <div class="d-flex">
                                        <span class="">|</span>
                                        <a href="deleteItem.php?id=<?=$product['id']?>&&u_id=<?=$product['user_id']?>" class="delete text-black fw-bold" onclick="myFunction()"> Delete
                                        </a>
                                    </div>
                                </div> 
                            </div>      
                        </div>
                        <p class='product-price fw-bold text-black'>&pound;<span class="qtyPrice"><?= $newPrice =$product['price'] * $product['quantity'];?></span></p>
                        <!-- <input name="product_price" class="chest" value="<?= $product['price'];?>" readonly disabled hidden /> -->
                    </div>
                </div>
                
                <hr class="cart-line">
                <?php
                $subTotal += $newPrice;
                ?>
                <?php } ?>
                
              
                <!-- <hr class="cart-line"> -->
                <div class="total-wrap d-flex flex-column justify-content-end align-items-end">
                    <div class="subtotal-wrap">
                        <p>
                            <span class="me-5 fw-semibold">Subtotal:</span><span class="fw-semibold text-dark">&pound;<span class="subtotal"><?= isset($subTotal)? $subTotal : '0';?></span></span>
                        </p>
                        <p>
                            <span class="me-5 fw-semibold">Shipping:</span><span class="fw-semibold text-dark">free</span>
                        </p>
                        <hr class="cart-line">
                        <p>
                            <span class="me-5 fw-semibold text-dark">Total:</span><span class="fw-bold text-black ml-4">&pound;<span class="total"><?= isset($subTotal)? $subTotal : '0';?></span></span>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-md-4 bg-light rounded">
                <div class="checkout-wrap d-flex flex-column align-items-start">
                    <h4 class="fw-bold pt-4">Payment Info.</h4>
                    <hr class="payment-line bg-secondary">
                    <p class="fw-semibold">Payment Method</p>
                    <div class="choice fw-semibold text-dark">
                        <input type="radio" name="card" class="me-3">
                        <label for="card" class="fw-semibold">
                            <i class="fa-regular fa-credit-card me-1"></i>
                            Credit/Debit Card
                        </label>
                    </div>
                    <div class="choice fw-semibold text-dark">
                        <input type="radio" name="card" class="me-3">
                        <label for="card" class="fw-semibold">
                        <i class="fa-brands fa-paypal me-1"></i>
                            Paypal
                        </label>
                    </div>
                    <hr class="payment-line bg-secondary mb-4">
                    <div class="card-name mb-4">
                        <p class="fw-semibold">Name on Card:</p>
                        <p class="fw-semibold text-dark d-inline"><?=isset($_SESSION["firstname"])? $_SESSION["firstname"] : "John" ?></p>
                        <p class="fw-semibold text-dark d-inline"><?=isset($_SESSION["lastname"])? $_SESSION["lastname"] : "Doe" ?></p>
                    </div>
                    <div class="card-no mb-4">
                        <p class="fw-semibold">Card Number:</p>
                        <p class="fw-semibold text-dark">.... .... .... 2745</p>
                    </div>
                    <div class="ish d-flex mb-4">
                        <div class="card-expiry-date me-5">
                            <p class="fw-semibold">Expiration Date:</p>
                            <p class="fw-semibold text-dark">05/26</p>
                        </div>
                        <div class='cvv'>
                            <p class="fw-semibold">CVV:</p>
                            <p class="fw-semibold text-dark">215</p>
                        </div>
                    </div>
                    <div class="ten d-flex justify-content-center">
                        <?php if(isset($_SESSION['firstname']) && isset($_SESSION['user_id'])) {?>
                        <a href="orderedItems.php" class="ordered">
                            <button class="btn btn-custom px-3 checkout" onclick="setTimeout(myFunction(), 2000)"> Checkout</button>
                        </a>
                        <?php }
                            else {}
                        ?>
                        <!-- <button class="btn btn-custom px-3 checkout" onclick="setTimeout(myFunction(), 2000)"> Checkout</button> -->
                    </div>
                  
                </div>
             
            </div>
        </div>
    </div>

    <!-- Footer Begins -->
    <?php require "includes/footer.php"?>
    <!-- Footer Ends -->
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/cart.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function myFunction() {
            // setTimeout(myGreeting, 2000)
            setTimeout(swal("Hello world!"), 2000);
            swal("Items Checked out successful!");
        }
    </script>
</body>
</html>
