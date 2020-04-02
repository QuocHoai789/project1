<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="giua.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Chi tiết</title>
	<title>Giữa</title>
</head>
<body>
	<?php
	include("csdl.php");
	$sql="select * from sanpham where MaLoai ='1' ORDER BY RAND()  limit 5";
	$kq=mysqli_query($link,$sql);

	?>
	<div id="menudoc">
		<div id="dau" > Danh mục sản phẩm</div>	
		<div id="doc">
			<ul>
				
				<?php
				$sql3="select * from loaisp ";
				$kq3=mysqli_query($link,$sql3); 
				while($d=mysqli_fetch_array($kq3)) { 
					?>
					<li><a href="http://localhost:81/do_an_web1/loaisanpham.php?MaLoai=<?php echo $d['MaLoai'] ; ?>"><?php echo $d['TenLoai']; ?></a> </li>
				<?php } ?>	

			</ul>
		</div>
	</div>
	<div id="gioithieu">
		<div class="gioithieu1">
			<p>Đôi nét về Thanh Mộc</p>
		</div>
		<div id="gioithieu2">
			<p>Tọa lạc tại Số 176,Khu phố 1,Đường Tô Ký, Phường Tân Chánh Hiệp, Quận 12, TP. Hồ Chí Minh.<font style="color: blue;font-weight: bold"> GỖ MỸ NGHỆ CAO CẤP THANH MỘC</font> được hợp tác với những kiến trúc sư, kỹ sư có có thâm niên trong lĩnh vực đồ gỗ.Bên cạnh đó các mặt hàng được thiết kế đẹp,sang trọng dưới bàn tay của các nghệ nhân,chúng tôi luôn cập nhật các xu hướng thiết kế mới.Sản phẩm đa dạng,đáp ứng được mọi yêu cầu trên thị trường hiện nay.Nội thất bằng gỗ quý-gỗ xưa tự nhiên,chạm khắc tinh xảo bao gồm:</p>
			<p>+Nội thất gỗ (phòng khách,phòng ngủ,phòng bếp,phòng thờ,..)</p>
			<p>+Tượng gỗ trang trí cao cấp</p>
			<p>+Các sản phẩm thủ công chất lượng khác.</p>
			<p style="font-weight: bold;">GỖ MỸ NGHỆ CAO CẤP THANH MỘC VỚI PHƯƠNG CHÂM NGHỀ NGHIỆP LUÔN ĐẶT UY TÍN LÊN HÀNG ĐẦU VÀ SẢN PHẨM CHẤT LƯỢNG TỐT TẠO DỰNG NIỀM TIN LÂU DÀI VỚI KHÁCH HÀNG.</p>
			<p style="font-weight: bold;color: blue ;background-color: yellow;margin-top: 50px; padding-left: 30px ">~CHÚC QUÝ KHÁCH CHỌN ĐƯỢC NHỮNG SẢN PHẨM ƯNG Ý & CÓ NHỮNG PHÚT GIÂY MUA SẮM THOẢI MÁI TẠI CỬA HÀNG~</p>
			<p>*HotLine*:0968339560 hoặc 0393362596</p>
			<p>*Email*:<a href="Lienhe/lienhe.html" >toletrunghieu@gmail.com</a> hoặc <a href="Lienhe/lienhe.html">nguyenquochoai789@gmail.com</a></p>
		</div>
	</div>    
	<div id="ads">
		<a target="_blank" href="https://www.yes24.vn/"><img width ="240" height="430" src="hinhanh/capture.png"></a>
	</div>

	<div id="sanpham">
		<div class="sanpham1a">
			<p style="color: white;font-size: 28px;font-weight: bold;margin-bottom: 5px">Các loại sản phẩm tiêu biểu</p>
		</div>

		<div class="sanpham1"><p> Sofa gỗ phòng khách</p></div>
		
			<?php

			for($i=1;$i<=5;$i++) { $d=mysqli_fetch_array($kq); ?>

				<div class="sp"><div class="chua" style="position: relative;"><img class="imge" src="<?php echo $d['HinhAnh']; ?>">
				<div class="text-sp-bc" onclick="return alert('Đã thêm vào giỏ hàng');"><a class="btn btn-info btn-md" href="xuly1.php?MaSp=<?php echo $d['MaSp']; ?>&soluong=1" >Thêm vào giỏ hàng</a></div>
				</div>
					<p class="tensp"><a href="http://localhost:81/do_an_web1/chitietsanpham.php?MaSp=<?php echo $d['MaSp']; ?>"><?php echo $d['TenSp']; ?></a></p>
					<p class="giasp"><?php echo number_format($d['GiaTien'],0,'.','.') ." đ"; ?></p>
				</div>

			<?php } ?>
		



		<div class="sanpham1"><p> Tượng gỗ cao cấp</p></div>
		
			<?php
			$sql2="select * from sanpham where MaLoai ='2'  ORDER BY RAND()  limit 5 ";
			$kq2=mysqli_query($link,$sql2);

			for($i=1;$i<=5;$i++) { $d2=mysqli_fetch_array($kq2); ?>
				<div class="sp">
					<div class="chua" style="position: relative;"><img class="imge" src="<?php echo $d2['HinhAnh']; ?>">
				<div class="text-sp-bc" onclick="return alert('Đã thêm vào giỏ hàng');"><a class="btn btn-info btn-md" href="xuly1.php?MaSp=<?php echo $d2['MaSp']; ?>&soluong=1" >Thêm vào giỏ hàng</a></div>
				</div>
					
					<p class="tensp"><a href="http://localhost:81/do_an_web1/chitietsanpham.php?MaSp=<?php echo $d2['MaSp']; ?>"><?php echo $d2['TenSp']; ?></a></p>
					<p class="giasp"><?php echo number_format($d2['GiaTien'],0,'.','.') ." đ"; ?></p>
				</div>

			<?php } ?>  
		
		<div class="sanpham1"><p> Giường ngủ gỗ</p></div>
		
			<?php
			$sql3="select * from sanpham where MaLoai ='3'  ORDER BY RAND()  limit 5 ";
			$kq3=mysqli_query($link,$sql3);

			for($i=1;$i<=5;$i++) { $d3=mysqli_fetch_array($kq3); ?>
				<div class="sp">
					<div class="chua" style="position: relative;"><img class="imge" src="<?php echo $d3['HinhAnh']; ?>">
				<div class="text-sp-bc" onclick="return alert('Đã thêm vào giỏ hàng');"><a href="  xuly1.php?MaSp=<?php echo $d3['MaSp']; ?>&soluong=1" class="btn btn-info btn-md">Thêm vào giỏ hàng</a></div>
				</div>
					
					<p class="tensp"><a href="http://localhost:81/do_an_web1/chitietsanpham.php?MaSp=<?php echo $d3['MaSp']; ?>" ><?php echo $d3['TenSp']; ?></a></p>
					<p class="giasp"><?php echo number_format($d3['GiaTien'],0,'.','.') ." đ"; ?></p>
				</div>

			<?php } ?>  
		
	</div>

	
</body>
</html>