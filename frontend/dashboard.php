<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<header class="navbar">
<h2>Welcome, <?php echo $_SESSION['user']; ?></h2>
<a href="../backend/logout.php">Logout</a>
</header>

<div class="dashboard">
<h1>TNPSC Dashboard</h1>
</div>

</body>
</html>