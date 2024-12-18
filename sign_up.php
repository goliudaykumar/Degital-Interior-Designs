<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="pages/assets/css/sign_up.css">
    <title>Sign-Up</title>
</head>
<body>
    <div class="head">
    <img src="pages/assets/images/logo.png" alt="">
    <h1>F&F Interior Designs</h1>
    </div>
    <div class="sign-in" data-aos="zoom-in">
        <form class="sign_in" method="post" >
        <h1>Sign Up</h1>
        <?php

            if(isset($error)){
                foreach($error as $error){
                    echo "<span class='error-msg'>". $error . "</span>";
                };
            };

        ?>
            <div class="form-group">
                <label for="fullName" class="form-label">Full Name: </label>
                <input type="text" name="fullName" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="userName" class="form-label">User Name: </label>
                <input type="text" name="userName" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="Mobile" class="form-label">Mobile No: </label>
                <input type="tel" name="mobileNo" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="Email" class="form-label">Email Id: </label>
                <input type="email" name="email" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password: </label>
                <input type="password" name="password" class="form-input"  required>
            </div>
            <div class="form-group">
                <label for="ConfirmPassword" class="form-label">Confirm Password: </label>
                <input type="password" name="cpassword" class="form-input" required>
            </div><br>
            <button type="submit" name="btn">Sign-Up</button>
        </form>
        <p>Already have an account? <a href="sign_in.php">Sign In</a></p>

    </div>
    <script>
  AOS.init();
</script>
</body>
</html>

<?php

    $connect = mysqli_connect("localhost","root","","ff_interior_designs"); 

    if(isset($_POST["btn"])){
        $name = $_POST["fullName"];
        $userName = $_POST["userName"];
        $mobile = $_POST["mobileNo"];
        $email  = $_POST["email"];
        $password = $_POST["password"];
        $cPassword = $_POST["cpassword"];

        $query = "SELECT * FROM `users` WHERE UserName ='$userName' || Email = '$email'";


        $result = mysqli_query($connect,$query);

        if(mysqli_num_rows($result)>0){
            $error[] = 'user already exist...!';
        }else{
            if($password != $cPassword){
                $error[] = 'password not matched';
            }else{
                $insert = "INSERT INTO `users`( `FullName`, `UserName`, `Mobile`, `Email`, `password`) VALUES ('$name','$userName','$mobile','$email','$password')";

                mysqli_query($connect,$insert);
                header("Location:sign_in.php"); 
                
            }
        }
    }

?>