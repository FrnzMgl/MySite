<?php
include("db.php");

// Check if the form has been submitted
if (isset($_POST['submit'])) {

    // Get the form data
    $username = $_POST['username'];
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $mobileNumber = trim($_POST['mobileNumber']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Initialize empty array for errors
    $errors = [];

    $sql_check_username = "SELECT * FROM users WHERE username='$username'";
    $result_check_username = $conn->query($sql_check_username);

    if ($result_check_username->num_rows > 0) {
        // Username exists, set a flag for JavaScript
        $errors[] = "Username already exists. Please choose a different username.";
    }

    // Validate first name
    if (!preg_match("/^[a-zA-Z]+$/", $firstName)) {
        $errors[] = "First name must contain only letters.";
    }

    // Validate last name
    if (!preg_match("/^[a-zA-Z]+$/", $lastName)) {
        $errors[] = "Last name must contain only letters.";
    }

   // Validate mobile number (allowing 11 digits)
    if (!preg_match("/^(0)[0-9]{10}$/", $mobileNumber)) {
    $errors[] = "Mobile number must start with 0 and be 11 digits long.";
    }


    // Validate email
    if (strlen($email) > 50) {
        $errors[] = "Email must not exceed 50 characters.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate password matching
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    // If there are errors, display them
    if (!empty($errors)) {
        echo '<div class="alert alert-danger">';
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        echo '</div>';
    } else {
        // Registration successful (replace with your actual registration logic)
        echo "Registration successful!";
        $query = "INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`, `email`, `number`,`proflepic`) VALUES ('$username','$password','$firstName','$lastName','$email','$mobileNumber','default.svg');";

        if (mysqli_query($conn, $query)) {
            header('location: index.php');
            exit();
        } else {
        
        }
    }
}
?>

<!-- Rest of your HTML code remains unchanged -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="text-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h1 class="mt-5 mb-3">Register</h1>
        <form action="register.php" method="post">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm password" required>
          </div>
          <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name" required>
          </div>
          <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name" required>
          </div>
          <div class="form-group">
            <label for="mobileNumber">Mobile Number:</label>
            <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Enter mobile number" required>
          </div>
          <button  name="submit"class="btn btn-primary mt-3">Register</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
