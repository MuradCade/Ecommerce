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
        <title>Orders</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="../../css/order.css">
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
                        <a href="Admindash.php"><span class="fa fa-home mr-3"></span> Dashboard</a>
                    </li>
                    <li class="active">
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
                        <a href="report.php"><span class="fa fa-sign-out mr-3"></span> Report</a>
                    </li>
                    <li>
                        <a href="../../include/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
                    </li>
                </ul>

            </nav>
            <?php
            include('../../include/displayorderadmin.php');
            $fetch = new displayOrder();
            $i = 1;

            ?>
            <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5 pt-5">
                <h4 class="text-center">Order table</h4>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Id</th>
                            <th scope="col">User Id</th>
                            <th scope="col">Order Status</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Shipping Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>

                            <td><input type="text" value="<?php $fetch->orders('product_id') ?>" name="pid"></td>
                            <td><input type="text" value="<?php $fetch->orders('user_id') ?>" name="userid"></td>
                            <td><input type="text" value="<?php $fetch->orders('order_status') ?>" name="orderstatus"></td>
                            <td><input type="text" value="<?php $fetch->orders('payment_method') ?>" name="pmethod"></td>
                            <td><input type="text" value="<?php $fetch->orders('shipping_status') ?>" name="ship"></td>
                            <td><a href="../../include/updateorder.admin.php?update=<?php $fetch->orders('id'); ?>" class="btn btn-sm btn-primary mb-2">update</a>
                                <a href="../../include/updateorder.main.php?del=<?php $fetch->orders('id'); ?>" class="btn btn-sm btn-danger mb-2">Delete</a>
                            </td>



                        </tr>

                    </tbody>
                </table>

            </div>

            <script src="../../js/jquery.js"></script>
            <script src="js/popper.js"></script>
            <script src="../../js/bootstrap.bundle.min.js"></script>
            <script src="../../js/dash.js"></script>
    </body>

    </html>




<?php } ?>