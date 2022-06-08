<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/shop.css">
<div class="container product-nav mt-4">
    <div class="container product-search d-none d-md-block d-lg-block">
        <input type="text" class="form-control w-25 " placeholder="Search ...">
        <!-- <p>Showing All 8 Results</p> -->
    </div>
    <button class="btn d-lg-none d-md-none">Search</button>

    <div class="second-category">
        <select class="form-select">
            <option value="Default Sorting">Default Sorting</option>
            <option value="Sort By Popularity">Sort By Popularity</option>
            <option value="Sort By Average Ratig">Sort By Average Ratig</option>
            <option value="Sort By Latest">Sort By Latest</option>
            <option value="Sort By Price : Low To High">Sort By Price : Low To High</option>
            <option value="Sort By Price : High To Low">Sort By Price : High To Low</option>
        </select>
    </div>
</div>
<?php
require_once('../model/connection.php');

class Searchproduct extends database
{
    public function search($item, $category)
    {
        if (isset($_POST['search'])) {

            if (empty($item) && empty($category)) {
                echo "please provide item to be searched";
            } else if ($item != "" && empty($category)) {
                echo "<h3 class='text-center mt-4 mb-5'>Reasult About ' $item'</h3>";
                $sql = "select * from product where product_name like '%$item%'";
                $result = mysqli_query($this->connect, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="container">
                            <ul class="d-flex align-items-center justify-content-center">
                                <img src="../uploaded-images/<?php echo $row['product_img'] ?>" style="width:50px!important; margin-right:18px;" alt="product_image">
                                <div>
                                    <h5 class="mt-4"><?php echo $row['product_name']; ?></h5>
                                    <p style="display:inline-block;">Price : <?php echo $row['product_price']; ?></p>
                                    <button class="btn btn-primary">Add To Card</button>
                                </div>
                            </ul>
                        </div>

                    <?php   }
                } else {
                    echo "data couldn't be fetched";
                }
            } else if ($item != "" && $category != "") {
                echo "<h3 class='text-center mt-4 mb-5'>Reasult About ' $item'</h3>";
                $sql = "select * from product where product_name like '%$item%' and category like '%$category%'";
                $result = mysqli_query($this->connect, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="container">
                            <ul class="d-flex align-items-center justify-content-center">
                                <img src="../uploaded-images/<?php echo $row['product_img'] ?>" style="width:50px!important; margin-right:18px;" alt="product_image">
                                <div>
                                    <h5 class="mt-4"><?php echo $row['product_name']; ?></h5>
                                    <p style="display:inline-block;">Price : <?php echo $row['product_price']; ?></p>
                                    <button class="btn btn-primary">Add To Card</button>
                                </div>
                            </ul>
                        </div>

<?php   }
                }
            }
        }
    }
}
