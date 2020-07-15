<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/sanpham.css">
  <link rel="stylesheet" type="text/css" href="../css/baner.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>	
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

    

    function click1() {
        
        alert("Không tìm thấy trang.");
      }
    </script>
	<title>Sản phẩm</title>
</head>
<body>
<div id="khung">
  <i style='font-size:20px' class='fas' id="gotop" onclick="lendautrang()">&#xf062;</i>
	<div id="top"><?php include("detail-page/dautrang.php"); ?></div>
	<div id="menu"><?php include("detail-page/menu.php"); ?></div>
	<div id="baner"></div>
	<div ><?php include("detail-page/sanpham1.php"); ?></div>
	<div id="tin"><?php include("detail-page/tin.php"); ?></div>
	<div id="footer"><?php include("detail-page/footer.php"); ?></div>
</div>
</body>
</html>