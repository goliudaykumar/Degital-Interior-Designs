<?php
ob_start();
$connect = mysqli_connect("localhost","root","","ff_interior_designs");

       
$id2 = $_GET["id2"];
$query2 = "DELETE FROM `enquiry` WHERE SNO = '$id2'";

if(mysqli_query($connect,$query2)){
    echo "Record Deleted Successfully";
    header("Location: enquiry.php"); 
    ob_end_flush();
}else{ 
    echo "<script>alert('Failed')</script>"; 
} 

?>