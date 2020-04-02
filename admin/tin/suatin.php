<!DOCTYPE html>
<html>
<head>
	<title>Sửa tin</title>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="../../ckeditor/ckeditor.js"></script>
	<script src="../../ckeditor/ckfinder/ckfinder.js"></script>
</head>
<body>
	<?php
	include('../../csdl.php');
	if(isset($_GET['MaTin'])) {
			$matin=$_GET['MaTin'];
			$sl="select * from tintuc where MaTin=$matin";
			$kq=mysqli_query($link,$sl);
			$d1=mysqli_fetch_array($kq);			
}
	?>
	<form name="suatin" method="post" action="xuly.php" enctype="multipart/form-data">
		<input type="hidden" name="MaTin" value="<?php echo $matin?>">
		<p>
			<label for="tieude" > Tiêu đề bài viết: </label>
			<input size="70" type="text" name="suatieude" id="tieude" value="<?php echo($d1['TieuDe']);?>"required="required">
		</p>
		<p>
			<label for="hinh"> Hình:  </label>
			<input type="file" name="hinhanh" id="hinhanh" required="required">
		</p>
		<p>
			<label for="noidung"> Nội dung: </label>
			<textarea name="suanoidung" id="noidung" required="required" ><?php echo($d1['NoiDung']);?></textarea>
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
			<input type="submit" name="gui_suatin" value="Cập nhật">
		</p>

	</form>

</body>
</html>