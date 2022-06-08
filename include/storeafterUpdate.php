<?php

include('update.admin.php');
$fetch = new dislayCrad();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $fetch->storedata($id);
}
