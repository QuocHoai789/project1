<!DOCTYPE html>
<html>
<head>
	<title>Liên hệ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="lienhe.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Trang chủ</title>
	<script type="text/javascript">
		function lendautrang() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
		window.onscroll = function() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("gotop").style.display = "block";
			} 
			else {
				document.getElementById("gotop").style.display = "none";
			}
		};



		function click1() {
        // body...
        alert("Không tìm thấy trang.");
    }
</script>
</head>
<body>
	<div id="khung">
		<i style='font-size:20px' class='fas' id="gotop" onclick="lendautrang()">&#xf062;</i>
		<div id="top">
			<?php include("dautrang.php"); ?>
			
		</div>
		<div id="menu">
			<?php include("menu.php"); ?>
			
		</div>
		<div id="banner"></div>
		<div>
			<fieldset style="border: 2px solid #ab4205b0;">
				<legend id="form"><p>Liên hệ</p></legend>
				<div id="ttlh">
					<a href="#bando"><img src="hinhanh/map.png" style="width: 17px; margin-left: 20px;"/></a>

					<h2 style="font-weight: bold; color: red; margin-bottom: 20px; text-align: center;margin-left: 20px;">Hãy liên hệ với chúng tôi để được tư vấn nhanh nhất và hoàn toàn miễn phí</h2>
					<p><b>Địa chỉ:</b> 145 Đường Tô Ký,KP.1,phường Tân Chánh Hiệp,Quận 12 </p><br/>
					<span ><b>hotline:</b> 0968339560 (Mr.Hiếu)</span><br/><br/>
					<span><b>Email:</b> toletrunghieu@gmail.com</span>  
				</div>

				<div id="lh">
					<form style="margin-left: 70px;" name="lienhe" method="post" action="xuly1.php">
						<p>Họ và tên:</p>
						<input type="text" name="hovaten" placeholder="Họ và tên" size="30"  required="required"><br>
						<p>Email:</p>
						<input type="Email" name="email" placeholder="Email" size="50" required="required"><br>
						<p>Số điện thoại:</p>
						<input type="text" name="sodienthoai" placeholder="Số điện thoại" size="15" required="required"><br/>
						<p>Nội dung:</p>
						<textarea required="required" name="ndlienhe" style="border: 1px solid black; border-radius: 4px; margin-left: 50px;
						margin-top: 5px;"  rows="10" cols="70" type="text" name="noidung"
						placeholder="Nội dung"></textarea><br>
						<input style="margin-left: 300px; margin-bottom: 5px;" align="center" type="submit" name="guilienhe" value="Gửi đi">

					</form>
				</div>

			</fieldset> 

		</div>
		<div id="tin">
			<?php include("tin.php"); ?>
			
		</div>
		<div id="footer">
			<?php include("footer.php"); ?>
			
		</div>
	</div>
</body>
</html>