

    <?php
    if (isset($_SESSION["username"])) {
      header("Location: dashboard.php");
      exit();
  }
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="text-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h1 class="mt-5 mb-3">Login</h1>
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name=" username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name ="password" placeholder="Enter password">
          </div>
          <button type="submit" class="btn btn-primary mt-3">Login</button>
        </form>
        <p class="mt-3">Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </div>
  </div>
</body>
</html>
