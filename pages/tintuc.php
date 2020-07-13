<!DOCTYPE html>
<html>
<head>
	<title>Tin tức</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/trangchinh.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Trang chủ</title>
	<script type="text/javascript">
    function lendautrang() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    window.onscroll = function() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("gotop").style.display = "block";
      } 
      else {
        document.getElementById("gotop").style.display = "none";
      }
    };
    </script>
    <style type="text/css">
    	#tintuc{
		min-height: 200px;
		margin-left: 5px;
		margin-top: 20px;
		margin-bottom: 30px;
	}
	#tt1{
		padding-left: 100px;
		height: auto;
		margin:10px 0px 0px 10px;
	}
	.tintuc1{
		height: 50px;
		line-height: 50px;
		text-align: center;
		border-bottom: 3px solid #ab4205ba;
	}
	.tintuc1 p{
		padding-left:5px; 
		background: #ab4205b0;
		display: inline-block;
		text-transform: uppercase;
		font-family: fonta;
		padding: 0 10px 0 10px;
		color: white;
		font-size: 28px;
		font-weight: bold;
		margin-bottom: 5px;
	}
	#ttct p{
		margin: 10px 40px 0px 40px;
	}
	#ttct img{
		margin: 40px;
	}
	.tta{
		float: left;
		width: 320px;
		text-align: center;
	}
	.tta1{
		width: 300px;
		min-height: 150px;
		margin-bottom: 10px;
	}
	#tt1 img{
		width: 300px;
		height: 200px;
	}	
    </style>
</head>
<body>
	<?php
	include('detail-page/csdl.php');
	$sql="select * from tintuc ";
	$kq=mysqli_query($link,$sql);
	$d=mysqli_fetch_array($kq);
	?>
	<div id="khung">
		<i style='font-size:20px' class='fas' id="gotop" onclick="lendautrang()">&#xf062;</i>
		<div id="top">
			<?php include("detail-page/dautrang.php"); ?>
			
		</div>
		<div id="menu">
			<?php include("detail-page/menu.php"); ?>
			
		</div>
		<div id="banner"></div>
		<div id="tintuc">
			<div class="tintuc1">
	 			<p>TIN TỨC</p>
	 		</div>	
	 		<div id="tt1">
	 			<?php
	 			$sql2="select * from tintuc";
	 			$kq2=mysqli_query($link,$sql2);
	 			while ($d=mysqli_fetch_array($kq2)) { ?>
	 				<div class="tta">
		 				<div class="tta1"><a href="http://localhost:8080/do_an_web1/pages/ttchitiet.php?MaTin=<?php echo $d['MaTin'];?>"><img src="../<?php echo $d['HinhAnh']; ?>"></a></div>
		 				<div  style=" border: 1px solid #BD5611" class="tta1"><a href="http://localhost:8080/do_an_web1/pages/ttchitiet.php?MaTin=<?php echo $d['MaTin'];?>"><?php echo $d['TieuDe']; ?></a><br><br>
	       					<p>
	       						<?php 
							      $NoiDung=$d['NoiDung'];
							      echo substr($NoiDung,0,150)."..."; 
							    ?>
						      	
						    </p>
	       				</div>
       				</div>
	 		<?php	}?>
	 		</div>
	 		<div id="footer">
			<?php include("detail-page/footer.php"); ?>
			
		</div>
 		</div>
</body>
</html>