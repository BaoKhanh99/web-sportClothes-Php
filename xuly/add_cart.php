<?php 
session_start();
require 'connect.php';
$tensp = $_SESSION['tensp'];
$hinhanh = $_SESSION['hinhanh'];
$idsp = $_SESSION['idsp'];
$tk = $_SESSION['taikhoan'];
$gia = $_SESSION['gia'];
$danhmuc = $_SESSION['danhmuc'];
 if (isset($_GET['sl'])) {
    $sl = $_GET['sl'];
} else { 
    $sl = 1;
}
$sql ="INSERT INTO giohang(id_sp,ten_sp,soluong,hinhanh,danhmuc,taikhoan,gia) VALUES ('$idsp', '$tensp', '$sl', '$hinhanh','$danhmuc', '$tk','$gia')";
	if (mysqli_query($con,$sql)) {
		echo $sl;
		$_SESSION['id_sp'] = $idsp;
	}
	else{
		echo"Error".mysqli_error($con);
	}
?>