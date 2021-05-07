<?php session_start();?>

<?php include('./admin/database/dbconfig.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<!--Heading Section-->



<section>
<hr>
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-12">
    <h4 class="section-title text-center"><span class="text-danger">Newly </span>Listed Cars</h4>
    <div class="underline ml-auto mr-auto"></div>
    <p class="section-subtitle text-center">Latest Releases</p>
   </div>
  </div>
 </div>
</section>

<!--Heading Section-->


<!--Cars Listing Section-->

<div class="container">
 <div class="row">

<!--Php Cars Listing Section-->
 <?php 

$sql = "SELECT * FROM seller_ads where status='Accept' order by id desc limit 3 ";
$query=mysqli_query($connection,$sql);

foreach($query as $q){


?>
<!--Php Cars Listing Section-->


<a href="ads_view.php?id=<?php echo $q['id'];?>">
         
  <div class="col-md-4 bg-light">
   <div class="card">  
    <div class="card-body text-center"> <br>
  
      <?php echo'<img src="./admin/upload/'.$q['image1'].'" class="card-img-top" style="height: 13rem; width: 16rem;" >' ?> <!--Image Listing--><hr></a>
  
      <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Model : <?php  echo $q['model']; ?><br> </a>

      <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Brand : <?php  echo $q['brand']; ?></a><br>

      <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Mileage(KM) : <?php  echo $q['mileage']; ?></a><br>
      
      <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Price : <?php  echo $q['price']; ?></a>

    </div>    
   </div>
  </div>
<!--End Php Cars Listing Section-->
  <?php

    }

  ?>
<!--End Php Cars Listing Section-->
 
</div>
</div>

<!--End Of Cars Listing Section-->








<!--featured Products-->
<hr>
<section>
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-12">
    <h4 class="section-title text-center"><span class="text-danger">Featured</span> Products</h4>
    <div class="underline ml-auto mr-auto"></div>
   </div>
  </div>
 </div>
</section><br>

<!--Cars Listing Section-->

<div class="container">
 <div class="row">
<!--Php Cars Listing Section-->

<?php

$sql = "SELECT * FROM seller_ads where status='Accept' AND brand='audi' limit 1";
$query=mysqli_query($connection,$sql);

 foreach($query as $q){

?>

<a href="car_list.php?id=<?php echo $q['id'];?>">
         
         <div class="col-md-3 bg-light">
          <div class="card">  
           <div class="card-body text-center"> <br>
         
             <?php echo'<img src="./admin/upload/'.$q['image1'].'" class="card-img-top" style="height: 10rem; width: 13rem;" >' ?> <!--Image Listing--><hr></a>

             <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Brand : <?php  echo $q['brand']; ?></a><br>


  </div>
  </diV>
</div>


<?php

 }

?>

<!--Php Cars Listing Section-->



<!--Php Cars Listing Section-->
<?php

$sql = "SELECT * FROM seller_ads where status='Accept' AND brand='toyota' limit 1";
$query=mysqli_query($connection,$sql);

 foreach($query as $q){

?>

<!--Cars Listing Section-->


<a href="car_list.php?id=<?php echo $q['id'];?>">
         
         <div class="col-md-3 bg-light">
          <div class="card">  
           <div class="card-body text-center"> <br>
         
             <?php echo'<img src="./admin/upload/'.$q['image1'].'" class="card-img-top" style="height: 10rem; width: 13rem;" >' ?> <!--Image Listing--><hr></a>

             <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Brand : <?php  echo $q['brand']; ?></a><br>


  </div>
  </diV>
</div>



<?php

 }

?>

<!--Php Cars Listing Section-->

<?php

$sql = "SELECT * FROM seller_ads where status='Accept' AND brand='bmw' limit 1";
$query=mysqli_query($connection,$sql);

 foreach($query as $q){

?>
<a href="car_list.php?id=<?php echo $q['id'];?>">
         
         <div class="col-md-3 bg-light">
          <div class="card">  
           <div class="card-body text-center"> <br>
         
             <?php echo'<img src="./admin/upload/'.$q['image1'].'" class="card-img-top" style="height: 10rem; width: 13rem;" >' ?> <!--Image Listing--><hr></a>

             <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Brand : <?php  echo $q['brand']; ?></a><br>


  </div>
  </diV>
</div>



<?php

 }

?>

<!--Php Cars Listing Section-->

<?php

$sql = "SELECT * FROM seller_ads where status='Accept' AND brand='benz' limit 1";
$query=mysqli_query($connection,$sql);

 foreach($query as $q){

?>

<a href="car_list.php?id=<?php echo $q['id'];?>">
         
         <div class="col-md-3 bg-light">
          <div class="card">  
           <div class="card-body text-center"> <br>
         
             <?php echo'<img src="./admin/upload/'.$q['image1'].'" class="card-img-top" style="height: 10rem; width: 13rem;" >' ?> <!--Image Listing--><hr></a>


             <a href="ads_view.php?id=<?php echo $q['id'];?>">  <h8 class="text-dark font-weight-bold">Brand : <?php  echo $q['brand']; ?></a><br>

  </div>
  </diV>
</div>




<?php

 }

?>

<!-- Cars Listing Section-->






<!--End of featured pproducts Container & Row-->
    </div>
   </div>
   
<!--End of featured pproducts Container & Row-->
  <hr>
<!--End Of Cars Listing Section-->

<!--End of featured pproducts-->



<!--Notification-->

<section class="bg-light"><br>
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-5">
    <h3 class="section-title text-center"><span class="text-danger">Notifications</h3>
    <div class="underline ml-auto mr-auto"></div>
   </div>

   <div class="col-md-6">
     <form action="./admin/code.php" method="POST">
    <div class="input-group mb-3">
      <input type="email" class="form-control" name="emails" placeholder="Your Email Address">
     <div class="input-group-append">
       <button class="btn btn-outline-secondary" name="add_ads_notification" type="submit">send</button>
     </div>
    </div>
</form>
   </div>


  </div>
 </div><br>
</section><br>

<!--End Of Notification-->







<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>