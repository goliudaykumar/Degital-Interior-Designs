<?php 
        $connect = mysqli_connect("localhost","root","","ff_interior_designs");
 
            $id = $_GET["id"]; 
            
            $query = "DELETE FROM `users` WHERE Sno='$id'"; 
            
            
            if(mysqli_query($connect,$query)){ 
                echo "Record Deleted Successfully";
                header("Location:users.php"); 
 
            }else{ 
                echo "<script>alert('Failed')</script>"; 
            } 
     


?> 

