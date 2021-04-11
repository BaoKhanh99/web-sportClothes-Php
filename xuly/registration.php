<?php
	$ht = $_POST['ht'];
	$ns = $_POST['ns'];
	$dc = $_POST['dc'];
	$tk = $_POST['tk'];
	$mk = $_POST['mk'];	
		require 'connect.php';
		$sql ="INSERT INTO khachhang(hoten,namsinh,diachi,taikhoan,matkhau) VALUES ('$ht', '$ns', '$dc', '$tk', '$mk')";
		if (mysqli_query($con,$sql)) {
		}
		else{
			echo"Error".mysqli_error($con);
		}
?>