<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/ttcanhan.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>Thông tin người dùng</title>
</head>
<body>
	<div class="row">
		<div class="col-75">
			<div class="container">
				<?php
				include("detail-page/csdl.php");
				if(isset($_SESSION['username'])){
					$name = $_SESSION['username'];

				}
				$query = "select * from user where fullname = '$name' ";
				$kq = mysqli_query($link, $query);
				while ($d = mysqli_fetch_array($kq)) {
				?>
					
				

				<form name="profile" action="detail-page/xuly1.php" method="post">
					
					
					<div class="row">
						<div class="col-50">
							<h3>Thông tin cá nhân</h3>
							<label for="fname"><i class="fa fa-user"></i> Tên đăng nhập</label>
							<input type="text" id="fname" name="name" value="<?php echo $d['fullname']; ?>">
							<label for="email"><i class="fa fa-envelope"></i> Email</label>
							<input type="text" id="email" name="email" value="<?php echo $d['email']; ?>">
							<label for="phone_number"><i class="fa fa-envelope"></i> Số điện thoại</label>
							<input type="text" id="phone_number" name="phone_number" value="<?php echo $d['phone_number']; ?>">
							<label for="address"><i class="fa fa-envelope"></i> Địa chỉ</label>
							<input type="text" id="address" name="address" value="<?php echo $d['address']; ?>">
							<label for="birth"><i class="fa fa-calendar"></i> Ngày tạo</label>
							<input type="date" id="birth" name="date" value="<?php echo $d['created_at']; ?>">
							
							<label for="repas"> Đổi mật khẩu</label>
							<input type="password" id="repas" name="repas" value="">
							<?php

								 }

							?>
							<input type="submit" name="edit-profile" value="Đồng ý">
							<button ><a href="trangchu.php" onclick="return confirm('Bạn muốn thoát ?');">Quay lại</a></button>
					
				</form>
				
			</div>
		</div>
	</div>

</body>
</html>