<?php

// On inclut la connexion à la base
require_once('connection.php');

// On écrit notre requête
$sql = 'SELECT * FROM `students`';

// On prépare la requête
$query = $conn->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$students = $query->fetchAll(PDO::FETCH_ASSOC);


?>



<!DOCTYPE html>
<html lang="en">
<?php
  $title="Student";
  include 'header.php';
?>
<body>
    <div class="container-fluid bg-light overflow-hidden">
        <div class="row flex-nowrap">
        <?php include 'sideBar.php'; ?>
        <div class="col overflow-auto">
        <?php include 'navbar.php'; ?>
              <div class="bg-light div ">
                <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
              <h5 class="fw-bolder d-none d-sm-block mx-3">Students List</h5>
              <div class="d-flex align-items-center">
              <i class="far fa-sort text-info far fs-6 fa-sort me-3  d-sm-block"></i>
              <button type="button" class="btn  bg-info text-white my-3" onclick="window.location.href = 'ajouter.php';">ADD NEW STUDENT</button>
            </div>
            </div>
            <hr>
            
            <div class="table-responsive-sm table-responsive-md table-responsive-lg">
            <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col" class="text-muted" >Name</th>
                    <th scope="col" class="text-muted">Email</th>
                    <th scope="col" class="text-muted">phone</th>
                    <th scope="col" class="text-muted">Enroll Number</th>
                    <th scope="col" class="text-muted">Date of admission</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  foreach($students as $key => $val):?>
                    <tr class = "bg-white">
                    <th scope="row" class="salut"><img src=" <?php  echo $val['img']?>" alt="students" width="65px" /> </th>
                    
                  <td><?php  echo $val['Name'] ?></td>
                  <td><?php  echo $val['Email'] ?></td>
                  <td><?php  echo $val['phone'] ?></td>
                  <td><?php  echo $val['Enroll_Number'] ?></td>
                  <td><?php  echo $val['Date_of_admission'] ?></td>
                  <td><a href="modifier.php?id=<?php echo $val['id'] ; ?>"><i class="fal fa-pen text-info"></a></i>
                  <a href = "suprimer.php?id=<?= $val['id'] ?>"><i class="fal fa-trash text-info mx-1"></a></i></td>
                    </tr><th>
                    
                    <?php endforeach;; ?>
                </tbody>
              </table>
              </div>
              </div>

            </div>
          
     </div> 
              
 
    
    


<script src="js/bootstrap.bundle.min.js" ></script>   

</body>
</html>