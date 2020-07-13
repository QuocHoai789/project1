<?php
session_start();
include('csdl.php');

//Làm giỏ hàng
if(!isset($_SESSION['dathang'])){
		$_SESSION['dathang']=array();
	}
	if(isset($_GET['MaSp'])&& isset($_GET['soluong'])){
		$MaSp=$_GET['MaSp'];
		$soluong=$_GET['soluong'];
		$kt=0;
		for ($i=0; $i <count($_SESSION['dathang']) ; $i++) { 
			if($MaSp==$_SESSION['dathang'][$i]['Mã sản phẩm']){
				$_SESSION['dathang'][$i]['Số lượng']+=$soluong;

				$kt=1; break;
			}
		}

		if($kt==0){
			$k=count($_SESSION['dathang']);
			$sql="select * from sanpham where MaSp = ".$MaSp;
			$kq=mysqli_query($link,$sql);
			$d=mysqli_fetch_array($kq);
			$_SESSION['dathang'][$k]['Mã sản phẩm']=$d['MaSp'];
			$_SESSION['dathang'][$k]['Tên sản phẩm']=$d['TenSp'];
			$_SESSION['dathang'][$k]['Giá tiền']=$d['GiaTien'];
			$_SESSION['dathang'][$k]['Số lượng']=$soluong;

		}
		echo'<script type="text/javascript">
			history.back();
		</script>';

	}

//Hủy giỏ hàng
if(isset($_GET['huydat']))
{	
	unset($_SESSION['dathang']);
	header('Location: http://localhost:8080/do_an_web1/pages/themgiohang.php');
}


//Xóa 1 sản phẩm trong giỏ hàng
if(isset($_GET['xoa'])){
	$xoa=$_GET['xoa'];
	for ($i=$xoa; $i <count($_SESSION['dathang']) ; $i++) { 
		$_SESSION['dathang'][$i]=$_SESSION['dathang'][$i+1];


	}
	unset($_SESSION['dathang'][count($_SESSION['dathang'])-1]);
	header('Location: http://localhost:8080/do_an_web1/pages/themgiohang.php');
}

//Cập nhật số lượng sp trong giỏ hàng


if(isset($_GET['capnhat'])){
	
	for ($i=0; $i <count($_SESSION['dathang']) ; $i++) { 
		
		      $_SESSION['dathang'][$i]['Số lượng']=$_GET['sl'.$i];	
		      
		   
		}

		header('Location: http://localhost:8080/do_an_web1/pages/themgiohang.php');
	}
	 


//Đăng xuất
if(isset($_GET['a'])){
	session_destroy();
	
	header('Location: http://localhost:8080/do_an_web1/pages/trangchu.php');
}

//Kiểm tra có đăng nhập trước khi mua hàng chưa
if(isset($_GET['guidathang'] )&& isset($_SESSION['username'])){

	header('location: http://localhost:8080/do_an_web1/pages/hoadon.php');
}

else if(isset($_GET['guidathang']) && !isset($_SESSION['username'])){ ?>
	<script type="text/javascript">
		alert("Bạn phải đăng nhập trước khi thanh toán");
		window.location = '../dangnhap.php';
	</script>
  <?php
   // header('Location:dangnhap.php');
}

//Gửi thông tin mua hàng sau khi đã dăng nhập
if(isset($_GET['guihoadon'])){
	$tennguoinhan=$_GET['tennguoinhan'];
	$diachigiao=$_GET['diachigiao'];
	$dienthoai=$_GET['dienthoai'];
	$username=$_SESSION['username'];
	$noidung=$_GET['noidung'];
	$tongtien=$_SESSION['tongtien'];
	date_default_timezone_set("Asia/Bangkok");
	$a = date('Y-m-d H:i:s');
	$sql="select * from user where Username='$username'";
	$kq=mysqli_query($link,$sql);
	$d=mysqli_fetch_array($kq);
	$ID=$d['ID'];
	$sql2="insert into hoadon(ID,NgayLap,TenNguoiNhan,SDT,DiaChiGiao,NoiDung,tongtien) values('$ID','$a','$tennguoinhan','$dienthoai','$diachigiao','$noidung','$tongtien')";
	$kq2=mysqli_query($link,$sql2);
	
	 $hd=mysqli_insert_id($link);
	for($i=0;$i<count($_SESSION['dathang']);$i++){
		 // $resurt=mysqli_query($link,"select MaHD from lkhoadon ");
		 // $resurt2=mysqli_fetch_array($resurt);
		 // $hd=$resurt2['MaHD'];

		$MaSp  = $_SESSION['dathang'][$i]['Mã sản phẩm'];
		$gia=$_SESSION['dathang'][$i]['Giá tiền'];
		$soluong=$_SESSION['dathang'][$i]['Số lượng'];
		$GiaTien=$gia*$soluong;
		
		$sql3="insert into chitiethd(MaHD,MaSp,SoLuong,GiaTien) values('$hd','$MaSp','$soluong','$GiaTien')";
		
		$kq3=mysqli_query($link,$sql3);
	}
	unset($_SESSION['dathang']);
	header('Location:trangchu.php');
	
}
//Liên hệ
if(isset($_POST['guilienhe'])){
	$hovaten=$_POST['hovaten'];
	$email=$_POST['email'];
	$sodienthoai=$_POST['sodienthoai'];
	$ndlienhe=$_POST['ndlienhe'];
	$sql="insert into lienhe (HTen,Email,SDT,NoiDung) values('$hovaten','$email',$sodienthoai,'$ndlienhe')";
	mysqli_query($link,$sql); ?>
	<script type="text/javascript">
		alert("Đã gủi phản hồi");
		window.location="trangchu.php";
	</script>
<?php } ?>

