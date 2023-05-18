<?php require_once "lang.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPTC | Employee Attendance System</title>
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src = "assets/js/jquery-3.5.1.min.js"></script>
	<script src = "assets/js/bootstrap.min.js"></script>
    <script src ="assets/js/myscript.js"></script>
    
</head>
<body>
<nav class="navbar bg-dark">
  <img src="assets/img/wptc.jpg" alt="WPTC Logo" 
    width="5%" height="3%" style="border-radius: 50%;">
    <div class="mx-5">
          

          <l class="nav-item dropdown ">
        <a class="text-white font-weight-bold" href="index.php"><?= __('Home')?></a>
        <a class="text-white font-weight-bold" href="#"><?= __('About')?></a>
        <a class="text-white font-weight-bold" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" ><?= __('Language')?> </a>
    <!-- Dropdown - Language Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
<a class="dropdown-item" href="about.php?lang=en">English</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="about.php?lang=amh">አማርኛ</a>
 <div class="dropdown-divider"></div>
<a class="dropdown-item" href="about.php?lang=oro">Afan Oromo</a>
</li>
                </div>
    </div>
</nav>

<div>
    <div>
    This is Test
    </div>
    <input type="password" name="password" class="form-control" placeholder="Enter password" required id="myInput">
    <input type="checkbox" onclick = "myFunction()"> Show Password
</div>

</body>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
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

