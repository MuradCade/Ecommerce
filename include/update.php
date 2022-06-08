  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <?php

    include('update.admin.php');
    $fetch = new dislayCrad();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $fetch->storedata($id);
    }





    ?>


  <div class="form-group mt-4">
      <form action="storeafterUpdate.php?id=<?php echo $fetch->fetchItem('id') ?>" method="post">
          <h2 class="font-small">Add New Student</h2>
          <div class="form-body">
              <label class="form-label">Product Name</label>
              <input type="text" class="form-control" value="<?php echo $fetch->fetchItem('product_name') ?>" placeholder="Enter Product Name.." name="pname">
          </div>
          <div class="form-body">
              <label class="form-label">Product Price</label>
              <input type="text" class="form-control" value="<?php echo $fetch->fetchItem('product_price') ?>" placeholder="Enter Product Price.." name="pprice">
          </div>
          <div class="form-body">
              <label class="form-label">Product Quantuty</label>
              <input type="text" class="form-control" value="<?php echo $fetch->fetchItem('product_quantity') ?>" placeholder="Enter Product Price.." name="pquan">
          </div>

          <div class="form">
              <label class="form-label">Product Img</label>
              <input type="file" class="form-control" value="<?php echo $fetch->fetchItem('product_img') ?>" placeholder="Enter Product Image.." name="file">
          </div>
          <div class="form-body">
              <label class="form-label">Product Description</label>
              <input type="text" class="form-control" value="<?php echo $fetch->fetchItem('product_img') ?>" placeholder="Enter Product Description.." name="pdesc">
          </div>
          <button class="btn btn-primary  mt-4" name="submit">Save</button>
      </form>
  </div>