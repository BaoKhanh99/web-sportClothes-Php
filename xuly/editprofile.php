<?php  
session_start();
	require 'connect.php';
	$id = $_SESSION['id'];
	$ht = $_POST['hoten'];
	$ns = $_POST['namsinh'];
	$dc = $_POST['diachi'];
		if ($_SERVER['REQUEST_METHOD'] != 'POST')
    		die('Invalid HTTP method!');
		$sql = "UPDATE khachhang SET hoten = '$ht', namsinh = '$ns', diachi = '$dc' WHERE ID = '$id'";
		$ht = $_SESSION['hoten'];
		if(mysqli_query($con,$sql)){
 header('Location:../profile.php');
 }else{
 echo"Error".mysqli_error($con);
 }
 ?>