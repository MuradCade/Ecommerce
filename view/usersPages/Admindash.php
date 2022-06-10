<?php
session_start();

if ($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'customer') {
    header("location:../login.php");
    exit();
} else if ($_SESSION['role'] == 'customer') {
    header("location:Userdash.php");
    exit();
} else if (!$_SESSION['id'] && !$_SESSION['username']) {
    header("location:../login.php");
    exit();
} else { ?>


    <!doctype html>
    <html lang="en">

    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/dash-style.css">
        <link rel="stylesheet" href="../../css/admin.css">
    </head>

    <body>

        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
                <div class="custom-menu">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    </button>
                </div>
                <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                    <div class="user-logo">
                        <span class="material-icons" id="profile">
                            account_circle
                        </span>
                        <h3><?php echo $_SESSION['username']; ?></h3>
                    </div>
                </div>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="Admindash.php"><span class="fa fa-home mr-3"></span> Dashboard</a>
                    </li>
                    <li>
                        <a href="order.admin.php"><span class="fa fa-server  mr-3"></span> Orders</a>
                    </li>
                    <li>
                    <li>
                        <a href="product.admin.php"><span class="fa fa-shopping-bag  mr-3"></span> Product</a>
                    </li>
                    <li>
                        <a href="payment.php"><span class="fa fa-money  mr-3"></span>Payment</a>
                    </li>
                    <li>
                        <a href="admin.setting.php"><span class="fa fa-user mr-3"></span>Account Detail</a>
                    </li>
                    <li>
                        <a href="../shop.php"><span class="fa fa-user mr-3"></span>Continue Shopping</a>
                    </li>
                    <li>
                        <a href="report.php"><span class="fa fa-sign-out mr-3"></span> Report</a>
                    </li>
                    <li>
                        <a href="../../include/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
                    </li>
                </ul>

            </nav>

            <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5 pt-5">
                <div class="container">
                    <div class="container">
                        <h2 class="text-secondary">Dashboard</h2>

                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card shadow" style="width: 13rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 16px;">Amount Of Users</h5>
                                    <p class="card-text text-center" style="font-size: 40px;">46</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 ">
                            <div class="card shadow" style="width: 13rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 16px;">Amount Of Users</h5>
                                    <p class="card-text text-center" style="font-size: 40px;">46</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 ">
                            <div class="card shadow" style="width: 13rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 16px;">Amount Of Users</h5>
                                    <p class="card-text text-center" style="font-size: 40px;">46</p>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <script src="../../js/jquery.js"></script>
            <script src="js/popper.js"></script>
            <script src="../../js/bootstrap.bundle.min.js"></script>
            <script src="../../js/dash.js"></script>
    </body>

    </html>




<?php } ?>