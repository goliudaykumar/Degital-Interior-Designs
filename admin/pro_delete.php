<?php
ob_start();
$connect = mysqli_connect("localhost","root","","ff_interior_designs");

       
$id4 = $_GET["id4"];
$query2 = "DELETE FROM `projects` WHERE SNo = '$id4'";

if(mysqli_query($connect,$query2)){
    echo "Record Deleted Successfully";
    header("Location: projects.php"); 
    ob_end_flush();
}else{ 
    echo "<script>alert('Failed')</script>"; 
} 

?>