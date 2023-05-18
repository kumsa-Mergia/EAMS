
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand fa-laugh-wink-->
<a class="sidebar-brand d-flex align-items-center justify-content-center my-3" href="#">

    <img src="<?php echo $wptc; ?>" aalt="wptc" width="100" height="100" style="border-radius: 50%;">
    

</a>

<!-- Divider -->
<hr class="sidebar-divider my-3">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="../admin/index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
   

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<?php if ( $_SESSION['ROLE'] == 'admin') { ?>
  
   <!-- Nav Item - Department -->
<li class="nav-item active">
<a class="nav-link" href="../admin/m_department.php?id=<?php echo $_SESSION['USER_ID']?>">
        <span>Department</span></a>
</li>
<!-- Nav Item - Employee -->
<li class="nav-item active">
<a class="nav-link" href="../admin/m_employee.php?id=<?php echo $_SESSION['USER_ID']?>">
        <span>Employee</span></a>
</li>
<?php }
 elseif ($_SESSION['ROLE'] == 'hrm') { ?>

    <!-- Nav Item -  Permision Type -->
<li class="nav-item active">
<a class="nav-link" href="../hrm/Permisiontype.php?id=<?php echo $_SESSION['USER_ID']?>">
        <span>Permision Type</span></a>
</li>
<li class="nav-item active">
<a class="nav-link" href="../hrm/managePermision.php?id=<?php echo $_SESSION['USER_ID']?>">
        <span>Manage Permision</span></a>
</li>
    <?php }
 elseif ($_SESSION['ROLE'] == 'employee') { ?>
       <!-- Nav Item - Ask Permision -->
<li class="nav-item active">
    <a class="nav-link" href="../employee/askpermision.php">
        
        <span>Ask Permision</span></a>
</li>
<?php }
elseif ($_SESSION['ROLE'] == 'supervisor') { ?>
<!-- Nav Item - Attendance -->
<li class="nav-item active">
    <a class="nav-link" href="../supervisor/m__attendance.php">
        
        <span>Attendance</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="../supervisor/view__attendance.php">
        
        <span>History</span></a>
</li>
   <?php }
    else ?>
<!-- Nav Item - Attendance -->
<li class="nav-item active">
    <a class="nav-link" href="../calendar/index.php">
        
        <span>Calendar</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
<!-- End of Sidebar -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
