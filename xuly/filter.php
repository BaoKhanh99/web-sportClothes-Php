<?php
require 'connect.php';
$output = '';
$limit = 6;
$l = 0;
$tu = $_POST['tu'];
$den = $_POST['den'];
for ($i=0; $i <2 ; $i++) { 
	$output .='<div class="row mt-4">';
	$query = "SELECT * FROM sanpham WHERE gia BETWEEN $tu AND $den UNION SELECT * FROM sanpham LIMIT $l,$limit  ";
	$sql = mysqli_query($con,$query);
	$num = mysqli_num_rows($sql);
	if ($num > 0) 
	{
		while ($row = mysqli_fetch_assoc($sql)) {
			$output .= '
			<div class="card col" style="width: 15%;">
			<img class="card-img-top" src="img/'.$row["danhmuc"].'/'.$row["hinhanh"].'" alt="Card image cap">
			<div class="card-body">
			<h5 class="card-title">'.$row["ten_sp"].'</h5>
			<p class="card-text">'.$row["gia"].'đ</p>
			</div>
			</div>
			'; 
		}
	}
	$l = $l+6;
	$output .= '  
	</div>';
}
echo $output;
 ?>