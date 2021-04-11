<?php
require 'connect.php';
session_start();
$tk = $_SESSION['taikhoan'];
if ($tk =="") {
	echo "đéo có";
}
?>