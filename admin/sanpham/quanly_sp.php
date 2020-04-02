<!DOCTYPE html>
<html>
<head>
	<title>Quản lý sản phẩm</title>
	<style type="text/css">
		td a{
		 color: blue;
		}
		th a{
		 color: blue;
		}
	</style>
</head>
<body>
	<?php
	include("../csdl.php");
	// $sql="select * from sanpham,loaisp where loaisp.MaLoai=sanpham.MaLoai";
	// 	$kq=mysqli_query($link,$sql);
 // 	    $sl=mysqli_num_rows($kq);
		$kq = mysqli_query($link, 'select count(MaSp) as tong from sanpham');
        $dong = mysqli_fetch_array($kq);
        $soluongdong = $dong['tong']; // so luong dong ghi trong db
        //limit va trang hien tai
		$tranghientai = isset($_GET['page']) ? $_GET['page'] : 1;

        $limit = 4;
        //tinh tong trang
        $tongtrang = ceil($soluongdong / $limit);
        //gioi han 1-tong trang
        if ($tranghientai > $tongtrang){
            $tranghientai = $tongtrang;
        }
        else if ($tranghientai < 1){
            $tranghientai = 1;
        }
        //vi tri
        $start = ($tranghientai - 1) * $limit;
        //lay ds hien thi trong 1 trang
        $sql2="select * from sanpham,loaisp where loaisp.MaLoai=sanpham.MaLoai limit $start,$limit";
	 	$kq2=mysqli_query($link,$sql2);
	?>
	<div>

	 	
		<caption ><h1 style="text-align: center;">Quản Lý Sản Phẩm.</h1></caption>
		<table width="1090" height="400" border="1" align="center"  >
			<tr>
				<th>ID</th>
				<th>Loại sản phẩm</th>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Giá tiền</th>
				<th>Thông tin</th>
				<th>Hình ảnh</th>
				<th>Số lượng</th>
				<th>Ngày cập nhật</th>
				<th><a style="color: blue;" href="http://localhost:81/do_an_web/admin/sanpham/themsp.php">Thêm</a></th>
			</tr>
			<?php
			while ($sp=mysqli_fetch_array($kq2)) { ?>
				<tr>
					<td> <?php echo $sp['MaSp']; ?> </td>
					<td> <?php echo $sp['TenLoai']; ?></td>
					<td> <?php echo $sp['MaSp']; ?>  </td>
					<td> <?php echo $sp['TenSp']; ?> </td>
					<td> <?php echo $sp['GiaTien']; ?> </td>
					<td> <?php echo $sp['ThongTin']; ?> </td>
					<td width="50" height="50" > <img width="50" height="50" src="/do_an_web/<?php echo($sp['HinhAnh'])?>"> </td>
					<td> <?php echo $sp['SoLuongTonKho']; ?> </td>
					<td><?php echo $sp['NgayCapNhat']?></td>
					<td width="70"><a href="http://localhost:81/do_an_web/admin/sanpham/suasp.php?MaSP=<?php echo $sp['MaSp']; ?>" >sửa</a><span> | </span><a href="http://localhost:81/do_an_web/admin/sanpham/xoasp.php?MaSp=<?php echo $sp['MaSp']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa loại sản phẩm này')" >xóa</a></td>
				</tr>
				<?php
			}
			?> 
		</table>
	</div>
	<div align="center" style="margin-top: 30px;margin-bottom: 10px; font-size: 20px; color: red;">
			<?php 
			//hien thi <<
			if ($tranghientai > 1 && $tongtrang > 1){
		        echo '<a style="color: #108f54;" href="http://localhost:81/do_an_web/admin/quantri.php?key=SP&page='.($tranghientai-1).'">Lui</a> | ';
		    }
		    for ($i = 1; $i <= $tongtrang; $i++){
		    	if ($i == $tranghientai){
		                    echo '<span>'.$i.'</span> | ';
		                }
		                else{
		                    echo '<a href="http://localhost:81/do_an_web/admin/quantri.php?key=SP&page='.$i.'">'.$i.'</a> | ';
		                }
		        }
		        if ($tranghientai < $tongtrang && $tongtrang > 1){
		            echo '<a style="color: #108f54;" href="http://localhost:81/do_an_web/admin/quantri.php?key=SP&page='.($tranghientai+1).'">Tới</a> | ';
		        }
		    ?>
	</div>

</body>
</html>