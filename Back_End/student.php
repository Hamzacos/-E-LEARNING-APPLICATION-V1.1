<?php
                  ///////////Affichage/////////////////////
require_once('connection.php');
$sql = 'SELECT * FROM `students`';
$query = $conn->prepare($sql);
$query->execute();
$students = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<?php 
 ///////////////////////Modifier////////////////////////
  if (isset($_GET["id"])) {
    
    if(!empty($_POST["update"])) 
    {
            $pdo_statement=$conn->prepare ("UPDATE `students` SET img='" . $_POST[ 'img' ] .  "', Name='" . $_POST[ 'Name' ]. "', Email='" . $_POST[ 'Email' ]. "', phone='" . $_POST['phone'] ."' 
            ,Enroll_Number='" . $_POST['Enroll_Number'] ."', Date_of_admission='" . $_POST['Date_of_admission']."' where id=" . $_GET["id"]);
  
        
        $students = $pdo_statement->execute();
        if($students) 
          {
        header('location:student.php');
            }
    }
    $pdo_statement = $conn->prepare("SELECT * FROM `students` where id=" . $_GET["id"]);
    $pdo_statement->execute();
    $studentData = $pdo_statement->fetchAll();
  }

?>
<?php
////////////////////////////Ajouter////////////////////////////////////////
if(isset($_POST['insert'])){
  print_r($_FILES['img']);
$img = $_FILES['img']['name'];

if(!file_exists('./img/'))
{
  mkdir('./img');
}
 move_uploaded_file($_FILES['img']["tmp_name"], "./img/".$_FILES['img']['name']);

$Name= $_POST['Name'];
$Email= $_POST['Email'];
$phone= $_POST['phone'];
$Enroll_Number= $_POST['Enroll_Number'];
$Date_of_admission= $_POST['Date_of_admission'];
$sql = "INSERT INTO `students`(`img`, `Name`, `Email`,`phone`, `Enroll_Number`,`Date_of_admission`) 
       VALUES (:img, :Name, :Email, :phone, :Enroll_Number, :Date_of_admission)";
$res = $conn->prepare($sql);
$exec = $res->execute(array(":img"=>$img,":Name"=>$Name,":Email"=>$Email,":phone"=>$phone,":Enroll_Number"=>$Enroll_Number,":Date_of_admission"=>$Date_of_admission));

if($exec){
  echo 'Données insérées';
}else{
  echo "Échec de l'opération d'insertion";
}
header("Location: student.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
<?php
  $title="Student";
  $index = true;
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
              <button type="button" class="btn bg-info text-white my-3 " data-bs-toggle="modal"  data-bs-target="#ADD">ADD NEW STUDENT</button>
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
                    <th scope="row" class="salut"><img src="./img/<?php  echo $val['img']?>" alt="students" width="65px" /> </th>
                    
                    
                  <td><?php  echo $val['Name'] ?></td>
                  <td><?php  echo $val['Email'] ?></td>
                  <td><?php  echo $val['phone'] ?></td>
                  <td><?php  echo $val['Enroll_Number'] ?></td>
                  <td><?php  echo $val['Date_of_admission'] ?></td>
                  <td><a href="?id=<?php echo $val['id'] ; ?>" ><i class="fal fa-pen text-info" ></i></a>
                  <a href ="suprimer.php?id=<?= $val['id'] ?>" onclick="maFonction()"><i class="fal fa-trash text-info mx-1"></i></a></td>
                    </tr><th>
                    
                    <?php endforeach;; ?>
                </tbody>
              </table>
              </div>
              </div>
                  </div>
     </div> 

     <!-- Modal ADD -->

<div class="modal" id="ADD">
  <div class="modal-dialog" role="document" id="exampleModal">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD Students</h5>

      </div>
        <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="">
               <fieldset> 
                <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="file" class="form-control"  name="img">
                 </div>   
                 <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control"  placeholder="Votre Nom" name="Name">
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control"  placeholder="user@email.com" name="Email">
                 </div>
                 <div class="form-group">
                   <label for="num">Entrez votre phon</label>
                   <input type="text" class="form-control"  placeholder="06XXXXXX" name="phone">
                 </div>
                 <div class="form-group">
                   <label for="number">Entrez votre Enroll Number</label>
                   <input type="text" class="form-control"  placeholder="123XXXXXXXXXX" name="Enroll_Number">
                 </div>
                 <div class="form-group">
                   <label for="email">Entrez la Date d'admission</label>
                   <input type="date" class="form-control"  placeholder="123XXXXXXXXXX" name="Date_of_admission">
                 </div>
                 <div class="modal-footer">
               <button type="button" class="btn btn-secondary hideModel" data-dismiss="modal">Close</button>
               <input type="submit" name="insert" class="btn btn-primary" value="Insérer">
                 <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET["id"] : "" ?>">
               </div>
       </div>
    </div>
  </div>
               </fieldset>
             </form>
        </div>
<!-- END Modal ADD -->
<!-- ******************************************************************************** -->
     <!-- Modal Update -->

<div class="model" id="bgdark" tabindex="-1">
  <div class="modal-dialog" role="document" id="exampleModal">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Students</h5>

      </div>
      <div class="modal-body">
      <form method="POST" action="">
               <fieldset> 
                <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="file" class="form-control"  name="img" value="<?= isset($studentData) ? $studentData[0]['img'] : ""; ?>" >
                 </div>   
                 <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control"  placeholder="Votre Nom" name="Name" value="<?= isset($studentData) ? $studentData[0]['Name'] : ""; ?>"  >
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control"  placeholder="user@email.com" name="Email" value="<?= isset($studentData) ? $studentData[0]['Email'] : ""; ?>"  >
                 </div>
                 <div class="form-group">
                   <label for="num">Entrez votre phon</label>
                   <input type="text" class="form-control"  placeholder="06XXXXXX" name="phone" value="<?= isset($studentData) ? $studentData[0]['phone'] : ""; ?>"  >
                 </div>
                 <div class="form-group">
                   <label for="number">Entrez votre Enroll Number</label>
                   <input type="text" class="form-control"  placeholder="123XXXXXXXXXX" name="Enroll_Number" value="<?= isset($studentData) ? $studentData[0]['Enroll_Number'] : ""; ?>"  >
                 </div>
                 <div class="form-group">
                   <label for="email">Entrez la Date d'admission</label>
                   <input type="date" class="form-control"   name="Date_of_admission"  value="<?= isset($studentData) ? $studentData[0]['Date_of_admission'] : ""; ?>" >
                 </div>
      <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary hideModel" data-bs-dismiss="model">Close</button>
          <input type="submit" name="update" class="btn btn-primary" value="Update">
                 <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET["id"] : "" ?>">
      </div>
    </div>
  </div>
</div>
</fieldset>
             </form>
      </div>
<!-- END Modal Update -->
<script src="js/bootstrap.bundle.min.js" ></script>   
<script src="js/model.js"></script>
<script>
  function maFonction()
  {
  confirm("Voulez vous faire cette action?");
  }
  </script>
</body>
</html>