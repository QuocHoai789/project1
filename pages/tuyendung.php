<!DOCTYPE html>
<html>
<head>
	<title>Tuyển dụng</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/tuyendung.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
			<?php include("detail-page/dautrang.php"); ?>
			
		</div>
		<div id="menu">
			<?php include("detail-page/menu.php"); ?>
			
		</div>
		<div id="baner"></div>
		<div id="tintuyendung"><div id="ten"><p style="color: white;font-size: 28px;font-weight: bold;margin-bottom: 5px">Tin tuyển dụng</p></div>
		<div id="tintuyendung1">
			<h1 style="padding: 5px 5px;font-weight: bold;font-size: 20px;text-align: center;">Công ty chúng tôi đang bổ sung một số nhân sự:</h1><br>
			<p style="padding-left: 40px"><span style=" font-size: 23px; font-weight: bold;color:red "> Nhân viên xưởng mộc:</span><br>     <span style="font-weight: bold"> Số lượng:</span> 10 người.<br>
				<span style="font-weight: bold"> Độ tuổi:</span> từ 18 đến 40.<br/>
				<span style="padding-left: 75px">+Có sức khỏe tốt.</span><br/>
				<span style="padding-left: 75px">+Nhanh nhẹn,siêng năng,chịu khó.</span><br/>
				<span style="padding-left: 75px">+Kinh nghiệm làm nghề mộc trên 3 năm.</span><br/>
				<span style="font-weight: bold"> Yêu cầu công việc:</span> thực hiện sản xuất chế tác các loại sản phẩm đồ gỗ mỹ nghệ.<br/>
				<span style="font-weight: bold"> Mức lương:</span> Từ 8,000,000 ~ 12,000,000đ/tháng.Phụ cấp 4.00.000đ/tháng tiền đi lại,thưởng thêm theo năng lực,thưởng lễ tết. <br/>
				<span style="font-weight: bold"> Hồ sơ đăng ký gồm: </span> sơ yếu lý lịch, cmnd(photo công chứng theo quy định),2 hình thẻ cỡ 3*4(chụp không quá 6 tháng),đơn xin việc(tải <a href="#">tại đây</a>).<br/>
				<span style="font-weight: bold"> Nộp đơn xin việc tại:</span> Công ty đồ gỗ cao cấp Thanh Mộc.Đ/c:Số 176,Khu phố 1,Đường Tô Ký, Phường Tân Chánh Hiệp, Quận 12, TP. Hồ Chí Minh.(gặp<b> Mr.Hiếu</b>: 0968339560 ).<br/>
				<p style="font-weight: bold;color: blue ;text-align: center;">~CHÚC BẠN  MAY MẮN VÀ THÀNH CÔNG ~</p><br/>
				<hr width="1200">
			</p>
		</div>
	</div>
	<div id="tin">
		<?php include("detail-page/tin.php"); ?>
		
	</div>
	<div id="footer">
		<?php include("detail-page/footer.php"); ?>
		
	</div>
</div>
</body>
</html>