<?php
session_start();
require 'connect.php';
$limit = 6;
$output = '';
$i = 0; 
$sql = "SELECT * FROM sanpham ORDER BY FLOOR(RAND()*(6-$i+1)+$i) LIMIT $limit";  

while ($i < 12) {


 $result = mysqli_query($con, $sql);  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
  $output .= '  
  <div class="row mt-4">
  '; 
  while($row = mysqli_fetch_array($result))

  { 

   $output .= '
   <div class="card col" style="width: 15%;"><a name="idsp" href="sanpham.php?id='.$row["id_sp"].'">
   <img class="card-img-top" src="img/'.$row["danhmuc"].'/'.$row["hinhanh"].'" alt="Card image cap">
   <div class="card-body">
   <h5 class="card-title">'.$row["ten_sp"].'</h5>
   <p class="card-text">'.$row["gia"].'đ</p>
   </div></a>
   </div>

   '; 
   $i++;
 }  
 $output .= '  
 </div>';
}    
} 
echo $output;  
 ?>