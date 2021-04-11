<?php 
session_start();
?>
<?php 
require 'connect.php';
$output = '';  
$sql = "SELECT * FROM khachhang";  
$result = mysqli_query($con, $sql);  
$output .= '<form action="">
'; 
$rows = mysqli_num_rows($result);
if($rows > 0)  
{  
  while($row = mysqli_fetch_array($result))

  {  
   $output .= '  
   Họ tên <input type="text" class="form-control mt-2" data-id1="'.$row["ID"].'" name="" value="'.$row["hoten"].'" >
   <p class="mt-3">Năm Sinh </p><input type="text" class="form-control mt-2" data-id1="'.$row["ID"].'" name="" value="'.$row["namsinh"].'">
   <p class="mt-3">Địa chỉ </p><input type="text" class="form-control" data-id1="'.$row["ID"].'" name="" value="'.$row["diachi"].'">
   <input type="submit" class="btn btn-mainblue mt-3 mb-3" id="luu" name="" value="Lưu">
   ';  
 }
}   
$output .= '</form>';  
echo $output;
?>