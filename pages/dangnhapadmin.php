<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập ADMIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../hinhanh/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Đăng nhập quản trị
				</span>
				<?php
                include("detail-page/csdl.php");
				?>
				<form class="login100-form validate-form p-b-33 p-t-5" name="lg" action="dangnhapadmin.php" method="post">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="adminname" placeholder="ADMIN name" required="required">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password" required="required">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<input class="login100-form-btn" type="submit" name="guilogin" value="Đăng nhập">  
							
					</div>
                   <?php
                   if(isset($_POST['guilogin']))
                   {
                   	$adminname=$_POST['adminname'];
                   	$pass=$_POST['pass'];
                   	$sql=" select * from user where Username = '$adminname' and Password = '$pass'";
                   	$kq=mysqli_query($link,$sql);
                   	$sl=mysqli_num_rows($kq);
                   	if($sl==0)
                   	{
					echo'<p style="color:red;text-align:center" >Tên đăng nhập hoặc mật khẩu không khớp. </p>';
				    }
				    else
				    {
				    	$d=mysqli_fetch_array($kq);
					    $_SESSION['adminname']=$d['Username'];
					    if($d['role']==2){
					
					    	header('location:admin/quantri.php');
					    }
					    else{
					        echo'<p style="color:red;text-align:center" >Tên đăng nhập hoặc mật khẩu không khớp. </p>';
					    	//header('location:dangnhapadmin.php');
					    }
				    }
				     }
                   ?>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>