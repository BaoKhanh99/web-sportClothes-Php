<?php 
session_start();
$tk = $_SESSION['taikhoan'];
$ht = $_SESSION['hoten'];
require 'connect.php';
$sql = "DELETE FROM giohang WHERE taikhoan = '$tk'";
$result = mysqli_query($con, $sql);
?>