<?php

$connect = mysqli_connect("localhost","root","","f&f_interiors");

session_start();
session_unset();
session_destroy();

header('Location:sign_in.php');

?>