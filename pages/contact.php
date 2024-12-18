<?php
    require_once('header.php');
?>



<div class="contact">
    <img src="./assets/images/about1.jpg" alt="">
    <div class="contact_name">
        <h1>Contact</h1>
    </div>
    <div class="section1">
        <img src="./assets/images/slider8.jpeg" alt="" data-aos="fade-right">
        <div class="contact_form" data-aos="fade-left">
            <form action="" method="post">
            <div> 
            <label class="form-label">Enter Name :</label> 
            <div> 
                <input type="text" name="txtName" class="form-control" require> 
            </div> 
            <label class="form-label">Enter Email :</label> 
            <div> 
                <input type="email" name="txtEmail" class="form-control" require> 
            </div> 
            <label class="form-label">Enter MobileNo :</label> 
            <div> 
                <input type="tel" name="txtMobile" class="form-control" require> 
            </div> 
            <label class="form-label">Enter Message : </label>
            <div>
                <textarea name="txtMsg" name="txtMsg" class="form-control" require></textarea>
            </div>
            <button type="submit" class="btn w-100 mt-5" name="btn">Submit</button>
        </div>
            </form>
        </div>

    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15224.284524745362!2d78.37284494999999!3d17.45630925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1731660511761!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="zoom-in"></iframe>
    <hr>
    <div class="quot" data-aos="zoom-in">
        <p>Interior Design is the art of making a space work for you</p>
    </div>

</div>

<?php
  $connect = mysqli_connect("localhost","root","","ff_interior_designs");
  
  if(isset($_POST["btn"])){
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $mobile = $_POST['txtMobile'];
    $msg  = $_POST['txtMsg'];


    $query = "INSERT INTO `enquiry`(`Name`, `Email`, `MobileNo`, `Message`) VALUES ('$name','$email','$mobile','$msg')";

    if(mysqli_query($connect,$query)){
        echo "<script>alert('Thank You for contact Us');</script>";
        header("Location:home.php"); 
    }else{
        echo "Please Try Again";
    }
  }
  
?>

<?php
    require_once('footer.php')
?>
