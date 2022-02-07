<?php
require_once("connection.php");

    if(!empty($_POST["insert"])) 
        {
          $pdo_statement=$conn->prepare ("UPDATE `courses` SET image='" . $_POST[ 'image' ] .  "', 
          nom='" . $_POST[ 'nom' ]. "', lien='" . $_POST[ 'lien' ]."' where id=" . $_GET["id"]);
       

            
            $course = $pdo_statement->execute();
	           if($course) 
               {
		         header('location:courses.php');
                }
        }
      $pdo_statement = $conn->prepare("SELECT * FROM `courses` where id=" . $_GET["id"]);
      $pdo_statement->execute();
      $course = $pdo_statement->fetchAll();
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
             <h1>Update Crouse</h1>
             <form method="POST" action="">
               <fieldset> 
                <div class="form-group">
                   <label for="nom">Modifier image</label>
                   <input type="file" class="form-control"  name="image" value="<?php echo $course[0]['image']; ?>" >
                 </div>   
                 <div class="form-group">
                   <label for="nom">Modifier votre nom</label>
                   <input type="text" class="form-control"   name="nom" value="<?php echo $course[0]['nom']; ?>"  >
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Modifier le lien</label>
                   <input type="text" class="form-control"   name="lien" value="<?php echo $course[0]['lien']; ?>"  >
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