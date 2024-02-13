<?php require "config.php";?>

<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Check if user exists (else direct user to login)
    $user_id = $_SESSION['user_id'];
    // echo $_GET['id'];
    $_SESSION['product_id'] = $product_id = $_GET['id'];
    $quantity = $_POST['quantity'];

    if (isset($_SESSION['user_id'])) {
        $cart_sql = $conn->query("SELECT * FROM cart WHERE product_id='$product_id' and user_id='$user_id'");
        $cart_sql->execute();
        

        if($cart_sql->rowCount() == 1) {
            $row = $cart_sql->fetch(PDO::FETCH_ASSOC);
            $quantity_add = $row['quantity'] + 1;
            $new_row_qty = "UPDATE cart SET quantity = '$quantity_add' WHERE product_id='$product_id' and user_id='$user_id'";
            $new_result = $conn->prepare($new_row_qty);
            $new_result->execute();
            // header("Location: ../product.php?id=". $item_id);
            // exit();
        }
        else { 
            // Allow user add to cart
            $insert = $conn->prepare("INSERT INTO cart (product_id, user_id, quantity) VALUES (:product_id, :user_id, :quantity)");
        
            $insert->execute([
                ':product_id' => $product_id,
                ':user_id' => $user_id,
                ':quantity' => $quantity
                
            ]); 

        }
    
        
      
        // header("location: product_detail.php");
        // exit();
    } else {
        header("location: login.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MProduct Details</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
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
    <div class="body-wrap">
        <!-- Navbar Start -->
    <?php require "includes/navbar.php"?>
    <!-- Navbar End -->

    <!-- Shop Detail Start -->
    <div class="pb-5 product-detail-wrap">
        <div class="row px-xl-5 items">
            <?php require "config.php";?>
            <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $product = $conn->query("SELECT * FROM `products` WHERE products.id = $id");
                    $product->execute();
                    $data = $product->fetch(PDO::FETCH_ASSOC);
                   
            ?>
            <div class="col-lg-5 mb-30 d-flex justify-content-center">
                <div id="" class="product-detail-image-wrap">
                    <img class="product-detail-image" src="<?= $data['image']?>" alt="<?= $data['title']?>">
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <form method="POST" action="product_detail.php?id=<?= $data['id']?>">
                    <div class="h-100 product-details">
                        <h3><?= $data['title']?></h3>
                        <div class="d-flex mb-3">
                            <div class="text-primary mr-2">
                                <small class="fas fa-star star"></small>
                                <small class="fas fa-star star"></small>
                                <small class="fas fa-star star"></small>
                                <small class="fas fa-star-half-alt star"></small>
                                <small class="far fa-star star"></small>
                            </div>
                            <small class="pt-1">(1 Review)</small>
                        </div>
                        <h3 class="font-weight-semi-bold mb-4">&pound;<?= $data['price']?></h3>
                        <p class="mb-4"><?= $data['description']?></p> 
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 160px;">
                                <div class="input-group-btn d-flex">
                                    <button class="btn btn-custom btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" name="quantity" class="form-control border-1 text-center" id="qty" value="1">
                                <div class="input-group-btn d-flex">
                                    <button class="btn btn-custom btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <input type="hidden" name="title" value="<?= $data['title']?>">
                            <input type="hidden" name="price" value="<?= $data['price']?>">
                            <input type="hidden" name="description" value="<?= $data['description']?>">
                            <!-- Button trigger modal -->
                            <?php
                                if(isset($_SESSION['user_id'])) {
                            ?>
                            <button class="btn btn-custom px-3" type="submit" onclick="myFunction()" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-shopping-cart mr-1"></i> Add To
                                Cart</button>
                            <?php
                                }
                                else
                                {
                            ?>
                            <button class="btn btn-custom px-3" type="submit"><i class="fa fa-shopping-cart mr-1"></i> Add To
                                Cart</button>
                            <?php } ?>
                        </div>

                        

                        <!-- Modal -->
                        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-success">Item successfully added to cart</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="male_products.php">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continue shopping</button>
                                    </a>
                                    <a href="cart.php">
                                        <button type="button" class="btn btn-primary">View Cart</button>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Ends -->
                                      
                    </div>
                </form>
            </div>
        </div>
        <?php } ?>
        
        <div class="row items">
            <div class="">
                <div class="p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews (1)</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-3">
                            <div class="row items">
                                <div class="col-md-6">
                                    <h4 class="mb-4">1 review for "Product Name"</h4>
                                    <div class="media mb-4">
                                        <img src="images/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2023</i></small></h6>
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star star"></i>
                                                <i class="fas fa-star star"></i>
                                                <i class="fas fa-star star"></i>
                                                <i class="fas fa-star-half-alt star"></i>
                                                <i class="far fa-star star"></i>
                                            </div>
                                            <p>The prices are unbeatable for the quality you get. The shipping is lightning fast, and the packaging is always lovely.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-primary">
                                            <i class="far fa-star star"></i>
                                            <i class="far fa-star star"></i>
                                            <i class="far fa-star star"></i>
                                            <i class="far fa-star star"></i>
                                            <i class="far fa-star star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="submit" value="Leave Your Review" class="btn main-color px-3 text-white">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->

    <!-- Footer Begins -->
     <?php require "includes/footer.php"?>
    <!-- Footer Ends -->
    </div>
    
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/productDetail.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function myFunction() {
            // setTimeout(myGreeting, 2000)
            // setTimeout(swal("Hello world!"), 2000);
            if ('<?php isset($_SESSION['user_id'])?>') {
                swal("Product Added to Cart!", "You clicked the button!", "success");
            } else {
                console.log('hello');
            }
        }
    </script>

</body>

</html>