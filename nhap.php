$(document).ready(function(){
			function registration() {
				var ht = $("#ht").val();
				var ns = $("#ns").val();
				var dc = $("#dc").val();
				var tk = $("#tk").val();
				var mk = $("#mk").val();
				var mk2 = $("#mk2").val();
				if()
				$.ajax({
					url : 'xuly/registration.php',
					type : 'POST',
					dataType :'JSON',
					data : {
						hoten : ht,
						namsinh : ns,
						diachi : dc,
						taikhoan : tk,
						matkhau : mk,
						matkhau_2 : mk2,
					},
					success : function (data){
						$('#notice').html("bạn đã đăng ký thành công");
					},
				});
				
			}
		});
<div class="discount mt-4">
			GIẢM GIÁ:
			<hr>
			<div class="row mt-2">
				<div class="card col" style="width: 15%;">
					<img class="card-img-top" src="img\a\1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Áo tay dài HBO</h5>
						<p class="card-text">120.000đ</p>
						&#9733; &#9733; &#9733; &#9733; &#9734;
					</div>
				</div>
				<div class="card col ml-3" style="width: 15%;">
					<img class="card-img-top" src="img\a\1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Áo tay dài HBO</h5>
						<p class="card-text">120.000đ</p>
						&#9733; &#9733; &#9733; &#9733; &#9734;
					</div>
				</div>
				<div class="card col ml-3" style="width: 15%;">
					<img class="card-img-top" src="img\a\1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Áo tay dài HBO</h5>
						<p class="card-text">120.000đ</p>
						&#9733; &#9733; &#9733; &#9733; &#9734;
					</div>
				</div>
				<div class="card col ml-3" style="width: 15%;">
					<img class="card-img-top" src="img\a\1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Áo tay dài HBO</h5>
						<p class="card-text">120.000đ</p>
						&#9733; &#9733; &#9733; &#9733; &#9734;
					</div>
				</div>
				<div class="card col ml-3" style="width: 15%;">
					<img class="card-img-top" src="img\a\1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Áo tay dài HBO</h5>
						<p class="card-text">120.000đ</p>
						&#9733; &#9733; &#9733; &#9733; &#9734;
					</div>
				</div>
				<div class="card col ml-3" style="width: 15%;">
					<img class="card-img-top" src="img\a\1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Áo tay dài HBO</h5>
						<p class="card-text">120.000đ</p>
						&#9733; &#9733; &#9733; &#9733; &#9734;
					</div>
				</div>

			</div>
			<div class="row mt-4">
				<div class="card col" style="width: 15%;">
					<img class="card-img-top" src="img\a\1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Áo tay dài HBO</h5>
						<p class="card-text">120.000đ</p>
						&#9733; &#9733; &#9733; &#9733; &#9734;
					</div>
				</div>
				<div class="card col ml-3" style="width: 15%;">
					<img class="card-img-top" src="img\a\1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Áo tay dài HBO</h5>
						<p class="card-text">120.000đ</p>
						&#9733; &#9733; &#9733; &#9733; &#9734;
					</div>
				</div>
				<div class="card col ml-3" style="width: 15%;">
					<img class="card-img-top" src="img\a\1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Áo tay dài HBO</h5>
						<p class="card-text">120.000đ</p>
						&#9733; &#9733; &#9733; &#9733; &#9734;
					</div>
				</div>
				<div class="card col ml-3" style="width: 15%;">
					<img class="card-img-top" src="img\a\1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Áo tay dài HBO</h5>
						<p class="card-text">120.000đ</p>
						&#9733; &#9733; &#9733; &#9733; &#9734;
					</div>
				</div>
				<div class="card col ml-3" style="width: 15%;">
					<img class="card-img-top" src="img\a\1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Áo tay dài HBO</h5>
						<p class="card-text">120.000đ</p>
						&#9733; &#9733; &#9733; &#9733; &#9734;
					</div>
				</div>
				<div class="card col ml-3" style="width: 15%;">
					<img class="card-img-top" src="img\a\1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Áo tay dài HBO</h5>
						<p class="card-text">120.000đ</p>
						&#9733; &#9733; &#9733; &#9733; &#9734;
					</div>
				</div>

			</div>
			<nav aria-label="...">
				<ul class="pagination mt-4 justify-content-center">
					<li class="page-item ">
						<span class="page-link">Previous</span>
					</li>
					<li class="page-item active"><a class="page-link" href="#">1</a></li>
					<li class="page-item ">
						<span class="page-link">
							2
							<span class="sr-only">(current)</span>
						</span>
					</li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>

		</div>
