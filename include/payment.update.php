<?php

include('../model/connection.php');


class UpdatePaymet extends database
{
    public function displaypayment()
    {
        if (isset($_GET['update'])) {
            $id = $_GET['update'];
            $sql = "select * from payment where id = '$id'";
            $result = mysqli_query($this->connect, $sql);
            $fetch = mysqli_fetch_assoc($result);
            $data[] = $fetch;

            return $data;
        }
    }
    public function updatePayment()
    {
        if (isset($_POST['submit'])) {

            if (isset($_GET['update'])) {
                $id = $_GET['update'];
                $pid = $_POST['pid'];
                $uid = $_POST['uid'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $city = $_POST['city'];
                $pmethod = $_POST['pmethod'];
                $pstatus = $_POST['pstatus'];
                $phone = $_POST['phone'];

                $sql = "update payment set payment_id = '$pid', user_id = '$uid',
                f_name = '$fname',l_name = '$lname', country = '$city', payment_method = '$pmethod',
                payment_status = '$pstatus', phone = '$phone' where id = '$id'";

                $result = mysqli_query($this->connect, $sql);
                if ($result) {
                    header('location:../../view/usersPages/payment.php?succes=item-updated');
                    exit();
                } else {
                    header('ocation:../../view/usersPages/payment.php?error=item-update-fail');
                    exit();
                }
            }
        }
    }
}

$display = new UpdatePaymet();
$display->updatePayment();
$fetch = $display->displaypayment();

foreach ($fetch as $fetched) { ?>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <form action="payment.update.php?update=<?php echo $fetched['id'] ?>" method="post">
        <div class="form-group mt-4">
            <div class="text-center">
                <h3 class="text-secodary">Payment Form Update</h3>
            </div>
            <div class="container">
                <label class="form-label mb-2">Payment Id</label>
                <input type="text" class="form-control mb-2" name="pid" value="<?php echo $fetched['payment_id'] ?>">
                <label class="form-label mb-2">User Id</label>
                <input type="text" class="form-control mb-2" name="uid" value="<?php echo $fetched['user_id'] ?>">
                <label class="form-label mb-2">First Name</label>
                <input type="text" class="form-control mb-2" name="fname" value="<?php echo $fetched['f_name'] ?>">
                <label class="form-label mb-2">Last Name</label>
                <input type="text" class="form-control mb-2" name="lname" value="<?php echo $fetched['l_name'] ?>">
                <label class="form-label mb-2">City</label>
                <input type="text" class="form-control mb-2" name="city" value="<?php echo $fetched['country'] ?>">
                <label class="form-label mb-2">Payment Method</label>
                <input type="text" class="form-control mb-2" name="pmethod" value="<?php echo $fetched['payment_method'] ?>">
                <label class="form-label mb-2">Payment Status</label>
                <select name="pstatus" class="form-select">
                    <option value="verified">verified</option>
                    <option value="unverified">unverified</option>
                </select>
                <label class="form-label mb-2">Phone</label>
                <input type="text" class="form-control mb-2" name="phone" value="<?php echo $fetched['phone'] ?>">
                <button name="submit" class="btn btn-primary">Update</button>
            </div>

        </div>
    </form>






<?php } ?>