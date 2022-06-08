<?php
session_start();
include('../model/connection.php');
class updateorder extends database
{
    public function orders($key)
    {
        if (isset($_GET['update'])) {
            $id = $_GET['update'];
            $sql = "select * from orders where id = '$id'";
            $result = mysqli_query($this->connect, $sql);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo $row[$key];
            } else {
                echo "failed to fetch";
            }
        } else {
            echo "id wasn't found";
        }
    }
}


// $obj->update();
?>
<?php $obj = new updateorder();

?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<form action="updateorder.main.php?update=<?php echo $obj->orders('id'); ?>" method="post">
    <div class="form-group mt-5 container">
        <h4>Update Orders</h4>
        <label class="from-label mb-2">Product id</label>
        <input type="text" value="<?php $obj->orders('product_id') ?>" name="pid" class="form-control mb-2">
        <label class="from-label mb-2">User id</label>
        <input type="text" value="<?php $obj->orders('user_id') ?>" name="userid" class="form-control mb-2">
        <label class="from-label mb-2">Order Status</label>
        <input type="text" value="<?php $obj->orders('order_status') ?>" name="orderstatus" class="form-control mb-2">
        <label class="from-label mb-2">Payment Method</label>
        <input type="text" value="<?php $obj->orders('payment_method') ?>" name="pmethod" class="form-control mb-2">
        <label class="from-label mb-2">Shipping Status</label>
        <input type="text" value="<?php $obj->orders('shipping_status') ?>" name="ship" class="form-control mb-2">
        <button class="btn btn-primary" name="update">Update</button>

    </div>
</form>