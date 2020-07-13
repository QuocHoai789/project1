<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/tin.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
  <title></title>
</head>
<body>
  <?php
  include("csdl.php");
  ?>
  <div id="tintuc">
    <div id="tintuc1">
      <p style="color: white;font-size: 28px;font-weight: bold;margin-bottom: 5px">Tin tức</p>
    </div>
    <?php 
         $sql="select * from tintuc where MaTin ='1'" ;
         $kq=mysqli_query($link,$sql); 
          while ($d=mysqli_fetch_array($kq)) { ?>
            <div id="tt">
      <a href="ttchitiet.php?MaTin=<?php echo $d['MaTin']; ?>"><img width ="440"height="297" src="../<?php echo $d['HinhAnh']; ?>"></a>
      <a href="ttchitiet.php?MaTin=<?php echo $d['MaTin']; ?>"><span><?php echo $d['TieuDe']; ?></span></a>
      <p align="center">Nội dung cơ bản<br/>
      Gỗ được xem là sản phẩm nội thất chiếm diện tích lớn nhất và chi phối tổng thể thiết kế nội thất trong không gian nhà..</p>
    </div>
         <?php } ?>
        <div id="tt1">
    <?php 
         $sql2="select * from tintuc where MaTin <> '1' and MaTin <'5' " ;
         $kq2=mysqli_query($link,$sql2); 
          while ($d=mysqli_fetch_array($kq2)) { ?>
    
      <div class="tta">
        <a href="ttchitiet.php?MaTin=<?php echo $d['MaTin']; ?>"><img src="../<?php echo $d['HinhAnh']; ?>"></a>
        <a href="ttchitiet.php?MaTin=<?php echo $d['MaTin']; ?>"><?php echo $d['TieuDe']; ?></a>
      </div>
    <?php } ?>
     <!--  <div class="tta">
        <a href="Tintuc/ttchitiet.html"><img src="hinhanh/tt2.png"></a>
        <a href="Tintuc/ttchitiet.html">Chọn màu gỗ hợp với phong thủy</a>
      </div>
      <div class="tta">
        <a href="Tintuc/ttchitiet.html"><img src="hinhanh/tt3.png"></a>
        <a href="Tintuc/ttchitiet.html">Tinh hoa nghệ thuật gỗ cổ truyền</a>
      </div> -->
    </div> 
  </div>
  <div id="bando">
    <div id="bando1"><p style="color: white;font-size: 28px;font-weight: bold;margin-bottom: 5px">Bản đồ</p></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1251394805467!2d106.64671631428716!3d10.801726461681113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529489244b839%3A0xdc1deee568f5158f!2zTuG7mWkgdGjhuqV0IE3hu5ljIFRow6BuaA!5e0!3m2!1svi!2s!4v1557762046942!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;width: 380px" allowfullscreen></iframe>
  </div>
</body>
</html>