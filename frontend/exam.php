<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.html");
    exit();
}
?>
<!-- exam.html -->
<!DOCTYPE html>
<html>
<head>
<title>Exam</title>
<link rel="stylesheet" href="../css/style.css">
<script src="../js/script.js"></script>
</head>

<body>

<div class="exam-box">

<h2>TNPSC Mock Test</h2>

<p id="question">1. Capital of Tamil Nadu?</p>

<div class="options">
<button onclick="checkAnswer('A')">A. Chennai</button>
<button onclick="checkAnswer('B')">B. Madurai</button>
<button onclick="checkAnswer('C')">C. Trichy</button>
<button onclick="checkAnswer('D')">D. Salem</button>
</div>

</div>

</body>
</html>