<!DOCTYPE html>
<html>
<head>
	<title>sửa sản phẩm</title>
</head>
<body><?php $MaLoai= $_GET['MaLoai']; ?>
<form name="sualsp" method="post" action="xuly.php">
	<input type="hidden" name="maloai" value="<?php echo $MaLoai; ?>">
<label for="s_lsp1">Nhập lại mã loại sản phẩm:</label>
<input type="text" name="sua_mlsp" id="s_lsp1"><br/><br/>
<label for="s_lsp2">Nhập lại tên loại sản phẩm:</label>
<input type="text" name="sua_lsp" id="s_lsp2">
<input type="submit" name="gui_suasp" value="Cập nhật">
</form>
</body>
</html>