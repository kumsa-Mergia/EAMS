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
    <h1 class="h3 mb-0 text-gray-800"><?= __('View Attendance')?></h1>
    
</div>

<!-- Content Row -->
<div class="row">



<div class="container-fluid">
 
<!--DataTables -->
<div class="card shadow mb-4">
    


<div class="card-body">



    <div class="table-responsive">

        
        <?php
        $connection = mysqli_connect("localhost","root","","woliso_eams");

        $query = "SELECT distinct date FROM attendance_record";
        $query_run= mysqli_query($connection, $query);
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th><?= __('No')?></th>
                <th><?= __('Date')?></th>
                <th><?= __('Show Attendance')?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $serialnumber = 0;
                
                // if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_array($query_run)) {
                        $serialnumber++;
        ?> 

                <tr>
    <td><?php echo $serialnumber; ?></td>                    
    <td><?php echo $row['date']; ?></td>
    <td>
        <form action="show.php" method="post">
            <input type="hidden" name="date" value="<?php echo $row['date']; ?>">
            <input type="submit" value="Show Attendance" class="btn btn-primary">
        </form>
    </td>

                </tr>
                <?php


               
    }
                //}
                

?>
            </tbody>
        </table>

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