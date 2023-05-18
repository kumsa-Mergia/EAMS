

<?php
$connection = mysqli_connect("localhost","root","","woliso_eams");

require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/lang.php');

if(isset($_POST['delete_btn'])) {
       $id = $_POST['delete_id'];
       
       $query = "DELETE FROM permisiontype WHERE id='$id' ";
       $query_run = mysqli_query($connection, $query);

       if ($query_run) {
        $_SESSION['success'] = __('Permision Type Data Delated');
        header ("Location: Permisiontype.php");
    }
    else {
        $_SESSION['success'] = __('Permision Type Data NOT Delated');
        header ("Location: Permisiontype.php");
    }
}

?>