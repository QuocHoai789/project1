<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="../../ckeditor/ckeditor.js"></script>
</head>
<body>
	<?php
	include('../../csdl.php'); 
	$masp=$_GET['MaSP'];
	$sl="select * from sanpham where MaSp=$masp";
	$kq=mysqli_query($link,$sl);
	$d1=mysqli_fetch_array($kq);
	$maloai = $d1['MaLoai'];
	?>
	<form name="suasp" method="post" action="xuly.php" enctype="multipart/form-data">
		<input type="hidden" name="MaSp" value="<?php echo $masp?>">
		<p>
			<label for="loaisp">Loại sản phẩm:</label>
			<select name="sualoai" id="chonloai">
				<option value="">--Chọn loại sản phẩm--</option>
				<?php
				$sl="select * from loaisp";
				$kq=mysqli_query($link,$sl);
				

				while($d=mysqli_fetch_array($kq))
				{
					
				?>
				<option  value="<?php echo $d['MaLoai'];?>"
					<?php if($d['MaLoai'] == $maloai) echo "selected ='selected'"; ?>><?php echo $d['TenLoai'];?></option>
				<?php } ?>
			</select>
		</p>
		<p>
			<label for="tensp"> Tên sản phẩm: </label>
			<input type="text" name="suaten" id="tensp" value="<?php echo($d1['TenSp']);?>"required="required">
		</p>
		<p>
			<label for="giasp">Giá: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="number" name="suagia" id="giasp"required="required" value="<?php echo($d1['GiaTien']);?>">
		</p>
		<p>
			<label for="soluong">Số lượng: </label>
			<input type="number" name="suasoluong" id="soluong" required="required"value="<?php echo($d1['SoLuongTonKho']);?>">
		</p>
		<p>
			<label for="hinhanh">Hình ảnh: </label>
			<input type="file" name="suahinh" id="hinhanh" required="required">
		</p>
		<p>
			<label for="noidung">Nội dung: </label>
			<textarea name="suanoidung" id="noidung" cols="70" rows="5" required="required"placeholder="Nhập nội dung..." ><?php echo($d1['ThongTin']);?></textarea>
			<script>    CKEDITOR.replace( 'noidung',
				{
					filebrowserBrowseUrl : '../../ckfinder/ckfinder.html',
					filebrowserImageBrowseUrl : '../../ckfinder/ckfinder.html?type=Images',
					filebrowserFlashBrowseUrl : '../../ckfinder/ckfinder.html?type=Flash',
					filebrowserUploadUrl : '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
					filebrowserImageUploadUrl : '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
					filebrowserFlashUploadUrl : '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
				} );</script>
		</p>
		<p>
			<input type="submit" name="gui_suasp" value="Cập nhật">
		</p>
	</form>

</body>
</html>