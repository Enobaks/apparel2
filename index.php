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
    <div class="body-wrap">
        <!-- Navbar Begins -->
        <?php require "includes/navbar.php"?>
        <!-- Navbar Ends -->
        <!-- Carousel Begins -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade hero-section">
            <div class="carousel-inner">
                <div class="carousel-item kal active position-relative">
                    <img src="./images/slide-111.jpg" class="d-block w-100 kater" alt="...">
                    <div class="carousel-caption d-none d-md-block caption-text1">
                        <h1 class="fs-1 fw-bold text-white">Summer Sales</h1>
                        <p class="fs-6 text-white"> Get Ready for the Hottest Summer Sales Extravaganza. Don't miss out on our sizzling Summer Sales event, where prices are scorching hot and discounts are off the charts!</p>
                    </div>
                </div>
                <div class="carousel-item kal position-relative">
                    <img src="./images/slide-22.jpg" class="d-block w-100 kater" alt="...">
                    <div class="carousel-caption d-none d-md-block caption-text2">
                        <h1 class="fs-1 fw-bold">Summer Sales</h1>
                        <p class="fs-6 text-white">Enter the Summer with Style. Get Ready for the Hottest Summer Sales Extravaganza. Don't miss out on our sizzling Summer Sales event, where prices are scorching hot and discounts are off the charts!</p>
                        
                    </div>
                </div>
                <div class="carousel-item kal position-relative">
                    <img src="./images/slide-333.jpg" class="d-block w-100 kater" alt="...">
                    <div class="carousel-caption d-none d-md-block caption-text3">
                        <h1 class="fs-1 fw-bold text-white">Summer Sales</h1>
                        <p class="fs-6 text-white">Get Ready for the Hottest Summer Sales Extravaganza. Don't miss out on our sizzling Summer Sales event, where prices are scorching hot and discounts are off the charts!</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel Ends -->
    </div>
    <div class="items-wrap">
        <h2 class="text-center my-5 fw-bold fs-2">Fashion for Men and Women</h2>
        <div class="row items">
            <div class="col-md-12 d-flex justify-content-around flex-row flex-wrap flex-sm-row">
                <?php require "config.php";?>

                <?php
                    $products = $conn->query("SELECT * FROM `products` LIMIT 8");
                    $products->execute();
                    $data = $products->fetchAll(PDO::FETCH_ASSOC);

                    foreach($data as $product) {
                ?>
                <div class="col-md-3 merchant-item mt-5">
                    <a href="product_detail.php?id=<?=$product['id']?>">
                        <div class="card card-wrap ">
                            <img src="<?php echo $product['image']?>" class="card-img-top size-img" alt="<?php echo $product['title']?>">
                            <div class="card-body d-flex justify-content-between card-txt ven">
                                <div class="product-content">
                                    <p class="card-text mb-0 fw-bold text-secondary"><?php echo $product['title']?></p>
                                    <p class="card-text fw-semibold text-secondary">&pound;<?php echo $product['price']?></p>
                                </div>
                                <!-- <a href="addToCart.php?id=<?=$product['id']?>" onclick="scrollWin()">
                                <div class="product-action d-flex align-items-center justify-content-between">
                                    <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                </div>
                                </a> -->
                            </div>
                        </div>
                    </a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- Items End -->

     <!-- Offer Start -->
     <div class="row pt-5 pb-3 items mt-5">
        <div class="col-md-12 px-xl-5 d-flex product-offer-wrap">
            <div class="col-md-6 mb-5">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="images/offer-1.jpg" alt="Female Offer">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="female_products.php" class="btn btn-danger offer">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="images/transgenders-posing-outdoors-medium-shot(edit-1).jpg" alt="Male Offer">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3 offer">Special Offer</h3>
                        <a href="male_products.php" class="btn btn-danger offer">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    <!-- customer Review Begins -->
    <div class="content mb-5">
        <div class="container ">
          <div class="row">
            <div class="col-12 text-center">
              <h2 class="my-5 fs-2 fw-semibold">Customer Reviews</h2>
            </div>
          </div>
        </div>
        <div class="site-section bg-left-half mb-5">
          <div class="container owl-2-style">      
    
            <div class="owl-carousel owl-2">
    
              <div class="media-29101 out">
                <img src="images/person_1_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Alex Fought</a></h3>
                <p>What sets them apart is their exceptional customer service. Whenever I had an issue, they were quick to resolve it and ensure my satisfaction.  I highly recommend this site for trendy and quality clothing</p>
              </div>
    
              <div class="media-29101 out">
                <img src="images/person_2_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Ben Stafford</a></h3>
                <p>I absolutely love this online clothing store! The variety of styles they offer is fantastic, and the quality of the clothing is outstanding. I've purchased multiple items from them and have always been impressed with the fit.</p>
              </div>
    
              <div class="media-29101 out">
                <img src="images/person_3_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Devin Bridges</a></h3>
                <p>The prices are very reasonable, especially considering the trendy designs they have. Shipping is fast, and their customer service is top-notch. I highly recommend this site for all your fashion needs</p>
              </div>
    
              <div class="media-29101 out">
                <img src="images/person_1_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Joshua Jones</a></h3>
                <p>I recently discovered this eCommerce clothing site and was pleasantly surprised. The website is user-friendly, making it easy to browse through their extensive collection. I found some unique pieces that I couldn't find anywhere else.</p>
              </div>
    
              <div class="media-29101 out">
                <img src="images/person_2_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Kellie Kenney</a></h3>
                <p>The quality of the clothes I received was great, although I wish they offered more detailed size charts to ensure a perfect fit. Overall, I had a positive shopping experience, and I'll definitely be back for more trendy finds</p>
              </div>
    
              <div class="media-29101 out">
                <img src="images/person_3_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Will Reagan</a></h3>
                <p>I'm a loyal customer of this eCommerce clothing site, and it's my go-to place for all things fashion. Their selection is always up-to-date with the latest trends, and the clothes are stylish and well-made.</p>
              </div>
    
            </div>
    
          </div>
        </div>
    
      </div>
    <!-- Customer Review Ends -->
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
   
</body>
</html>