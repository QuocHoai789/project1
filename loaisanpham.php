<!DOCTYPE html>
<html>
<head>
	<title>Sofa</title>
	<link rel="stylesheet" type="text/css" href="loaisanpham.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	

</head>
<body>
	<?php
	include("csdl.php");

	?>
	<div id="khung">
		
		<div id="top"><?php include("dautrang.php"); ?></div>
		<div id="menu"><?php include("menu.php"); ?></div>
		<div id="banner"></div>
		<div>
			<div id="menudoc">
				<div id="dau">Danh mục sản phẩm</div>	
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
			<div id="sp">
				<div class="sp1"><p>Sản Phẩm</p></div>
				<div id="loc">
					<form name="locsp" method="get" action="" id="form_loc" >
						<input type="hidden" name="MaLoai" value="<?php echo $_GET['MaLoai']; ?>">
						<label for="sapxep" style="padding-left: 30px;text-align: center;">Sắp xếp theo: </label>
						<select name="sapxep" id="sapxep" onchange="form_loc.submit()">
							<option value="NgayCapNhat"<?php if(isset($_GET['sapxep'])&&strcmp($_GET['sapxep'],"NgayCapNhat")==0) echo"selected='selected' "; ?> >Sản phẩm mới nhất</option>
							<option value="GiaTien"<?php if(isset($_GET['sapxep'])&&strcmp($_GET['sapxep'],"GiaTien")==0) echo"selected='selected' "; ?> >Giá từ cao đến thấp</option>
							<option value="TenSp" <?php if(isset($_GET['sapxep'])&&strcmp($_GET['sapxep'],"TenSp")==0) echo"selected='selected' "; ?>> Theo thứ tự bảng chữ cái </option>
							<option value="SoLuotMua" <?php if(isset($_GET['sapxep'])&&strcmp($_GET['sapxep'],"SoLuotMua")==0) echo"selected='selected' "; ?>>Sản phẩm bán chạy</option>
							<option value="SoLuotXem" <?php if(isset($_GET['sapxep'])&&strcmp($_GET['sapxep'],"SoLuotXem")==0) echo"selected='selected' "; ?>>Sản phẩm xem nhiều</option>
						</select>
					</form>
				</div>
				<?php 
				if(isset($_GET['MaLoai'])){
					$MaLoai=$_GET['MaLoai'];
				}
				$sosp=8;
				$sotrang=1;
				$sql3="select * from sanpham where MaLoai= $MaLoai ";
				$kq3=mysqli_query($link,$sql3);
				$sl=mysqli_num_rows($kq3);
				$tst=ceil($sl/$sosp);
				$tsn=ceil($tst/$sotrang);
				if(isset($_GET['page'])){
					$page=$_GET['page'];
					$gr=ceil($page/$sotrang);
				}
				else if(isset($_GET['gr'])){
					$gr=$_GET['gr'];
					$page=($gr-1)*$sotrang+1;
				}
				else{
					$page=1;
					$gr=1;
				}
				$vt=($page-1)*$sosp;
				$dau=($gr-1)*$sotrang+1;
				$cuoi=$gr*$sotrang;
				if($cuoi>$tst){
					$cuoi=$tst;
				}
				if(isset($_GET['sapxep'])){
					$sapxep=$_GET['sapxep'];
					$query="select * from sanpham where MaLoai= $MaLoai order by $sapxep DESC limit $vt,$sosp  ";
				}
				else{
					$sapxep="NgayCapNhat";
					$query="select * from sanpham where MaLoai= $MaLoai order by $sapxep DESC limit $vt,$sosp  ";
				}
				// $query="select * from sanpham where MaLoai= $MaLoai limit $vt,$sosp  ";
				$kq4=mysqli_query($link,$query); 

				while($d=mysqli_fetch_array($kq4)) { 
					?>

					<div class="sp2a"><div class="chua" style=" position: relative;"><img class="imge" src="<?php echo $d['HinhAnh']; ?>">
						<div class="text-sp-bc" onclick="return alert('Đã thêm vào giỏ hàng');"><a href="xuly1.php?MaSp=<?php echo $d['MaSp']; ?>&soluong=1" class="btn btn-info btn-md">Thêm vào giỏ hàng</a></div>
						</div>
						<p class="tensp"><a href="http://localhost:81/do_an_web1/chitietsanpham.php?MaSp=<?php echo $d['MaSp']; ?>"><?php echo $d['TenSp']; ?></a></p>
						<p class="giasp">Giá:<?php echo number_format($d['GiaTien'],0,'.','.')." đ"; ?></p>
					</div>

				<?php } ?>

				<br/>
				<p  id="pt" >
					<a href="http://localhost:81/do_an_web1/loaisanpham.php?MaLoai=<?php echo $MaLoai; ?>&gr=<?php echo $gr-1; ?><?php if(isset($sapxep)) echo '&sapxep='.$sapxep; ?>"> <?php if($gr>1){echo '&laquo';} ?></a>
					<?php for($i=$dau;$i<=$cuoi;$i++){?>
						<a  href="http://localhost:81/do_an_web1/loaisanpham.php?MaLoai=<?php echo $MaLoai; ?>&page=<?php echo $i; ?><?php if(isset($sapxep)) echo '&sapxep='.$sapxep; ?>"><?php if(isset($_GET['page'])&& $_GET['page']==$i){echo "<span style='color:red'>".$i."</span>";}else echo $i; ?></a>
					<?php } ?>
					<a href="http://localhost:81/do_an_web1/loaisanpham.php?MaLoai=<?php echo $MaLoai; ?>&gr=<?php echo $gr+1; ?><?php if(isset($sapxep)) echo '&sapxep='.$sapxep; ?>"><?php if($gr<$tsn){echo '&raquo';} ?></a> 
				</p>
			</div>
		</div>
		
		<div id="tin"><?php include("tin.php"); ?></div>
		<div id="footer"><?php include("footer.php"); ?></div>
	</div>
	
</body>
</html>

