<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
         <!-- Navbar Begins -->
         <?php require "includes/navbar.php"?>
        <!-- Navbar Ends -->
        <div class="account">
            <div class="container account-wrap mb-5 p-0">
                <h2 class="account-section my-5 fw-semibold p-2">Hello <span><?php echo $_SESSION["firstname"];?></span></h2>
                <div class="row items">
                    <div class="d-flex justify-content-center filo">
                        <div class="col-md-3 d-flex py-1 address align-items-center">
                            <i class="fa-solid fa-address-book fs-1"></i>
                            <div class="edit-text-wrap">
                                <p class="fs-5 edit-subject ml-2 mb-0 fw-medium">Your Address</p>
                                <p class="edit-text ml-2 mb-1">Edit, remove or set default address</p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex py-1 address align-items-center">
                            <i class="fa-sharp fa-solid fa-shield-halved fs-1"></i>
                            <div class="edit-text-wrap">
                                <p class="fs-5 edit-subject ml-2 mb-0 fw-medium">Security Details</p>
                                <p class="edit-text ml-2 mb-1">Manage password, email and mobile number</p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex py-1 address align-items-center">
                            <i class="fa-solid fa-basket-shopping fs-1"></i>
                            <div class="edit-text-wrap">
                                <p class="fs-5 edit-subject ml-2 mb-0 fw-medium">Your Orders</p>
                                <p class="edit-text ml-2 mb-1">Track, return, cancel an order, download invoice or buy again</p>
                            </div>
                        </div>             
                    </div>
                </div>
                <div class="row items">
                    <div class="d-flex justify-content-center filo">
                        <div class="col-md-3 d-flex py-1 address align-items-center">
                            <i class="fa-regular fa-credit-card fs-1"></i>
                            <div class="edit-text-wrap">
                                <p class="fs-5 edit-subject ml-2 mb-0 fw-medium">Your Payments</p>
                                <p class="edit-text ml-2 mb-1">Manage or add payment methods and view your transactions</p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex py-1 address align-items-center">
                            <i class="fa-solid fa-envelope-open-text fs-1"></i>
                            <div class="edit-text-wrap">
                                <p class="fs-5 edit-subject ml-2 mb-0 fw-medium">Your Messages</p>
                                <p class="edit-text ml-2 mb-1">View or respond to messages from Amazon, Sellers and Buyers </p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex py-1 address align-items-center">
                            <i class="fa-sharp fa-solid fa-headset fs-1"></i>   
                            <div class="edit-text-wrap">
                                <p class="fs-5 edit-subject ml-2 mb-0 fw-medium">Customer Service</p>
                                <p class="edit-text ml-2 mb-1">Browse self service options, help articles or contact us</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Begins -->
        <?php require "includes/footer.php"?>
        <!-- Footer Ends -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>