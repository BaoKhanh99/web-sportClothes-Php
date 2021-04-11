<?php require 'xuly\connect.php';
session_start();
error_reporting(0);
$tk = $_SESSION['taikhoan'];
$ht = $_SESSION['hoten'];
$id = $_SESSION['id'];
$sql = "SELECT * FROM khachhang WHERE ID = '$id'";
$rs = mysqli_query($con, $sql);
if (!$rs) {
	die('Query error: ['. $con ->error .']');
			# code...
}
$row = mysqli_fetch_array($rs, MYSQLI_ASSOC);
if (!$row) {
	die('Không có tài khoản');
}
else{
			//echo $row['Hoten'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="dist\css\bootstrap.css">
	<link rel="stylesheet" href="dist\css\bootstrap2.css">
	<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="dist\js\javascript.js"></script>	
	<script type="text/javascript" src="ajax.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<title>Tài Khoản</title>
</head>
<body>
	<div class="container-fluid " >
		<div class="fixed-top">
			<div class="row">
				<div class="col-8 bg-mainblue"></div>
				<div class="col-4 bg-mainblue text-center ">			
					<a class="a text-dark dropdown-toggle <?php echo $hide2; ?>" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $ht; ?>
					</a>

					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="profile.php">Tài Khoản Của Tôi</a>
						<a class="dropdown-item" href="xuly/logout.php">Đăng xuất</a>
					</div>
				</div>
			</div>
			<div class="row bg-mainblue">
				<div class="col-2"><a href="index.php"><img class="ml-5 mt-2" src="img\logo.png" width="70%"></a></div>
				<div class="col-6 mt-4 pl-3 ">
					<input class="form-control form-control-lg " type="text" placeholder="Tìm Kiếm...">
				</div>
				<div class="col mt-4" >
					<button type="submit" class=" btn btn-sm btn-search"><i class="btn1 fa fa-search"></i></button>
				</div>
				<div class="col-2 mr-3 mb-3 ">
					<div class="shop1-link">
						<a href="cart.php" id="shop">
							<img src="img\shop1.png" class="shop" width="40%">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="space2 "></div>
		<div class="row ">
			<div class="col-2 bg-account ">
				<div class="account mt-3">
					<img src="img\user.jpg" alt="" style="width: 35%;">
					<b><?php echo $ht; ?></b>
				</div>
				<hr>
				<div class="choose ">
					<p><a href="#">Tài Khoản Của Tôi</a></p>
					
				</div>
			</div>
			<div class="col mt-3 bg-white">
				<h5 class="mt-2">Hồ Sơ Của Tôi</h5>
				Quản lý thông tin hồ sơ
				<hr>
				<div class="row">
					<div class="col-9 ">
						<form action="xuly/editprofile.php" method="POST">
							Họ tên <input type="text" class="form-control mt-2	" name="hoten" value="<?php echo $row['hoten']; ?>">
							<p class="mt-3">Năm Sinh </p><input type="text" class="form-control mt-2" name="namsinh" value="<?php echo $row['namsinh']; ?>">
							<p class="mt-3">Địa Chỉ </p><input type="text" class="form-control" name="diachi" value="<?php echo $row['diachi']; ?>">
							<input type="submit" class="btn btn-mainblue mt-3 mb-3" name="luu" value="Lưu">
						</form>
					</div>
					<!-- <div class="col-3 ">
						<img src="img\gray.jpg" class="rounded mx-auto d-block mt-3" alt="" width="50%">
						<input type="submit" class="btn btn-default btnca mt-3" name="" value="Chọn Ảnh">
						<p class="text-center">Chọn ảnh định dạng JPG,JPEG</p>
					</div> -->
				</div>
			</div>

		</div>

	</div>
	<div class="" >
		<div class="bg-gray" style="width: 100%;">
			<div class="row footer ">
				<div class="col text-dark mt-4" style="text-decoration: none;">
					<ul><p>CHĂM SÓC KHÁCH HÀNG</p>

						<li>
							<a href="#">Hướng dẫn mua hàng</a>
						</li>
						<li>
							<a href="#">Vận chuyển</a>
						</li>
						<li>
							<a href="#">Trả hàng & hoàn tiền</a>
						</li>
						<li>
							<a href="#">Chính sách bảo hành</a>
						</li>
					</ul>
				</div>
				<div class="col text-dark mt-4" style="text-decoration: none;">
					<ul><p>THÔNG TIN VỀ SHOP</p>
						<li>
							<a href="about.html">Giới thiệu về KHS Shop</a>
						</li>
						<li>
							<a href="#">Tuyển dụng</a>
						</li>
						<li>
							<a href="#">Điều khoản</a>
						</li>
						<li>
							<a href="#">Chính sách bảo mật</a>
						</li>
						<li>
							<a href="#">Chính hãng</a>
						</li>
						<li>
							<a href="#">Flash sale</a>
						</li>
					</ul>
				</div>
				<div class="col text-dark mt-4" style="text-decoration: none;">
					<ul><p>THANH TOÁN</p>
						<li>
							<img src="img\visa.png" alt="" width="20%">
							<img src="img\mastercard.png" alt="" width="20%">
						</li>

					</ul>
					<ul><p>ĐƠN VỊ VẬN CHUYỂN</p>
						<li>
							<img src="img\Nasco.png" alt="" width="30%">
							<img src="img\giaohangnhanh.png" alt="" width="30%">
						</li>
						<br>
						<li>
							<img src="img\viettel-post.png" alt="" width="50%">

						</li>

					</ul>
				</div>
				<div class="col text-dark mt-4" style="text-decoration: none;">
					<ul><p>THEO DÕI CHÚNG TÔI TRÊN</p>
						<li>
							<a href="#">Facebook</a>
						</li>
						<li>
							<a href="#">Instagram</a>
						</li>
						<li>
							<a href="#">Zalo</a>
						</li>
					</ul>
				</div>
				<div class="col-10 text-center bg-dgray ml-auto mr-auto">
					<p>Địa chỉ: 123 Nam Kỳ Khởi nghĩa, phường Hòa Qúy, quận Ngũ Hành Sơn, TP.Đà Nẵng</p>
					<p>Tổng đài hỗ trợ: 19000099</p>
					<p>Email: kshshop@gmail.com</p>
					<p>© 2019 - Bản quyền thuộc về KSH Shop</p>

				</div>
			</div>
			
			
		</div>

	</div>	
</body>
</html>