<?php
session_start();
include("detail-page/csdl.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/dautrang.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
	<style type="text/css">
		#hoadon input[type="text"]{
			padding: 5px;
			width: 200px;
		}
		#hoadon input[type="submit"]{
			padding: 5px;

			
		}
	</style>
	<title></title>
</head>
<body>
	<?php

	if(isset($_SESSION['username'])){
		$username=$_SESSION['username'];
		$sql="select * from user where Username = '$username' ";
		$kq=mysqli_query($link,$sql);
		$d=mysqli_fetch_array($kq);
	}

	?>
	<h1 style="text-align: center">Thông tin mua hàng</h1>

<div id="hoadon" align="center">	
<form  name="hoadon" method="get" action="detail-page/xuly1.php">
	<p style="font-weight: bold;color: red">*Lưu ý:Tên khách hàng,số điện thoại địa chỉ giao hàng không được để trống* </p>
	<p><label for='ten' >Tên khách hàng:</label>
	<input type="text" name="tennguoinhan"  id="ten" required="required" value="<?php echo $d['HoTen']; ?>" ></p>
	<p><label for="sdt" >Số điện thoại:</label>
       <input type="text" name="dienthoai"  id="sdt" required="required" placeholder="Nhập vào số điện thoại">
	</p>
	<p><label for="diachi">Địa chỉ giao hàng</label>
	<input type="text" name="diachigiao" placeholder="Nhập vào địa chỉ giao tới" id="diachi" required="required"></p>
	<p>
    <label>Tổng tiền:</label>
    <input type="text" name="tongtien" value="<?php echo number_format($_SESSION['tongtien'],0,'.','.') .'VNĐ'; ?>">
    </p>
    <p>
	<textarea name="noidung" placeholder="Nội dung " id="thongtin"  rows="10" cols="60"></textarea>
    </p>
	<input class="btn btn-info btn-md" type="submit" name="guihoadon" value="Gửi" onclick="return confirm('Bạn có chắc muốn mua hàng ?');"> <a  href="themgiohang.php">Quay lại</a>
</form>
</div>
</body>
</html>