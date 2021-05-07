<?php include('./admin/security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>




<!-- Modal -->
<div class="modal fade" id="addads" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Ads</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action ="./admin/code.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">

      
      <div class="form-group">
          <label>Brand</label>
          <input type="text" name="brand" class="form-control" placeholder="Enter brand" required>
     </div>

     <div class="form-group">
          <label>Model</label>
          <input type="text" name="model" class="form-control" placeholder="Enter Model" required>
     </div>


     <div class="form-group">
          <label>Edition</label>
          <input type="text" name="edition" class="form-control" placeholder="Enter Edition" required>
     </div>

     <div class="form-group">
          <label>Model Year</label>
          <input type="text" name="model_year" class="form-control" placeholder="Model Year" required>
     </div>


     <div class="form-group">
          <label>Condition</label>
          <input type="text" name="conditions" class="form-control" placeholder="Enter Condition" required>
     </div>

     <div class="form-group">
          <label>Mileage(KM)</label>
          <input type="text" name="mileage" class="form-control" placeholder="Enter Mileage(km)" required>
     </div>

     <div class="form-group">
          <label>Transmission</label>
          <input type="text" name="transmission" class="form-control" placeholder="Enter transmission " required>
     </div>

     <div class="form-group">
          <label>Fuel Type</label>
          <input type="text" name="fuel_type" class="form-control" placeholder="Enter Fuel Type" required>
     </div>

     <div class="form-group">
          <label>Engine Capacity</label>
          <input type="text" name="engine_capacity" class="form-control" placeholder="Enter Engine Capacity" required>
     </div>

     <div class="form-group">
          <label>Price</label>
          <input type="text" name="price" class="form-control" placeholder="Enter Price" required>
     </div>

     <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" class="form-control" placeholder="Enter Phone" required>
     </div>

     <div class="form-group">
          <label>Description</label>
          <input type="text" name="description" class="form-control" placeholder="Enter Descriptions" required>
     </div>


     <div class="form-group">
          <label>Image1</label>
          <input type="file" name="image1" id="image1" class="form-control" placeholder="upload image" required>
     </div>

     <div class="form-group">
          <label>Image2</label>
          <input type="file" name="image2" id="image2" class="form-control" placeholder="upload image" required>
     </div>

     <div class="form-group">
          <label>Image3</label>
          <input type="file" name="image3" id="image3" class="form-control" placeholder="upload image" required>
     </div>

    
     <input type="hidden" name="status" class="form-control"  value="pending">

    

     
     

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="add_ads_btn" class="btn btn-primary">Save</button>
      </div>
</form>
    </div>
  </div>
</div>



<div class="container-fluid">

<div class="card shadow mb-4">

<div class="card-header py-3">

<h6 class="m-0 font-weight-bold text-primary">ADS

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addads">
  Add ADS
</button>

</h6>

</div>


<div class="card-body">



<?php

if(isset($_SESSION['success11']) && $_SESSION['success11'] !='')
{
    echo '<h2> '.$_SESSION['success11'].'</h2>';
    unset($_SESSION['success11']);
}


if(isset($_SESSION['status11']) && $_SESSION['status11'] !='')
{
    echo '<h2> '.$_SESSION['status11'].'</h2>';
    unset($_SESSION['status11']);
}


?>



    <div class="table-responsive">


    <?php 
    
   
    $query = "SELECT * FROM seller_ads";
    $query_run = mysqli_query($connection, $query);
    

    ?>

 
        <table class="table table-bordered" id="dataTable" width="100%" collspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Edition</th>
                    <th>Model Year</th>
                    <th>Condition</th>
                    <th>Mileage(Km)</th>
                    <th>Transmission</th>
                    <th>Fuel type</th>
                    <th>Engine Capacity</th>
                    <th>Price</th>
                    <th>Phone</th>
                    <th>Description</th>
                    <th>Image1</th>
                    <th>Image2</th>
                    <th>Image3</th>
                    <th>Status</th>
                    <th>Comments</th>
                    <th>Edit</th>
                    <th>Delete</th>


</tr>
</thead>
<tbody>


<?php 

     if(mysqli_num_rows($query_run)> 0){

        while($row = mysqli_fetch_assoc($query_run)){
    ?>
   
    <tr>
        <td><?php  echo $row['id']; ?></td>
        <td><?php  echo $row['brand']; ?></td>
        <td><?php  echo $row['model']; ?></td>
        <td><?php  echo $row['edition']; ?></td>
        <td><?php  echo $row['model_year']; ?></td>
        <td><?php  echo $row['conditions']; ?></td>
        <td><?php  echo $row['mileage']; ?></td>
        <td><?php  echo $row['transmission']; ?></td>
        <td><?php  echo $row['fuel_type']; ?></td>
        <td><?php  echo $row['engine_capacity']; ?></td>
        <td><?php  echo $row['price']; ?></td>
        <td><?php  echo $row['phone']; ?></td>
        <td><?php  echo $row['description']; ?></td>
        <td><?php echo'<img src="./admin/upload/'.$row['image1'].'" width="100px;" height="100px;" alt="image">' ?></td> 
        <td><?php echo'<img src="./admin/upload/'.$row['image2'].'" width="100px;" height="100px;" alt="image">' ?></td> 
        <td><?php echo'<img src="./admin/upload/'.$row['image3'].'" width="100px;" height="100px;" alt="image">' ?></td> 
        <td><?php  echo $row['status']; ?></td>
        <td><?php  echo $row['comments']; ?></td>
   
        

        <td>
        <form action="seller_ads_edit.php" method="POST">
        <input type="hidden" name="edit_id_ads" value="<?php echo $row['id']; ?>">
        <button type="submit" name="edit_btn_ads" class="btn btn-success">Edit</button>
        </form>
        </td>
        <td>
        <form action="./admin/code.php" method="POST">
        <input type="hidden" name="delete_id_seller" value="<?php echo $row['id']; ?>">
        <button type="submit" name="delete_btn_seller" class="btn btn-danger">Delete</button>
        
        </form>
        </td>

</tr>
<?php
        }

     }  else{
         echo "No record found";
     } 
?>


</tbody>
</table>

                    
</div>
</div>
</div>
</div>

























<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>