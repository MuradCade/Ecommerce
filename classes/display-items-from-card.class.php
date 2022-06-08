<?php

require_once('../model/connection.php');

class DisplayItems extends database
{

    public function Itemfromcard()
    {

        $sql = "select * from card";
        $result = mysqli_query($this->connect, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<ul class='container' style='margin-right:20px'>";
            echo "<div class=' d-flex '>";
?>
            <img src="uploaded-images/<?php echo $row['product_img'] ?>" class="img-fluid rounded" style="width:80px !important; margin-right:20px; flex-wrap:wrap;" alt="">
<?php echo "<h2 class='font-small   font-bold '>" . $row['product_name'];
            echo "<input type='number' style='width:40px; margin-left:10px' value=" . $row['product_quantity'] . ">";
            echo "<p class='mt-2'>price: $" . $row['product_price'] . "</p>";
            echo "<a href='$' class='font-bold' style='text-decoration:none;'>CheckOut</a>";
            echo "</div>";
            echo "<div class=''>";
            echo "</div>";
            echo "</ul>";
        }
    }
}
