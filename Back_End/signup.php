<?php
    require_once 'connection.php';
    if(isset($_POST['insert'])){
        $username  = $_POST['username'];
        $prenom    = $_POST['prenom'];
        $gender    = $_POST['gender'];
        $email     = $_POST['email'];
        $password  = $_POST['password'];
        $password2 = $_POST['password2'];

        $sql = "INSERT INTO `comptes`(`username`, `prenom`, `gender`, `email`, `password`, `password2`)
        VALUES (:username, :prenom, :gender, :email,:password, :password2)";
        $res = $conn ->prepare($sql);
        $exec = $res->execute(
            array(":username"=>$username,
            ":prenom"   =>$prenom,
            ":gender"   =>$gender,
            ":email"    =>$email,
            ":password" =>$password,
            ":password2"=>$password2,)
        );
        if($exec){
            header("location:index.php");
          }else{
            echo "Échec de l'opération d'insertion";
          }
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
$index=true;
$title="Inscription";
include 'header.php';
?>
<body>
<div class="container-fluid gradient">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4">
                <form class="bg-white p-3" action="" method="post" name="myform" onsubmit="return validateform()" >
                   <div class="m-4">
                    <a class="navbar-brand text-black border-start border-3 border-info px-2 mx-3 " href="#">E-Classe</a><br>
                       <h5 class="text-center">Inscription</h5>
                       <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" id="username" class="form-control" placeholder="Enter your user name"  name="username" >
                            <label id="nom" style="display:none">Merci de verfier le champs du nom</label>
                        </div> 
                        <div class="form-group">
                            <label for="nom">Prenom</label>
                            <input type="text" class="form-control" placeholder="Enter your user last name"  name="prenom">
                            <label id="prenom" style="display:none">Merci de verfier le champ</label>
                        </div>
                        <label class="label">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
                            <label class="form-check-label" for="exampleRadios1">
                            Male
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Female  " checked>
                            <label class="form-check-label" for="exampleRadios1">
                            Female
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="nom">Email</label>
                            <input type="text" class="form-control"placeholder="Enter your Email"  name="email" value="" >
                            <label id="mail" style="display:none">Merci de verfier le mail</label>
                        </div>
                        <div class="form-group">
                            <label for="nom">mot de passe</label>
                            <input type="password" class="form-control" placeholder="Enter your password"  name="password" value="" >
                            <label id="password" style="display:none" >le mot de passe contient au mois de 8 character</label>
                        </div>
                        <div class="form-group">
                            <label for="nom">confirmer Mot de passe</label>
                            <input type="password" class="form-control" placeholder="Confirm password" name="password2" value="" ><br>
                            <label id="password2" style="display:none" >password must be same!</label>
                        </div>
                        <input type="submit" name="insert" class="btn btn-info text-white w-100" value="SIGN UP" />
                        <p class="text-center mt-3"><a href="index.php" class="text-info">already have an account</a></p>
                    </div>
                </form>
            </div>
        </div>
</div>
<script src="js/scipt.js"></script>
</body>
</html>