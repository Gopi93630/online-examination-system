<?php
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    echo "<script>alert('Login Success'); window.location='../frontend/dashboard.html';</script>";
}else{
    echo "<script>alert('Invalid Login'); window.location='../frontend/login.html';</script>";
}

?>