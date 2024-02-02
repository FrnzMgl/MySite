<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection (update with your database credentials)
    include("db.php");

    // Get input values
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query database for user
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Valid user, start session
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); // Redirect to dashboard
    } else {
        // Invalid login
        header("location: index.php?hello"); // Redirect to
    }

    $conn->close();
}
?>
