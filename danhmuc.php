<?php
require 'xuly/connect.php';
$output = '';
$limit = 6;
$l = 0;
$danhmuc = $_GET['danhmuc'];
for ($i=0; $i <2 ; $i++) { 
	$output .='<div class="row mt-4">';
	$query = "SELECT * FROM sanpham WHERE danhmuc = '$danhmuc' UNION SELECT * FROM sanpham LIMIT $l,$limit  ";
	$sql = mysqli_query($con,$query);
	$num = mysqli_num_rows($sql);
	if ($num > 0 && $danhmuc != "") 
	{
		while ($row = mysqli_fetch_assoc($sql)) {
			$output .= '
			<div class="card col" style="width: 15%;"><a name="idsp" href="sanpham.php?id='.$row["id_sp"].'">
				<img class="card-img-top" src="img/'.$row["danhmuc"].'/'.$row["hinhanh"].'" alt="Card image cap">
				<div class="card-body">
				<h5 class="card-title">'.$row["ten_sp"].'</h5>
				<p class="card-text">'.$row["gia"].'đ</p>
				</div></a>
			</div>
			'; 
		}
	}
	$l = $l+6;
	$output .= '  
	</div>';
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
	<title>Tìm Kiếm</title>
</head>
<body>
	<div class="container-fluid" >
		<div class="">
			<div class="row">
				<div class="col-8 bg-mainblue"></div>
				<div class="col-4 bg-mainblue text-center ">
					<a class="a dk text-dark <?php echo $hide; ?>" href="#"style="text-decoration: none;" data-toggle="modal" data-target="#dk">Đăng ký  </a>
					<a class="a dn text-dark <?php echo $hide ; ?>" href="#"style="text-decoration: none;" data-toggle="modal" data-target="#dn">Đăng nhập</a>				
					<a class="a text-dark dropdown-toggle <?php echo $hide2; ?>" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $ht; ?>
					</a>
				</div>
			</div>
			<div class="row bg-mainblue">
				<div class="col-2"><a href="index.php"><img class="ml-5 mt-2" src="img\logo.png" width="70%"></a></div>
				<div class="col-6 mt-4 pl-3 ">
					<form action="search.php" method="get">
					<input class="form-control form-control-lg " type="text" name="input_search" placeholder="Tìm Kiếm...">
				</div>
				<div class="col mt-4" >
					<button type="submit" class=" btn-sm btn-primary" name="search"><i class="btn1 fa fa-search"></i></button>
				</div>
					</form>
				<div class="col-2 mr-3 mb-3 ">
					<div class="shop1-link">
						<a href="cart.php" id="shop">
							<img src="img\shop1.png" class="shop" width="40%">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-3 mt-4" >
				<h3>BỘ LỌC TÌM KIẾM</h3>
				<hr>
				<div class="category-notice">
					<ul>
						<li>
							<h6>Khoảng giá</h6><form action="" method="POST" id="form_search">
							<input class="form-control mt-2" type="text" name="tu" id="tu" placeholder="Từ" >
							<input class="form-control mt-2" type="text" name="den" id="den" placeholder="đến">
							<div class="button">
								<button class="btn mt-2" id="btn">Áp dụng</button>
							</div>
							</form>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-8 mt-4">
				<div class="product mt-5 " id="iii">
				<hr>
				<?php echo $output; ?>
				</div>
				<div class="product mt5 ops"></div>
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
<div class="modal fade" id="dk" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">ĐĂNG KÝ</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form id="dk_form" method="POST">
						<input type="text" class="form-control " placeholder="Họ Tên" id="ht">
						<input type="text" class="form-control mt-3" placeholder="Năm Sinh" id="ns">
						<input type="text" class="form-control mt-3" placeholder="Địa Chỉ" id="dc">
						<input type="text" class="form-control mt-3" placeholder="Tên Đăng Nhập" id="tk">
						<input type="password" class="form-control mt-3" placeholder="Mật Khẩu" id="mk">
						<input type="password" class="form-control mt-3" placeholder="Nhập Lại Mật Khẩu" id="mk2">
						<div class="modal-footer">
							<input type="submit" class="btn btn-default" name="tl" value="Trở Lại">
							<input type="submit" class="btn btn-mainblue" id="dk_btn" name="dk_btn" value="Đăng Ký">
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
	<div class="modal fade" id="dn" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">ĐĂNG NHẬP</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form action="xuly/login.php" method="POST">
						<input type="text" class="form-control " id="tkdn" placeholder="Tài Khoản" name="taikhoan" required>
						<input type="password" class="form-control mt-3" id="mkdn" placeholder="Mật Khẩu" name="matkhau" required>
						<div class="modal-footer">
							<div class="modal-footer">
								<input type="submit" class="btn btn-default" name="" value="Trở Lại">
								<input type="submit" class="btn btn-mainblue" id="dn_btn" name="dn_btn" value="Đăng Nhập">
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</html> 
<script type="text/javascript">
	$(document).ready(function(){  
		$("#btn").click(function(e){
			e.preventDefault();
			tu = $("#tu").val();
			den = $("#den").val();
			$("#iii").addClass('hide');
			$.ajax({
				url: "xuly/filter.php",
				type: 'POST',
				data : {
					tu : tu,
					den : den,
				},
				success: function(result){
					$("#ops").html(result);
				}});
			return false;
		});
	}); 
	$(document).ready(function(){
		$("#shop").click(function(event){
			event.preventDefault();
			var gh = "<?php echo $tk; ?>";
			if (gh =="") {
				alert("mời bạn đăng nhập trước");
			}
			else{
				location.href = 'cart.php';

			}
		});
	});	
</script>

