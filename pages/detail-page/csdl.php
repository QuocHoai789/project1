<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$link = @mysqli_connect("localhost", "root", "") or die("Không thể kết nối !!!");
	mysqli_select_db($link, "doan_web") or die("DB không tồn tại !!!");
	mysqli_query($link,"set names'utf8'");
	?>
</body>
</html>