<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/sanpham1.css">
	
	<title></title>
</head>
<body>
	<?php
	include("detail-page/csdl.php");

	?>
	<div id="menudoc">
		<div id="dau">Danh mục sản phẩm</div>	
		<div id="doc">
			<ul>
				<?php
				$sql3="select * from loaisp ";
				$kq3=mysqli_query($link,$sql3); 
				while($d=mysqli_fetch_array($kq3)) { 
					?>
					<li><a href="http://localhost:8080/do_an_web1/pages/loaisanpham.php?MaLoai=<?php echo $d['MaLoai'] ; ?>"><?php echo $d['TenLoai']; ?></a> </li>
				<?php } ?>	
			</ul>
		</div>
	</div>
	<div id="sp">
		<div class="sp1"><p>Sản Phẩm</p></div>
		<div id="loc">
			<form name="locsp" method="get" action="sanpham.php" id="form_loc" >
				<label for="lsp">Loại sản phẩm: </label>
				<select name="lsp" id="lsp" onchange="form_loc.submit()" >
					<option value="0"<?php if(!isset($_GET['lsp']) ||$_GET['lsp']==0)  echo"selected='selected'";?>>Tất cả</option>
					<?php
                       $lsp="select * from loaisp";
                       $resuft=mysqli_query($link,$lsp);
                       // $tam=0;
                       while($d=mysqli_fetch_array($resuft)){
                       	// if($tam == 0) $tam=$d['MaLoai'];
                       	
                       
					?>
					
					<option value="<?php echo $d['MaLoai']; ?>" <?php if(isset($_GET['lsp']) && $_GET['lsp']==$d['MaLoai'] ) echo"selected='selected'"; ?>><?php echo $d['TenLoai']; ?></option>
				<?php } ?>
				</select>
				<label for="sapxep">Sắp xếp theo: </label>
				<select name="sapxep" id="sapxep" onchange="form_loc.submit()">
					
					<option value="NgayCapNhat"<?php if(isset($_GET['sapxep'])&&strcmp($_GET['sapxep'],"NgayCapNhat")==0) echo"selected='selected' "; ?> >Sản phẩm mới nhất</option>
					<option value="GiaTien"<?php if(isset($_GET['sapxep'])&&strcmp($_GET['sapxep'],"GiaTien")==0) echo"selected='selected' "; ?> >Giá từ cao đến thấp</option>
					<option value="TenSp" <?php if(isset($_GET['sapxep'])&&strcmp($_GET['sapxep'],"TenSp")==0) echo"selected='selected' "; ?>> Theo thứ tự bảng chữ cái </option>
					<option value="SoLuotMua" <?php if(isset($_GET['sapxep'])&&strcmp($_GET['sapxep'],"SoLuotMua")==0) echo"selected='selected' "; ?>>Sản phẩm bán chạy</option>
					<option value="SoLuotXem" <?php if(isset($_GET['sapxep'])&&strcmp($_GET['sapxep'],"SoLuotXem")==0) echo"selected='selected' "; ?>>Sản phẩm xem nhiều</option>
				</select>
			</form>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
             
			})
		</script>
		<?php 

		
	// else{
	// 	$sapxep="GiaTien";
	// }
		$sosp=8;
		$sotrang=2;
		if(isset($_GET['lsp']) && $_GET['lsp']!=0){
			$a=$_GET['lsp'];
			$sql3="select * from sanpham where MaLoai= $a";
		}
		else{
		$sql3="select * from sanpham";}
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
		

		if(isset($_GET['sapxep']) && isset($_GET['lsp']) ){
			if($_GET['lsp']!=0){
				$sapxep=$_GET['sapxep'];
				$tam=$_GET['lsp'];
				$query="select * from sanpham where MaLoai= $tam order by $sapxep DESC limit $vt,$sosp  ";
			}
			else{
				$sapxep=$_GET['sapxep'];
				$query="select * from sanpham order by $sapxep DESC limit $vt,$sosp ";	
			}
		}
		
		// else if(isset($_GET['sapxep']) && !isset($_GET['lsp'])){
		// 	$sapxep=$_GET['sapxep'];
		// 	$query="select * from sanpham order by $sapxep DESC limit $vt,$sosp  ";
		// }
		// else if(!isset($_GET['sapxep']) && isset($_GET['lsp'])){
		// 	if($_GET['lsp']!=0){
		// 		$tam=$_GET['lsp'];
		// 	    $query="select * from sanpham where MaLoai= $tam  limit $vt,$sosp  ";
		// 	    }
		// 	else{
		// 		$sapxep="NgayCapNhat";
		// 	    $query="select * from sanpham order by $sapxep DESC limit $vt,$sosp ";
		// 	}    
		// }
		
		else{
			$sapxep="NgayCapNhat";
			$query="select * from sanpham order by $sapxep DESC limit $vt,$sosp ";
		}

		$kq4=mysqli_query($link,$query); 
		
		while($d=mysqli_fetch_array($kq4)) { 
			?>
			
			<div class="sp2a"><div class="chua" style="position: relative;"><img class="imge" src="../<?php echo $d['HinhAnh']; ?>">
				<div class="text-sp-bc" onclick="return alert('Đã thêm vào giỏ hàng');"><a class="btn btn-info btn-md" href="xuly1.php?MaSp=<?php echo $d['MaSp']; ?>&soluong=1" >Thêm vào giỏ hàng</a></div>
				</div>
				<p class="tensp"><a href="http://localhost:8080/do_an_web1/pages/chitietsanpham.php?MaSp=<?php echo $d['MaSp']; ?>"><?php echo $d['TenSp']; ?></a></p>
				<p class="giasp">Giá:<?php echo number_format($d['GiaTien'],0,'.','.') ." đ"; ?></p>
			</div>

		<?php } ?>
		
		<br/>
		<p  id="pt" >
			<a href="http://localhost:8080/do_an_web1/pages/sanpham.php?gr=<?php echo $gr-1;  if(isset($sapxep)) echo '&sapxep='.$sapxep;  if(isset($_GET['lsp'])) echo '&lsp='.$_GET['lsp']; ?>">
				<?php if($gr>1){echo '&laquo';} ?>

			</a>
			<?php for($i=$dau;$i<=$cuoi;$i++){?>
				<a href="http://localhost:8080/do_an_web1/pages/sanpham.php?page=<?php echo $i;  if(isset($sapxep) ) echo '&sapxep=' .$sapxep;  if(isset($_GET['lsp'])) echo '&lsp='.$_GET['lsp']; ?>">
					<?php if(isset($_GET['page'])&& $_GET['page']==$i){echo "<span style='color:red'>".$i."</span>";}else echo $i; ?>

				</a>
			<?php } ?>
			<a href="http://localhost:8080/do_an_web1/pages/sanpham.php?gr=<?php echo $gr+1;  if(isset($sapxep) ) echo '&sapxep=' .$sapxep;  if(isset($_GET['lsp'])) echo '&lsp='.$_GET['lsp']; ?>">
				<?php if($gr<$tsn){echo '&raquo';} ?>

			</a> 
		</p>
		
	</div>
	
</body>
</html> 