<?php
session_start();
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_assoc($result);

    // 🔐 Verify password
    if(password_verify($password, $user['password'])){

        // ✅ Create session
        $_SESSION['user'] = $user['name'];

        echo "<script>alert('Login Success'); window.location='../frontend/dashboard.php';</script>";
    } else {
        echo "<script>alert('Wrong Password'); window.location='../frontend/login.html';</script>";
    }

} else {
    echo "<script>alert('User Not Found'); window.location='../frontend/login.html';</script>";
}

?>