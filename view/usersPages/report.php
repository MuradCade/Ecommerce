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
                    <li>
                        <a href="#"><span class="fa fa-home mr-3"></span> Dashboard</a>
                    </li>
                    <li>
                        <a href="order.admin.php"><span class="fa fa-server  mr-3"></span> Orders</a>
                    </li>
                    <li>
                    <li>
                        <a href="#"><span class="fa fa-shopping-bag  mr-3"></span> Product</a>
                    </li>
                    <li>
                        <a href="payment.php"><span class="fa fa-money  mr-3"></span>Payment</a>
                    </li>
                    <li>
                        <a href="admin.setting.php"><span class="fa fa-user mr-3"></span>Account Detail</a>
                    </li>

                    <li class="active">
                        <a href="report.php"><span class="fa fa-sign-out mr-3"></span> Report</a>
                    </li>
                    <li>
                        <a href="../../include/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
                    </li>
                </ul>

            </nav>


            <div id="content">
                <script>
                    window.onload = function() {

                        var dataPoints = [];

                        var chart = new CanvasJS.Chart("chartContainer", {
                            animationEnabled: true,
                            theme: "light2",
                            zoomEnabled: true,
                            title: {
                                text: "Greatness Revenue - 2017"
                            },
                            axisY: {
                                title: "Price in USD",
                                titleFontSize: 24,
                                prefix: "$"
                            },
                            data: [{
                                type: "line",
                                yValueFormatString: "$#,##0.00",
                                dataPoints: dataPoints
                            }]
                        });

                        function addData(data) {
                            var dps = data.price_usd;
                            for (var i = 0; i < dps.length; i++) {
                                dataPoints.push({
                                    x: new Date(dps[i][0]),
                                    y: dps[i][1]
                                });
                            }
                            chart.render();
                        }

                        $.getJSON("https://canvasjs.com/data/gallery/php/bitcoin-price.json", addData);

                    }
                </script>
                <div id="chartContainer" class="img-fluid mt-5" style="height: 370px; width: 100%;"></div>
                <div class="container">
                    <div class="container">
                        <h4 class="mt-5 mb-4 ml-3 ">Top Selling Product</h4>
                        <div class="product d-flex">
                            <img src="../../product-img/Mens-Standard-Fit-Crew-T-Shirt02-600x764.jpg" class="img-fluid rounded mb-3" alt="product" width="16">
                            <p class="text-scondary">Slim Fashion T-shit</p>
                        </div>
                        <div class="product d-flex">
                            <img src="../../product-img/Mens-Standard-Fit-Crew-T-Shirt02-600x764.jpg" class="img-fluid rounded mb-3" alt="product" width="16">
                            <p class="text-scondary">Slim Fashion T-shit</p>
                        </div>
                        <div class="product d-flex">
                            <img src="../../product-img/Mens-Standard-Fit-Crew-T-Shirt02-600x764.jpg" class="img-fluid rounded mb-3" alt="product" width="16">
                            <p class="text-scondary">Slim Fashion T-shit</p>
                        </div>
                        <div class="product d-flex">
                            <img src="../../product-img/Mens-Standard-Fit-Crew-T-Shirt02-600x764.jpg" class="img-fluid rounded mb-3" alt="product" width="16">
                            <p class="text-scondary">Slim Fashion T-shit</p>
                        </div>
                        <div class="product d-flex">
                            <img src="../../product-img/Mens-Standard-Fit-Crew-T-Shirt02-600x764.jpg" class="img-fluid rounded mb-3" alt="product" width="16">
                            <p class="text-scondary">Slim Fashion T-shit</p>
                        </div>
                    </div>
                </div>
            </div>



            <style>
                #chartContainer {
                    position: relative;
                    left: 18px;
                }

                .product p {
                    position: relative;
                    top: 20px;
                    left: 10px;
                }

                .price {
                    display: block;
                }
            </style>


            <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
            <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

            <script src="../../js/jquery.js"></script>
            <script src="js/popper.js"></script>
            <script src="../../js/bootstrap.bundle.min.js"></script>
            <script src="../../js/dash.js"></script>
    </body>

    </html>
<?php } ?>


</div>