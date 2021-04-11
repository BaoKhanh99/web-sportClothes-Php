<?php 
require 'xuly\connect.php';
session_start();
error_reporting(0);
$tk = $_SESSION['taikhoan'];
$ht = $_SESSION['hoten'];
$hide = "";
$hide2 = "hide";
if ($tk!="") {
	$hide2 = "";
	$hide = "hide";
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<title>Trang Chủ</title>
</head>
<body>
	<div class="container" >
		<div class="fixed-top">
			<div class="row">
				<div class="col-8 bg-mainblue"></div>
				<div class="col-4 bg-mainblue text-center ">
					<a class="a dk text-dark <?php echo $hide; ?>" href="#"style="text-decoration: none;" data-toggle="modal" data-target="#dk">Đăng ký  </a>
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
						<a href="#" id="shop">
							<img src="img\shop1.png" class="shop" width="40%">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="space"></div>
				<div class="space2"></div>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img\poster\pt1.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img\poster\pt2.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img\poster\pt3.jpg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="menu mt-4">
			DANH MỤC:
			<div class="row mt-3">
				<div class="card col"><a href="danhmuc.php?danhmuc=Barca">
					<img class="card-img-top" src="img\barca\logo.jpg" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center">Áo Barca</p>
					</div></a>
				</div>
				<div class="card col"><a href="danhmuc.php?danhmuc=real">
					<img class="card-img-top" src="img\real\logo.jpg" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center">Áo Real</p>
					</div></a>
				</div>
				<div class="card col" style="width: 18rem;"><a href="danhmuc.php?danhmuc=ManUnited">
					<img class="card-img-top" src="img\ManUnited\logo.jpg" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center">Áo M.U</p>
					</div></a>
				</div>
				<div class="card col" style="width: 18rem;"><a href="danhmuc.php?danhmuc=ManCity">
					<img class="card-img-top" src="img\ManCity\logo.jpg" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center">Áo M.C</p>
					</div></a>
				</div>
				<div class="card col" style="width: 18rem;"><a href="danhmuc.php?danhmuc=arsenal">
					<img class="card-img-top" src="img\arsenal\logo.jpg" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center">Áo Arsenal</p>
					</div></a>
				</div>
				<div class="card col"><a href="danhmuc.php?danhmuc=PSG">
					<a href="">
					<img class="card-img-top" src="img\psg\logo.jpg" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center">Áo PSG</p>
					</div></a>
					</a>
				</div>
				<div class="card col"><a href="danhmuc.php?danhmuc=Juventus">
					<img class="card-img-top" src="img\Juventus\logo.jpg" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center">Áo Juventus</p>
					</div></a>
				</div>
			</div>
		</div>
		<div class="product mt-5">
			GỢI Ý HÔM NAY
			<hr>
			<div id="product"></div>
		</div>
		<div class="discount mt-4">
			GIẢM GIÁ:
			<hr>
			<div id="discount"></div>
		</div>
		
		<div class="notice"></div>
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

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){  
		function fetch_data()  
		{ 
			$.ajax({  
				url:"xuly/suggestion.php",  
				method:"POST",  
				success:function(data){  
					$('#product').html(data);  
				}  
			});  
		}  
		fetch_data();  
	});  
	$(document).ready(function(){
		$("#dk_btn").click(function(){
			var ht = $("#ht").val();
			var ns = $("#ns").val();
			var dc = $("#dc").val();
			var tk = $("#tk").val();
			var mk = $("#mk").val();
			var mk2 = $("#mk2").val();
			if (ht == "") {
				alert("Bạn chưa nhập tên");
			}
			else if (ns == "") {
				alert("Bạn chưa nhập năm sinh");
			}
			else if (dc == "") {
				alert("Bạn chưa nhập địa chỉ");
			}
			else if (tk == "") {
				alert("Bạn chưa nhập tài khoản");
			}
			else if (mk == "") {
				alert("Bạn chưa nhập mật khẩu");
			}
			else if (mk2 != mk) {
				alert("Mật khẩu không giống nhau");
			}
			else{
				$.ajax({
					url : 'xuly/registration.php',
					type : 'POST',
					data : {
						ht : ht,
						ns : ns,
						dc : dc,
						tk : tk,
						mk : mk,
					},
					success : function (result){	
					},
				});
				alert("Bạn đã đăng ký thành công");
			}
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
	$(document).ready(function(){  
		function fetch_data2()  
		{  
			$.ajax({  
				url:"xuly/discount.php",  
				method:"POST",  
				success:function(data){  
					$('#discount').html(data);  
				}  
			});  
		}  
		fetch_data2();  
	}); 
</script>