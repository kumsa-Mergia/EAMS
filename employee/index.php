<?php

 $style_one = '../vendor/fontawesome-free/css/all.min.css';
 $style_two = '../assets/css/sb-admin-2.min.css';
 $wptc = '../assets/img/wptc.jpg';
 $profile = '../assets/img/undraw_profile.svg';
  require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/header.php');
  require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/navbar.php');
  require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/topnav.php');


?>
<div class="container-fluid">

        <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= __('Dashboard')?></h1>
    
</div>

<!-- Content Row -->
<div class="row">

    <!-- Total Employee -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        <?= __('Total Employee')?>
            <?php
            $connection = mysqli_connect("localhost","root","","wptc_attendance");

            $dash_employee_query = "SELECT * FROM employee";
            $dash_employee_query_run = mysqli_query($connection, $dash_employee_query);

            if ($employee_total = mysqli_num_rows($dash_employee_query_run)) {
                
            }
            ?>
       </div>
       <?php
       if ($employee_total = mysqli_num_rows($dash_employee_query_run)) {
        echo '<div class="h5 mb-0 font-weight-bold text-gray-800">'
        .$employee_total.
    '</div>';
    }
    else {
        $x = __('NO Employee in Database');
        echo '<div class="h5 mb-0 font-weight-bold text-gray-800">'.$x.'</div>';
    }
    ?>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Total Department -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        <?= __('Total Department')?>
                <?php
            $connection = mysqli_connect("localhost","root","","wptc_attendance");

            $dash_department_query = "SELECT * FROM department";
            $dash_department_query_run = mysqli_query($connection, $dash_department_query);

            if ($department_total = mysqli_num_rows($dash_department_query_run)) {
                
            }
            ?>
            </div>
            <?php
       if ($department_total = mysqli_num_rows($dash_department_query_run)) {
        echo '<div class="h5 mb-0 font-weight-bold text-gray-800"">'
        .$department_total.
    '</div>';
    }
    else {
        echo '<div class="h5 mb-0 font-weight-bold text-gray-800"> NO Department in Database </div>';
    }
    ?>
    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Content Row -->

</div>
<!-- /.container-fluid -->
</div>
 <!-- End of Main Content -->

 <?php
$link_1 = '../vendor/jquery/jquery.min.js';
$link_2 = '../vendor/bootstrap/js/bootstrap.bundle.min.js';
$link_3 = '../vendor/jquery-easing/jquery.easing.min.js';
$link_4 = '../assets/js/sb-admin-2.min.js';
$link_5 = '../vendor/chart.js/Chart.min.js';
$link_6 = '../assets/js/demo/chart-area-demo.js';
$link_7 = '../assets/js/demo/chart-pie-demo.js';
$link_8 = '../assets/js/bootstrap.js';
require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/scripts.php');
require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/footer.php');
?>