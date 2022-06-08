<?php

session_start();
if (isset($_SESSION['id']) &&  isset($_SESSION['username'])) {
    header("location:home.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>SignUp</title>
</head>



<body>
    <!-- hero section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <a class="navbar-brand font-bold px-5" href="../index.php">
                <img src="../img/shop_2_black_24dp.svg" alt="logo" style="margin-top: -8px;"> Greatness</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="track.php">Track Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.php" class="active nav-link">Signup</a>
                    </li>

                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                <div class="icons">
                    <img src="../img/search_black_24dp.svg" alt="search btn" id="searchbtn" style="cursor: pointer;">
                    <img src="../img/shopping_cart_black_24dp.svg" alt="shopping card" id="btn2" style="cursor: pointer;">


                    <!-- <span class="material-icons">
                    favorite
                </span> -->
                </div>
            </div>
        </div>
    </nav>

    <!-- login form -->
    <div class="container mt-5">
        <form action="../include/signup.inc.php" method="post">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-8 d-flex flex-column justify-content-center align-items-center">
                    <div class="form-group">
                        <div class="form-heading mb-2 ">
                            <h4 class="text-secondary  font-bold ">SignUp</h4>
                        </div>
                        <!-- error message printing -->
                        <p class="text-center font-bold" id="error"><?php
                                                                    if (isset($_GET['error'])) {
                                                                        echo $_GET['error'];
                                                                    }
                                                                    ?></p>
                        <div class="form-body mb-3 col-lg-8 col-md-6 col-10">
                            <label class="form-label text-secondary ">Username</label>
                            <input type="text" name="username" class="form-control " placeholder="Enter Your Username..." style="width: 180%;">
                        </div>
                        <div class="form-body mb-3 col-lg-8 col-md-6 col-10">
                            <label class="form-label text-secondary ">Email</label>
                            <input type="text" name="email" class="form-control " placeholder="Enter Your Email..." style="width: 180%;">
                        </div>
                        <div class="form-body col-lg-8 col-md-6 col-10">
                            <label class="form-label text-secondary ">Password</label>
                            <input type="password" name="pwd" class="form-control " placeholder="Enter Your Password" style="width: 180%;">
                            <button class="btn mt-3" name="signup">Login</button>
                        </div>
                        <div class="form-end mt-2 text-center">
                            <a href="login.php" class=" nav-link"> <span class="text-secondary">Already Have Account</span> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php

    include_once('footer.php');

    ?>

    <!-- Modal -->
    <div class="model-body mt-2" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Shopping cart</h5>
                    <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center text-secondary mb-4">No products in the cart.</h5>
                    <div class="text-center">
                        <a href="shop.html" class="btn mb-2">Continue Shopping</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- serch model -->
    <div class="model-body mt-2" id="search" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search Particular Product</h5>
                    <button type="button" class="close2 btn-danger " style="margin-left:10px ;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Search ...">
                    <div class="text-center">
                        <button class="btn mt-2">Search</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/model.js"></script>

</body>

</html>