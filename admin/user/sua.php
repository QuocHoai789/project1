<!DOCTYPE html>
<html>
<head>
	<title>Sửa</title>
</head>
<body style="margin-top: 10px;">
	<?php
	include('../../csdl.php');
	if(isset($_GET['ID'])){
		$id=$_GET['ID'];
		$sql="select * from user where ID=$id";
		$kq=mysqli_query($link,$sql);
		$d=mysqli_fetch_array($kq);
	}
	?>
	<form name="sua" action="xuly.php" method="post" >
		<input type="hidden" name="ID" value="<?php echo $id?>">
	<label 
	style="font-size: 20px;"for="tensp">Tên tài khoản: </label>
	<input  type="text" name="sua" id="sua" value="<?php echo $d['Username'] ; ?>" disabled><br>
	<label style="font-size: 20px;" for="chon">Quyền: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
	<select style="margin-top: 10px;" name="chonrole" id="chonrole">
		<option <?php if ($d['role']==1) {echo "selected ='selected'";}?> value="1">Thành Viên</option>
		<option <?php if ($d['role']==2) {echo "selected ='selected'";}?> value="2"> Admin</option>
	</select>
	<input type="submit" name="gui_suaus" value="Cập nhật">

</body>
</html>