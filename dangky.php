<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		#dangky{
			width: 450px;
			height: 630px;
			border: 1px solid;
			background-color: black;
			margin: auto;
			margin-top: 10px;

		}
		#dangky h1{
			text-align: center;
			color: white;
		}
		#dangky p{
			color: white;
			text-align: center;
		}
		
		#dangky input[type=text],#dangky input[type=password] {
			width: 80%;
			margin-bottom: 10px;
			color: white;
			height: 40px;
			border-bottom: 1px solid #fff;
			margin-left: 50px;
			outline: none;
			background: transparent;

		}
		#dangky input[type=submit]{
			width: 80%;
			;
			height: 40px;
			margin-left:50px;
			margin-top: 20px;
		}
	</style>
	<title>Đăng ký</title>
</head>
<body>
	<div id="dangky"  >
		<!--  <?php include('csdl.php'); ?> -->
		<!-- <div class="dong" onclick="thoat()" >
			<span  >&times;</span>
		</div> -->
		<h1>Đăng ký</h1>

		<?php
		if(isset($_POST['guidk'])){

			$ten=$_POST['hoten'];
			$mail=$_POST['maildk'];
			$username=$_POST['tentk'];
			$password=$_POST['matkhaudk'];
			$rpassword=$_POST['matkhauxn'];
			date_default_timezone_set("Asia/Bangkok");
			$d = date('Y-m-d H:i:s');

			if(strlen($username)<6||strlen($password)<6){
				echo"<p style='color:red;text-align:center'> Tên người dùng và mật khẩu không được nhỏ hơn 6 ký tự</p>";
			}
			else{
				if($password != $rpassword){
					echo"<p style='color:red;text-align:center'> Xác nhận lại mật khẩu</p>";

				}else{
					$sql="select * from user where Username='$username'";
					$kq=mysqli_query($link,$sql);
					$sl=mysqli_num_rows($kq);
					if($sl==0){
						$kq2="insert into user(
						HoTen,
						Email,
						Username,
						Password,
						NgayTao,
						role
						) values 
						( '$ten','$mail', '$username', md5($password) , ' $d','1')";
						mysqli_query($link,$kq2);
						header('location:action.php');
					}
					else{
						echo"<p style='color:red;text-align:center'> Tài khoản đã tồn tại</p>";
					}
				}

			}
		}


		?> 
		<form  name="dangkyf" action="dangky.php" method="post" >

			<p>Họ tên:</p>
			<input  type="text" name="hoten" placeholder="Nhập vào tên của bạn" required="required" value="<?php if(isset($ten)) echo $ten ?>">
			<p>Email:</p>
			<input type="Email" name="maildk" placeholder="Nhập vào địa chỉ mail của bạn" required="required" value="<?php if(isset($mail)) echo $mail ?>">
			<p>Tên người dùng:</p>
			<input type="text" name="tentk" placeholder="Nhập vào tên của bạn" required="required" value="<?php if(isset($username)) echo $username ?>">
			<p>Mật khẩu:</p>
			<input type="password" name="matkhaudk" placeholder="Nhập mật khẩu của bạn" required="required"value="<?php if(isset($password)) echo $password ?>">
			<p>Xác nhận mật khẩu:</p>
			<input type="password" name="matkhauxn" placeholder="Xác nhận lại mật khẩu" required="required" value="<?php if(isset($rpassword)) echo $rpassword ?>">
			<input type="submit" name="guidk" value="Tạo tài khoản" id="submit" ><br/>
		</form>
		<br/>
		<a href="trangchu.php"><button  style="width: 140px;text-align: center;padding: 7px;color: black;font-weight: bold;margin-left: 265px;">Về trang chủ</button></a>
	</div>

</body>
</html>