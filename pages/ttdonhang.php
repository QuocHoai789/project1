<!DOCTYPE html>
<html>
<head>
	<title>Thông tin đơn hàng</title>
	<style type="text/css">

	</style>
</head>
<body>
	<div id="top"><?php include("detail-page/dautrang.php"); ?></div>
	<div id="menu"><?php include("detail-page/menu.php"); ?></div>
	<?php

	include("detail-page/csdl.php");
	// if (!isset($_SESSION['dathang'])) {
	// 	$_SESSION['dathang']=array();
	// }
	$kt=$_SESSION['username'];
	$sql="select * from sanpham,hoadon,user,chitiethd where hoadon.ID=user.ID and hoadon.MaHD=chitiethd.MaHD and sanpham.MaSp=chitiethd.MaSp and user.Username='$kt'
		order by hoadon.MaHD desc";
	$kq=mysqli_query($link,$sql);?>
	        <h2 style="text-align: center">Thông tin hóa đơn</h2>
			<table class="table table-striped" >

				<tr>
					<th>STT</th>
					<th>Sản phẩm đã mua </th>
					<th>Số lượng</th>
					<th>Giá tiền</th>
					<th>Ngày mua</th>
					<th>Trạng thái</th>
					<th width="100"></th>
				</tr>
				<?php
			$i=1; 
			while ($d=mysqli_fetch_array($kq)) { ?>
			<tr>
				<td> <?php 
				echo $i++; ?></td>
				<td width="200"><?php echo $d['TenSp'];?></td>
				<td> 
					<?php echo $d['SoLuong']; ?>
					
				</td>
				<td>
					<?php 
					$mact=$d['MaChiTiet'];
					$sql1="select * from chitiethd where MaChiTiet = $mact ";
					$kq1=mysqli_query($link,$sql1);
					$d1=mysqli_fetch_array($kq1);

					echo $d1['SoLuong']*$d1['GiaTien'].' VNĐ' ; ?>
				</td>
				<td> <?php echo $d['NgayLap']; ?></td>
				<td align="center"> 
					<?php 
					if ($d['trangthai'] ==0) {?> 
						<span style="font-weight: bold;color: red;"> Chưa xử lý </span>
					<?php } ?> 
					<?php if ($d['trangthai']==1){ ?>
						<p style="font-weight: bold;color: green;"> Đang vận chuyển </p>
					<?php } ?>
					<?php if ($d['trangthai']==2){ ?>
						<p style="font-weight: bold;color: blue;"> Kết thúc </p>
					<?php }?>
					<?php if ($d['trangthai']==3){?>
						<p style="font-weight: bold;">Đã hủy</p>
					<?php } ?>

				</td>
				<td width="100"> <?php if ($d['trangthai']==0) { ?>
				<a href="huydon.php?ID=<?php echo $d['MaHD']?>" onclick="return confirm('Bạn có chắc chắn hủy đơn hàng này?')">Hủy</a><?php }if ($d['trangthai']==1) { ?>
					<a href="huydon.php?ID=<?php echo $d['MaHD']?>" onclick="return confirm('Bạn có chắc chắn hủy đơn hàng này?')">Hủy</a><?php } else  echo "" 
					?>

				</td>
			</tr>
		<?php } ?>
			</table>
</body>
</html>