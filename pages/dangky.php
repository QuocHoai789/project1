<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/dangky.css">
	<title>Đăng ký</title>
</head>
<body>
	<div id="dangky"  >
		  <?php include('detail-page/csdl.php'); ?> 
		<div class="dong" onclick="thoat()" >
			<span  >&times;</span>
		</div>
		<h1>Đăng ký</h1>

		<?php
		if(isset($_POST['guidk'])){

			$fullname=$_POST['fullname'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$phone_number=$_POST['phone_number'];
			$password=$_POST['password'];
			$rpassword=$_POST['rpassword'];
			date_default_timezone_set("Asia/Bangkok");
			$created = date('Y-m-d H:i:s');

			if(strlen($fullname)<6||strlen($password)<6){
				echo"<p style='color:red;text-align:center'> Tên người dùng và mật khẩu không được nhỏ hơn 6 ký tự</p>";
			}
			else{
				if($password != $rpassword){
					echo"<p style='color:red;text-align:center'> Xác nhận lại mật khẩu</p>";

				}else{
					$sql="select * from user where fullname = '$fullname' ";
					$kq=mysqli_query($link,$sql);
					$sl=mysqli_num_rows($kq);
					if($sl==0){
						$kq2="insert into user(
						fullname,
						email,
						password,
						phone_number,
						address,
						role,
						created_at
						) values 
						( '$fullname','$email', '".md5($password)."' , '$phone_number' , '$address', '1', '$created' )";
						 mysqli_query($link,$kq2);
						
						header('Location: http://localhost:8080/do_an_web1/pages/detail-page/action.php');
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
			<input  type="text" name="fullname" placeholder="Nhập vào tên của bạn" required="required" value="<?php if(isset($fullname)) echo $fullname ?>">
			<p>Email:</p>
			<input type="email" name="email" placeholder="Nhập vào địa chỉ mail của bạn" required="required" value="<?php if(isset($email)) echo $email ?>">
			<p>Mật khẩu:</p>
			<input type="password" name="password" placeholder="Nhập mật khẩu của bạn" required="required"value="<?php if(isset($password)) echo $password ?>">
			<p>Xác nhận mật khẩu:</p>
			<input type="password" name="rpassword" placeholder="Xác nhận lại mật khẩu" required="required" value="<?php if(isset($rpassword)) echo $rpassword ?>">
			<p>Số điện thoại:</p>
			<input type="text" name="phone_number" placeholder="Nhập vào số điện thoại của bạn" required="required" value="<?php if(isset($phone_number)) echo $phone_number ?>">
			<p>Địa chỉ:</p>
			<input type="text" name="address" placeholder="Nhập vào địa chỉ của bạn" required="required" value="<?php if(isset($address)) echo $address ?>">
			<input type="submit" name="guidk" value="Tạo tài khoản" id="submit" ><br/>
		</form>
		<br/>
		<a href="trangchu.php"><button  style="width: 140px;text-align: center;padding: 7px;color: black;font-weight: bold;margin-left: 265px;">Về trang chủ</button></a>
	</div>

</body>
</html>