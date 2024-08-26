<nav class="navbar navbar-expand-lg bg-body-tertiary py-3 navigation-bar fixed-top h-auto">
    <div class="container-fluid">
        <a class="navbar-brand fs-2 fw-bold" href="../cloth-store/index.php"><span class="text-danger">A</span>pparel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-left me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-bold" aria-current="page" href="../cloth-store/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="../cloth-store/about.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Product
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../cloth-store/male_products.php">Male Clothes</a></li>
                        <li><a class="dropdown-item" href="../cloth-store/female_products.php">Female Clothes</a></li>
                        <!-- <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold dropdown-toggle" href="../cloth-store/login.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-user me-2"></i>
                        <?php if (isset($_SESSION['firstname']) && isset($_SESSION['firstname'])) {
                            $splitFirstName = str_split($_SESSION['firstname']);
                            $splitLastName = str_split($_SESSION['lastname']);
                            echo 'Hi'." ".$splitFirstName[0].$splitLastName[0];

                        }else {
                            echo "Account";
                        }       
                        ?>

                    </a>
                    <ul class="dropdown-menu">
                        <?php
                            if (!isset($_SESSION['firstname']) && !isset($_SESSION['lastname'])) {
                        ?>
                        <li><a class="dropdown-item" href="../cloth-store/login.php">Login</a></li>
                        <li><a class="dropdown-item" href="../cloth-store/registration.php">Register</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <!-- <li><a class="dropdown-item" href="../cloth-store/logout.php">Log out</a></li> -->
                        <?php }else {?>
                            <li><a class="dropdown-item" href="../cloth-store/logout.php">Log out</a></li>
                        <?php }?>
                    </ul>
                </li>
                <?php
                        
                    if (isset($_SESSION['user_id'])) {
                ?>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="../cloth-store/orderPage.php">Orders</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link fw-bold cart-wrap" href="../cloth-store/cart.php">
                        <i class="fa-solid fa-cart-shopping me-2 cart" style="color: #000000a6"></i>Cart
                        <i class="ti-shopping-cart"></i>
                        <?php
                        require 'config.php';
                            if (!isset($_SESSION['user_id'])) {
                        ?>
                        <span class="cart-qty d-none">3</span>
                        <?php } else { 
                             $user_id = $_SESSION['user_id'];  
                             $productCount = $conn->query("SELECT SUM(cart.quantity) FROM `cart` where cart.user_id = $user_id");
                             $productCount->execute();
                             $data = $productCount->fetch(PDO::FETCH_ASSOC);
                             $subTotal = 0;  
                        ?>
                        <span class="cart-qty text-white"><?= $data['SUM(cart.quantity)'] == 0 ? "0" : $data['SUM(cart.quantity)']?></span>
                        <?php } ?>
                    </a>
                </li>
            </ul>
           
        </div>
    </div>
</nav>