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

            <div class="site-section" id="about-section">
                <div class="container-fluid">
                    <div class="row align-items-lg-center">
                        <div class="col-md-8 mb-5 mb-lg-0 position-relative">
                            <img src="images/about_1.jpg" class="img-fluid" alt="Image">
                            <div class="experience">
                                <span class="year">Trusted Merchant</span>
                                <span class="caption">for 15 years</span>
                            </div>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <h3 class="section-sub-title">Merchant Company</h3>
                            <h2 class="section-title mb-3">About Us</h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui fuga ipsa, repellat blanditiis nihil, consectetur. Consequuntur eum inventore, rem maxime, nisi excepturi ipsam libero ratione adipisci alias eius vero vel!</p>
                            <p>
                                <a href="#" class="btn btn-black btn-black--hover rounded-0">Learn More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Section Begins -->
            <div class="site-section border-bottom" id="team-section">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col-12 text-center">
                                <h3 class="section-sub-title">Team</h3>
                                <h2 class="section-title mb-3">Leadership</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                                <div class="person text-center">
                                    <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
                                    <h3>John Rooster</h3>
                                    <p class="position text-muted">Co-Founder, President</p>
                                    <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                                    <ul class="ul-social-circle">
                                        <li>
                                            <a href="#">
                                                <span class="icon-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-linkedin"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                                <div class="person text-center">
                                    <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
                                    <h3>Tom Sharp</h3>
                                    <p class="position text-muted">Co-Founder, COO</p>
                                    <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                                    <ul class="ul-social-circle">
                                        <li>
                                            <a href="#">
                                                <span class="icon-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-linkedin"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                                <div class="person text-center">
                                    <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
                                    <h3>Winston Hodson</h3>
                                    <p class="position text-muted">Marketing</p>
                                    <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                                    <ul class="ul-social-circle">
                                        <li>
                                            <a href="#">
                                                <span class="icon-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-linkedin"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
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