<?php
session_start();

if ($_SESSION["session_id"]) {
    $username = $_SESSION["email"];
    $name = $_SESSION["name"];
}else{
    echo "<script> alert('Session not available. Please login')</script>";
    echo "<script> window.location.replace('../html/login.html')</script>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Main Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/depositori.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="header">
        <h1>Welcome To MazKitchen Ordering System</h1>
        <p>Easy to order, Easy to booking</p>
    </div>
    <div class="topnavbar">
        <a href="dashboardshop.php">MazKitchen Menu</a>
        <a href="mydashboardshop.php">MazKitchen Price</a>
        <a href="#">My Profile</a>
        <a href="../html/login.html" class="right" onclick="logout()">Logout</a>
    </div>
    <center>
        <h3>Welcome <?php echo $name ?></h3>
        <h3>Please select order</h3>
    </center>
    <div class="bottomnavbar">
        <a href="../index.html">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
    </div>
</body>
</html>
