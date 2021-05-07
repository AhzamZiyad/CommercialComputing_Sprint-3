<?php include('./admin/database/dbconfig.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>
<br>



<!--container car list view -->

 <div class="container">
  <div class="row">

  <!--php & mysql syntax for search function-->

   <?php

  if (isset($_POST['search_btn'])){

     $search = mysqli_real_escape_string($connection, $_POST['search']);

     $sqls = "SELECT * FROM seller_ads where brand like '%$search%' OR model like '%$search%' OR mileage like '%$search%' OR transmission like '%$search%' OR price like '%$search%'";
     $result = mysqli_query($connection,$sqls);
     $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0){
            
            while($q = mysqli_fetch_assoc($result)){

   ?>
     <!--End of php & mysql syntax for search function-->
      
     <!-- retrive searched ads using their id's-->
             <a href="ads_view.php?id=<?php echo $q['id'];?>">
                 
                 <!--starting of column-->

                  <div class="col-md-4 bg-light">
                   <div class="card">
                    <div class="card-body text-center"><br>
                     
                       <?php echo'<img src="./admin/upload/'.$q['image1'].'" class="card-img-top" style="height: 13rem; width: 16rem;" >' ?>  <hr>
                    
                       <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Model : <?php  echo $q['model']; ?><br> </a>

                      <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Brand : <?php  echo $q['brand']; ?></a><br>

                      <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Mileage(KM) : <?php  echo $q['mileage']; ?></a><br>

                      <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Price : <?php  echo $q['price']; ?></a>
             
                    </div>    
                   </div>
                  </div>   
            
           <!--End of column-->
            
         
         <?php

           }
        }
    else{

        echo "There is no Results for your search";

    }
}

?>
           

 </div>
</div>


<!-- End of container car list view -->














<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>