	<?php
	include('../../csdl.php');
	$xoa_masp=$_GET['MaSp'];
	$sql3="delete from sanpham where MaSp='$xoa_masp'";
	$kq3=mysqli_query($link,$sql3);
	header('location:http://localhost:81/do_an_web/admin/quantri.php?key=SP');
		?>