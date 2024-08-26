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
    <div class="body-wrap">
         <!-- Navbar Begins -->
         <?php require "includes/navbar.php"?>
        <!-- Navbar Ends -->
        <div class="cat-hero-section position-relative">
            <img src="./images/h1_hero15.jpg" class='male-banner' alt="">
            <div class="hero-txt-wrap position-absolute male-punch text-center m-0">
                <p class="danger fw-normal text-center">Fashion Sale</p>
                <h2 class="fs-1 text-center">Minimal Menz Style</h2>
                <p class="text-center fw-medium">"Dive into unbelievable deals and cool offers that will make your summer shopping experience unforgettable."</p>
                <button class="btn main-color">Shop Now</button>
            </div>
        </div>
        <div class="items-wrap">
            <h2 class="text-center my-5 fw-bold">Fashion for Men</h2>
            <div class="row items">
            <div class="col-md-12 d-flex justify-content-around flex-row flex-wrap flex-sm-row">
                    <?php require "config.php";?>

                    <?php
                        $products = $conn->query("SELECT * FROM `products` where products.category='1'");
                        $products->execute();
                        $data = $products->fetchAll(PDO::FETCH_ASSOC);

                        foreach($data as $product) {
                    ?>
                    <div class="col-md-3 merchant-item mt-5">
                        <a href="product_detail.php?id=<?=$product['id']?>" onclick="productDetail()">
                            <div class="card card-wrap ">
                                <img src="<?php echo $product['image']?>" class="card-img-top size-img" alt="<?php echo $product['title']?>">
                                <div class="card-body d-flex justify-content-between card-txt ven">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold text-secondary"><?php echo $product['title']?></p>
                                        <p class="card-text fw-semibold text-secondary">&pound;<?php echo $product['price']?></p>
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php }?>
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