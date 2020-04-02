<!DOCTYPE html>
<html>
<head>
	<title>Thêm tin</title>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="../../ckeditor/ckeditor.js"></script>
	<script src="../../ckeditor/ckfinder/ckfinder.js"></script>
</head>
<body>
	<?php
	include('../../csdl.php');
	?>
	<form name="themtin" method="post" action="xuly.php" enctype="multipart/form-data">
		<p>
			<label for="tensp"> Tiêu Đề bài viết: </label>
			<input type="text" name="tieude" id="tieude" required="required">
		</p>
		<p>
			<label for="hinh"> Hình: </label>
			<input type="file" name="hinhanh" id="hinhanh" required="required">
		</p>
		<p>
			<label for="tensp"> Nội dung: </label>
			<textarea name="noidung" id="noidung" required="required" cols="70" rows="5"></textarea>
			<script>  var editor=  CKEDITOR.replace( 'noidung',
				{
					filebrowserBrowseUrl : '../../ckfinder/ckfinder.html',
					filebrowserImageBrowseUrl : '../../ckfinder/ckfinder.html?type=Images',
					filebrowserFlashBrowseUrl : '../../ckfinder/ckfinder.html?type=Flash',
					filebrowserUploadUrl : '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
					filebrowserImageUploadUrl : '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
					filebrowserFlashUploadUrl : '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
				}
				);
		</script>

		</p>
		<p>
			<input type="submit" name="gui_themtin" value="Thêm">
		</p>
	</form>
</body>
</html>