<?php include('./admin/database/dbconfig.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>



<br>
<div class="container">



<?php



    foreach($query as $qb)
{


    foreach($query as $q){


    }
?>

<!--featured Products-->
<hr>
<section>
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-12">
    <h4 class="section-title text-center"> <h8 class="text-dark font-weight-bold">Brand : <?php  echo $q['brand']; ?><span class="text-danger"></h4>
    <div class="underline ml-auto mr-auto"></div>
   </div>
  </div>
 </div>
</section><br>

<!--featured Products-->
<?php
     }
   
     ?>


 <div class="row">


<?php



    foreach($query as $qb)
{


    foreach($query as $q){


    }
?>




<a href="ads_view.php?id=<?php echo $qb['id'];?>">
  <div class="col-md-3">
   <div class="card">
    <div class="card-body text-center">
        <?php echo'<img src="./admin/upload/'.$qb['image1'].'" class="card-img-top" style="height: 12rem; width: 13rem;" >' ?> </a>
       

        <a href="ads_view.php?id=<?php echo $qb['id'];?>">  <h8 class="text-dark font-weight-bold">Model : <?php  echo $q['model']; ?><br> </a>

<a href="ads_view.php?id=<?php echo $qb['id'];?>">  <h8 class="text-dark font-weight-bold">Brand : <?php  echo $q['brand']; ?></a><br>

<a href="ads_view.php?id=<?php echo $qb['id'];?>">  <h8 class="text-dark font-weight-bold">Mileage(KM) : <?php  echo $q['mileage']; ?></a><br>

<a href="ads_view.php?id=<?php echo $qb['id'];?>">  <h8 class="text-dark font-weight-bold">Price : <?php  echo $q['price']; ?></a>




    </div>
   </div>
  </div>

<?php
     }
   
     ?>


    </div>
   </div>


   <br>









<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>