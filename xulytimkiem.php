<?php
include("csdl.php");
// Nhập giá trị number bằng phương thức post
$number = isset($_POST['number']) ? $_POST['number'] : false;
 
// Kiểm tra number có lớn hơn không hay không
if (!$number){
    die ('<h1>Vui lòng nhập một số lớn hơn không (0)</h1>');
}
 
// Lặp từ 1 tới number để in ra màn hình
$sql="select * from sanpham where TenSp like '%$number%'";
$kq=mysqli_query($link,$sql);
$sl=mysqli_num_rows($kq);
if($sl==0){
	echo "<p style='color:red;text-align:center;font-size:20px'>Không tìm thấy sản phẩm!!!</p>";
}
while ($d=mysqli_fetch_array($kq)) {
	var_dump($d);
}
?>