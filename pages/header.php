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
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      
    <link rel="stylesheet" href="./assets/css/header.css">
    

    <title>F&F Interior Designs</title>
</head>
<body>
    <div class="menu_bar">
        <img src="./assets/images/site_logo.jpg" alt="">
          
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php">Services</a>
                <div class="dropdown__menu">
                  <ul>
                    <li><a href="traditional.php">Traditional Interior Designs</a></li>
                    <li><a href="contemporary.php">Contemporary Interior Designs</a></li>
                    <li><a href="modren.php">Modren Interior Designs</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="portfolio.php">portfolio</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="sign-up">
                <h1><span><?php echo $_SESSION['user_name']; ?> </span></h1>
                <button type="button"><a href="../logout.php">Logout</a></button>
              </div>
    </div>


