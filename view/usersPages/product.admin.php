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
        <title>Product</title>
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
                    <li>
                        <a href="order.admin.php"><span class="fa fa-server  mr-3"></span> Orders</a>
                    </li>
                    <li>
                    <li class="active">
                        <a href="product.admin.php"><span class="fa fa-shopping-bag  mr-3"></span> Product</a>
                    </li>
                    <li>
                        <a href="payment.php" href="payment.php"><span class="fa fa-money  mr-3"></span>Payment</a>
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
            include("../../classes/product.class.php");
            $fetch = new dislayCrad();
            $data  = $fetch->cardtable();
            $price = 0;

            ?>

            <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5 pt-5">
                <div class="text-center">
                    <button class="btn btn-success" id="add">Add New Product</button>
                    <a href="product.admin.php" class="btn btn-secondary">Display Data</a>
                </div>
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
                                <td><img src="../../product-img/<?php echo $fetched['product_img']; ?>" alt="product"></td>
                                <td><?php echo $fetched['product_name']; ?></td>
                                <td><?php echo $fetched['product_price']; ?></td>
                                <td><?php echo $fetched['product_quantity']; ?></td>
                                <td> <a href="../../include/delete.admin.php?id=<?php echo $fetched['id'] ?>" name="del" class="nav-link">Delete</a></td>
                                <td> <a href="../../include/update.php?id=<?php echo $fetched['id'] ?>" name="del" class="nav-link">Update</a></td>
                                <?php
                                $price += $fetched['product_price']; ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>


            <div class="form-group mt-5">
                <form action="../../include/store_image.php" method="post">
                    <h2 class="font-small">Add New Product</h2>
                    <div class="form-body">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" value="Product Name" placeholder="Enter Product Name.." name="pname">
                    </div>
                    <div class="form-body">
                        <label class="form-label">Product Price</label>
                        <input type="text" class="form-control" value="Product Price" placeholder="Enter Product Price.." name="pprice">
                    </div>
                    <div class="form-body">
                        <label class="form-label">Product Quantuty</label>
                        <input type="text" class="form-control" value="Product Quantity" placeholder="Enter Product Price.." name="pquan">
                    </div>
                    <div class="form">
                        <label class="form-label">Product Img</label>
                        <input type="file" class="form-control" placeholder="Enter Product Image.." name="file">
                    </div>
                    <div class="form-body">
                        <label class="form-label">Product Description</label>
                        <input type="text" class="form-control" value="Product Description" placeholder="Enter Product Description.." name="pdesc">
                    </div>
                    <button class="btn btn-primary  mt-4" name="submit">Save</button>
                </form>
            </div>
        </div>
        <script src="../../js/jquery.js"></script>
        <script src="js/popper.js"></script>
        <script src="../../js/bootstrap.bundle.min.js"></script>
        <script src="../../js/dash.js"></script>
        <script src="../../js/admin.js"></script>
    </body>

    </html>




<?php } ?>