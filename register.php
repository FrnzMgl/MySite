<?php
include("db.php");

// Check if username exists and set a flag
$usernameExists = isset($_GET['username_exists']);

if ($usernameExists) {
    echo '<script type="text/javascript">alert("Username already exists. Please choose a different username.");</script>';
}
?>

<?php
$errors = array();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $sql_check_username = "SELECT * FROM users WHERE username='$username'";
    $result_check_username = $conn->query($sql_check_username);

    if ($result_check_username->num_rows > 0) {
        // Username exists, set a flag for JavaScript
        $errors[] = "Username already exists. Please choose a different username.";
    }

    if (strlen($email) > 50) {
        $errors[] = "Email character count should not exceed 50.";
    }

    if ($number[0] !== "0") {
        $errors[] = "Number should start with '0'.";
    }

    if (empty($errors)) {
        // If there are no errors, proceed with registration
        $query = "INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`, `email`, `number`,`profilepic`) VALUES ('$username','$password','$firstname','$lastname','$email','$number','default.svg');";

        if (mysqli_query($conn, $query)) {
            header('location: index.php');
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
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
        <form>
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
          <button type="submit" class="btn btn-primary mt-3">Register</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
