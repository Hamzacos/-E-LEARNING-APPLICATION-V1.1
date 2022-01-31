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
                                                                       
                                                                             $fichier = 'payment.json';
                                                                             $db = file_get_contents($fichier);
                                                                             $user = json_decode($db,true);
                                                                            foreach($user as $key)
                                                                            {
                                                                                echo "<tr>
                                                                                <th scope='row' >{$key['name']}</th>
                                                                                <td>{$key['payment']}</td>
                                                                                <td>{$key['bill']}</td>
                                                                                <td>{$key['amount']}</td>
                                                                                <td>{$key['balance']}</td>
                                                                                <td>{$key['date']}</td>
                                                                                <td><i class='fal fa-eye text-info'></i></td>
                                                                                </tr>";
                                                                            }
                                                                      ?>
                        
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