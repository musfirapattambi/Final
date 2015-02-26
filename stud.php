<?php
session_start();
$user=$_SESSION['uname'];
$con = mysqli_connect("localhost","root","","login");
$_SESSION['category'] = $_GET['category'];
$_SESSION['course'] = $_GET['course'];
$course=$_GET['course'];
$category = $_GET['category'];
echo "$course";
echo "$category";
?>