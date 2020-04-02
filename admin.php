<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<?php session_start();
	include('csdl.php');
	?>
	<?php
	if(isset($_SESSION['role'])){
		$role=$_SESSION['role'];
		if($role!=2){
		echo'Bạn không đủ thẩm quyền truy cập trang này';
		header('location:dangnhap.php');
		}
		else{
			echo'Chào mừng admin ';
		}
	}
	else{
	header('location:dangnhap.php');
	}
	?>
</body>
</html>