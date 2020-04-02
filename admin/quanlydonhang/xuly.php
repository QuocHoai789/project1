<?php
include('../../csdl.php');
$id=$_GET['ID'];
$mact=$_GET['mact'];
$sql="select * from hoadon,chitiethd where hoadon.MaHD=chitiethd.MaHD and MaChiTiet=$mact";
$kq=mysqli_query($link,$sql);
$d=mysqli_fetch_array($kq);
$tt=$d['trangthai'];
// echo "<pre>";
// print_r($d);
// echo "</pre>";
if ($tt==0 ){
	$sql2="update chitiethd set trangthai=1 where MaChiTiet='$mact'";//lỗi chỗ này
	$kq1=mysqli_query($link,$sql2);
	if ($kq1==true) {
		$sql3="select * from chitiethd where MaHD=$id";
		$kq3=mysqli_query($link,$sql3);
		$d3=mysqli_fetch_array($kq3);
		$sl_ban=$d3['SoLuong'];
		$masp=$d3['MaSp'];
		$sql4="select * from sanpham where MaSp=$masp";
		$kq4=mysqli_query($link,$sql4);
		$d4=mysqli_fetch_array($kq4);
		$sl_sauban=$d4['SoLuongTonKho']-$sl_ban;
		$soluotmua=$d4['SoLuotMua'] +1;
		$sql5="update sanpham set SoLuongTonKho=$sl_sauban, SoLuotMua=$soluotmua where MaSp=$masp ";
		$kq5=mysqli_query($link,$sql5);
	}
	header("location:http://localhost:81/do_an_web1/admin/quantri.php?key=QLDH");
}
if ($tt==1) {
	$sql1="update chitiethd set trangthai=2 where MaChiTiet='$mact'";
	$kq1=mysqli_query($link,$sql1);
	header("location:http://localhost:81/do_an_web1/admin/quantri.php?key=QLDH");
}

?>