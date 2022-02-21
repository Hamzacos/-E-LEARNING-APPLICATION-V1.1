<div class="fond col-auto col-md-3 col-xl-2 px-sm-2 px-0 ">
                <div class="d-flex flex-column align-items-center  px-3 pt-2 text-white min-vh-100">
                    <div class=" mb-3 d-flex justify-content-start">
                        <a class="navbar-brand text-black border-start border-3 border-info px-2 " href="#">E-Classe</a>
                         </div>
                        <img src= "img/user.jpg" alt="hugenerd" width="50" height="50" class="rounded-circle"><br>
                        
                        <?php  
                               

                                if(isset($_SESSION["username"]))  
                                {  
                                    echo '<span class="adm text-dark">'.$_SESSION["username"].'</span>'; 
                                }  
                                else  
                                {  
                                    header("location:index.php");  
                                }  
                         ?>  
                        <p class="text-info">Admin</p>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="menu">
                        <li class="nav-item mb-2" >
                            <div class="brain">
                            <a href="Dashbord.php" class="sheet nav-link align-middle px-2 text-dark px-sm-2 py-1">
                                <i class="fal fa-home-lg-alt "></i> <span class="ms-1 d-none d-sm-inline ">Home</span>
                            </a>
                        </li>
                        <li  class="nav-item mb-2">
                            <a href="courses.php"  class="nav-link px-0 align-middle text-dark">
                                <i class="fal fa-bookmark"></i> <span class="ms-1 d-none d-sm-inline">Cours</span> </a>
                
                        </li>
                        <li  class="nav-item mb-2">
                            <a href="student.php" class="nav-link px-0 align-middle text-dark">
                                <i class="fal fa-graduation-cap"></i> <span class="ms-1 d-none d-sm-inline">Students</span></a>
                        </li>
                        <li  class="nav-item mb-2">
                            <a href="Payment.php"  class="nav-link px-0 align-middle text-dark">
                                <i class="fal fa-usd-square"></i> <span class="ms-1 d-none d-sm-inline">Payments</span></a>
                        </li>
                        <li  class="nav-item mb-2">
                            <a href="#submenu3"  class="nav-link px-0 align-middle text-dark">
                                <i class="fal fa-file-chart-line"></i> <span class="ms-1 d-none d-sm-inline">Report</span> </a>
                                
                        </li>
                        <li  class="nav-item mb-2">
                            <a href="#" class="nav-link px-0 align-middle text-dark">
                                <i class="fal fa-sliders-v-square"></i></i> <span class="ms-1 d-none d-sm-inline">Settings</span> </a>
                        </li>
                        <li  class="nav-item mb-10">
                            <a href="logout.php" class="nav-link px-0 align-middle text-dark">
                             <span class="ms-1 d-none d-sm-inline">Logout</span><i class="fas fa-sign-out-alt px-sm-2"></i> </a>
                        </li>
                    </ul>
                 </div>
            </div>