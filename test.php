<?php


if(isset($_POST['submit'])){

    echo $_POST['test'];

}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
<input type="file" class="form-control" id="customFile" name="test">
<input type="submit" name="submit" id="">
</form>
</body>
</html>