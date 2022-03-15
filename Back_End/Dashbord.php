<?php

/*$time = time()- $_SESSION['created'];
if($time >86400)
{
  session_start();
  session_unset();
  session_destroy();
  header("location: index.php");
  
} 
?>*/ 
//<?php
 require_once 'connection.php';
$result=$conn->query("SELECT COUNT(*) FROM courses");
$result->execute();
$sum_students=$conn->query("SELECT COUNT(*) FROM students");
$sum_students->execute();
$sum_payments=$conn->query("SELECT SUM(balance) FROM `payment_details.`");
$sum_payments->execute();
?>
<!DOCTYPE html>
<html lang="en">
<?php
  $title="Dashbord";
  include 'header.php';
?>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
        <?php include 'sideBar.php'; ?>
            <div class="col">
        <?php include 'navbar.php'; ?>
              <div class="row">
              <div class=" col-12 col-sm-6 col-md-3 py-3">
                <div class="card card1" >
                    <i class="fas fa-graduation-cap fs-1 px-3 py-3" ></i>
                    <span class="px-3 py-3" >Students</span>
                    <div class="card-body">
                      <p class="card-text text-end"><?php print_r($sum_students->fetchColumn()); ?></p>
                    </div>
                </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-3 py-3">
                    <div class="card card2">
                        <i class="fal fa-bookmark fs-1 px-3 py-3" ></i>
                        <span class="px-3 py-3">Course</span>
                        <div class="card-body">
                          <p class="card-text text-end"><?php print_r($result->fetchColumn()); ?></p>
                        </div>
                    </div>
                    </div>
                    <div class=" col-12 col-sm-6 col-md-3 py-3">
                        <div class="card card3">
                            <i class="fal fa-usd-square fs-1 px-3 py-3" ></i>
                            <span class="px-3 py-3" >Payments</a></span>
                            <div class="card-body">
                              <p class="card-text text-end">DHS<?php print_r($sum_payments->fetchColumn()); ?></p>
                            </div>
                        </div>
                        </div>
                        <div class=" col-12 col-sm-6 col-md-3 py-3">
                            <div class="card card4">
                                <i class="fal fa-user fs-1 px-3 py-3" ></i>
                                <span class="px-3 py-3">Users</span>
                                <div class="card-body">
                                  <p class="card-text text-end">3</p>
                                </div>
                            </div>
                            </div>
                </div> 
                </div>
              
 </div>
    

<script src="js/bootstrap.bundle.min.js" ></script>    
</body>
</html>