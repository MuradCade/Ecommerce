  <?php

    include('store_image.php');
    $img = 'product_img';
    $object = new image();
    $object->insert();
    // $object->display($img);

    ?>

  <img src="../uploaded-images/<?php $object->display($img); ?>" alt="image">
  <h4>hello</h4>