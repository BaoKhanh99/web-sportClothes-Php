<?php 
session_start();
require 'xuly/connect.php';
$output = '';
if (isset($_SESSION['taikhoan'])) {
	$tk = $_SESSION['taikhoan'];
	$sql = "SELECT * FROM giohang WHERE taikhoan = '$tk'";
	$result = mysqli_query($con, $sql);  
	$rows = mysqli_num_rows($result);
	if($rows > 0)  
	{  
		$output .= '  

		'; 
		while($row = mysqli_fetch_array($result))

		{ 
			$output .= '
			<div class="row mt-1 bg-account">
			<div class="col-3 text-center">
			<img src="img/'.$row["danhmuc"].'/'.$row["hinhanh"].'" width="35%" >
			</div>
			<div class="col-3 text-center mt-auto mb-auto">
			'.$row["ten_sp"].'
			</div>
			<div class="col-3 text-center mt-auto mb-auto">
			'.$row["soluong"].'
			</div>
			<div class="col-3 text-center mt-auto mb-auto">
			'.$row["gia"].'
			</div>
			</div>
			'; 
		}  
	}
}
else{

}
$hide = "";
$hide2 = "hide";
if (isset($_SESSION['taikhoan'])) {
	$tk = $_SESSION['taikhoan'];
	$ht = $_SESSION['hoten'];
	$hide = "hide";
	$hide2 = "";
}
else{
	$tk = "";
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
	<title>Giỏ Hàng</title>
</head>
<body>
	<div class="container-fluid" >
		<div class="">
			<div class="row">
				<div class="col-8 bg-mainblue"></div>
				<div class="col-4 bg-mainblue text-center ">
					<a class="a dn text-dark <?php echo $hide ; ?>" href="#"style="text-decoration: none;" data-toggle="modal" data-target="#dn">Đăng nhập</a>				
					<a class="a text-dark dropdown-toggle <?php echo $hide2; ?>" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $ht; ?>
					</a>

					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="profile.php">Tài Khoản Của Tôi</a>
						<a class="dropdown-item" href="xuly/logout.php">Đăng xuất</a>
					</div>

				</div>

			</div>
			<div class="row bg-white">
				<div class="col-2"><a href="index.php"><img class="ml-5 mt-2" src="img\logo.png" width="70%"></a></div>
				<b class="text-center mt-4 ">| GIỎ HÀNG</b>
			</div>
			<hr>
		</div>
		<div class="">
			<div class=" bg-account row mb-3">
				<div class="col-3 text-center">
					Sản Phẩm
				</div>
				<div class="col-3 text-center">
					tên sản phẩm
				</div>
				<div class="col-3 text-center ">
					Số Lượng
				</div>
				<div class="col-3 text-center ">
					Thành Tiền
				</div>
			</div>
			<?php echo $output; ?>
			<div class="row justify-content-end" >
				<div class="col-2">
					<input type="submit" class="btn btn-lg bg-mainblue text-white mt-4" onclick="getConfirmation();" value="Mua" >
				</div>
			</div>		
		</div>
	</div>
	<div class="container-fluid mt-4" >
		<div class="bg-gray mr-7" style="width: 100%;">
			<div class="row footer ">
				<div class="col text-dark mt-5" style="text-decoration: none;">
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
				<div class="col text-dark mt-5" style="text-decoration: none;">
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
				<div class="col text-dark mt-5" style="text-decoration: none;">
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
				<div class="col text-dark mt-5" style="text-decoration: none;">
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
<script type="text/javascript">
	function getConfirmation(){
		var retVal = confirm("Bạn có chắc muốn đặt số hàng này?");
		if( retVal == true ){
			$.ajax({
				url: "xuly/xlmua.php",
				success: function(result){
					alert("Đặt hàng thành công ");
					location.href = 'cart.php';
				}});
			return true;	
		}
		else{
			return false;
		}
	}
         //-->
</script>