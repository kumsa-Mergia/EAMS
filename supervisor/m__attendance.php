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
    <h1 class="h3 mb-0 text-gray-800"><?= __('Attendance')?></h1>
    
</div>

<!-- Content Row -->
<div class="row">



<div class="container-fluid">
 
<!--DataTables -->
<div class="card shadow mb-4">
    <div class="card header py-3">
      <h6 class="m-4 font-weight-bold text-primary">
            <!-- Attendance -->
            <a href="attendance.php">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adddepartment">
<?= __('Fill Attendance')?>
</button>
            </a>

      </h6>
    </div>
<div class="card-body">

<?php
//Succcess Message
if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
    echo '<h6 class="text-success font-weight-bold">'.$_SESSION['success']. '</h6>';
    unset($_SESSION['success']);

}
//Wrong Message
if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
    echo '<h6 class="text-danger font-weight-bold">'.$_SESSION['status']. '</h6>';
    unset($_SESSION['status']);
}

?>

    <div class="table-responsive">
        <?php
        $connection = mysqli_connect("localhost","root","","woliso_eams");

        $query = "SELECT * FROM attendance_record";
        $query_run= mysqli_query($connection, $query);
        
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th><?= __('NO')?></th>
                <th><?= __('employee_name')?></th>
                <th><?= __('department')?></th>
                <th><?= __('shift')?></th>
                <th><?= __('attendance_status')?></th>
                <th><?= __('Date')?></th>
                
                </tr>
            </thead>
            <tbody>
                <?php
                $serialnumber = 0;
                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        $serialnumber++;
        ?> 

                <tr>
    <td><?php echo $serialnumber; ?></td>                    
    <td><?php echo $row['employeename']; ?></td>
    <td><?php echo $row['department']; ?></td>
    <td><?php echo $row['shift']; ?></td>
    <td><?php echo $row['attendance_status']; ?>
    <td><?php echo $row['date']; ?>

    </td>

                </tr>
                <?php
               
    }
                }
                else {
                    echo '<h3 class="alert text-danger">NO Attendance Record Data Found </h3>';
                }

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