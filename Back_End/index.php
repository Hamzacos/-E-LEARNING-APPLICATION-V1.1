<?php
  session_start();
  try 
  {
    require_once 'connection.php';
    $check=$_POST['check']?? '';
    $name=$_COOKIE['username']?? '';
    $pass=$_COOKIE['password']?? '';
    $_SESSION['created'] = time();
    
    if($check=='on'){
      setcookie ("username",$_POST["username"],time()+ 86400);
	    setcookie ("password",$_POST["password"],time()+ 86400);
    }else {
      setcookie("username","");
      setcookie("password","");
    }
   
    if(isset($_POST["login"]))
    {
      if(empty($_POST["username"]) || empty($_POST["password"]))
      {
        $message = '<label>Merci de verifier les champs</label>';
      }
      else
      {
        $query = "SELECT * FROM `comptes` WHERE username = :username AND password = :password";
        $stmt  = $conn->prepare($query);
        $stmt->execute(
          array(
            'username' => $_POST["username"],  
            'password' => $_POST["password"]  
          )
        );
        $count = $stmt->rowCount();  
        if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:Dashbord.php");  
                }    
                else  
                {  
                     $message = '<label>Wrong Data !! try again</label>';  
                }  
      }
    }
  }
  catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  

?>
<!DOCTYPE html>
<html lang="en">
<?php
$index=true;
$title="login page";
include 'header.php';
?>
<body>
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4">
                <form class="bg-white p-3" method="post" action=""  name="myform" onsubmit="return validateform()">
                    <div class="m-4">
                    <a class="navbar-brand text-black border-start border-3 border-info px-2 mx-3 " href="#">E-Classe</a>
                     </div>
                     <h6 class="text-center mb-1">SIGN IN</h6>
                     <p class="text-center mb-5">Enter your credentials to access your account</p>
                     <?php  
                          if(isset($message))  
                          {  
                              echo '<label class="text-danger">'.$message.'</label>';  
                          }  
                     ?>
                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label text-secondary" name="username"  >User name</label>
                      <input type="text" class="form-control" name="username" placeholder="Enter your user name" value="<?php echo $name?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label text-secondary" name="password">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Enter your password" value="<?php echo $pass ?>">
                    </div>
                    <div class="form-check form-switch  mt-2 mb-2">
                    <input name="check" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Remember me</label>
                    </div>
                    <input type="submit" name="login" class="btn btn-info text-white w-100" value="SIGN IN" /> 
                    <p class="text-center mt-3">Forgot your password<a href="#" class="text-info">?Reset Password</a></p>
                    <p class="text-center mt-3"> <a href="signup.php" class="text-info text-center mt-3">Inscrit-vous</a></p>
                  </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>