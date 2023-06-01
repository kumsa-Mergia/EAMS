
<?php

require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/connection.php');

if(isset($_POST['delete_btn'])) {
       $id = $_POST['delete_id'];
       
       $query = "DELETE FROM employee WHERE id='$id' ";
       $query_run = mysqli_query($connection, $query);

       if ($query_run) {
        $_SESSION['success'] ='Employee Data Delated';
        header ("Location: ./m_employee.php");
    }
    else {
        $_SESSION['success'] ='Employee Data NOT Delated';
        header ("Location: ./m_employee.php");
    }
}

?>
