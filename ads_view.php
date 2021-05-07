<?php include('./admin/database/dbconfig.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>





<br>

<div class="container-fluid">
<div class="row">







<!--Main ads View -->

<div class="col-xl-8">


<?php

    foreach($query as $q)
{

?>





<!--Image-->


           
  <div class="row g-0">
   <div class="col-md-4 justify-content-center">
     <?php echo'<img src="./admin/upload/'.$q['image1'].'" class="img-fluid" >'?><br>
    <div class="card-body">

<!--Contact us-->

     <h4 class="bg-light text-center"><strong><?php  echo $q['phone']; ?></Strong></h4>
     <h4 class="bg-info text-center">Contact US</Strong></h4>

<!--end of Contact us-->




<!--feedback-->

<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#addfeed">
  Feedback
</button>

<!--End of feedback-->


    </div>
   </div>


    <div class="col-md-8">
     <div class="card-body border rounded bg-light">


<!-- End of Image-->

<!-- Main Details view model Start-->

      <div class="row">
       <div class="col">
  
        <h5 class="card-title text-primary"><strong><?php  echo $q['model']; ?></Strong></h5>
        
       </div>
      </div>
      <!-- End Of Main Details view model Start-->
 
  <!-- Main Details view line 1-->
       <div class="row">
        <div class="col">
    
         <h5 class="card-title text-dark text-center"><i class="fas fa-copyright"></i>&nbsp Brand</h5>
         <h6 class="text-center"><b><?php  echo $q['brand']; ?></b></h6>
    
        </div>


        <div class="col">

         <h5 class="card-title text-dark text-center"><i class="fal fa-car"></i>&nbsp Model</h5>
         <h6 class="text-center"><b><?php  echo $q['model']; ?></b></h6>

        </div>


        <div class="col">

         <h5 class="card-title text-dark text-center"><i class="fab fa-etsy"></i>&nbsp Edition</h5>
         <h6 class="text-center"><b><?php  echo $q['edition']; ?></b></h6>
       
        </div>

      </div><br>

       <!--End Of  Main Details view line 1-->






  <!-- Main Details view line 2-->
        <div class="row">
         <div class="col">

          <h5 class="card-title text-dark text-center"><i class="fas fa-calendar-alt"></i>&nbsp Model Year</h5>
          <h6 class="text-center"><b><?php  echo $q['model_year']; ?></b></h6>
       
         </div>


         <div class="col">

          <h5 class="card-title text-dark text-center"><i class="far fa-road"></i>&nbsp Mileage</h5>
          <h6 class="text-center"><b><?php  echo $q['mileage']; ?></b></h6>
       
         </div>


        <div class="col">

          <h5 class="card-title text-dark text-center"><i class="fas fa-fan"></i>&nbsp Condition</h5>
          <h6 class="text-center"><b><?php  echo $q['conditions']; ?></b></h6>
       
        </div>
       </div>  <br>
       <!--End Of  Main Details view line 2-->


  <!-- Main Details view line 3-->
      <div class="row">
       <div class="col">

        <h5 class="card-title text-dark text-center"><i class="fas fa-cog"></i>&nbsp Transmission </h5>
        <h6 class="text-center"><b><?php  echo $q['transmission']; ?></b></h6>

      </div>


      <div class="col">

        <h5 class="card-title text-dark text-center"><i class="fas fa-gas-pump"></i>&nbsp Fuel Type</h5>
        <h6 class="text-center"><b><?php  echo $q['fuel_type']; ?></b></h6>

      </div>


      <div class="col">

        <h5 class="card-title text-dark text-center"><i class="fas fa-th"></i>&nbsp Engine Capacity</h5>
        <h6 class="text-center"><b><?php  echo $q['engine_capacity']; ?></b></h6>

      </div>
     </div>

     <!--End Of  Main Details view line 3-->





    </div>
  </div>
  <!-- End Of Main Details view row-->





<!--description filed -->



<div class="container">

<br>

<h4>Description about Model</h4>
    <p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ad, tenetur maxime magnam placeat nisi quos dicta. Asperiores harum possimus eveniet officia nostrum nulla quidem reprehenderit maiores. Laudantium reiciendis, perspiciatis voluptatum omnis consequatur est, quam rem vel vitae consequuntur eius!



    </p>
</div>
















<!--description filed -->









<!---Image Corousel-->

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div class="col-md-9 justify-content-center">


<div class="card text-center justify-content-center">
  <div class="card-header">
  <h5 class="card-title text-primary"><strong> <?php  echo $q['model']; ?> </Strong></h5>
  </div>
  <div class="card-body">
   


  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active justify-content-center">
     <?php echo '<img class="d-block w-100" src="./admin/upload/'.$q['image2'].'" alt="First slide">'?>
    </div>
    <div class="carousel-item">
      <?php echo '<img class="d-block w-100" src="./admin/upload/'.$q['image3'].'" alt="First slide">'?>
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



  </div>
  <div class="card-footer text-muted">
   
  </div>
</div>



</div>
















</div>













       
 





<!-- End Of Specifications-->
  


   <?php
     }
     
     ?>           




   



    </div><!--Main column 1 col-xl-9-->



<!--side bar-->




<div class="col-md-4">
    
    
    




    
    

<h3 class="section-title text-center bg-light"><span class="text-danger">Other</span>&nbsp Models</h3>


<?php


$query = "SELECT * FROM seller_ads where status='Accept' ORDER BY RAND() LIMIT 7";
$query_run = mysqli_query($connection,$query);

foreach($query_run as $q)
{



?>





<!-- Sidebar News List View -->
<div class="card">
   
   <div class="row no-gutters">
   
        <div class="col-auto">
         &nbsp;&nbsp;&nbsp;&nbsp;<a href="ads_view.php?id=<?php echo $q['id'];?>" class="text-dark"><?php echo '<img src="./admin/upload/'.$q['image1'].'" width="120px"; height="200px"; class="img-fluid">'?>   </a>         <br>
          
   </div>
 
   <div class="col">
   <div class="card-block px-2 text-dark ">
                   
        <a href="ads_view.php?id=<?php echo $q['id'];?>" class="text-dark"><p class="text-dark font-weight-bold"><?php  echo $q['model']; ?>   </a>
        <a href="ads_view.php?id=<?php echo $q['id'];?>" class="text-dark"><p class="text-dark font-weight-bold"><?php  echo $q['price']; ?>   </a>
           
        <hr>
                 
   </div>
   </div>
   
   </div>
      
   <div class="card-footer w-100 text-muted"></div>         <br>
       
<!-- End Of Sidebar News List View -->
 
 </div>

<?php
     }
     
     ?> 















</div>







</div><!--Row main-->
</div><!--container-fluid main-->




<!--Feedback-->

<!-- Modal -->
<div class="modal fade" id="addfeed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">customer Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action ="./admin/code.php" method="POST" enctype="multipart/form-data">

      <div class="modal-body">

      
      <div class="container">

      <?php 

$sql = "SELECT * FROM feedback order by id desc limit 3 ";
$query=mysqli_query($connection,$sql);

foreach($query as $q){


?>
 <div class="row">

<!--Php Cars Listing Section-->

<!--Php Cars Listing Section-->



         
  <div class="col-xl-12 bg-light">
   <div class="card">  
    <div class="card-body text-center"> 
  
        
        <h8 class="text-dark font-weight-bold"> <?php  echo $q['name']; ?><br>

       <h8 class="text-dark font-weight-bold"><?php  echo $q['email']; ?><br>

       <h8 class="text-dark font-weight-bold"><?php  echo $q['feedback']; ?><br>
      
     

    </div>    
   </div>
  </div>



  



<!--End Php Cars Listing Section-->



<!--End Php Cars Listing Section-->
 
</div><br>

<?php

}

?>

<!--Feedback input Section-->

<div class="col-xl-12 bg-light">
   <div class="card">  
    <div class="card-body text-center">
    
    <?php

if(isset($_SESSION['success']) && $_SESSION['success'] !='')
{
    echo '<h2> '.$_SESSION['success'].'</h2>';
    unset($_SESSION['success']);
}


if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
    echo '<h2> '.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
}


?>

     <br>
  
      <h4>Submit Your Feedback</h4>
    <form action ="./admin/code.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">

      
      <div class="form-group">

      <div class="row">
       <div class="col-xl-4">
        <input type="text" name="name" class="form-control" placeholder="name" required>
       </div>

       <div class="col-xl-8">
        <input type="text" name="email" class="form-control" placeholder="Email" required>
       </div>
      </div>
<br>
      <textarea type="text" name="feedback" class="form-control" placeholder="Feedback" required></textarea>

      </div>

          <button type="submit" name="add_ads_feedback" class="btn btn-primary">send</button>

     </form>
      
     

    </div>    
   </div>
  </div>


<!--End of Feedback input Section-->

</div>

<!--End Of Cars Listing Section-->

  
    

     
     

      </div>



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
</form>
    </div>
  </div>
</div>




<!--end of Modal-->



<!--end of feedback-->























<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>