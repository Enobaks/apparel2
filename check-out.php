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
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrap">
        <!-- Navbar Begins -->
        <?php require "includes/navbar.php"?>
        <!-- Navbar Ends -->
        <!-- Checkout section -->
        <div class="process-checkout_wrap">
            <div class="row items process-check-out">
                <div class="col-md-6">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="col-md-6 col-sm-12 process-checkout-form ">
                    <h2 class="mb-5 text-center fw-bold fs-3">Card Information</h2>
                    <form class="row g-3 p-3">
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Name on the Card</label><span class="text-danger ml-1">*</span>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label">Card Number</label><span class="text-danger ml-1">*</span>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Expiration Date</label><span class="text-danger ml-1">*</span>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label">CVC/CVV</label><span class="text-danger ml-1">*</span>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>                       
                        <div class="col-12 d-flex justify-content-between pt-5">
                            <button type="submit" class="btn main-color-opp">Cancel</button>
                            <button type="submit" class="btn main-color">Confirm & Pay</button>     
                        </div>
                    </form>
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