<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/checkout.css">
    <link rel="stylesheet" href="../css/payment.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Payment</title>
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
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact</a>
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
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact</a>
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


    <?php
    include('../include/card.data.payment.php');
    $subtotal = 0;
    $data = new cardData();
    $fetch = $data->card();
    foreach ($fetch as $fetched) { ?>




        <div class="container">
            <div class="form-group">
                <form action="../include/payment-data-store.php?id=<?php echo $fetched['product_id'] ?>" method="post">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mt-4">

                            <label class="form-label mb-2">Firstname</label>
                            <input type="text" name="fname" placeholder="Enter Your First Name..." class="form-control">
                            <label class="form-label mt-2 mb-2">Lastname</label>
                            <input type="text" name="lname" placeholder="Enter Your Last Name..." class="form-control">
                            <label class="form-label mt-2 mb-2">City</label>
                            <input type="text" name="country" placeholder="Enter Your City..." class="form-control">
                            <label class="form-label mt-2 mb-2">Street Name</label>
                            <input type="text" name="street" placeholder="Enter Street Name" class="form-control">
                            <label class="form-label mt-2 mb-2">Zip Code</label>
                            <input type="text" name="zipcode" placeholder="Enter Zip Code..." class="form-control">
                            <label class="form-label mt-2 mb-2">Payment Method</label>
                            <select name="payment" class="form-select">
                                <option value="zaad" selected>Zaad</option>
                            </select>
                            <label class="form-label mt-2 mb-2">Company Number</label>
                            <select name="number" class="form-select">
                                <option value="0633558027" selected>0633558027</option>
                            </select>
                            <label class="form-label mt-2 mb-2">Phone Number</label>
                            <input type="text" name="phone" placeholder="Enter Your Phone Number..." class="form-control">
                            <label class="form-label mt-2 mb-2">Email</label>
                            <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                            <button class="btn mt-4" name="submit">Place Order</button>
                </form>

            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-5">
                <div class="card">
                    <div class="card-title mt-2">
                        <p>Product</p>
                        <p>Subtotal</p>
                    </div>
                    <hr>
                    <div class="card-body">
                        <ul>
                            <h5 class="font-bold">Zaad Service Payment</h5>
                            <li class="font-bold" style="color:#7e31db !important;">Total :
                                $<?php if (isset($_GET['id'])) {
                                        $_SESSION['price'] = $_GET['id'];
                                        echo $_SESSION['price'];
                                    } else {
                                        echo $_SESSION['price'];
                                    } ?>
                            </li>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <input type="checkbox" id="" checked>
                        <span class="font-bold">Pay With Zaad </span>
                        <p class="mt-2">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    <?php } ?>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/model.js"></script>
</body>

</html>