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
    <h1 class="h3 mb-0 text-gray-800"><?= __('Permision Type')?></h1>
    
</div>

<!-- Content Row -->
<div class="row">

<!-- Modal -->
<div class="modal fade" id="adddepartment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel"><?= __('Add Admin Data')?></h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
        <span aria-hidden="true">&times;</span>
      </div>
      <form action="code.php" method="post">

      <div class="modal-body">

            <!--Form-->
<div class="form-group">
    <label><?= __('Permision Type')?></label>
    <input type="text" name="permisiontype" class="form-control" placeholder="Enter Permision Name" required>
</div>

</div>
        <!--Form End-->   
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= __('Cancel')?></button>
<button type="submit" name="permisiontypebtn" class="btn btn-primary"><?= __('Save changes')?></button>
             </div>
      </form>

    </div>
  </div>
</div>

<div class="container-fluid">
 
<!--DataTables -->
<div class="card shadow mb-4">
    <div class="card header py-3">
      <h6 class="m-4 font-weight-bold text-primary">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adddepartment">
<?= __('Add New Permision Type')?>
</button>
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

        $query = "SELECT * FROM permisiontype";
        $query_run= mysqli_query($connection, $query);
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th><?= __('ID')?></th>
                <th> <?=__('Permision Type')?></th>
                <th><?= __('Edit')?></th>
                <th> <?=__('Delete')?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
        ?> 

                <tr>
    <td><?php echo $row['id']; ?></td>                    
    <td><?php echo $row['permisiontype']; ?></td>
    <td> 
    <form action="edit_permisiontype.php" method="post">
        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
    <button type="submit" name="edit_btn" class="btn btn-success"><?= __('Edit')?></button>
    </form>
    </td>
    <td>
        <form action="delete_permisiontype.php" method="post">
        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
    <button type="submit" name="delete_btn" class="btn btn-danger"> <?=__('Delete')?></button>
    </form>
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