<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/track.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Track Order</title>
</head>

<body>
    <!-- navigation -->
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
                            <a class="nav-link " href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../view/shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../view/track.php" style="color:#421e6e !important; font-weight:bold !important;">Track Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../view/contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../view/home.php">dashboard</a>
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
                            <a class="nav-link " href="../view/track.php" id="track">Track Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../view/contact.php">Contact</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a href="login.php" class="btn">Login</a>
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

    <?php

    include("../model/connection.php");

    class check_order extends database
    {
        public function order()
        {
            if (isset($_POST['submit'])) {
                $orderid = $_POST['orderid'];
                $email = $_POST['email'];

                $sql = "SELECT * FROM orders";
                $result = mysqli_query($this->connect, $sql);
                $row = mysqli_fetch_assoc($result);
                if ($row['e_status'] == $orderid) {
                    $product = $row['product_id'];
                    $ship = $row['shipping_status'];
                    $sql = "select * from payment";
                    $result = mysqli_query($this->connect, $sql);
                    while ($row2 = mysqli_fetch_assoc($result)) {




    ?>

                        <div class="container mt-4 text-center">
                            <div class="card">
                                <h4 class="font-bold mt-4 mb-4" style="font-size:18px;">Track Order</h4>
                            </div>
                            <div class="card-footer">
                                <article class="mb-2">Product Id : <?php echo $product ?></article>
                                <article class="mb-2">Your FullName : <?php echo $row2['f_name'] . "  " . $row2['l_name']; ?></article>
                                <article class="mb-2">City : <?php echo $row2['country']; ?></article>
                                <article class="mb-2">Your Id : <?php echo $row2['user_id']; ?></article>
                                <article class="mb-2">Payment Method : <?php echo $row2['payment_method']; ?></article>
                                <article class="mb-2">Date Purches : <?php echo $row2['date']; ?></article>
                                <article class="mb-2">Shipping Status : <?php echo $ship ?></article>


                            </div>
                        </div>

    <?php
                    }
                } else {
                    header("location:../view/track.php?error=order-wasnt-found");
                    exit();
                }
            } else {
                header("location:../view/track.php");
                exit();
            }
        }
    }

    $track_order = new check_order();
    $track_order->order();
