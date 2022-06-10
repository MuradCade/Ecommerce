<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/shop.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Details</title>
</head>

<body>
    <!-- navbar -->
    <?php
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['username'])) { ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ">
                <a class="navbar-brand font-bold px-5" href="../index.php"><span class="material-icons">
                        shop_2
                    </span> Greatness</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../view/shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../view/track.php">Track Order</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="../view/contact.php">Contact</a>
                        </li>


                    </ul>
                    <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                    <div class="icons">
                        <span class="material-icons" id="searchbtn">
                            search
                        </span>
                        <span class="material-icons" id="btn2">
                            shopping_cart
                        </span>


                        <!-- <span class="material-icons">
                    favorite
                </span> -->
                    </div>
                </div>
            </div>
        </nav>


    <?php } else { ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ">
                <a class="navbar-brand font-bold px-5" href="../index.php"><span class="material-icons">
                        shop_2
                    </span> Greatness</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../view/shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../view/track.php">Track Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../view/contact.php">Contact</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a href="../view/login.php" class="btn">Login</a>
                        </li>

                    </ul>
                    <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                    <div class="icons">
                        <span class="material-icons" id="searchbtn">
                            search
                        </span>
                        <span class="material-icons" id="btn2">
                            shopping_cart
                        </span>


                        <!-- <span class="material-icons">
                    favorite
                </span> -->
                    </div>
                </div>
            </div>
        </nav>
    <?php } ?>

</body>

</html>
<?php

include_once('../classes/productDetail.class.php');
$product = new Productdetail();
$product->product();
