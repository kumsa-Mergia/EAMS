<?php

session_start();
$connection = mysqli_connect("localhost","root","","woliso_eams"); 

require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/lang.php');

//ForAttendance Submit as  $id=>$attendance_status

if(isset($_POST['submit']))   { 

    
    foreach ($_POST['attendance_status'] as  $id=>$attendance_status) {
        

    $employeename = $_POST['employeename'][$id];
    $department = $_POST['department'][$id];
    $shift = $_POST['shift'][$id];
    $date = date("Y-m-d");
    $time = date("H:i:s");

$query = "INSERT INTO attendance_record (employeename, department, shift, attendance_status, date, time) VALUES ('$employeename', '$department', '$shift', '$attendance_status', '$date', '$time')";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['success']= __('New Attendance Added');
        header("Location: ../supervisor/m__attendance.php");
            }
            else{
                $_SESSION['status']= __('New Attendance NOT Added');
                header("Location: ../supervisor/m__attendance.php");
            }

    }
    
} 


 
?>