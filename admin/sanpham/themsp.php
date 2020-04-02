<?php
 include('../../csdl.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="../../ckeditor/ckeditor.js"></script>
	<style type="text/css">
		*{
			margin: 5px;
			padding: 2px;
		}
		input:valid {
    		border-color: #ccc;
		}
	</style>
</head>
<body>
	<?php
	include('../../csdl.php');
	 ?>
	<form name="themsp" method="post" action="xuly.php" enctype="multipart/form-data">
		<p>
			
			<label for="loaisp">Loại sản phẩm:</label>
			<select name="chonloai" id="chonloai" >
				<option value="">--Chọn loại sản phẩm--</option>
				<?php
				$sl="select * from loaisp";
				$kq=mysqli_query($link,$sl);
				$tam=0;
				while($d=mysqli_fetch_array($kq))
				{
					if($tam==0) $tam=$d['MaLoai'];
				?>
				<option value="<?php echo $d['MaLoai'];?>">
					<?php echo $d['TenLoai'];?></option>
				<?php } ?>
			</select>
		</p>
		<p>
			<label for="tensp"> Tên sản phẩm: </label>
			<input type="text" name="tensp" id="tensp" required="required">
		</p>
		<p>
			<label for="giasp">Giá: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="number" name="giasp" id="giasp"required="required">
		</p>
		<p>
			<label for="soluong">Số lượng: </label>
			<input type="number" name="soluong" id="soluong"required="required">
		</p>
		<p>
			<label for="hinhanh">Hình ảnh: </label>
			<input type="file" name="hinhanh" required="required">
		</p>
		<p>
			<label for="noidung">Nội dung: </label>
			<textarea name="noidung" id="noidung" cols="70" rows="5" placeholder="Nhập nội dung..." required="required"></textarea>
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
			<button name="gui_themsp" value="Thêm">Thêm</button>
		</p>
	</form>
</body>
</html>