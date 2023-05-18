<?php
require_once "lang.php";
include "login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPTC | <?= __('Employee Attendance System')?></title>
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body style="background-image:  linear-gradient(180deg,#23339f 10%,#93ff31 100%);">
<nav class="navbar bg-dark">
  <img src="assets/img/wptc.jpg" alt="WPTC Logo" 
    width="5%" height="3%" style="border-radius: 50%;">
    <div class="mx-5">
          

          <li class="nav-item dropdown ">
        <a class="text-white font-weight-bold" href="#"><?= __('Home')?></a>
        <a class="text-white font-weight-bold" href="about.php"><?= __('About')?></a>
        <a class="text-white font-weight-bold" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" ><?= __('Language')?> </a>
    <!-- Dropdown - Language Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
    <h6 class="dropdown-header bg-primary text-light font-weight-bold">
    <?= __('Language Center')?>
                    </h6>
<a class="dropdown-item" href="index.php?lang=en">English</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="index.php?lang=amh">አማርኛ</a>
 <div class="dropdown-divider"></div>
<a class="dropdown-item" href="index.php?lang=oro">Afan Oromo</a>
</li>
                </div>
    </div>
</nav>

<!-- Outer Row -->
        <div class="row justify-content-center">
        
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                <div class="text-center">
    <img src="assets/img/wptc.jpg" alt="WPTC Logo" 
    width="15%" height="5%" style="border-radius: 50%;">
    <!--<h1 class="h4 text-gray-900 mb-4"><span style="font-size: 14px; color: black; font-weight: bold;">
    SIRNA BULCHIINSA HORDOFFII HOJJETTOOTA</span> 
</h1>-->
    <h1 class="h4 text-gray-900 mb-4"><?= __('Employee Attendance Managment System')?></h1>  <hr>
</div>
                <form class="user" action="login.php" method="post">
                <div class="form-group">
<input type="text" class="form-control form-control-user" id="exampleInputusername" aria-describedby="emailHelp" placeholder="Enter email" required name="email"> </div>
                 
                <div class="form-group">
<input type="password" class="form-control form-control-user" id="myInput" placeholder="Password" required name="password">
                  </div>
 <div class="form-group">
 <input type="checkbox" onclick = "myFunction()">  <?= __('Show Password')?>
 </div>
    
                  <div class="text-danger pl-3">
<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
  echo '<h6 class="text-danger font-weight-bold">'.$_SESSION['status'].'</h6>';
  unset($_SESSION['status']);
} 

 ?>
  </div>
<button class="btn btn-user btn-block btn-outline-primary font-weight-bold"><?= __('Login')?></button>                         

                </form> <hr>

                </div>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>   
       
</body>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/sb-admin-2.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="assets/js/demo/chart-area-demo.js"></script>
<script src="assets/js/demo/chart-pie-demo.js"></script>
<script src="assets/js/bootstrap.js"></script>

<script>
		function myFunction(){
            var x = document.getElementById('myInput');
            if (x.type === "password") {
                x.type = "text";
            }
            else{
                x.type = "password";
            }
        }
	</script>
</html>
