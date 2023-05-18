<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'/woliso-attendance/lang.php');
session_start();
$connection = mysqli_connect("localhost","root","","woliso_eams");

//For Manage Employee
if(isset($_POST['registerbtn'])){
    $employeename = $_POST['employeename'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $employeerole = $_POST['Role'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $same_email = "SELECT * FROM employee WHERE email='$email'";

    $result_email = mysqli_query($connection, $same_email) or die(mysqli_error($connection));

 if($password===$cpassword){

    if (mysqli_num_rows($result_email) > 0) {
        $_SESSION['status']= __('Sorry .... in This Email another user is Registered');
            header("Location: ../admin/m_employee.php");
       // $email_error ="Sorry .... This Email is already Taken";
    }
    else {
        $query = "INSERT INTO employee (employeename, password, department, email, gender, shift, Role) VALUES ('$employeename', '$password', '$department','$email', '$gender', '$shift', '$employeerole')";

        $query_run = mysqli_query($connection, $query);

    }
    if($query_run){
        $_SESSION['success']= __('New Employee Added');
        header("Location: ../admin/m_employee.php");
            }
 }

else{
    $_SESSION['status']= __('Password and Confirmation Password Not Much');
    header("Location: ../admin/m_employee.php");
}
    
}


//For Manage Department

if(isset($_POST['departmentrbtn'])){
    $departmentname = $_POST['departmentname'];

    $same_department = "SELECT * FROM department WHERE departmentname='$departmentname'";

    $result_department = mysqli_query($connection, $same_department) or die(mysqli_error($connection));

    if (mysqli_num_rows($result_department) > 0) {
        $_SESSION['status']= __('Sorry .... This Department is already Added on the Database');
        header("Location: ../admin/m_department.php");
    }
    else {
        $query = "INSERT INTO department (departmentname) VALUES ('$departmentname')";
        $query_run = mysqli_query($connection, $query);
    }
    if($query_run){
        $_SESSION['success']=__('New Department Added');
        header("Location: ../admin/m_department.php");
            }
       
    }
            
//For Update Employee Button
if (isset($_POST['updateemployee'])) {
    $id = $_POST['edit_id'];
    $employeename = $_POST['edit_employeename'];
    $email = $_POST['edit_email'];
    $gender = $_POST['edit_gender'];
    $department = $_POST['edit_department'];
    $shift = $_POST['edit_shift'];
    $employeerole = $_POST['Role'];
   // $password = $_POST['edit_password'];
    

    $query = "UPDATE employee SET employeename='$employeename', email='$email', gender='$gender', department='$department', shift='$shift', /*password='$password',*/ Role='$employeerole' WHERE id='$id'";
    
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['success'] =__('Employee Data Updated');
        header ("Location: m_employee.php");
    }
    else {
        $_SESSION['success'] =__('Employee Data Not Updated');
        header ("Location: m_employee.php");
    }
}


//For Update Department Button
if (isset($_POST['updatedepartment'])) {
    $id = $_POST['edit_id'];
    $departmentname = $_POST['edit_departmentname'];

    $query = "UPDATE department SET departmentname='$departmentname' WHERE id='$id'";
    
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['success'] = __('Department Data Updated');
        header ("Location: m_department.php");
    }
    else {
        $_SESSION['success'] = __('Employee Data Not Updated');
        header ("Location: m_department.php");
    }
}

?>