<?php 
	include('../../csdl.php');
	$mahd=$_GET['ID'];
	$mact=$_GET['mact'];
	$sql5="delete from chitiethd where MaChiTiet='$mact'";
	$sql3="delete from hoadon where MaHD='$mahd'";
	$kq5=mysqli_query($link,$sql5);
	$kq3=mysqli_query($link,$sql3);
	header('location:http://localhost:81/do_an_web1/admin/quantri.php?key=QLDH');
?>