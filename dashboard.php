<!-- <?php
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

    </div>
</body>
</html>


  <button type="submit" name="submit">logout</button> -->



  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Profile</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
  <link rel="stylesheet" href="assets/css/style.css" >
</head>
<body>
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-md-3">
        <img src="assets\profilepic\default.svg " alt="Profile picture" class="img-thumbnail rounded-circle">
      </div>
      <div class="col-md-9">
        <h1><?php echo $row['first_name']." ".$row['last_name'] ?></h1>
        <p class="lead"><?php echo "@" . $row['username'] . "<br>"; ?></p>
        <a href="#" class="btn btn-primary me-2"><i class="fab fa-linkedin"></i> Linkedin</a>
        <a href="#" class="btn btn-primary"><i class="fab fa-github"></i> Github</a>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-8">
        <h3>About Me</h3>
        <p>Write a short paragraph about yourself and your skills/experience.</p>
      </div>
      <div class="col-md-4">
        <h3>Skills</h3>
        <ul>
          <li>Skill 1</li>
          <li>Skill 2</li>
          <li>Skill 3</li>
        </ul>
      </div>
    </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIeUqU+U8LTXwXqUZQm85SYiZbO1wbtP2qlk9uX/SURmi50m+IcWjE4" crossorigin="anonymous"></script>
</body>
</html>

