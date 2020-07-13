<!DOCTYPE html>
<html>
<head>
	<title>Sofa</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		/*chỉnh toàn bộ trang*/
		#khung{
			width: 1200px;
			margin: auto;
			font-family: Arial;
		}
		#top{
			margin: auto;
			height: 140px;
			width: 1200px;

		}
		#menu{
			clear: both;
			height: 40px;
			margin-top: 5px;
		}
		#banner{
			height: 400px;
			background: url(hinhanh/2.jpg);
			margin-top: 5px;
			margin-bottom: 25px;
			clear: both;
			animation: banner 20s infinite;
		}
		@keyframes banner{
			25%{
				background: url(hinhanh/2.jpg);
			}
			50%{
				background: url(hinhanh/7.jpg);
			}
			75%{
				background: url(hinhanh/8.jpg);
			}
			100%{
				background: url(hinhanh/9.jpg);
			}
		}
		#menudoc{

			width: 200px;
			min-height:400px;
			float: left;
		}
		#dau{
			border: 1px solid black;
			height: 50px;
			line-height: 50px;
			font-weight: bold;
			width: 200px;
			float: left;
			background-color: #ab4205b0;
			text-align: center;
			color: white;
		}
		#doc{width: 200px;
			border: 1px solid black;
			min-height:412px;
			float: left;
		}
		#doc ul {
			background: url(hinhanh/giay.jpg); 
			width: 198px;
			padding: 0;
			list-style-type: none;
			text-align: left;
		}
		#doc li {
			height: 41px;
			line-height: 41px;
			border-bottom: 1px solid #88757533;
			padding: 0 1em;
		}
		#doc li a {
			text-decoration: none;
			color: #333;font-weight: bold;
			display: block;
		}
		#doc li:hover {
			background: #CDE2CD;
		}
		#sp{
			width: 990px;
			min-height: 400px;
			float: left;
			margin-left: 5px;
		}
		#loc{
			height: 50px;
			/*background-color: red;*/
			margin-top: 5px;
		}
		#sp_loc{
			border-radius: 20px; 
			padding: 7px;
			margin-left: 30px;
			margin-top: 10px;
			width: 250px;
		}
		.sp1{
			width: 990px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			border-bottom: 3px solid #ab4205ba;
		}
		.sp1 p{
			padding-left:5px; 
			background: #ab4205b0;
			display: inline-block;
			text-transform: uppercase;
			font-family: fonta;
			padding: 0 10px 0 10px;
			color: white;
			font-size: 28px;
			font-weight: bold;
			margin-bottom: 5px;
		}
		#sp2{
			margin-top: 15px;
			width: 990px;
			height: 280px;
			float:left;
			
		}
		
		.sp2a{
			height: 270px;
			width: 241px;
			float: left;
			margin-left: 5px;
			margin-top: 5px;
			margin-bottom: 5px;
		}
		
		.sp2a img{
			margin-left: 5px;
			margin-top: 5px;
			width: 225px;
			height: 190px; 
		}
		.tensp{
			height: 40px;
			padding-top: 10px;
			text-align: center;
			
		}
		.giasp{
			
			color: red;
			height: 25px;
			padding-top: 7px; 
			text-align: center;
			
		}
		
		#pt{
			height: 40px;
			line-height: 40px;
			
			text-align: center;
			margin-top: 50px;
			margin-bottom: 20px;
			clear: both;
		}
		#pt a{
			display: inline-block;
			padding: 0px 16px;
			color: black;
			background-color: #dddddd;
			
		}
		#pt a:hover{
			color: #fff;
			background-color: #21a250;
			border-color: #21a250;
		}
		#tin{
			height: 500px;
			clear: both;
			margin-top: 20px;
		}
		#footer{
			margin-top: 10px;
			min-height: 190px;
			background-image: url(hinhanh/nengo.jpg);
			text-align: center;
			clear: both;
			font-size: 20px;
		}
		#gotop {
			display: none;
			position: fixed;
			bottom: 50px;
			right: 15px;
			z-index: 99;
			font-size: 18px;
			border: 3px solid gray ;
			outline: none;
			/*background-color: gray;*/
			color: black;
			cursor: pointer;
			padding: 8px;
			border-radius: 4px;
		}
	</style>

