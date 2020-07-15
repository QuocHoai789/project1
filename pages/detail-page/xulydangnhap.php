<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>xử lý đăng nhập</title>
</head>
<body>
	<?php
	include("csdl.php");

	if(isset($_POST['dangnhap'])){
				$fullname = $_POST['fullname'];
				$password = $_POST['password'];

				$sql = "select * from user where fullname = '$fullname' and password = '".md5($password)."' ";
				$kq = mysqli_query($link,$sql);
				$sl = mysqli_num_rows($kq);
				if($sl == 0){
					header('Location: http://localhost:8080/do_an_web1/pages/dangnhap.php?sl=0');
					echo'<p style="color:red;text-align:center" >Tên đăng nhập hoặc mật khẩu không khớp. </p>';
				}


				else{
					$d = mysqli_fetch_array($kq);
					$_SESSION['username'] = $d['fullname'];
					//$_SESSION['role']=$d['role'];
                       if(!empty($_SESSION['dathang'])){
                        header('Location: http://localhost:8080/do_an_web1/pages/hoadon.php');
                       }
                       else{
						header('Location: http://localhost:8080/do_an_web1/pages/trangchu.php');
						}
					
					
				}
			}


	?>
	
</body>
</html>