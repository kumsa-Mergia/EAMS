
<?php

$style_one = '../vendor/fontawesome-free/css/all.min.css';
$style_two = '../assets/css/sb-admin-2.min.css';
$wptc = '../assets/img/wptc.jpg';
$profile = '../assets/img/undraw_profile.svg';
 require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/header.php');
 require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/navbar.php');
 require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/topnav.php');


 $connection = mysqli_connect("localhost","root","","woliso_eams");

 if (isset($_GET['permision_status']) && isset($_GET['id'])) {
    $permision_status = $_GET['permision_status'];
    $id = $_GET['id'];
    $query = "UPDATE permision set permision_status='$permision_status' WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);
    
 }


?>
  <!--SEARCH -->
<?php include("../includes/search.php"); ?>

             
<div class="container-fluid">

<!--DataTables -->
<div class="card shadow mb-4">

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

       $query = "SELECT * FROM permision";
       $query_run= mysqli_query($connection, $query);
       ?>
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           <thead>
               <tr>
               <th><?= __('No')?></th>
               <th><?= __('Employee Name')?></th>
               <th><?= __('Permision Type')?></th>
               <th><?= __('Permision From')?></th>
               <th><?= __('Permision To')?></th>
               <th><?= __('Permision Description')?></th>
               <th><?= __('Permision Status')?></th>
               <th><?= __('Take Action')?></th>
               
               </tr>
           </thead>
           <tbody>
               <?php
                $number = 1;
               if (mysqli_num_rows($query_run) > 0) {
                   while ($row = mysqli_fetch_assoc($query_run)) {
       ?> 

               <tr>
   <td><?php echo $number++; ?></td>                    
   <td><?php echo $row['employee_name']; ?></td>
   <td><?php echo $row['permision_type']; ?></td>
   <td><?php echo $row['permision_from']; ?></td>                    
   <td><?php echo $row['permision_to']; ?></td>
   <td><?php echo $row['permision_description']; ?></td>

   <td>
       <?php 
             if ($row['permision_status'] === 'Pending') {
                 echo "Pending";
                            }
             if ($row['permision_status'] === 'Approved') {
                 echo "Approved";
                            }
             if ($row['permision_status'] === 'Rejected') {
                 echo "Rejected";
                            }  
?> 
</td>
<td>
   
   <select style="width: 110px; padding: 0.5rem 0;" class="bg-success font-weight-bold text-white" onchange="update_permision_status(this.options[this.selectedIndex].value,'<?php echo $row['id']; ?>')">
        <option  value="1">Take Action</option>
        <option class="bg-white text-primary" value="Approved"><?= __('Approve')?></option>
        <option class="bg-white text-primary" value="Rejected"><?= __('Decline')?></option>
    </select>
   
    
    </td>
   
    
               </tr>
               
               <?php
               
            }
                        }
                       
                        else {
                            echo __('NO Record Data Found');
                        }
                        
                        ?>
          
        
           
           </tbody>
       </table>
   </div>
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
$submitstatus = '../hrm/managePermision.php';
$script = '../assets/js/myscript.js';
require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/scripts.php');
require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/includes/footer.php');
?>