</head>
<body>

	<?php
	include("detail-page/csdl.php");
	?>
	<div id="khung">
		
		<div id="top"><?php include("detail-page/dautrang.php"); ?></div>
		<div id="menu"><?php include("detail-page/menu.php"); ?></div>
		<div id="banner"></div>
		<div>
			<div id="menudoc">
				<div id="dau">Danh mục sản phẩm</div>	
				<div id="doc">
					<ul>
						<li><a href="sofa.php">Sofa phòng khách</a></li>
						<li><a href="tuonggo.php">Tượng gỗ cao cấp</a></li>
						<li><a href="phongngu.php">Đồ gỗ phòng ngủ</a></li>
						<li><a href="tutho.php">Đồ gỗ tủ thờ</a></li>
						<li><a href="giasach.php">Giá để sách</a></li>
						<li><a href="tranhgo.php">Tranh gỗ</a></li>
						<li><a href="cuaso.php">Cửa sổ gỗ</a></li>
						<li><a href="banghe.php">Bàn ghế gỗ</a></li>
						<li><a href="phongthuy.php">Đồ gỗ phong thủy</a></li>
						<li><a href="banlv.php">Bàn làm việc</a></li>
						<li><a href="ketv.php">Kệ ti vi</a></li>
						<li><a href="turuou.php">Tủ đựng rượu</a></li>
						<li><a href="lucbinh.php">Lục bình gỗ</a></li>
						<li><a href="bantrangdiem.php">Bàn trang điểm</a></li>
						
					</ul>
				</div>
			</div>
			<div id="sp">
				<div class="sp1"><p>Sản Phẩm</p></div>
				<div id="loc">
					<form name="locsp" method="get" action="" id="form_loc" >
						<label for="sp_loc" style="padding-left: 30px;text-align: center;">Sắp xếp theo: </label>
						<select name="sp_loc" id="sp_loc" onchange="form_loc.submit()">
							<option value="moi" selected="selected">Sản phẩm mới nhất</option>
							<option value="caothap">Giá từ cao đến thấp</option>
							<option value="chucai"> Theo thứ tự bảng chữ cái </option>
							<option value="banchay">Sản phẩm bán chạy</option>
							<option value="xemnhieu">Sản phẩm xem nhiều</option>
						</select>
					</form>
				</div>
				<?php 
				$sosp=8;
				$sotrang=2;
				$sql3="select * from sanpham where MaLoai='2'";
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
				$query="select * from sanpham where MaLoai='2' limit $vt,$sosp  ";
				$kq4=mysqli_query($link,$query); 
				
				while($d=mysqli_fetch_array($kq4)) { 
					?>
					
					<div class="sp2a"><img  src="<?php echo $d['HinhAnh']; ?>">
						<p class="tensp"><a href="#"><?php echo $d['TenSp']; ?></a></p>
						<p class="giasp">Giá:<?php echo $d['GiaTien']." đ"; ?></p>
					</div>

				<?php } ?>
				
				<br/>
				<p  id="pt" >
					<a href="http://localhost:8080/do_an_web1/pages/tuonggo.php?gr=<?php echo $gr-1; ?>"> <?php if($gr>1){echo '&laquo';} ?></a>
					<?php for($i=$dau;$i<=$cuoi;$i++){?>
						<a href="http://localhost:8080/do_an_web1/pages/tuonggo.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
					<?php } ?>
					<a href="http://localhost:8080/do_an_web1/pages/tuonggo.php?gr=<?php echo $gr+1; ?>"><?php if($gr<$tsn){echo '&raquo';} ?></a> 
				</p>
			</div>

		</div>
		<div id="tin"><?php include("detail-page/tin.php"); ?></div>
		<div id="footer"><?php include("detail-page/footer.php"); ?></div>
	</div>
</body>
</html>