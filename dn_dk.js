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
			alert(ht+ns);
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
					alert("Bạn đã đăng ký thành công"+result);
				}
			});
			
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
	$(document).ready(function(){
  $("#add_cart").click(function(event){
  	event.preventDefault();
  	var gh = "<?php echo $tk; ?>";
		if (gh =="") {
    		alert("mời bạn đăng nhập trước");
    	}
    	else{
    		sl = $("#soluong").val();
    		datas = sl;
    		$.ajax({url: "xuly/add_cart.php",
    			type: 'GET',
    			data : {sl : datas},
    			success: function(result){
    				alert("Đã thêm vào giỏ hàng thành công "+result+" sản phẩm");
    			}
    		});
    	}
  });
});