<?php
$students = [
    [
        'img' => 'img/student.jpg',
        'name' => 'username',
        'email' => 'user@email.com',
        'phone' => '7305477760',
        'number' => '1234567305477760',
        'date' => '08-Dec, 2021',
        

    ],
    [
      'name' => 'hamza',
      'email' => 'hamza.laqraa@hotmail.com',
      'phone' => '0630202850',
      'number' => '1234567305477760',
      'date' => '08-Dec, 202',
      'img' => 'img/student.jpg',
  ],
  [
    'name' => 'saida',
    'email' => 'saida.barakat@hotmail.com',
    'phone' => '0630202850',
    'number' => '1234567305477760',
    'date' => '08-Dec, 202',
    'img' => 'img/student.jpg',
],
[
  'name' => 'salim',
  'email' => 'salim.ahmad@hotmail.com',
  'phone' => '0630202850',
  'number' => '1234567305477760',
  'date' => '08-Dec, 202',
  'img' => 'img/student.jpg',
],
[
  'name' => 'maher',
  'email' => 'maher.nourdin@hotmail.com',
  'phone' => '0630202850',
  'number' => '1234567305477760',
  'date' => '08-Dec, 202',
  'img' => 'img/student.jpg',
],
[
  'name' => 'salim',
  'email' => 'salim.ahmad@hotmail.com',
  'phone' => '0630202850',
  'number' => '1234567305477760',
  'date' => '08-Dec, 202',
  'img' => 'img/student.jpg',
],

    
];

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
              <button type="button" class="btn  bg-info text-white my-3">ADD NEW STUDENT</button>
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
                  foreach($students as $key)
                  {
                    echo "<tr class = 'bg-white'>
                    <th scope='row' class='salut'><img src='{$key['img']}' alt='students' width='65px' 
                    /></th>
                  <td>{$key['name']}</td>
                  <td>{$key['email']}</td>
                  <td>{$key['phone']}</td>
                  <td>{$key['number']}</td>
                  <td>{$key['date']}</td>
                  <td><i class='fal fa-pen text-info'></i><i class='fal fa-trash text-info mx-1'></i></td>
                    </tr> <th>";
                   
                  }
                  ?>
                </tbody>
              </table>
              </div>
              </div>

            </div>
          
     </div> 
              
 
    
    


<script src="js/bootstrap.bundle.min.js" ></script>   

</body>
</html>