<!DOCTYPE html>
<html>
<head>
	<title>Quản lí tin tức</title>
	<style type="text/css">
		td a{
		 color: blue;
		}
		th a{
		 color: blue;
		}
	</style>
</head>
<body>
	<?php
	include('../csdl.php');
	$sql="select * from tintuc";
	$kq=mysqli_query($link,$sql);
	?>
	<caption ><h1 style="text-align: center;">Quản Lý Tin Tức</h1></caption>
	<table width="1090" height="400" border="1" align="center"  >
		<tr>
			<th>ID</th>
			<th>Tiêu đề</th>
			<th>Nội dung</th>
			<th>Hình ảnh</th>
			<th><a href="http://localhost:81/do_an_web/admin/tin/themtin.php">Thêm</a></th>
		</tr>
		<?php
		while ($d=mysqli_fetch_array($kq)) { ?>
			<tr>
				<td><?php echo $d['MaTin']; ?></td>
				<td><?php echo $d['TieuDe']; ?></td>
				<td><?php echo $d['NoiDung']; ?></td>
				<td><img width="100" height="100"src="/do_an_web/<?php echo($d['HinhAnh'])?>"></td>
				<td width="70"><a href="http://localhost:81/do_an_web/admin/tin/suatin.php?MaTin=<?php echo $d['MaTin']; ?>" >sửa</a><span> | </span><a href="http://localhost:81/do_an_web/admin/tin/xoatin.php?MaTin=<?php echo $d['MaTin']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa loại sản phẩm này')" >xóa</a></td>
			</tr>
		<?php }?>
</body>
</html>