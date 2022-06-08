<?php
require_once('../model/connection.php');

class Productdetail extends database
{

    public function product()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "select * from product where product_id = '$id'";
            $result = mysqli_query($this->connect, $sql);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
?>
                <div class="container mt-4">
                    <div class="row d-flex">

                        <div class="col-lg-3 mb-2 " id="img">
                            <img src="../uploaded-images/<?php echo $row['product_img']; ?>" alt="product" class="img-fluid">
                        </div>



                        <div class="col-lg-9 mt-5" id="main-text">
                            <h2 class="text-secondary mt-3" style="font-size:18px !important;"><?php echo $row['product_name']; ?></h2>
                            <p class="lead">Qui, explicabo eius nisi fugit repudiandae, quos voluptates, beatae ullam consectetur ducimus itaque! Tempore provident eligendi sed ipsum ea. Reiciendis nulla neque sapiente, totam veritatis non? Odio, quaerat</p>
                            <div class="text-main">
                                Quantity: <input type="number" class="fomr-control w-10" value="<?php echo $row['product_quantity']; ?>">
                                <button class="btn ">Add To Card</button>
                                <p class="text-secondary mt-2">Price: $<?php echo $row['product_price']; ?></p>
                                <p class="text-secondary mt-2">Categories: Jackets, Man, T-Shirts</p>
                                <p class="text-secondary mt-2">Tags: fashion, man, summer</p>
                                <img src="../img/payment.png" class="img-fluid img">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mb-4">
                    <div class="text-center d-flex" style="margin:90px;margin-left:380px;">
                        <li class="nav-link active font-lg">description</li>
                        <li class="nav-link font-lg">Review(0)</li>
                    </div>
                    <div class="text-center">
                        <p class="lead" style="margin-top:-80px;margin-left:90px;">
                            Eum culpa assumenda eligendi fugit laborum vitae odit deleniti illo quasi voluptates, ipsa, placeat, quaerat, omnis nisi. Repellendus reprehenderit temporibus optio, unde enim vel dignissimos! Deleniti sed perferendis quod ratione incidunt, quam illo et, nulla delectus. Qui, explicabo eius nisi fugit repudiandae, quos voluptates, beatae ullam consectetur ducimus itaque! Tempore provident eligendi sed ipsum ea. Reiciendis nulla neque sapiente, totam veritatis non? Odio, quaerat.
                        </p>
                    </div>
                </div>

                <?php include('../view/footer.php') ?>
<?php }
        } else {
            echo "couldn't found the product id";
        }
    }
}
