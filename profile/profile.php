<?php require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/lang.php');?>
<?php
 $style_one = '../vendor/fontawesome-free/css/all.min.css';
 $style_two = '../assets/css/sb-admin-2.min.css';
 $wptc = '../assets/img/wptc.jpg';
 $profile = '../assets/img/undraw_profile.svg';
  require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/header.php');
  require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/navbar.php');
  require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/topnav.php');


?>
<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card header py-0">
      <h6 class="m-4 font-weight-bold text-primary">
            <!-- Attendance -->
            <a href="#">
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#adddepartment">
<?= __('change Password')?> 
</button>
            </a>

      </h6>
    </div>

  <div class="card rounded-0 shadow">
    <div class="card-header">
      <h3 class="card-title font-weight-bolder text-dark h3 mb-0"> <?= __('Employee Attendance Managment System')?></h3>
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">

          <!-- left -->
          <div class="col-sm-10 col-md-5 col-lg-4 col-xl-3 offset-sm-1 offset-md-0 offset-lg-0 offset-xl-0 text-center">
            <img src="<?php echo $profile; ?>" class="rounded-circle img-thumbnail">
          </div>

          <!-- right -->
          <div class="col-sm-10 col-md-6 offset-sm-1">
            <h1 class="h3 text-white bg-gradient-warning p-1 rounded-0 mt-1 mb-3">Profile Information</h1>
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">Name </th>
                  <td>: <?php echo $_SESSION['USER_NAME'] ?></td>
                </tr>
                <tr>
                  <th scope="row">Role</th>
                  <td>: <?php echo $_SESSION['ROLE'] ?></td>
                </tr>
                <tr>
                  <th scope="row">id</th>
                  <td>: <?php echo $_SESSION['USER_ID'] ?></td>
                </tr>
                <tr>
                  <th scope="row">password</th>
                  <td>: <?php echo $_SESSION['USER_PASSWORD'] ?></td>
                </tr>
                <tr>
                  <th scope="row">Today Date</th>
                  <td>: <?= date('D:M:Y'); ?> </td>
                </tr>
              </tbody>
            </table>
          </div>
          </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!--Help-->


<?php
$link_1 = '../vendor/jquery/jquery.min.js';
$link_2 = '../vendor/bootstrap/js/bootstrap.bundle.min.js';
$link_3 = '../vendor/jquery-easing/jquery.easing.min.js';
$link_4 = '../assets/js/sb-admin-2.min.js';
$link_5 = '../vendor/chart.js/Chart.min.js';
$link_6 = '../assets/js/demo/chart-area-demo.js';
$link_7 = '../assets/js/demo/chart-pie-demo.js';
$link_8 = '../assets/js/bootstrap.js';
//$myscript = '../assets/js/myscript.js';
require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/scripts.php');
require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/footer.php');
?>