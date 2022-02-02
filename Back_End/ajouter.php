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
             <form method="POST" action="add.php">
               <fieldset> 
                <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="file" class="form-control"  name="Image">
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
                   <input type="text" class="form-control"  placeholder="06XXXXXX" name="Phone">
                 </div>
                 <div class="form-group">
                   <label for="number">Entrez votre Enroll Number</label>
                   <input type="text" class="form-control"  placeholder="123XXXXXXXXXX" name="Number">
                 </div>
                 <div class="form-group">
                   <label for="email">Entrez la Date d'admission</label>
                   <input type="date" class="form-control"  placeholder="123XXXXXXXXXX" name="Date">
                 </div>
                 <input id="submit"
                 class="btn btn-info my-3 px-5" type="submit"
                        name="submit" value="submit"
                        onclick="on_submit()"> 
                 
               </fieldset>
             </form>
</div>
    </div>
        </div>



<script src="js/bootstrap.bundle.min.js" ></script>   
</body>
</html>