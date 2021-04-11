<?php
session_start();
	require 'connect.php';
	if(isset($_POST['dn_btn'])){
	$tk = $_POST['taikhoan'];
	$mk = $_POST['matkhau'];
	$sql ="SELECT * FROM khachhang WHERE taikhoan = '$tk' AND matkhau = '$mk' ";
	$query = mysqli_query($con, $sql);
	$num = mysqli_num_rows($query);
	if ($num == 0) {
		echo "Mật khẩu hoặc tên đăng nhập không đúng";
	}
	else{
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
		$_SESSION['taikhoan'] = $tk;
		$_SESSION['hoten'] = $row['hoten'];
		$_SESSION['id'] = $row['ID'];
		echo "fuck";
		header('location: ../index.php');

	}
}

?>