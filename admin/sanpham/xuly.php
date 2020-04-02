	<?php
	include('../../csdl.php');
	if(isset($_POST['gui_themsp'])){
		$maloai=$_POST['chonloai'];
		$tensp=$_POST['tensp'];
		$giasp=$_POST['giasp'];
		$hinh=$_FILES['hinhanh']['name'];
		$hinhanh="hinhanh/".$hinh;
		$soluong=$_POST['soluong'];
		$noidung=$_POST['noidung'];
		if (isset($_FILES['hinhanh'])){
                    if ($_FILES['hinhanh']['error'] > 0){
                    	echo 'File Upload Bị Lỗi';
                    }
                else{
                    move_uploaded_file($_FILES['hinhanh']['tmp_name'], './../../hinhanh/'.$_FILES['hinhanh']['name']);
                    echo 'File Uploaded';
                    }
                }
                else{
                    echo 'Bạn chưa chọn file upload';
                }
		$sql="insert into sanpham(MaLoai,TenSP,GiaTien,SoLuongTonKho,HinhAnh,NgayCapNhat,ThongTin) values ($maloai,'$tensp',$giasp,$soluong,'$hinhanh',CURRENT_TIMESTAMP,'$noidung')";
		$kq=mysqli_query($link,$sql);
		header('location:http://localhost:81/do_an_web/admin/quantri.php?key=SP');
	}
	//suasp
	if(isset($_POST['gui_suasp']) ){
	$idloai= $_POST['MaSp'];
	$hinh=$_FILES['suahinh']['name'];
	$hinhanh="hinhanh/".$hinh;
	$sua_loai=$_POST['sualoai'];
	$sua_masp=$_POST['suama'];
	$sua_tensp=$_POST['suaten'];
	$sua_giasp=$_POST['suagia'];
	$sua_slsp=$_POST['suasoluong'];
		if (isset($_FILES['suahinh'])){
                    if ($_FILES['suahinh']['error'] > 0){
                    	echo 'File Upload Bị Lỗi';;
                    }
                else{
                    move_uploaded_file($_FILES['suahinh']['tmp_name'], './../../hinhanh/'.$_FILES['suahinh']['name']);
                    echo 'File Uploaded';
                    }
                }
                else{
                    echo 'Bạn chưa chọn file upload';
                }
	$sua_ndsp=$_POST['suanoidung'];
	$sql2="update  sanpham set MaLoai=$sua_loai,TenSp='$sua_tensp',GiaTien=$sua_giasp,SoLuongTonKho=$sua_slsp,ThongTin='$sua_ndsp',HinhAnh='$hinhanh' where MaSp=$idloai";
	$kq=mysqli_query($link,$sql2);
	header('location:http://localhost:81/do_an_web/admin/quantri.php?key=SP');
	}?>