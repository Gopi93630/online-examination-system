<?php
$conn = mysqli_connect("localhost", "root", "", "tnpsc_exam");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>