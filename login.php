<?php
require_once('connection.php');
$msg = '';

if (isset($_POST['email']) && isset($_POST['password']) ) {
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);
    $query = "SELECT * FROM user where email='$email' and password='$password'";
    $result = mysqli_query($connection,$query); 
    
    $count = mysqli_num_rows($result);
if ($count > 0)  {
    while($row = mysqli_fetch_assoc($result)){
        if ($row["Role"] == "admin"){
            $_SESSION['ROLE'] = $row['Role'];
            $_SESSION['USER_NAME'] = $row["Username"];
            $_SESSION['USER_ID'] = $row['id'];
            header('location: admin/index.php');
                      }                 
          elseif ($row["Role"] == "hrm") {
            $_SESSION['ROLE'] = $row['Role'];
            $_SESSION['USER_NAME'] = $row["Username"];
            $_SESSION['USER_ID'] = $row['id'];
           header("Location: hrm/index.php");
                       }
            elseif ($row["Role"] == "supervisor"){
            $_SESSION['ROLE'] = $row['Role'];
            $_SESSION['USER_NAME'] = $row["Username"];
            $_SESSION['USER_ID'] = $row['id'];
            header("Location: supervisor/index.php");
                                        }
    }
}

elseif (isset($_POST['email']) && isset($_POST['password'])) {
    $res = mysqli_query($connection, "SELECT * FROM employee where email='$email' and password='$password'");
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);

    $count = mysqli_num_rows($res);
    if ($count > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($row["Role"] == "employee"){
        $_SESSION['ROLE'] = $row['Role'];
        $_SESSION['USER_NAME'] = $row['employeename'];
        $_SESSION['USER_ID'] = $row['id'];

        header("Location: employee/index.php");
        }
    }
else{       
    $_SESSION['status']='Your Password or email incorrect';
   header("Location: index.php"); 
}
}
}
?>