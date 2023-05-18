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
    <h1 class="h3 mb-0 text-gray-800"><?= __('Attendance Record')?></h1>
    
</div>

<!-- Content Row -->
<div class="row">



<div class="container-fluid">
 
<!--DataTables -->
<div class="card shadow mb-4">
    <div class="card header py-3">
      <h6 class="m-4 font-weight-bold text-primary">
            <!-- Attendance -->
            <a href="view__attendance.php">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adddepartment">
<?= __('<<-- Back')?> 
</button>
            </a>

      </h6>
    </div>

<div class="card-body">



    <div class="table-responsive">

       
        <?php
        $connection = mysqli_connect("localhost","root","","woliso_eams");
        $date = $_POST['date'];
        $query = "SELECT * FROM attendance_record WHERE date='$date'";
        
       

        $query_run= mysqli_query($connection, $query);
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th><?= __('No')?></th>
                <th><?= __('employee_name')?></th>
                <th><?= __('department')?></th> 
                 <th><?= __('shift')?></th>
                <th><?= __('attendance_status')?></th>
                
                </tr>
            </thead>
            <tbody>
                <?php
                $serialnumber = 0;
                $counter = 0;
                // if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_array($query_run)) {
                        $serialnumber++;
        ?> 

                <tr>
    <td><?php echo $serialnumber; ?></td>                    
    <td><?php echo $row['employeename']; ?></td>
    <td><?php echo $row['department']; ?></td>
    <td><?php echo $row['shift']; ?></td>
    <td>
        
    <?php  if ($row['attendance_status'] == 'Present') {
       echo '<p class="bg-success font-weight-bold text-white">
       <input type="radio" value="Present" name="attendance_status[<?php echo $counter; ?>]"> Present
       </p>';
    }
    ?> 
   
   
    <?php  if ($row['attendance_status'] == 'Late') {
        echo '<p class="bg-warning font-weight-bold text-white">
        <input type="radio" value="Present" name="attendance_status[<?php echo $counter; ?>]"> Late
        </p>';
    }
    ?>
    
    <?php  if ($row['attendance_status'] == 'Absent') {
        echo '<p class="bg-danger font-weight-bold text-white">
        <input type="radio" value="Present" name="attendance_status[<?php echo $counter; ?>]">Absent
        </p>';
    }
    ?>
     
    
    
    </td>

                </tr>
                <?php

$counter++;
               
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

