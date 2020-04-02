<?php
include('csdl.php');
$id=$_GET['ID'];
echo $sql="select * from hoadon where MaHD=$id";
$kq=mysqli_query($link,$sql);
$d=mysqli_fetch_array($kq);
$tt=$d['TinhTrang'];
if ($tt==0) {
	$sql2="update hoadon set TinhTrang=3 where MaHD=$id";
	mysqli_query($link,$sql2);
	header("location:http://localhost:81/do_an_web1/ttdonhang.php");
}if ($tt==1) {
	$sql3="update hoadon set TinhTrang=3 where MaHD=$id";
	$kq1=mysqli_query($link,$sql3);
	if ($kq1==true) {
		$sql4="select * from chitiethd where MaHD=$id";
		$kq4=mysqli_query($link,$sql4);
		$d4=mysqli_fetch_array($kq4);
		echo $slsp=$d4['SoLuong'];
		$masp=$d4['MaSp'];
		$sql5="select * from sanpham where MaSp=$masp";
		$kq5=mysqli_query($link,$sql5);
		$d5=mysqli_fetch_array($kq5);
		$sl_sauhuy=$d5['SoLuongTonKho']+$slsp;
		$sql6="update sanpham set SoLuongTonKho=$sl_sauhuy where MaSp=$masp ";
		mysqli_query($link,$sql6);
	}
}
	header("location:http://localhost:81/do_an_web1/ttdonhang.php");
  ?>