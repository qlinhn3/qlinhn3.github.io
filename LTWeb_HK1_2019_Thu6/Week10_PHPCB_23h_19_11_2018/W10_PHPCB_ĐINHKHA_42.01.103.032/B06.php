<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bài 6</title>
	<style type="text/css">
		.style1 {font-family: "Lucida Handwriting"; background-color: #666633; color: white}
	</style>
</head>
<body>
<?php 
	$mang_dia_danh = array();
	$mang_dia_danh = array(
	array("ma"=>"nt","ten"=>"Biển Nha Trang", "hinh"=>"nha_trang.jpg"),
	array("ma"=>"dl", "ten"=>"Thành phố Đà Lạt", "hinh"=>"da_lat.jpg"),
	array("ma"=>"vt","ten"=>"Biển Vũng Tàu", "hinh"=>"vung_tau.jpg"),
	array("ma"=>"hl","ten"=>"Vịnh Hạ Long", "hinh"=>"vinh_ha_long.jpg"),
	array("ma"=>"pt","ten"=>"Biển Phan Thiết", "hinh"=>"phan_thiet.jpg"),
	array("ma"=>"ht","ten"=>"Biển Hà Tiên", "hinh"=>"ha_tien.jpg"),
	array("ma"=>"pq","ten"=>"Đảo Phú Quốc", "hinh"=>"phu_quoc.jpg"));
	$mang = "";
	$ten = $mdd = "";
	foreach($mang_dia_danh as $mot_dia_danh)
	{
		$ten = $mot_dia_danh['ten'];
		$mdd = $mot_dia_danh['ma'];
		$mang= $mang."<a href='#$mdd'><b>$ten</b></a><br>";
	}
	$noi_dung = $link = $hinh = $hinh_anh = "";
	foreach($mang_dia_danh as $mot_dia_danh)
	{ 
		$mdd = $mot_dia_danh['ma'];
		$link = "<a name='$mdd'></a>";
		$ten = $mot_dia_danh['ten'];
		$hinh = $mot_dia_danh['hinh'];
		$hinh_anh = "<img src = '$hinh'>";
		$noi_dung = $noi_dung . "<p align='center'>$link<b>$ten</b>
		<br><br>$hinh_anh<br><a href='#top'>Quay về đầu
		trang</a></p>";
	}
?>
	<table bgcolor="#999966" align="center" width="1000">
	<tr>
      	<td colspan="2"><div align="center" class="style1">DANH LAM THẮNG CẢNH</div></td>
    </tr>
	<tr>
		<td width="200" bgcolor="white">
			<font style=" font-family: Tahoma;margin: 0;">Danh sách địa danh<br>
			<?php echo $mang?></font>
		</td>
		<td width="800">
			<font style="background-color: white; font-family: Tahoma"><?php echo $noi_dung ?></font>
		</td>
	</tr>	
	</table>
</body>
</html>