<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// 🔐 Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users(name,email,password) 
        VALUES('$name','$email','$hashed_password')";

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Registered Successfully'); window.location='../frontend/login.html';</script>";
}else{
    echo "Error: " . mysqli_error($conn);
}
?>