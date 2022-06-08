<?php
include_once('../classes/addtocard.class.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $obj = new addToCard();
    $obj->add_item_to_card($id);
} else {
    header("location:../index.php?error=item-id-wasn't-found");
    exit();
}
