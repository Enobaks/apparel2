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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <!-- Navbar Begins -->
    <?php require "includes/navbar.php"?>
    <!-- Navbar Ends -->

    <!-- Login Form Begins-->
    <div class="form-wrap row items">
      <div class="col-md-6 register-image">
        <img src="./images/login-image.jpg" alt="" class="img-fluid vimage">
      </div>
      <div class="col-md-6 pt-5 col-sm-12 register-form">
        <h2 class="mb-5 text-center fw-bold fs-3">Sign In</h2>
        <form class="row g-3 signIn" method="POST" action="auth.php?action=signIn">
          <?php if (isset($_GET['error'])) { ?>
            <p class="text-danger text-end"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Email</label><span class="text-danger ml-1">*</span>
            <input type="email" name="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Password</label><span class="text-danger ml-1">*</span>
            <input type="password" name="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-12 d-flex justify-content-between pt-1">
            <!-- <a href="forgot_password.php" class="register-link">Forgot Password</a> -->
            <p class="fw-medium">Don't have an account <a href="./registration.php" class="register-link">Register</a></p>
          </div>
          <div class="submit-wrap d-flex justify-content-center">
            <button type="submit" class="btn main-color">Submit</button>
          </div>
        </form>
      </div>
    </div>
    
      <!-- Login Form Ends -->

     <!-- Footer Begins -->
     <footer class="footer-14398 mt-5">
        <div class="">

          <div class="row mb-5 items">
            <div class="col-md-3 mb-4">
                <a class="navbar-brand fs-2 fw-bold apparel" href="#"><span class="text-danger">A</span>pparel</a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit officiis corporis optio natus. </p>
            </div>
            <div class="col-md-3 ml-auto mb-4">
              <h3>Quick Links</h3>
              <ul class="list-unstyled links">
                <li><a href="about.php">About Us</a></li>
                <li><a href="male_products.php">Shop Men </a></li>
                <li><a href="female_products.php">Shop Women</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </div>
            <div class="col-md-3 ml-auto mb-4">
              <h3>Contact Us</h3>
              <div class="location-details">
                <div class="location d-flex align-items-center mb-3">
                  <i class="fa-sharp fa-solid fa-location-dot contact-icons" style="color: #ababab;"></i>                  
                  <p class='location-address'>Apparel Clothings, City Centre, Birmingham B4 7XG </p>
                </div>
                <div class="mail d-flex align-items-center mb-3">
                  <i class="fa-sharp fa-solid fa-envelope contact-icons" style="color: #ababab;"></i>
                  <p class='email-address'>apparel_clothing@gmail.com</p>
                </div>
                <div class="call d-flex align-items-center mb-3">
                  <i class="fa-solid fa-phone contact-icons" style="color: #ababab;"></i>
                  <p class='tel-number'>+447023178934</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 ml-auto mb-4">
              <h3>Follow Us</h3>
              <ul class="list-unstyled social nav-right d-flex media-links">
                <li><a href="twitter.com"><span class="icon-twitter media-icon"></span></a></li>
                <li><a href="instagram.com"><span class="icon-instagram media-icon"></span></a></li>
                <li><a href="facebook.com"><span class="icon-facebook media-icon"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-12 pb-4">
            <div class="line"></div>
          </div>
          <div class="row mb-4 items">
            <div class="col-md-12 mt-5">
              <p class="copyright text-center">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
              </p>
            </div>
          </div>

          
          </div>
        </div>
        
      </div>
</footer>
    <!-- Footer Ends -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    
    <!-- <script src="js/signIn.js"></script> -->
</body>
</html>