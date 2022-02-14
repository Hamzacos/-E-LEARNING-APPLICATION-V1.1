<?php
require_once("connection.php");
    if(!empty($_POST["insert"])) 
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
      $students = $pdo_statement->fetchAll();
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
             <h1>Update Students</h1>
             <form method="POST" action="">
               <fieldset> 
                <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="file" class="form-control"  name="img" value="<?php echo $students[0]['img']; ?>" >
                 </div>   
                 <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control"  placeholder="Votre Nom" name="Name" value="<?php echo $students[0]['Name']; ?>"  >
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control"  placeholder="user@email.com" name="Email" value="<?php echo $students[0]['Email']; ?>"  >
                 </div>
                 <div class="form-group">
                   <label for="num">Entrez votre phon</label>
                   <input type="text" class="form-control"  placeholder="06XXXXXX" name="phone" value="<?php echo $students[0]['phone']; ?>"  >
                 </div>
                 <div class="form-group">
                   <label for="number">Entrez votre Enroll Number</label>
                   <input type="text" class="form-control"  placeholder="123XXXXXXXXXX" name="Enroll_Number" value="<?php echo $students[0]['Enroll_Number']; ?>"  >
                 </div>
                 <div class="form-group">
                   <label for="email">Entrez la Date d'admission</label>
                   <input type="date" class="form-control"   name="Date_of_admission"  value="<?php echo $students[0]['Date_of_admission']; ?>" >
                 </div>
                 <p><input type="submit" name="insert" class="bg-info px-3 py-1" value="Update"></p>
                 <input type="hidden" name="id" value="<?= $val['id'] ?>">
               </fieldset>
             </form>
</div>
    </div>
        </div>



<script src="js/bootstrap.bundle.min.js" ></script>   
</body>
</html>