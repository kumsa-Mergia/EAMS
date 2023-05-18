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
 
 <!--DataTables -->
 <div class="card shadow mb-4">
    <div class="card header py-3">
      <h6 class="m-4 font-weight-bold text-primary"> Response for The Request

       </h6>
     </div>
 <div class="card-body">

<?php
$connection = mysqli_connect("localhost","root","","woliso_eams");
if (isset($_POST['updatestatus'])) {
       $employee_name = $GET['employee_name_status'];
       
       $query = "SELECT * FROM permision WHERE employee_name='$employee_name' ";
       $query_run = mysqli_query($connection, $query);

       foreach($query_run as $row)
       {
              ?>

      
      <form action="code.php" method="get">

      <div class="modal-body">
      <input type="text" name="employee_name_status" value="<?php echo $row['employee_name'] ?>">
<select class="form-control success" name="submittype" required>
        <option value="Pending">  -- SELECT ACTION --  </option>
        <option value="Approved">Approve</option>
        <option value="Rejected">Decline</option>
</select>
      </div>

 <a href="m_department.php" class="btn btn-danger">Cancel</a>
<button type="submit" name="updatestatus" class="btn btn-primary">update Status</button>     
      
      </form>


<?php
       }
 
 }

 ?>

</div>
 </div>
 <!--Container-fluid-->
 </div>
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
