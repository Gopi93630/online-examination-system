<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.html");
    exit();
}
?>
<!-- result.html -->
<!DOCTYPE html>
<html>
<head>
<title>Result</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body class="center">

<div class="form-box">
<h2>Your Score</h2>

<h1>8 / 10</h1>

<a href="dashboard.html" class="btn">Back to Dashboard</a>

</div>

</body>
</html>