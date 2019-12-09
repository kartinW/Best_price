<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Best Price Main</title>

  
    <link rel="stylesheet"  type="text/css"  href="./styles.css">

</head>
<body>
    <div class="page-header">
        <h1>Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>! <b>Best Price</b> will gve you the <b>Best Price</b></h1>
    </div>
    <p>
        <a href="reset_password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>