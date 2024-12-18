<?php
    $connect = mysqli_connect("localhost","root","","ff_interior_designs"); 

    session_start();

    if(isset($_POST["btn"])){
        $userName = $_POST["userName"];
        $password = $_POST["password"];

        $query = "SELECT * FROM `users` WHERE `UserName` = '$userName' && `password` = '$password'";

        $result = mysqli_query($connect,$query);

        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);

            if($row['userType'] == 'Admin'){
                $_SESSION['admin_name'] = $row['UserName'];
                echo "<script>alert(sign in success)</script>";
                header("Location:admin/index.php"); 
            }elseif($row['userType'] == 'user'){
                $_SESSION['user_name'] = $row['UserName'];
                echo "<script>alert(sign in success)</script>";

                header("Location:pages/home.php"); 
            };
        }else{
            echo 'incorrect username or password';
        };
    };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="pages/assets/css/sign_up.css">
    <title>Sign-In</title>
</head>
<body>
    <div class="head">
    <img src="pages/assets/images/logo.png" alt="">
    <h1>F&F Interior Designs</h1>
    </div>
    <div class="sign-in" data-aos="zoom-in">
        <form class="sign_in" method="post">
        <h1>Sign In</h1>

            <div class="form-group">
                <label for="userName" class="form-label">User Name or Email: </label>
                <input type="text" name="userName" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password: </label>
                <input type="password" name="password" class="form-input"  required>
            </div><br>
    
            <button type="submit" name="btn">Sign-In</button>
        </form>
        <p>Don't have an account? <a href="sign_up.php">Sign Up</a></p>

    </div>
    <script>
  AOS.init();
</script>
</body>
</html>

