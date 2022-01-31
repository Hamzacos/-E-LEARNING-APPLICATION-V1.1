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
                <form class="bg-white p-3">
                    <div class="m-4">
                    <a class="navbar-brand text-black border-start border-3 border-info px-2 mx-3 " href="#">E-Classe</a>
                     </div>
                     <h6 class="text-center mb-1">SIGN IN</h6>
                     <p class="text-center mb-5">Enter your credentials to access your account</p>
                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label text-secondary">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label text-secondary" >Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-info text-white w-100"><a href="Dashbord.php" class="text-decoration-none text-white">SIGN IN</a></button>
                    <p class="text-center mt-3">Forgot your password<a href="#" class="text-info">?Reset Password</a></p>
                  </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>