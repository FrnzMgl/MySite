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
<?php       
$query = 'SELECT * FROM users WHERE username = "' . $_SESSION["username"] . '"';
$result = $conn->query($query);

if ($result === false) {
    echo "Error executing the query: " . $conn->error;
}        
        $row = $result->fetch_assoc();
         echo "Username: " . $row['username'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";



$conn->close();

?>

    </div>
</body>
</html>
