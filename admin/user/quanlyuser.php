<!DOCTYPE html>
<html>
<head>
	<title>Quản lý thành viên</title>
	<style type="text/css">
		td a{
		 color: blue;
		}
	</style>
</head>
<body>
	<?php
	include('../csdl.php');
	$sql="select * from user";
	$kq=mysqli_query($link,$sql);
	?>
	<caption ><h1 style="text-align: center;">Quản Lý Sản Phẩm.</h1></caption>
	<table width="1090" height="400" border="1" align="center"  >
		<tr>
			<th>ID</th>
			<th>Họ và Tên</th>
			<th>Email</th>
			<th>Tài Khoản</th>
			<th>Ngày tạo</th>
			<th>Quyền</th>
			<th></th>
		</tr>
		<?php
		while ($d=mysqli_fetch_array($kq)) { ?>
			<tr>
				<td> <?php echo $d['ID'];  ?></td>
				<td> <?php echo $d['HoTen']; ?></td>
				<td> <?php echo $d['Email']; ?></td>
				<td> <?php echo $d['Username']; ?></td>
				<td> <?php echo $d['NgayTao']; ?></td>
				<td> <?php if ($d['role']==1) {
					echo "Thành viên";
				}else { echo "Admin";
				} ?></td>
				<td>
					<?php
					if ($d['ID']==111) {
					echo "";
					}else { ?>
					<a href="http://localhost:81/do_an_web/admin/user/sua.php?ID=<?php echo $d['ID']; ?>" >sửa</a><span> | </span><a href="http://localhost:81/do_an_web/admin/user/xoa.php?ID=<?php echo $d['ID']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này')" >xóa</a><?php }?></td>
			</tr>
		<?php } ?>



</body>
</html>