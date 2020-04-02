
<?php
require_once("../../csdl.php");
if(isset($_POST['gui_themlsp'])){
	$ma_lsp=$_POST['ma_lsp'];
	$ten_lsp=$_POST['ten_lsp'];
	$sql="insert into loaisp(TenLoai) values('$ten_lsp')
	";
	$kq=mysqli_query($link,$sql);
	header('location:http://localhost:81/do_an_web/admin/quantri.php?key=QLL');
}

//sửa.....
if(isset($_POST['gui_suasp'])){
	$MaLoai=$_POST['maloai'];
	$sua_mlsp=$_POST['sua_mlsp'];
	$sua_lsp=$_POST['sua_lsp'];
	 $sql2="update  loaisp set TenLoai='$sua_lsp' where MaLoai='$MaLoai'";
	$kq=mysqli_query($link,$sql2);
	header('location:http://localhost:81/do_an_web/admin/quantri.php?key=QLL');
}

