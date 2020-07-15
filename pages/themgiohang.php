
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/themgiohang.css">
</head>
<body>

	<div id="top"><?php include("detail-page/dautrang.php"); ?></div>
	<div id="menu"><?php include("detail-page/menu.php"); ?></div>

	<?php

	include("detail-page/csdl.php");
	if(!isset($_SESSION['dathang'])){
		$_SESSION['dathang']=array();
	}
	if(count($_SESSION['dathang'])>0){ ?>
		<div style="margin-top: 20px" >
			<form name="banggiohang" method="get" action="detail-page/xuly1.php">
				<!-- <h1 style="text-align: center; font-size: 40px;font-weight: bold;">Thông tin giỏ hàng</h1> -->
				<table style="margin-left: 354px;text-align: center;min-width: 650px;" border="1">
					<tr   >
						<td colspan= "7" style="text-align: center;font-size: 40px;background-color: blue;font-weight: bold;color: white">Thông tin giỏ hàng</td>
					</tr>
					<tr style="font-weight: bold;color: red">
						<td>STT</td>
						<td>Mã sản phẩm</td>
						<td>Tên sản phẩm</td>
						<td>Giá tiền</td>
						<td>Số lượng</td>
						<td>Thành tiền</td>
						<td>Xóa</td>
					</tr>
					<?php
					$tong=0;
					for($i=0;$i<count($_SESSION['dathang']);$i++){ ?>

						<tr>
							<td>
								<?php echo $i+1 ?>
									
							</td>
							<td>
								<?php echo $_SESSION['dathang'][$i]['Mã sản phẩm'] ?>
									
							</td>
							<td>
								<?php echo $_SESSION['dathang'][$i]['Tên sản phẩm'] ?>
									
							</td>
							<td >
								<?php echo number_format($_SESSION['dathang'][$i]['Giá tiền'],0,'.','.') ." VNĐ"; ?>
									
							</td>
                     
							<td>
								<input  id="sl" style="text-align: center;" type="number" name="sl<?php echo $i; ?>" value="<?php
								echo $_SESSION['dathang'][$i]['Số lượng'] ?>" onchange="banggiohang.submit();" min ="1" max="10" >
							</td>
							 <input type="hidden" name="capnhat">
							<td>
								<?php $tien =($_SESSION['dathang'][$i]['Giá tiền'] * $_SESSION['dathang'][$i]['Số lượng']); echo number_format($tien,0,'.','.')."VNĐ"; ?>
							</td>
							<td>
								<a href="detail-page/xuly1.php?xoa=<?php echo $i ; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này ?');">Xóa</a>
							</td>
						</tr>
                       
					<?php $tong+=$_SESSION['dathang'][$i]['Giá tiền'] * $_SESSION['dathang'][$i]['Số lượng'] ; 
					 }
					 $_SESSION['tongtien']=$tong;
					?>
					
                    <tr style="text-align: right;">
                    	<td colspan="7">
                    		Tổng tiền thanh toán:<b><?php echo number_format($_SESSION['tongtien'],0,'.','.') ."VNĐ"; ?></b>
                    	</td>
                    </tr>
				</table>

                
                <a style="margin: 10px 0px 0px 800px;" href="detail-page/xuly1.php?huydat"class="btn btn-info btn-md" onclick="return confirm('Bạn có chắc chắn muốn hủy giỏ hàng không ?');">Xóa giỏ hàng</a>
				

				<a style="margin-top: 10px" href="detail-page/xuly1.php?guidathang" class="btn btn-info btn-md">Đặt hàng</a>
			</form>

		<?php 

	     }
	     if(count($_SESSION['dathang'])==0){
	     	echo"<p style='text-align:center;font-size:30px;color:red'>Giỏ hàng rỗng</p>";
	     } 

		?>


	</div>

	 
</body>
</html>

<!-- 
 -->