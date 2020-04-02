<!DOCTYPE html>
<html>
<head>
	<title>Xóa User</title>
</head>
<body>
	<?php
	include('../../csdl.php');
		if(isset($_GET['ID'])) {
			$ID=$_GET['ID'];
			$sl="select * from user where ID=$ID";
			$kq=mysqli_query($link,$sl);
			$d1=mysqli_fetch_array($kq);
		}
	?>	
	<form name="xoa" action="xuly.php" method="post" >
		<input type="hidden" name="ID" value="<?php echo $ID?>">
	<label for="tk">Tài Khoản</label>
	<input type="text" name="xoa_tk" id="tk" value="<?php echo $d1['Username'] ; ?>" disabled>
	<input type="submit" name="gui_xoaus" value="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản <?php echo $d1['Username']; ?> này?')">

</body>
</html>