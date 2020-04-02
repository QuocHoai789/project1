//xóa...
<?php
	include('../../csdl.php');
	$xma_lsp=$_GET['MaLoai'];
	$sql5="delete from sanpham where MaLoai='$xma_lsp'";
	$sql3="delete from loaisp where MaLoai='$xma_lsp'";
	$kq5=mysqli_query($link,$sql5);
	$kq3=mysqli_query($link,$sql3);
	header('location:http://localhost:81/do_an_web/admin/quantri.php?key=QLL');
?>