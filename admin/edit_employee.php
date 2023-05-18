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
      <h6 class="m-4 font-weight-bold text-primary"> <?= __('Edit Employee')?>

       </h6>
     </div>
 <div class="card-body">
       <?php
$connection = mysqli_connect("localhost","root","","woliso_eams");
if (isset($_POST['edit_btn'])) {
       $id = $_POST['edit_id'];
       
       $query = "SELECT * FROM employee WHERE id='$id' ";
       $query_run = mysqli_query($connection, $query);

       foreach($query_run as $row)
       {
              ?>
 
 <form action="code.php" method="post">
    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
 <div class="form-group">
    <label><?= __('Employee Name')?></label>
    <input type="text" name="edit_employeename" value="<?php echo $row['employeename']; ?>" class="form-control" placeholder="Enter Name">
</div>
<div class="form-group">
    <label><?= __('Email')?></label>
    <input type="email" name="edit_email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Email">
</div>
<div class="form-group">
    <label><?= __('Gender')?></label>
    <select class="form-control" name="edit_gender" value="">

        <option value="Female"
        <?php 
        if ($row['gender'] == 'Female') {
            echo "selected";
        }
?>
><?= __('Female')?></option>
        <option value="Male"
        <?php 
        if ($row['gender']  == 'Male') {
            echo "selected";
        }
?>
><?= __('Male')?></option>
    </select>
</div>
<div class="form-group">
    <label><?= __('Shift')?></label>
    <select class="form-control" name="edit_shift" placeholder="Select shift">
        
        <option value="Morning"
        <?php 
        if ($row['shift'] == 'Morning') {
            echo "selected";
        }
?>><?= __('Morning')?> </option>
        <option value="After Noon"
        <?php 
        if ($row['shift'] == 'After Noon') {
            echo "selected";
        }
?>><?= __('After Noon')?></option>
</select>
</div>

<div class="form-group">
    <label><?= __('Department')?></label>
    
    <select class="form-control" name="edit_department" value="">
    
  

       <?php 
        $connection = mysqli_connect("localhost","root","","woliso_eams");
        $query =  "SELECT * FROM department";
        
        echo "<option>".$row['department']."</option>";

        $dep = mysqli_query($connection, $query);
        while ($row=mysqli_fetch_assoc($dep)) {
            
            if ($row['departmetname'] ==  $row['departmetname']) {
              echo "<option>".$row['departmentname']."</option>";
            }

           
        }
?>
    </select>
    
</div>


<input type="hidden" name="Role" value="employee" class="form-control">
<a href="m_employee.php" class="btn btn-danger"><?= __('Cancel')?></a>
<button type="submit" class="btn btn-primary" name="updateemployee"><?= __('update')?></button>
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