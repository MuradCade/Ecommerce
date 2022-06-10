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
    <title>Products</title>
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
                            <a class="nav-link active" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="track.php">Track Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact</a>
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
                            <a class="nav-link active" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="track.php">Track Order</a>
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

    <div class="container product-nav mt-4">
        <div class="container product-search d-none d-md-block d-lg-block">
            <input type="text" class="form-control w-25 " placeholder="Search ...">
            <!-- <p>Showing All 8 Results</p> -->
        </div>
        <button class="btn d-lg-none d-md-none">Search</button>

        <div class="second-category" id="category">
            <select class="form-select">
                <option value="Default Sorting" selected>Default Sorting</option>
                <option value="Sort By Popularity">Sort By Popularity</option>
                <option value="Sort By Average Ratig">Sort By Average Ratig</option>
                <option value="Sort By Latest">Sort By Latest</option>
                <option value="Sort By Price : Low To High">Sort By Price : Low To High</option>
                <option value="Sort By Price : High To Low">Sort By Price : High To Low</option>
            </select>
        </div>
    </div>

    <div class="container mt-4">
        <h3 class="capital">Filter by Price</h3>
        <input type="range" class="range" min="0" max="45" value="50">
        <div class="text-start d-flex">
            <p class="text-secondary">Price: $16 -></p>
            <p class="current-price"></p>
        </div>
        <button class="btn" id="filter-btn">Filter</button>
        <!-- product -->
        <?php
        include('../classes/displayproduct.class.php');
        $data = new Display();
        $key = 4;
        // $data->display_img($key);


        ?>

        <!-- top sale product -->

        <div class="container mt-5">
            <!-- products cards -->
            <div class="container mb-5">
                <div class="row mt-5">
                    <div class="col-lg-3 col-md-4 col-6" id="p1">
                        <img src="../uploaded-images/<?php $data->product_eight(4); ?>" alt="product 1" class="img-fluid product-img">

                        <div class="product-info">
                            <h5 class="text-center mt-3 font-normal"><?php $data->getname(4); ?></h5>
                            <div class="ml-sm-5">
                                <div class="text-start">
                                    <span class="price size-sm"><?php $data->getPrice('4'); ?></span>
                                </div>
                            </div>
                            <div class="text-center  mb-4">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(4); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(4); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="p2">
                        <img src="../uploaded-images/<?php
                                                        $data->product_eight(5); ?>" alt="product 2" class="img-fluid product-img2">
                        <div class="product-info">
                            <h5 class="text-center mt-3"><?php $data->getname(5); ?></h5>
                            <span class="price size-sm"><?php $data->getPrice('5'); ?></span>
                            <div class="text-center mt-1 mb-4">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(5); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(5); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="p3">
                        <img src="../uploaded-images/<?php
                                                        $data->product_eight(6); ?>" alt="product 3" class="img-fluid product-img3">
                        <div class="product-info">
                            <h5 class="text-center mt-3"><?php $data->getname(6); ?></h5>
                            <span class="price size-sm"><?php $data->getPrice('6'); ?></span>
                            <div class="text-center mt-1 mb-4">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(6); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(6); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="p4">
                        <img src="../uploaded-images/<?php
                                                        $data->product_eight(7); ?>" alt="product 4" class="img-fluid product-img4">
                        <div class="product-info">
                            <h5 class="text-center mt-3"><?php $data->getname(7); ?></h5>
                            <span class="price size-sm"><?php $data->getPrice('7'); ?></span>
                            <div class="text-center mt-1 mb-4">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(7); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(7); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="p5">
                        <img src="../uploaded-images/<?php
                                                        $data->product_eight(8); ?>" alt="product 5" class="img-fluid product-img5">
                        <div class="product-info">
                            <h5 class="text-center mt-3"><?php $data->getname(8); ?></h5>
                            <span class="price size-sm"><?php $data->getPrice('8'); ?></span>
                            <div class="text-center mt-1 mb-4">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(8); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(8); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="p6">
                        <img src="../uploaded-images/<?php
                                                        $data->product_eight(9); ?>" alt="product 6" class="img-fluid product-img6">
                        <div class="product-info">
                            <h5 class="text-center mt-3"><?php $data->getname(9); ?></h5>
                            <span class="price size-sm"><?php $data->getPrice('9'); ?></span>
                            <div class="text-center mt-1 mb-4">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(9); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(9); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="p7">
                        <img src="../uploaded-images/<?php
                                                        $data->product_eight(10); ?>" alt="product 7" class="img-fluid product-img7">
                        <div class="product-info">
                            <h5 class="text-center mt-3"><?php $data->getname(10); ?></h5>
                            <span class="price size-sm"><?php $data->getPrice('10'); ?></span>
                            <div class="text-center mt-1 mb-4">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(10); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(10); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="p8">
                        <img src="../uploaded-images/<?php
                                                        $data->product_eight(13); ?>" alt="product 8" class="img-fluid product-img8">
                        <div class="product-info">
                            <h5 class="text-center mt-3">Grey T-shirt Fashion</h5>
                            <span class="price size-sm"><?php $data->getPrice('13'); ?></span>
                            <div class="text-center mt-1 mb-4 ">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(13); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(13); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-2" id="p1">
                        <img src="../product-img/<?php
                                                    $data->product_eight(14); ?>" alt="product 8" class="img-fluid">
                        <div class="product-info">
                            <h5 class="text-center mt-3"><?php $data->getname(14); ?></h5>
                            <span class="price size-sm"><?php $data->getPrice(14); ?></span>
                            <div class="text-center mt-1 mb-4 ">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(14); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(14); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-2" id="p20">
                        <img src="../uploaded-images/<?php
                                                        $data->product_eight(15); ?>" alt="product 8" class="img-fluid">
                        <div class="product-info">
                            <h5 class="text-center mt-3"><?php $data->getname(15); ?></h5>
                            <span class="price size-sm"><?php $data->getPrice(15); ?></span>
                            <div class="text-center mt-1 mb-4 ">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(15); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(15); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-2" id="p20">
                        <img src="../uploaded-images/<?php
                                                        $data->product_eight(16); ?>" alt="product 8" class="img-fluid">
                        <div class="product-info">
                            <h5 class="text-center mt-3"><?php $data->getname(16); ?></h5>
                            <span class="price size-sm"><?php $data->getPrice(16); ?></span>
                            <div class="text-center mt-1 mb-4 ">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(16); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(16); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-2" id="p20">
                        <img src="../uploaded-images/<?php
                                                        $data->product_eight(17); ?>" alt="product 8" class="img-fluid">
                        <div class="product-info">
                            <h5 class="text-center mt-3"><?php $data->getname(17); ?></h5>
                            <span class="price size-sm"><?php $data->getPrice(7); ?></span>
                            <div class="text-center mt-1 mb-4 ">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(17); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(17); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-2 d-none">
                        <img src="../uploaded-images/<?php $key = 17;
                                                        $key++;
                                                        $data->product_eight($key); ?>" alt="product 8" class="img-fluid">
                        <div class="product-info">
                            <h5 class="text-center mt-3"><?php $data->getname($key); ?></h5>
                            <span class="price size-sm"><?php $data->getPrice($key); ?></span>
                            <div class="text-center mt-1 mb-4 ">
                                <a href="../include/show_product_detail.php?id=<?php $data->getId(18); ?>" class="nav-link font-bold hover color">View More</a>
                                <a href="../include/display_single_product_to_card.php?id=<?php $data->getId(18); ?>" class="btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of product -->
    </div>
    <!-- footer -->
    <?php
    include_once('footer.php');
    ?>

    <!-- card Modal -->

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
                    <?php include("../include/displaydatashop.php"); ?>
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
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/model.js" defer></script>
    <script src="../js/main.js"></script>
    <script src="../js/subscribe.js"></script>
</body>

</html>