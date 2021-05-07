<?php include('./admin/security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>









<div class="container-fluid">

<div class="card shadow mb-4">

<div class="card-header py-3">

<h6 class="m-0 font-weight-bold text-primary">ADS Updates </h6>

</div>


<div class="card-body">


<?php

if(isset($_POST['edit_btn_ads'])){

    $id = $_POST['edit_id_ads'];
   

    $query = "SELECT * FROM seller_ads WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    foreach($query_run as $row)
{

?>


<form action="./admin/code.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">


<div class="form-group">
          <label>Brand</label>
          <input type="text" name="edit_brand" value="<?php echo $row['brand']?>" class="form-control" placeholder="Enter brand" required>
     </div>

     <div class="form-group">
          <label>Model</label>
          <input type="text" name="edit_model" value="<?php echo $row['model']?>" class="form-control" placeholder="Enter model" required>
     </div>

     <div class="form-group">
          <label>Edition</label>
          <input type="text" name="edit_edition" value="<?php echo $row['edition']?>" class="form-control" placeholder="Enter Edition" required>
     </div>

     <div class="form-group">
          <label>Model Year</label>
          <input type="text" name="edit_model_year"  value="<?php echo $row['model_year']?>" class="form-control" placeholder="Enter model Year" required>
     </div>

     <div class="form-group">
          <label>Condition</label>
          <input type="text" name="edit_conditions" value="<?php echo $row['conditions']?>" class="form-control" placeholder="Enter conditions" required>
     </div>

     <div class="form-group">
          <label>Mileage(KM)</label>
          <input type="text" name="edit_mileage" value="<?php echo $row['mileage']?>" class="form-control" placeholder="Enter mileage" required>
     </div>

     <div class="form-group">
          <label>Transmissions</label>
          <input type="text" name="edit_transmission" value="<?php echo $row['transmission']?>" class="form-control" placeholder="Enter Transmissions" required>
     </div>


     <div class="form-group">
          <label>Fuel Type</label>
          <input type="text" name="edit_fuel_type" value="<?php echo $row['fuel_type']?>" class="form-control" placeholder="Enter Fuel Type" required>
     </div>


     <div class="form-group">
          <label>Engine Capacity</label>
          <input type="text" name="edit_engine_capacity" value="<?php echo $row['engine_capacity']?>" class="form-control" placeholder="Enter Engine Capacity " required>
     </div>

     <div class="form-group">
          <label>Price</label>
          <input type="text" name="edit_price" value="<?php echo $row['price']?>" class="form-control" placeholder="Enter Price " required>
     </div>
     
     <div class="form-group">
          <label>Phone</label>
          <input type="phone" name="edit_phone" value="<?php echo $row['phone']?>" class="form-control" placeholder="Enter phone " required>
     </div>


     <div class="form-group">
          <label>Description</label>
          <input type="text" name="edit_description" value="<?php echo $row['description']?>" class="form-control" placeholder="Enter description" required>
     </div>

     
     <div class="form-group">
          <label>Image1</label>
          <input type="file" name="edit_image1" value="<?php echo $row['image1']?>" id="edit_image1" class="form-control" placeholder="upload image" required>
     </div>

     <div class="form-group">
          <label>Image2</label>
          <input type="file" name="edit_image2" value="<?php echo $row['image2']?>" id="edit_image2" class="form-control" placeholder="upload image" required>
     </div>

     <div class="form-group">
          <label>Image3</label>
          <input type="file" name="edit_image3" value="<?php echo $row['image3']?>" id="edit_image3" class="form-control" placeholder="upload image" required>
     </div>

     <input type="hidden" name="edit_status" value="pending" class="form-control">




<a class="btn btn-danger" href="seller.php" >Cancel</a>
<button class="btn btn-primary" name="update_ads_btn" type="submit">Update</button>

</form>


   <?php
     }
     }
     ?>           
</div>
</div>
</div>



<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>