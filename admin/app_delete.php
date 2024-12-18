<?php
    
            $connect = mysqli_connect("localhost","root","","ff_interior_designs");

            
            $id3 = $_GET["id3"];

            $query3 = "DELETE FROM `booking_appointment` WHERE Sno = '$id3'";

            if(mysqli_query($connect,$query3)){
                echo "Record Deleted Successfully";
                header("Location:appointments.php"); 
            }

?>