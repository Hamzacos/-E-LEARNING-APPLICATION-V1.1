<?php 
    $id = $_GET['id'];
    $file = 'file.json';
    $json = file_get_contents($file);
    $data = json_decode($json,true);
    $ligne = $data[$id];
  ?>
<!DOCTYPE html>
<html lang="en">
<?php
  $title="Update students";
  include 'header.php';
?>
<body>
<div class="container-fluid bg-light overflow-hidden">
    <div class="row flex-nowrap">
              <?php include 'sideBar.php'; ?>
        <div class="col overflow-auto">
             <?php include 'navbar.php'; ?>
             <h1>Update Student</h1>
             <form methode = "POST">
               <fieldset> 
                <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="file" class="form-control"  name="Image" value="<?php echo $ligne['img']; ?>"/> >
                 </div>   
                 <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control" name="Name" value="<?php echo $ligne['name']; ?>"/>
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control"   name="Email" value="<?php echo $ligne['email']; ?>"/>
                 </div>
                 <div class="form-group">
                   <label for="num">Entrez votre phon</label>
                   <input type="text" class="form-control"   name="Phone" value="<?php echo $ligne['phone']; ?>"/>
                 </div>
                 <div class="form-group">
                   <label for="number">Entrez votre Enroll Number</label>
                   <input type="text" class="form-control"   name="Number" value="<?php echo $ligne['number']; ?>"/>
                 </div>
                 <div class="form-group">
                   <label for="email">Entrez la Date d'admission</label>
                   <input type="date" class="form-control"  name="Date" value="<?php echo $ligne['date']; ?>"/>
                 </div>
                 <button type="submit" class="btn btn-primary btn-block mb-4" name="send">Save</button> 
                 
               </fieldset>
             </form>
</div>
    </div>
        </div>
<script src="js/bootstrap.bundle.min.js" ></script>   
</body>
</htm >
<?php 
  if(isset($_POST['send']))
  {
    $extra = array(
      'img'    => $_POST['Image'],
      'name'   => $_POST['Name'],
      'email'  => $_POST['Email'],
      'phone'  => $_POST['Phone'],
      'number' => $_POST['Number'],
      'date'   => $_POST['Date']
                  );
      $data[$id] = $extre;
      $json = json_encode($data,JSON_PRETTY_PRINT);
      file_put_contents($file,$json);
      header('location: student.php');
  }
?>