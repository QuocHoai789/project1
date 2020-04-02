<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="gioithieu.css">
	<link rel="stylesheet" type="text/css" href="trangchinh.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Giới thiệu</title>
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
<div id="khung"><i style='font-size:20px' class='fas' id="gotop" onclick="lendautrang()">&#xf062;</i>
	<div id="top"><?php include('dautrang.php'); ?></div>
	<div id="menu"><?php include('menu.php'); ?></div>
	<div id="banner"></div>
	<div id="gioithieua">
  	<div class="gioithieu1a">
 				<p>Đôi nét về Thanh Mộc</p>
 		</div>
 		<div id="gioithieu2a">
 			
		       	<p>Tọa lạc tại Số 176,Khu phố 1,Đường Tô Ký, Phường Tân Chánh Hiệp, Quận 12, TP. Hồ Chí Minh.<font style="color: blue;font-weight: bold"> GỖ MỸ NGHỆ CAO CẤP THANH MỘC</font> được hợp tác với những kiến trúc sư, kỹ sư có có thâm niên trong lĩnh vực đồ gỗ.Bên cạnh đó các mặt hàng được thiết kế đẹp,sang trọng dưới bàn tay của các nghệ nhân,chúng tôi luôn cập nhật các xu hướng thiết kế mới.Sản phẩm đa dạng,đáp ứng được mọi yêu cầu trên thị trường hiện nay.
                Nội thất bằng gỗ quý-gỗ xưa tự nhiên,chạm khắc tinh xảo bao gồm:</p>
                <p>+Nội thất gỗ (phòng khách,phòng ngủ,phòng bếp,phòng thờ,..)<br/>
                +Tượng gỗ trang trí cao cấp<br/>
                +Các sản phẩm thủ công chất lượng khác.<br/></p>
                <p align="center" style="font-weight: bold; margin: 5px;">GỖ MỸ NGHỆ CAO CẤP THANH MỘC VỚI PHƯƠNG CHÂM NGHỀ NGHIỆP LUÔN ĐẶT UY TÍN LÊN HÀNG ĐẦU VÀ SẢN PHẨM CHẤT LƯỢNG TỐT TẠO DỰNG NIỀM TIN LÂU DÀI VỚI KHÁCH HÀNG.</p><br><br>
                 <p><font style="font-weight: bold;color: blue ;background-color: yellow;">~CHÚC QUÝ KHÁCH CHỌN ĐƯỢC NHỮNG SẢN PHẨM ƯNG Ý & CÓ NHỮNG PHÚT GIÂY MUA SẮM THOẢI MÁI TẠI CỬA HÀNG~</font></p>
                <p>*HotLine*:0968339560 hoặc 0393362596</p>
                <p>*Email*:<a href="../Lienhe/lienhe.html" >toletrunghieu@gmail.com</a> hoặc <a href="../Lienhe/lienhe.html">nguyenquochoai789@gmail.com</a></p><br/>
                <img width="1200px" height="400px" src="hinhanh/cty.jpg"><br/><br/>
                <span style="padding-left: 450px;padding-bottom:  100px;font-weight: bold;">Ảnh chụp xưởng làm việc của công ty</span>
		       
 		</div>
 	</div>
 	<div id="tin"><?php include('tin.php'); ?></div>
 	<div id="footer"><?php include('footer.php'); ?></div>
</div>
</body>
</html>