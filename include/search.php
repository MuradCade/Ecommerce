<?php

include("../classes/search.class.php");
$searchItem = new Searchproduct();
if (isset($_POST['search'])) {
    $item = $_POST['searchitem'];
    $category = $_POST['category'];
    $searchItem->search($item, $category);
    echo "<div class='text-center'>";
    echo "<a href='../view/shop.php' class='btn btn-secondary '>Continue Shopping</a>";
    echo "</div>";
} else {
    header('location:../view/track.php');
    exit();
}
