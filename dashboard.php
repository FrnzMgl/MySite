<!-- <?php
session_start();
include 'db.php';
// Check if user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

if (isset($_GET["logout"])) {


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




?>
 -->


  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Profile</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <div class="row d-grid align-items-center">
      <div class="col-md-3">
        <img id="profile" src="assets/profilepic/default.svg" alt="Profile picture" class="img-thumbnail rounded-circle">
         <a href=""><img id="edit-profile" src="assets/icons/edit-profile.svg" class="img-thumbnail rounded-circle "   alt=""></a>
   
    </div>  
      <div class="col-md-9">
        
        <h1><?php echo $row['first_name'] . " " . $row['last_name']; ?></h1>
        <p class="lead"><?php echo "@" . $row['username'] . "<br>"; ?></p>
        <a href="#" class="btn btn-primary me-2"><i class="fab fa-edit"></i> Edit</a>
        <a href="privatepage.php" class="btn btn-primary me-2"><i class="fab fa-edit"></i> private page</a>
    
        <a href="action/logout.php" class="btn btn-secondary float-end m-3">Logout</a> </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-8">
        <h3>About Me</h3>
        <p><?php echo "@" . $row['bio'] . "<br>"; ?></p>
      </div>
      <div class="col-md-4">
        
      </div>
    </div>
    
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIeUqU+U8LTXwXqUZQm85SYiZbO1wbtP2qlk9uX/SURmi50m+IcWjE4" crossorigin="anonymous"></script>
</body>
</html>


