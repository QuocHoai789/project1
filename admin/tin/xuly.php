<?php
include("../../csdl.php");
if(isset($_POST['gui_themtin'])){
	$tieude=$_POST['tieude'];
	$hinh=$_FILES['hinhanh']['name'];
	$hinhanh="hinhanh/".$hinh;
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
    $noidung=$_POST['noidung'];
	$sql="insert into tintuc(TieuDe, NoiDung, HinhAnh ) values('$tieude', '$noidung', '$hinhanh')
	";
	$kq=mysqli_query($link,$sql);
	header('location:http://localhost:81/do_an_web/admin/quantri.php?key=tt');
		}
		if(isset($_POST['gui_suatin']) ){
	$matin= $_POST['MaTin'];
	$suatieude=$_POST['suatieude'];
	$suanoidung=$_POST['suanoidung'];
	$hinh=$_FILES['hinhanh']['name'];
	$hinhanh="hinhanh/".$hinh;
	if (isset($_FILES['hinhanh'])){
                    if ($_FILES['hinhanh']['error'] > 0){
                    	echo 'File Upload Bị Lỗi';;
                    }
                else{
                    move_uploaded_file($_FILES['hinhanh']['tmp_name'], './../../hinhanh/'.$_FILES['hinhanh']['name']);
                    echo 'File Uploaded';
                    }
                }
                else{
                    echo 'Bạn chưa chọn file upload';
                }
	$sql4="update  tintuc set TieuDe='$suatieude', NoiDung='$suanoidung', HinhAnh='$hinhanh' where MaTin=$matin";
	$kq4=mysqli_query($link,$sql4);
	header('location:http://localhost:81/do_an_web/admin/quantri.php?key=tt');}

?>