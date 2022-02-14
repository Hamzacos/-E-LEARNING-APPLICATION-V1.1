<?php
 require_once ('connection.php');
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
  $title="New students";
  include 'header.php';
?>
<body>
<div class="container-fluid bg-light overflow-hidden">
    <div class="row flex-nowrap">
              <?php include 'sideBar.php'; ?>
        <div class="col overflow-auto">
             <?php include 'navbar.php'; ?>
             <h1>Formulaires</h1>
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
                 <p><input type="submit" name="insert" value="Insérer" class="bg-info"></p>
                 
               </fieldset>
             </form>
</div>
    </div>
        </div>



<script src="js/bootstrap.bundle.min.js" ></script>   
</body>
</html>