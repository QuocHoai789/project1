
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="chitietsanpham.css">
	<title>Chi tiết sản phẩm</title>
</head>
<body>
	<div id="khung">
		
		<div id="top"><?php include("dautrang.php"); ?></div>
		
		<div id="menu"><?php include("menu.php"); ?></div>
		<div id="banner"></div>
		 <div id="chitiet">
		 	<?php
		include("csdl.php");
         if(isset($_GET['MaSp'])){
         	
         	$MaSp=$_GET['MaSp'];
         	$sql="select * from sanpham where MaSp = $MaSp ";
         	$kq=mysqli_query($link,$sql);
         	$d=mysqli_fetch_array($kq);
              }
         	$sql2="select TenLoai from loaisp where MaLoai =".$d['MaLoai'];
         	$kq2=mysqli_query($link,$sql2);
         	$d2=mysqli_fetch_array($kq2);
            
            $viewkey='sp_'.$MaSp;
            

           // $view=$_SESSION[$viewkey];
             
            if(!isset($_SESSION[$viewkey])){
            	$_SESSION[$viewkey]=1;
            	$sql3="update sanpham set SoLuotXem=SoLuotXem + 1 where MaSp=".$MaSp;
            	$kq3=mysqli_query($link,$sql3);
            }

		?>
			<div id="hct"> <img src="<?php echo $d['HinhAnh']; ?>"> </div>
			<div id="ttct">
				<div id="ttct1">
					<p><b style="font-size: 17px;"><?php echo $d['TenSp']; ?></b></p>
					<h1 style="color: #be251e; margin-bottom: 10px;"><i><?php  echo number_format($d['GiaTien'],0,'.','.')."đ"; ?></i></h1>
					<p>Nhà sản xuất: <b style="color: #be251e;">Thanh Mộc</b></p>
					<p style="margin-bottom: 10px;">Dòng sản phẩm: <b style="color: #be251e;"><?php echo $d2['TenLoai']; ?></b></p>
					<h2 style="margin-bottom: 10px;">Mô tả:</h2>
					<p style="margin: 5px; font-size: 18px;">Liên hệ trực tiếp để mua hàng qua SĐT: 0968339560-0393362596. Miễn phí vận chuyển trong bán 
					kính 50km. Chất lượng gỗ đúng chủng loại 100%; Chất lượng sản phẩm trong ngoài như nhau.</p>
				</div>
				<div id="ctsp">
					<h2> Chi tiết sản phẩm:</h2>
					<p><?php echo $d['ThongTin']; ?></p>
				</div>
				<div id="ttct2">
					
					<div id="ct2a"><p>Số lượng:</p></div>
					<form name="themhang" method="get" action="xuly1.php">
						<input type="hidden" name="MaSp" value="<?php echo $d['MaSp']; ?>">
						<div id="ct2b"><input type="number" name="soluong" min="1" max="10" value="1" style="width: 100%;height: 100%;text-align: center;"></div>
					</div>	
					<div id="ttct3">
						<div id="ct3a"><button style="width: 100%;height: 100%">Mua ngay</button></div>
						<div id="ct3b"><button style='font-size:22px;width: 100%;height: 100%;background-color: #ffb916' name="guithem" value="them">Thêm vào giỏ hàng <i class='fas fa-cart-plus'></i></button></div>

					</div>
				</form>
				<div id="blsp">
					<form method="POST" action="" name="binhluansp">
						    
							<textarea id="nxsp" cols="80" rows="4" placeholder="Ý kiến của bạn:"></textarea><br/>
							<div id="blsp1">
								<div id="blsp2">
                                 <?php
                                 if(!isset($_SESSION['username'])){ ?>

                                 	<p>Hãy<a href="dangnhap.php"> đăng nhập</a> hoặc <a href="dangky.php">tạo tài khoản</a> để gửi nhận xét</p>

                               <?php  }

                                 ?>
									
								</div>
								<div id="blsp3"><input type="submit" name="guiblsp" value="Gửi"></div>
							</div>
							
							
						</form>
				</div>

			</div>
		</div> 

		<div id="tin"><?php include("tin.php"); ?></div>
		<div id="footer"><?php include("footer.php"); ?></div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#ct3b').click(function(){
				alert('Đã thêm sản phẩm vào giỏ hàng');	
			});

		});
	</script>
</body>
</html>