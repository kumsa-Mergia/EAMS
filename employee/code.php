<?php
session_start();
$connection = mysqli_connect("localhost","root","","woliso_eams"); 

require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/lang.php');

//For Manage ASk Permisio

if(isset($_POST['askpermisiontypebtn'])){
   
    $employee_name= $_POST['employee_name']; 
    $permision_type = $_POST['permision_type']; 
    $permision_from = $_POST['permision_from'];                     
    $permision_to = $_POST['permision_to']; 
    $permision_description = $_POST['permision_description']; 
    $permision_status = $_POST['permision_status'];
                    
$query = "INSERT INTO permision (employee_name,permision_type,permision_from,permision_to,permision_description,permision_status) VALUES ('$employee_name','$permision_type','$permision_from','$permision_to','$permision_description','$permision_status')";

    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['success']= __('You are Successfully Request Permision');
        header("Location: ../employee/askpermision.php");
            }
            else{
                $_SESSION['status']= __('Permision Not Requested');
                header("Location: ../employee/askpermision.php");
            }
}





?>