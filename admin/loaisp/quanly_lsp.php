<!DOCTYPE html>
<html>
<head>
	<title>Quản lý loại sản phẩm</title>
	<style type="text/css">
		td a{
		 color: blue;
		}
		th a{
		 color: blue;
		}
		th{
			min-width: 100px;
			min-height: 50px;
		}
	</style>
	<!-- load lai trang -->
	<!-- <meta http-equiv="refresh" content="3"> -->
</head>
<body>
	<?php
	include("../csdl.php");
    	$kq = mysqli_query($link, 'select count(MaLoai) as tong from loaisp');
        $dong = mysqli_fetch_array($kq);
        $soluongdong = $dong['tong']; // so luong dong ghi trong db
        //limit va trang hien tai
		$tranghientai = isset($_GET['page']) ? $_GET['page'] : 1;

        $limit = 5;
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
        $kq1 = mysqli_query($link, "SELECT * FROM loaisp LIMIT $start, $limit");
	?>
	<div>
		<caption ><h1 style="text-align: center;">Quản Lý Loại Sản Phẩm.</h1></caption>
			
		<table width="1090" height="400" border="1" align="center"  >
			<tr>
				<th> Mã loại </th>
				<th> Tên loại sản phẩm </th>
				<th><a href="http://localhost:81/do_an_web/admin/loaisp/themloaisp.php">Thêm</a></th>
			</tr>
			<?php
		     while ($dong = mysqli_fetch_array($kq1)){ ?>
				<tr>
				<td> <?php echo $dong['MaLoai']; ?> </td>
				<td> <?php echo $dong['TenLoai']; ?> </td>
				<td><a href="http://localhost:81/do_an_web/admin/loaisp/sualoaisp.php?MaLoai=<?php echo $dong['MaLoai']; ?>" >sửa</a><span> | </span><a href="http://localhost:81/do_an_web/admin/loaisp/xoaloaisp.php?MaLoai=<?php echo $dong['MaLoai'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa loại sản phẩm này')">xóa</a></td>
				</tr>
			<?php }
				?> 
		</table>
	</div>
	<div align="center">
			<?php 
			//hien thi <<
			if ($tranghientai > 1 && $tongtrang > 1){
		        echo '<a href="http://localhost:81/do_an_web/admin/quantri.php?key=QLL&page='.($tranghientai-1).'">Lùi</a> | ';
		    }
		    for ($i = 1; $i <= $tongtrang; $i++){
		    	if ($i == $tranghientai){
		                    echo '<span>'.$i.'</span> | ';
		                }
		                else{
		                    echo '<a href="http://localhost:81/do_an_web/admin/quantri.php?key=QLL&page='.$i.'">'.$i.'</a> | ';
		                }
		        }
		        if ($tranghientai < $tongtrang && $tongtrang > 1){
		            echo '<a href="http://localhost:81/do_an_web/admin/quantri.php?key=QLL&page='.($tranghientai+1).'">Tới</a> | ';
		        }
		    ?>
	</div>
</body>
</html>