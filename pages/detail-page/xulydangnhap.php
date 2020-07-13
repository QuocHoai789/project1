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
				$username=$_POST['tendangnhap'];
				$matkhau= $_POST['matkhau'];

				$sql="select * from user where Username='$username' and Password='$matkhau'";
				$kq=mysqli_query($link,$sql);
				$sl=mysqli_num_rows($kq);
				if($sl==0){
					header('location:dangnhap.php?sl=0');
					echo'<p style="color:red;text-align:center" >Tên đăng nhập hoặc mật khẩu không khớp. </p>';
				}


				else{
					$d=mysqli_fetch_array($kq);
					$_SESSION['username']=$d['Username'];
					//$_SESSION['role']=$d['role'];
                       if(!empty($_SESSION['dathang'])){
                        header('location:hoadon.php');
                       }
                       else{
						header('location:trangchu.php');
						}
					
					
				}
			}


	?>
	
</body>
</html>