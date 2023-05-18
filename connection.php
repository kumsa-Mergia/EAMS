<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} 
$connection = mysqli_connect('localhost','root','','woliso_eams');
?>


