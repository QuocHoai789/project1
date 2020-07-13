<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/timkiem.css">
	<title>Tìm kiếm</title>
</head>
<body>
	<div id="khung">

		<div id="top">
			<?php include("detail-page/dautrang.php"); ?>
			
		</div>
		<div id="menu">
			<?php include("detail-page/menu.php"); ?>
			
		</div>
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
							<li><a href="http://localhost:8080/do_an_web1/pages/loaisanpham.php?MaLoai=<?php echo $d['MaLoai'] ; ?>"><?php echo $d['TenLoai']; ?></a> </li>
						<?php } ?>	

					</ul>
				</div>
			</div>
			<div id="sp">
				<div class="sp1"><p>Sản Phẩm</p></div>
				<?php
				include("detail-page/csdl.php");
				
				if( isset($_GET['search']) && !empty($_GET['search']) ){
					$search=$_GET['search'];
					$sql="select * from sanpham where TenSp like '%$search%'";
					$kq=mysqli_query($link,$sql);
					$sl=mysqli_num_rows($kq);
					if($sl==0){
						echo "<p style='color:red;text-align:center;font-size:20px'>Không tìm thấy sản phẩm!!!</p>";
					} 

					else { ?>
						<div id="loc">
							<form name="locsp" method="get" action="" id="form_loc" >
								<input type="hidden" name="search" value="<?php echo $_GET['search']; ?>">
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
						$sosp=8;
						$sotrang=1;
						// $sql3="select * from sanpham where TenSp like '%$search%' ";
						// $kq3=mysqli_query($link,$sql3);
						//$sl=mysqli_num_rows($kq3);
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
							$query="select * from sanpham where TenSp like '%$search%' order by $sapxep DESC limit $vt,$sosp ";
						}
						else{
							$sapxep="NgayCapNhat";
							$query="select * from sanpham where TenSp like '%$search%' order by $sapxep DESC limit $vt,$sosp";
						}

						
						$kq4=mysqli_query($link,$query); 
						while($d=mysqli_fetch_array($kq4)) { 
							?>

							<div class="sp2a"><img  src="<?php echo $d['HinhAnh']; ?>">
								<p class="tensp"><a href="http://localhost:8080/do_an_web1/pages/chitietsanpham.php?MaSp=<?php echo $d['MaSp'] ?>"><?php echo $d['TenSp']; ?></a></p>
								<p class="giasp">Giá:<?php echo number_format($d['GiaTien'],0,'.','.')." đ"; ?></p>
							</div>

						<?php } ?>
						<br/>
						<p  id="pt" >
							<a href="http://localhost:8080/do_an_web1/pages/timkiem.php?search=<?php echo $search; ?>&gr=<?php echo $gr-1; ?><?php if(isset($sapxep)) echo '&sapxep='.$sapxep; ?>">
								<?php if($gr>1){echo '&laquo';} ?>
								
							</a>
							<?php for($i=$dau;$i<=$cuoi;$i++){?>
								<a href="http://localhost:8080/do_an_web1/pages/timkiem.php?search=<?php echo $search.'&page=';?><?php echo $i; ?><?php if(isset($sapxep)) echo '&sapxep='.$sapxep; ?>">
									<?php echo $i; ?>
									
								</a>
							<?php } ?>
							<a href="http://localhost:8080/do_an_web1/pages/timkiem.php?search=<?php echo $search.'&gr=' ?><?php echo $gr+1; ?><?php if(isset($sapxep)) echo '&sapxep='.$sapxep; ?>">
								<?php if($gr<$tsn){echo '&raquo';} ?>
								
							</a> 
						</p>

					<?php	}

				}
				else{
					echo"<p style='color:red;text-align:center;font-size:20px'>Bạn chưa nhập thông tin!!!</p>";
				}
				?>
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