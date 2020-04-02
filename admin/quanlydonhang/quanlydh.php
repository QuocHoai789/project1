<!DOCTYPE html>
<html>
<head>
	<title>Danh sách đơn hàng</title>
	<style type="text/css">
		td a{
		 color: blue;
		}
		th a{
		 color: blue;
		}
		th{
			min-height: 50px;
			min-width: 70px;
		}
		td{
			height: 70px;
		}

	</style>
</head>
<body>
	<?php
	include("../csdl.php");
	$sql="select * from sanpham,hoadon,user,chitiethd where hoadon.ID=user.ID and hoadon.MaHD=chitiethd.MaHD and sanpham.MaSp=chitiethd.MaSp
	order by hoadon.MaHD desc";
	$kq=mysqli_query($link,$sql);
	?>
	<caption ><h1 style="text-align: center;">Danh sách đơn hàng</h1></caption>
	<table width="1090" height="400" border="1" align="center"  >
		<tr>
			<th> STT </th>
			<th> Tên người Mua</th>
			<th> Username</th>
			<th> Sản phẩm đã mua</th>
			<th>Số lượng</th>
			<th> Số điện thoại</th>
			<th> Địa chỉ</th>
			<th> Lời nhắn</th>
			<th> Ngày mua</th>
			<th> Tổng tiền</th>
			<th></th>
		</tr>
		<?php
			$i=1; 
			while ($d=mysqli_fetch_array($kq)) { ?>
			<tr>
				<td> <?php 
				$madh=$d['MaHD'];
				echo $i++; ?></td>
				<td> <?php echo $d['TenNguoiNhan']; ?> </td>
				<td> <?php echo $d['Username'];?></td>
				<td width="200"><?php echo $d['TenSp'];?></td>
				<td> 
					<?php echo $d['SoLuong']; ?>
					
				</td>
				<td> <?php echo $d['SDT']; ?></td>
				<td> <?php echo $d['DiaChiGiao']; ?></td>
				<td> <?php echo $d['NoiDung']; ?></td>
				<td> <?php echo $d['NgayLap']; ?></td>
				<td align="center"> 
					<?php 
					if ($d['trangthai'] ==0) {?> 
						<a style='color: red;' href="quanlydonhang/xuly.php?ID=<?php echo $d['MaHD'];?>&mact=<?php echo $d['MaChiTiet']; ?>"> Chưa xử lý </a>
					<?php } ?> 
					<?php if ($d['trangthai']==1){ ?>
						<a style='color: green;' href="quanlydonhang/xuly.php?ID=<?php echo $d['MaHD'];?>&mact=<?php echo $d['MaChiTiet']; ?>"> Đang vận chuyển </a>
					<?php } ?>
					<?php if ($d['trangthai']==2){ ?>
						<p style="font-weight: bold;color: blue;"> Kết thúc </p>
					<?php }?>
					<?php if ($d['trangthai']==3) { ?>
						<p style="font-weight: bold;"> Hủy </p>
					<?php } ?>

				</td>
				<td> <a href="quanlydonhang/xoa.php?ID=<?php echo $d['MaHD']?>&mact=<?php echo $d['MaChiTiet']; ?>" onclick="return confirm('Bạn có chắc chắn xóa đơn hàng này?')">Xóa</a></td>
			</tr>
		<?php } ?>
</body>
</html>