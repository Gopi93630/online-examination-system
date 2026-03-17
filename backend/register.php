<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert Query
$sql = "INSERT INTO users(name,email,password) 
        VALUES('$name','$email','$password')";

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Registration Successful'); window.location='../frontend/login.html';</script>";
}else{
    echo "Error: " . mysqli_error($conn);
}
?>