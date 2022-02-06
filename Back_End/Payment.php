<?php
require_once('connection.php');
$data = 'SELECT * FROM `payment_details.`';
$query = $conn->prepare($data);
$query->execute();
$user = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
  <?php
  $title="Payments";
  include 'header.php';
  ?>
</head>
<body>
    <div class="container-fluid bg-light overflow-hidden">
        <div class="row flex-nowrap vh-100 ">
          <?php include 'sideBar.php'; ?>
            <div class="col overflow-auto">
                <?php include 'navbar.php'; ?>
                    <div class=" div container-fluid">
                          <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
                            <h5 class="fw-bolder d-none d-sm-block py-3">Payments</h5>
                            <i class="far fa-sort text-info far fs-6 fa-sort me-3  d-sm-block "></i>
             </div>
                            <hr>
                                <div class="table-responsive-sm table-responsive-md">
                                     <table class="table table-borderless  px-4">
                                       <thead>
                                          <tr>
                                              <th scope="col" class="text-muted">Name</th>
                                              <th scope="col" class="text-muted" >Payment Schedule</th>
                                              <th scope="col" class="text-muted">Bill Number</th>
                                              <th scope="col" class="text-muted">Amount Paid</th>
                                              <th scope="col" class="text-muted">Balance amount</th>
                                              <th scope="col" class="text-muted">Date </th>
                                              <th scope="col"></th>
                                            </tr>
                                        </thead> 
                                              <tbody>
                                                                      <?php
                                                                      foreach($user as $key =>$py):?>
                                                                      
                                                                          <tr>
                                                                          <th scope='row' ><?php  echo $py['Name']?></th>
                                                                          <td><?php  echo $py['payment']?></td>
                                                                          <td><?php  echo $py['bill']?></td>
                                                                          <td><?php  echo $py['amount']?></td>
                                                                          <td><?php  echo $py['balance']?></td>
                                                                          <td><?php  echo $py['date']?></td>
                                                                          <td><i class='fal fa-eye text-info'></i></td>
                                                                          </tr>;
                                                                      
                                                                          <?php endforeach;; ?> 
                        
                                               </tbody>
                                       </table>
                             </div>
                      </div>
                </div> 
          </div>           
 </div>
<script src="js/bootstrap.bundle.min.js" ></script>  
</body>
</html>