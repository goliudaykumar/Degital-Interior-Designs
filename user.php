<?php
$connect = mysqli_connect("localhost","root","","f&f_interiors");

session_start();

if(!isset($_SESSION['user_name'])){
    header("Location:sign_in.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
</head>
<body>
    <h1>User</h1>
    <h1>welcome <span><?php echo $_SESSION['user_name']; ?></span> </h1>
    <p>user page</p>
    <a href="logout.php">logout</a>
</body>
</html>