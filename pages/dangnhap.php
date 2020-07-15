<!DOCTYPE html>
<html>
<head>
	<?php session_start();
	include('detail-page/csdl.php');
	?>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/dangnhap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<title>Đăng nhập</title>
	
</head>
<body>
	<div id="dangnhap" class="form" >

		<img src="../hinhanh/user.png" width="80" height="80" class="img-user" >

		<div class="dong" onclick="thoat()" >
			<span >&times;</span>
		</div>

		<h1 style="text-align: center;color: white">Đăng nhập</h1>
        <?php
        if(isset($_GET['sl'])){
        	
        	echo'<p style="color:red;text-align:center" >Tên đăng nhập hoặc mật khẩu không khớp. </p>';
        }

        ?>
		<div class="infor">
			<form name="login" action="detail-page/xulydangnhap.php" method="post"  >
				<p>Tên người dùng:</p>
				<input  type="text" name="fullname" placeholder="Nhập vào tên của bạn" required="required" value="<?php if(isset($fullname)) 
				echo $fullname ?>">
				<p>Mật khẩu:</p>
				<input type="password" name="password" placeholder="Nhập vào mật khẩu của bạn" required="required" value="<?php if(isset($password)) echo $password ?>">
				<input type="submit" name="dangnhap" value="Đăng nhập"><br/>

			</form>
			<p style="text-align: center;" >Bạn chưa có tài khoản ?<a href="dangky.php"><button style="height: 40px;width: 90px;color: black" >Đăng ký</button></a></p>
			<a href="trangchu.php"><button  style="width: 280px;text-align: center;padding: 7px;color: black;font-weight: bold;margin-left: 50px;">Về trang chủ</button></a>
		</div>
	</div>
</body>
</html>