

<?php
 
 require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/lang.php');

$connection = mysqli_connect("localhost","root","","woliso_eams");

if(isset($_POST['delete_btn'])) {
       $id = $_POST['delete_id'];
       
       $query = "DELETE FROM department WHERE id='$id' ";
       $query_run = mysqli_query($connection, $query);

       if ($query_run) {
        $_SESSION['success'] = __('Department Data Deleted');
        header ("Location: m_department.php");
    }
    else {
        $_SESSION['success'] = __('Department Data NOT Deleted');
        header ("Location: m_mepartment.php");
    }
}

?>