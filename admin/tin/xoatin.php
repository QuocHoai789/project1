<?php
	include('../../csdl.php'); 
	$xoa_matin=$_GET['MaTin'];
	$sql3="delete from tintuc where MaTin='$xoa_matin'";
	$kq3=mysqli_query($link,$sql3);
	header('location:http://localhost:81/do_an_web/admin/quantri.php?key=tt');
?>