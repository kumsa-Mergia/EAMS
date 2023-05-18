<?php
session_start();
$connection = mysqli_connect("localhost","root","","woliso_eams"); 

require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/lang.php');


//For Manage Permisio Type

if(isset($_POST['permisiontypebtn'])){
    $permisiontype = $_POST['permisiontype'];

$query = "INSERT INTO permisiontype (permisiontype) VALUES ('$permisiontype')";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['success']= __('New Permision Type Added');
        header("Location: ../hrm/Permisiontype.php");
            }
            else{
                $_SESSION['status']= __('Permision Type NOT Added');
                header("Location: ../hrm/Permisiontype.php");
            }
}



//For Update  Permisio Type
if (isset($_POST['updatepermisiontype'])) {
    $id = $_POST['edit_id'];
    $permisiontype = $_POST['edit_permisiontype'];

    $query = "UPDATE permisiontype SET permisiontype='$permisiontype' WHERE id='$id'";
    
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['success'] = __('Permision Type Data Updated');
        header ("Location: Permisiontype.php");
    }
    else {
        $_SESSION['success'] = __('Permision Type Data Not Updated');
        header ("Location: Permisiontype.php");
    }
}

//For Update  Permision Status
if (isset($_GET['update']) ) {
    $id = $_GET['id'];
    $permision_status =  $_GET['submittype'];
    $status = mysqli_query($connection, $query);
    $query = "UPDATE permision SET permision_status='$permision_status' WHERE id='$id'";

    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = __('status updated');
        header ("Location: managePermision.php");
    }
    else {
        $_SESSION['success'] = __('status Not Updated');
        header ("Location: managePermision.php");
    }
}

?>