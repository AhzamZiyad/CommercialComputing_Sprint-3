<?php include('./admin/database/dbconfig.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>




<!--Heading Section-->

<section>
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-12">
     <h2 class="section-title text-center"><span class="text-danger">Recent </span>Trendings</h2>
     <div class="underline ml-auto mr-auto"></div>
     <p class="section-subtitle text-center">Latest updates</p>
   </div>
  </div>
 </div>
</section>

<!--End Of Heading Section-->


<!--Cars Listing Section-->

<section>
 <div class="container">
  <div class="row">


<!--Php Cars Listing Section-->

<?php 

   $sql = "SELECT * FROM seller_ads where status='Accept' order by id desc ";
   $query=mysqli_query($connection,$sql);

   foreach($query as $q)
   {

?>
<!--Php Cars Listing Section-->

  <a href="ads_view.php?id=<?php echo $q['id'];?>">
     
    <div class="col-md-4 bg-light">
     <div class="card">
      <div class="card-body text-center"><br>
         
         <?php echo'<img src="./admin/upload/'.$q['image1'].'" class="card-img-top" style="height: 13rem; width: 16rem;" >' ?> <hr>  </a>
         
         <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Model : <?php  echo $q['model']; ?><br> </a>

        <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Brand : <?php  echo $q['brand']; ?></a><br>

        <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Mileage(KM) : <?php  echo $q['mileage']; ?></a><br>

        <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Price : <?php  echo $q['price']; ?></a>
      
      </div>    
     </div><br>
    </div>
    
   <!--End Of Php Cars Listing Section--> 
<?php

   }

?>
  <!--End Of Php Cars Listing Section--> 




<!--End of featured pproducts Container & Row-->
 </div>
</div>
<!--End of featured pproducts Container & Row-->

</section>
<!--End Of Cars Listing Section-->




<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>