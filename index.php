<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <script src="js/jquery.js" defer></script>
    <script src="js/model.js" defer></script>
    <title>Home</title>
</head>

<body>
    <!-- hero section -->
    <?php
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['username'])) { ?>
        <nav class="navbar navbar-fixed navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ">
                <a class="navbar-brand font-bold px-5" href="index.php"><span class="material-icons">
                        shop_2
                    </span> Greatness</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view/shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view/track.php">Track Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="view/contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="view/home.php">dashboard</a>
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
        <nav class="navbar navbar-fixed navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ">
                <a class="navbar-brand font-bold px-5" href="index.php"><span class="material-icons">
                        shop_2
                    </span> Greatness</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view/shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view/track.php">Track Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="view/contact.php">Contact</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a href="view/login.php" class="btn">Login</a>
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
    <div class="main">
        <div class="hero-img">
            <div class="container containers">
                <div class="row">
                    <div class="col-lg-6 col-md-10 col-12  main-text">
                        <span class="text-md-start">Top sale on this week</span>
                        <h2 class="text-md-center text-sm-justify">Explore Amazing Fashionable Blazers this Shadi Season</h2>
                        <div class="text-md-center">
                            <input type="submit" class="btn2 btn-lg rounded-pill" value="Shop Now"></input>
                            <input type="submit" class="btn3 btn-lg rounded-pill" value="Learn More"></input>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-12">
                        <img src="img/avatar.png" alt="avatar image" class="img-fluid avatar d-none d-lg-block">
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- why to choose us -->
    <div class="container mb-5 mt-4">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 content shadow ">
                <img src="img/van.png" alt="van icon" class="icon-1 img-fluid my-4">
                <div class="body-text">
                    <h4>Free Shipping</h4>
                    <span>On all orders over $200</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 content shadow">
                <img src="img/customer-service.png" alt="customer service icon" class="icon-1 img-fluid my-4">
                <div class="body-text">
                    <h4>Dedicated Support​</h4>
                    <span>Quick response 24/7</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 content shadow">
                <img src="img/money.png" alt="money icon" class="icon-1 img-fluid my-4">
                <div class="body-text">
                    <h4>Money Back Guarantee</h4>
                    <span>Worry-free shopping</span>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- products cards or categorize -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 ">
                <div class="card-body">
                    <img src="img/card (4).jpg" alt=" Tshirt card" class="img-fluid card-pic">
                    <h4 class="header-text">T-Shirt</h4>
                    <span class="link-veiw">View All</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 ">
                <div class="card-body">
                    <img src="img/card (3).jpg" alt=" Tshirt card" class="img-fluid card-pic">
                    <h4 class="header-text">Mugs</h4>
                    <span class="link-veiw">View All</span>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card-body">
                    <img src="img/card (5).jpg" alt=" Tshirt card" class="img-fluid card-pic">
                    <h4 class="header-text">Shoes</h4>
                    <span class="link-veiw">View All</span>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12 ">
                <div class="card-body">
                    <img src="img/card (2).jpg" alt=" Tshirt card" class="img-fluid card-pic">
                    <h4 class="header-text">Hoodies</h4>
                    <span class="link-veiw">View All</span>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12 ">
                <div class="card-body">
                    <img src="img/card (6).jpg" alt=" Tshirt card" class="img-fluid card-pic">
                    <h4 class="header-text">Bags</h4>
                    <span class="link-veiw">View All</span>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12 ">
                <div class="card-body">
                    <img src="img/card (1).jpg" alt=" Tshirt card" class="img-fluid card-pic">
                    <h4 class="header-text">Phone Cases</h4>
                    <span class="link-veiw">View All</span>
                </div>

            </div>
        </div>
    </div>

    <?php
    include('classes/display.class.php');
    $data = new Display();
    $key = 4;
    // $data->display_img($key);


    ?>

    <!-- top sale product -->

    <div class="container mt-5">
        <h5 class="font-bold size-md text-center mb-2">Top sale on this week</h5>
        <h2 class="font-bold  size-lg text-center">Features Products</h2>
        <p class="text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae consequatur nesciunt nobis est, quaerat aliquid!</p>

        <!-- products cards -->
        <div class="container mb-5">
            <div class="row mt-5">
                <div class="col-lg-3 col-md-4 col-6">
                    <img src="uploaded-images/<?php $data->product_eight(4); ?>" alt="product 1" class="img-fluid product-img">

                    <div class="product-info">
                        <h5 class="text-center mt-3 font-normal">Black Fashion Jacket</h5>
                        <div class="ml-sm-5">
                            <div class="text-start">
                                <span class="price size-sm">$50.00</span>
                            </div>
                        </div>
                        <div class="text-center  mb-4">
                            <a href="include/show_product_detail.php?id=<?php $data->getId(4); ?>" class="nav-link font-bold hover color">View More</a>
                            <a href="include/display_single_product_to_card.php?id=<?php $data->getId(4); ?>" class="btn">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <img src="product-img/<?php
                                            $data->product_eight(5); ?>" alt="product 2" class="img-fluid product-img2">
                    <div class="product-info">
                        <h5 class="text-center mt-3">Casual Fashion Jacket</h5>
                        <span class="price size-sm ">$50.00</span>
                        <div class="text-center mt-1 mb-4">
                            <a href="include/show_product_detail.php?id=<?php $data->getId(5); ?>" class="nav-link font-bold hover color">View More</a>
                            <a href="include/display_single_product_to_card.php?id=<?php $data->getId(5); ?>" class="btn">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <img src="product-img/<?php
                                            $data->product_eight(6); ?>" alt="product 3" class="img-fluid product-img3">
                    <div class="product-info">
                        <h5 class="text-center mt-3">Black Fashion Swether</h5>
                        <span class="price size-sm">$50.00</span>
                        <div class="text-center mt-1 mb-4">
                            <a href="include/show_product_detail.php?id=<?php $data->getId(6); ?>" class="nav-link font-bold hover color">View More</a>
                            <a href="include/display_single_product_to_card.php?id=<?php $data->getId(6); ?>" class="btn">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <img src="product-img/<?php
                                            $data->product_eight(7); ?>" alt="product 4" class="img-fluid product-img4">
                    <div class="product-info">
                        <h5 class="text-center mt-3">Grey Men jacket</h5>
                        <span class="price size-sm">$50.00</span>
                        <div class="text-center mt-1 mb-4">
                            <a href="include/show_product_detail.php?id=<?php $data->getId(7); ?>" class="nav-link font-bold hover color">View More</a>
                            <a href="include/display_single_product_to_card.php?id=<?php $data->getId(7); ?>" class="btn">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <img src="product-img/<?php
                                            $data->product_eight(8); ?>" alt="product 5" class="img-fluid product-img5">
                    <div class="product-info">
                        <h5 class="text-center mt-3">T-shirt Fashion</h5>
                        <span class="price size-sm">$50.00</span>
                        <div class="text-center mt-1 mb-4">
                            <a href="include/show_product_detail.php?id=<?php $data->getId(8); ?>" class="nav-link font-bold hover color">View More</a>
                            <a href="include/display_single_product_to_card.php?id=<?php $data->getId(8); ?>" class="btn">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <img src="product-img/<?php
                                            $data->product_eight(9); ?>" alt="product 6" class="img-fluid product-img6">
                    <div class="product-info">
                        <h5 class="text-center mt-3">Gray T-shirt Fashion</h5>
                        <span class="price size-sm">$50.00</span>
                        <div class="text-center mt-1 mb-4">
                            <a href="include/show_product_detail.php?id=<?php $data->getId(9); ?>" class="nav-link font-bold hover color">View More</a>
                            <a href="include/display_single_product_to_card.php?id=<?php $data->getId(9); ?>" class="btn">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <img src="product-img/<?php
                                            $data->product_eight(10); ?>" alt="product 7" class="img-fluid product-img7">
                    <div class="product-info">
                        <h5 class="text-center mt-3">Green T-shirt Fashion</h5>
                        <span class="price size-sm">$50.00</span>
                        <div class="text-center mt-1 mb-4">
                            <a href="include/show_product_detail.php?id=<?php $data->getId(10); ?>" class="nav-link font-bold hover color">View More</a>
                            <a href="include/display_single_product_to_card.php?id=<?php $data->getId(10); ?>" class="btn">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <img src="uploaded-images/<?php
                                                $data->product_eight(13); ?>" alt="product 8" class="img-fluid product-img8">
                    <div class="product-info">
                        <h5 class="text-center mt-3">Grey T-shirt Fashion</h5>
                        <span class="price size-sm">$50.00</span>
                        <div class="text-center mt-1 mb-4 ">
                            <a href="include/show_product_detail.php?id=<?php $data->getId(13); ?>" class="nav-link font-bold hover color">View More</a>
                            <a href="include/display_single_product_to_card.php?id=<?php $data->getId(13); ?>" class="btn">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center  mb-5">
        <input type="submit" value="Shop Now" class="btn1 shadow ">
    </div>



    <!-- testimoney -->

    <section class="main-content mb-4">
        <div class="container">
            <div class="row">
                <h6 class="text-secondary text-start mt-4">TESTIMONIALS</h6>
                <div class="col-lg-8 col-md-6 col-12 main-head" id="head">
                    <h2 class="lg-text">What Our Clients Say</h2>
                    <p class="text-secondary mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem pariatur quae cum delectus qui, illo necessitatibus porro alias nesciunt debitis autem vitae tempore quo at doloremque ex? Doloribus, perferendis nisi!</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="font-bold rating">Average Сustomer Rating</p>
                    <div class="rating-number mt-4">
                        <p class="font-bold">4.8</p>


                        <span class="material-icons" id="star">
                            star
                        </span>
                        <span class="material-icons" id="star">
                            star
                        </span>
                        <span class="material-icons" id="star">
                            star
                        </span>
                        <span class="material-icons" id="star">
                            star
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-4 top-none">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 card01 mb-2 shadow">
                    <div class="card-body">
                        <p class=" mt-4 text-secondary text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus
                            leo.</p>
                    </div>
                    <div class="image-box shadow">
                        <img src="img/avatar.jpg" alt="customer image" class="image-fluid avatar-1">
                        <span class="font-bold name">Joh Kim</span>
                        <span class="text-secondary title">Designer</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 card01 mb-2 shadow">
                    <div class="card-body">
                        <p class=" mt-4 text-secondary text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus
                            leo.</p>
                    </div>
                    <div class="image-box">
                        <img src="img/avatar.jpg" alt="customer image" class="image-fluid avatar-1">
                        <span class="font-bold name">Joh Kim</span>
                        <span class="text-secondary title">Designer</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 card01 mb-2 shadow">
                    <div class="card-body">
                        <p class=" mt-4 text-secondary text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus
                            leo.</p>
                    </div>
                    <div class="image-box">
                        <img src="img/avatar.jpg" alt="customer image" class="image-fluid avatar-1">
                        <span class="font-bold name">Joh Kim</span>
                        <span class="text-secondary title">Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php

    include_once('view/footer.php');

    ?>

    <!-- card model -->
    <!-- Modal -->
    <div class="model-body mt-2" style="width:40% !important; height:900% !important" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                    include('include/displaycarddata.php');
                    ?>
                    <a href="../view/shop.php" class="btn " style="width: 100%; font-size:14px !important;">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>


    <!-- serch model -->
    <div class="model-body mt-2" id="search" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="../include/search.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search Particular Product</h5>
                        <button type="button" class="close2 btn-danger" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex">
                            <input type="text" class="form-control" placeholder="Search ..." name="searchitem">
                            <select name="category" class="form-select" style="width:120px;">
                                <option value="">Select</option>
                                <option value="tshirt">T-shirt</option>
                                <option value="jaket">jacket</option>
                                <option value="hoodie">Hoodie</option>
                                <option value="shoes">Shoes</option>
                                <option value="bags">Bags</option>
                            </select>
                        </div>
                        <div class="text-center " style="display:block;">
                            <button class="btn mt-2" name="search">Search</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>