<!DOCTYPE html>
<html>
<head>
	<title>sửa sản phẩm</title>
</head>
<body>
	<?php 
	include('../../csdl.php'); 
	$MaLoai= $_GET['MaLoai'];
	$sl="select * from loaisp where MaLoai=$MaLoai";
	$kq=mysqli_query($link,$sl);
	$d1=mysqli_fetch_array($kq);

	 ?>
<form name="sualsp" method="post" action="xuly.php">
	<input type="hidden" name="maloai" value="<?php echo $MaLoai; ?>" >
<label for="s_lsp1">Mã loại sản phẩm:</label>
<input type="text" name="sua_mlsp" id="s_lsp1" value="<?php echo $MaLoai ?>"required="required" disabled><br/><br/>
<label for="s_lsp2">Nhập lại tên loại sản phẩm:</label>
<input type="text" name="sua_lsp" id="s_lsp2" value="<?php echo $d1['TenLoai'] ?>"required="required">
<input type="submit" name="gui_suasp" value="Cập nhật">
</form>
</body>
</html>