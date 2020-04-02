<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản Trị</title>
	<link rel="stylesheet" type="text/css" href="quantri/quantri.css">
</head>
<body>
	<?php
	include('../csdl.php');
	$sl="select * from user where role=2";
	$kq=mysqli_query($link,$sl);
	$d1=mysqli_fetch_array($kq);
	?>
	<div id="khung">
		<div id="tren">
			<h3> Xin chào: <?php if(isset($_SESSION['adminname'])){ echo $_SESSION['adminname'];}else{echo'Đăng nhập';}  ?></span> <a style="float: right; margin-right: 30px; color: #712323;" href="../xuly1.php?a" onclick="return confirm('Bạn có chắc chắn muốn đăng xuất ?');"> Đăng xuất</a></h3>
		</div>
		<div id="list">
			<?php  
			include('quantri/list.php')
			 ?>
		</div>
		<div id="main">
			<?php
			if(isset($_GET['key'])){
				switch($_GET['key']){
					case "QLL":
						include("loaisp/quanly_lsp.php");
						break;
					case "SP":
					 	include("sanpham/quanly_sp.php");
						break;
					case "User":
					 	include("user/quanlyuser.php");
						break;
					case 'tt':
						include('tin/quanlitin.php');
						break;
					case 'QLDH':
						include('quanlydonhang/quanlydh.php');
						break;
					case 'TC':?>
					<a href="../trangchu.php">Quay về trang chủ</a>
					<?php break;
				}
			}
			else
				include_once("quantri.php");
		?>
		</div>
	</div>

</body>
</html>