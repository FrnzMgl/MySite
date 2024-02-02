<?php
session_start();
include 'db.php';
// Check if user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST["submit"])) {


    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <form action="dashboard.php" method="post">
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
    
    <button type="submit" name="submit">logout</button>




    </form>


    <div>


    </div>
</body>
</html>
