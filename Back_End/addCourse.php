<?php
 require_once ('connection.php');
 if(isset($_POST['insert'])){
  print_r($_FILES['image']);
  $image = $_FILES['image']['name'];
 
  if(!file_exists('./img/'))
  {
    mkdir('./img');
  }
   move_uploaded_file($_FILES['image']["tmp_name"], "./img/".$image);
 $nom= $_POST['nom'];
 $lien= $_POST['lien'];
 $sql = "INSERT INTO `courses`( `image`, `nom`,`lien`) 
        VALUES (:image, :nom, :lien)";
 $res = $conn->prepare($sql);
 $exec = $res->execute(array(":image"=>$image,":nom"=>$nom,":lien"=>$lien));
 if($exec){
   echo 'Données insérées';
 }else{
   echo "Échec de l'opération d'insertion";
 }
 header("Location: courses.php");
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
             <h1>ADD COURSE</h1>
             <form method="POST" action="" enctype="multipart/form-data">
               <fieldset> 
                <div class="form-group">
                   <label for="nom">Entrez le numero de course</label>
                   <input type="text" class="form-control"  name="id">
                 </div>   
                 <div class="form-group">
                   <label for="nom">Entrez le nom du course</label>
                   <input type="text" class="form-control"  placeholder=" Nom" name="nom">
                 </div>
                 
                 <div class="form-group">
                   <label for="img ">Entrez l'image du course</label>
                   <input type="file" class="form-control"  placeholder="" name="image">
                 </div>
                 <div class="form-group">
                   <label for="num">Entrez le lien du course</label>
                   <input type="text" class="form-control"  placeholder="https://....." name="lien">
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