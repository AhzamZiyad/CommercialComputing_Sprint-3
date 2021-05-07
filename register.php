<?php session_start(); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>
<?php include('./admin/database/dbconfig.php');?>







<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register Here!</h1>
                                <?php 
                                
                                if(isset($_SESSION['status22']) && $_SESSION['status'] !=''){
                                    echo '<h2 class="bg-danger text-white"> '.$_SESSION['status22'].' </h2>';
                                    unset($_SESSION['status22']);
                                }

                                
                                ?>
                            </div>
                           

                            <form class="user" action="./admin/code.php" method="POST" >
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="firstname" class="form-control form-control-user" 
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastname" class="form-control form-control-user"
                                            placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" 
                                        placeholder="username">
                                </div>


                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" 
                                        placeholder="Email Address">
                                </div>

                               

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                             placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="cpassword" class="form-control form-control-user"
                                            placeholder="Repeat Password">
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group">
                                <h6><label for="">User Type</label>
                                 <input type="radio" name="usertype" value="customer"/> Customer
                                    <input type="radio" name="usertype" value="seller"/> Seller</h6>
                                </div>
                                <hr>

                                <button type="submit" name="registerbtn" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                               
                            </form>
                            <hr>
                           
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>





                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>





















<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>