
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
		}
		#top{
			margin: auto;
			height: 140px;
			width: 1200px;

		}
		#topa{
			background-color: pink;
			width: 1200px;
			height: 40px;
			font-weight: bold;
		}
		#topa1{
			width: 700px;
			height: 40px;
			line-height: 40px;
			padding-left: 5px;
			float: left;
		}
		#id01{
			width: 100%;
			height: 100%;
			margin:auto;
		}
		.topaa2 button{
			
		}
		.modal {
			display: none; /* Hidden by default 
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

		}

		#topaa{
			width: 500px;
			float: left;
			height: 40px;
			text-align: left;
		}
		#topaa p{
			font-weight: bold;
			line-height: 40px;
		}
		#topaa1{
			width: 250px;
			float: left;
			height: 40px;
		}
		
		.topaa2{
			/*background-color: red;*/
			width: 100px;
			height: 40px;
			float: left;
			text-decoration: none;
			line-height: 40px;
			/*text-align: center; */ 
		}
		
		
		
		
		.topaa2  span{
			margin-left: 5px;
		}

		.topaa3{
			
			height: 40px;
			width: 120px;
			margin-left: 10px;
			float: left;
		}
		
		#top1{
			width: 150px;
			height: 100px;
			
			float: left;
		}
		#top2{
			width: 600px;
			height: 100px;
			float: left;
		}
		#top2 form{
			padding-left: 55px;
			padding-top: 50px;
			border-radius: 1px;
		}
		#top2 form input{
			padding: 7px;
			width: 90%;
		}
		#top2 form button{
			padding: 7px
		}
		#top3{
			width: 450px;
			height: 100px;
			float: left;
			
		}
		#top3a{
			
			width: 150px;
			height: 100px;
			float: left;
			
			padding-left: 15px;
			padding-top: 45px;
		}
		#top3b{
			
			width: 300px;
			height: 100px;
			float: left;
			
		}
		#top3b p{
			text-align: center;
			padding-left: 16px;
			padding-bottom: 30px;
			font-size: 16px;
			font-weight: bold;
			color: blue;
			margin: -47px;
		}

		/*menu*/
		#menu{
			clear: both;
			height: 40px;
			margin-top: 5px;
		}
		#menu1{
			height: 40px;
			width: 1200px;
			background-color: gray;
			float: left
		}
		#menu1 ul
		{ list-style-type: none;
			text-align: center;
		}
		#menu1 li{
			font-weight: bold;
			width: 150px;
			height: 40px;
			position: relative;
			line-height: 40px;
			float: left;
		}
		#menu1 a{
			text-decoration: none;
			color: white;
			display: block;
		}
		#menu1 a:hover{
			background:#f1f1f1;
			color: #333; 
		}
		#menu1 .sub-menu{
			background-color: gray;
			display: none;
			position: absolute;
		}
		#menu1 li:hover .sub-menu{
			display: block;
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
		#khung{
			width: 1200px;
			margin: auto;
			font-family: Arial;
		}
		#menu{
			clear: both;
			height: 40px;
			margin-top: 5px;
		}
		#menu1{
			height: 40px;
			width: 1200px;
			background-color: gray;
			float: left
		}
		#menu1 ul
		{ list-style-type: none;
			text-align: center;
		}
		#menu1 li{
			font-weight: bold;
			width: 150px;
			height: 40px;
			position: relative;
			line-height: 40px;
			float: left;
		}
		#menu1 a{
			text-decoration: none;
			color: white;
			display: block;
		}
		#menu1 a:hover{
			background:#f1f1f1;
			color: #333; 
		}
		#menu1 .sub-menu{
			background-color: gray;
			display: none;
			position: absolute;
		}
		#menu1 li:hover .sub-menu{
			display: block;
		}
	</style>
</head>
<body>

	<div id="top"><?php include("dautrang.php"); ?></div>
	<div id="menu"><?php include("menu.php"); ?></div>

	<?php

	include("csdl.php");
	if(!isset($_SESSION['dathang'])){
		$_SESSION['dathang']=array();
	}
	if(count($_SESSION['dathang'])>0){ ?>
		<div style="margin-top: 20px" >
			<form name="banggiohang" method="get" action="xuly1.php">
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
							<td><?php echo $i+1 ?></td>
							<td><?php echo $_SESSION['dathang'][$i]['Mã sản phẩm'] ?></td>
							<td><?php echo $_SESSION['dathang'][$i]['Tên sản phẩm'] ?></td>
							<td ><?php echo number_format($_SESSION['dathang'][$i]['Giá tiền'],0,'.','.') ." VNĐ"; ?></td>
                     
							<td><input  id="sl" style="text-align: center;" type="number" name="sl<?php echo $i; ?>" value="<?php
							 echo $_SESSION['dathang'][$i]['Số lượng'] ?>" onchange="banggiohang.submit();"  ></td>
							 <input type="hidden" name="capnhat">
							<td ><?php $tien =($_SESSION['dathang'][$i]['Giá tiền'] * $_SESSION['dathang'][$i]['Số lượng']); echo number_format($tien,0,'.','.')."VNĐ"; ?></td>
							<td><a href="xuly1.php?xoa=<?php echo $i ; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này ?');">Xóa</a></td>
						</tr>
                       
					<?php $tong+=$_SESSION['dathang'][$i]['Giá tiền'] * $_SESSION['dathang'][$i]['Số lượng'] ; 
					 }
					 $_SESSION['tongtien']=$tong;
					?>
					
                    <tr style="text-align: right;">
                    	<td colspan="7">Tổng tiền thanh toán:<b><?php echo number_format($_SESSION['tongtien'],0,'.','.') ."VNĐ"; ?></b></td>
                    </tr>
				</table>

                
                <a style="margin: 10px 0px 0px 800px;" href="xuly1.php?huydat"class="btn btn-info btn-md" onclick="return confirm('Bạn có chắc chắn muốn hủy giỏ hàng không ?');">Xóa giỏ hàng</a>
				

				<a style="margin-top: 10px" href="xuly1.php?guidathang" class="btn btn-info btn-md">Đặt hàng</a>
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