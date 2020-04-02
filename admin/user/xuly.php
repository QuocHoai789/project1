<?php
include('../../csdl.php');
	if(isset($_POST['gui_xoaus'])){
		$xoa_us=$_POST['ID'];
		$sql3="delete from user where ID='$xoa_us'";
		$kq3=mysqli_query($link,$sql3);
		header('location:http://localhost:81/do_an_web/admin/quantri.php?key=User');
	}
	if (isset($_POST['gui_suaus'])) {
		$ID=$_POST['ID'];
		$sua_role=$_POST['chonrole'];
		$sql4="update  user set role=$sua_role where ID=$ID" ;
		$kq4=mysqli_query($link,$sql4);
		header('location:http://localhost:81/do_an_web/admin/quantri.php?key=User');
	}
?>