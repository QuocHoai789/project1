<?php session_start(); 
if(!isset($_SESSION['dathang'])){
    $_SESSION['dathang']=array();
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/dautrang.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>đầu trang</title>
  
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
</head>
<body>
  <div id="top">
    <i style='font-size:20px' class='fas' id="gotop" onclick="lendautrang()">&#xf062;</i>
    <?php
    include("csdl.php");
    ?>

    <div id="topa">
     <div id="topa1"><p>Nội thất Thanh Mộc -Chuyên cung cấp sỉ lẻ đồ nội thất giá rẻ tại TP.HCM</p></div>

     <div id="topaa">
      <div id="topaa1"><p><a href="#">noithatgiare@gmail.com</a></p></div>
      <div class="topaa2">
        <?php if(!isset($_SESSION['username'])) { ?>
        <a href="dangnhap.php"><button  style="width: 100%;height: 90%;background-color: #337ab7;margin-top: 1px" ><i class="fas fa-user" style="color: white"></i><span style="font-weight: bold;color: white;">Đăng nhập</span></button></a>
                 <?php }
                 else { ?> 

                  <div class="dropdown">
                    <button style="background:#337ab7;color: white " class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION['username']; ?>
                      <span class="caret"></span></button>
                      <ul  class="dropdown-menu">
                        <li><a href="ttdonhang.php">Xem hóa đơn</a></li>
                        <li><a href="ttcanhan.php">Xem thông tin cá nhân</a></li>
                        <li><a href="detail-page/xuly1.php?a" onclick="return confirm('Bạn có muốn đăng xuất không?');">Đăng xuất</a></li>
                      </ul>
                    </div>

                 <?php }
                   

                  ?>
                  </div>
                  
                  
                  <div class="topaa3"><i style='font-size:20px;color: blue; padding-left: 7px;padding-top: 10px; ' class='fab'>&#xf082;</i>
                    <i style='font-size:20px;padding-left: 7px;color: blue; ;padding-top: 10px;' class='fab'>&#xf099;</i>

                    
                  </div>
                </div>
              </div>
              <div id="top1">
                <img src="../hinhanh/logo.png" width="150" height="100">
              </div>
              <div id="top2">
                <form action="timkiem.php" method="get" name="timkiem">
                  <input type="text" placeholder="Nhập vào từ khóa bạn cần tìm..." name="search" size="40" value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>" >
                  <button id="guitim" type="submit" ><i  class="fa fa-search"></i></button>
                </form>
              </div>
              <div id="top3">
                <div id="top3a">
                  <a href="themgiohang.php" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Giỏ Hàng<?php if(isset($_SESSION['dathang'])) echo"<span style='color:red;margin-left:8px'>".count($_SESSION['dathang'])."</span>" ?>
                  </a>
                </div>
                <div id="top3b">
                 <span><img style=" width: 50px;height: 50px;margin-top: 45px; margin-left: 40px"src="../hinhanh/phone1.png"></span>
                 <p>0968339560<br/>
                   <span style="padding-left: 38px">0393362596 (Zalo)</span></p>
                 </div>
               </div>
             </div>
             
           </body>
           </html>


           
