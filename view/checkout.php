<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/checkout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>checkout</title>
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
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="track.php">Track Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a href="checkout.php" class="nav-link active"> Checkout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="home.php">dashboard</a>
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
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="track.php">Track Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="checkout.php" class="nav-link active"> Checkout</a>
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
                    <?php

                    include('../include/displaydatashop.php');

                    ?>
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
                    <button type="button" class="close2 btn-danger" data-dismiss="modal" aria-label="Close">
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



    <!-- card data  -->
    <?php
    include("../classes/checkout.class.php");
    $fetch = new dislayCrad();
    $data  = $fetch->cardtable();
    $price = 0;

    ?>





    <div id="content" class="p-4 p-md-5 pt-5 ">
        <div class="row">

            <div class="col-lg-8  col-md-12 col-8 mb-4">
                <table class="table table-striped responsive table-hoverable ">
                    <thead>
                        <th>No</th>
                        <th>product_image</th>
                        <th>product_name</th>
                        <th>product_price</th>
                        <th>product_quantity</th>
                        <th>action</th>

                    </thead>
                    <tbody>
                        <?php
                        $key = 1;
                        foreach ($data as $fetched) { ?>
                            <tr>
                                <td><?php echo $key;
                                    $key++; ?></td>
                                <td><img src="../uploaded-images/<?php echo $fetched['product_img']; ?>" alt="product"></td>
                                <td><?php echo $fetched['product_name']; ?></td>
                                <td><?php echo $fetched['product_price']; ?></td>
                                <td><?php echo $fetched['product_quantity']; ?></td>
                                <td> <a href="../include/deleteitem.php?id=<?php echo $fetched['id'] ?>" name="del" class="btn">Delete</a></td>
                                <?php
                                $price += $fetched['product_price']; ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-4 col-md-12 col-12 mb-5">
                <div class="card">
                    <div class="card-title">
                        <h5 class="text-secondary container mt-2">Cart Total</h5>
                        <p class="mt-4 font-bold left">Subtotal : <?php echo $price . ".00"; ?></p>
                        <hr>
                    </div>
                    <div class="main-body  d-flex">
                        <p class="detail">shipping:$10 <input type="checkbox" name="" id=""></p>
                        <p class="detail">Free Dlivery:free <input type="checkbox" name="" id=""></p>
                    </div>
                    <div class="card-footer">
                        <h5 class="text-secondary font-bold mb-4">Total: $<?php echo $price . ".00" ?></h5>
                        <a href="payment.php?id=<?php echo $price ?>" class="btn btn-secondary" style="width:100% !important;">Proceed To CheckOut</a>
                    </div>
                </div>
            </div>
            <div class="form-group" style="margin-top:-20px;">
                <form class="d-flex">
                    <input type="text" class="form-control" id="co" placeholder="Enter Coupon Code..">
                    <button class="btn">Apply Coupon</button>
                </form>
            </div>
        </div>
    </div>



    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/model.js"></script>
</body>

</html>