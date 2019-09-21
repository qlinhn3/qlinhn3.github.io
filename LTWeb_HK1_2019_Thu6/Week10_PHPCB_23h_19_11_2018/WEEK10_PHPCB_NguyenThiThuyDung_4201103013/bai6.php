<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		form{
			margin: auto;
			width: 1000px;
			text-align: center;
		}
		table{
			border-collapse: collapse;
			width: 700px;
			margin: auto;
		}
    tr,td{
      border: 1px solid gray;
    }
    div{
      background-color: white;
      margin:5px;
    }
    img{
      margin:auto;
      width: 350px;
    }
	</style>
</head>
<body>
	<?php
    $mang_dia_danh = array(
    array("ma"=>"nt","ten"=>"Biển Nha Trang", "hinh"=>"nha_trang.jpg"),
    array("ma"=>"dl", "ten"=>"Thành phố Đà Lạt", "hinh"=>"da_lat.jpg"),
    array("ma"=>"vt","ten"=>"Biển Vũng Tàu", "hinh"=>"vung_tau.jpg"),
    array("ma"=>"hl","ten"=>"Vịnh Hạ Long", "hinh"=>"vinh_ha_long.jpg"),
    array("ma"=>"pt","ten"=>"Biển Phan Thiết", "hinh"=>"phan_thiet.jpg"),
    array("ma"=>"ht","ten"=>"Biển Hà Tiên", "hinh"=>"ha_tien.jpg"),
    array("ma"=>"pq","ten"=>"Đảo Phú Quốc", "hinh"=>"phu_quoc.jpg"));
  ?>
		<table>
			<tr>
				<td colspan="2" style="background-color: #EAC3C3;padding: 10px;font-size: 30px;text-align: center;">
					DANH LAM THẮNG CẢNH
				</td>
			</tr>
			<tr style="background-color: #EAC3C3">
				<td style="float: top;vertical-align: top;">
          <div style="background-color: white">
					<h3>Danh sách địa danh</h3>
					<?php
           			foreach($mang_dia_danh as $mot_dia_danh)
            		{
              			$ten = $mot_dia_danh['ten'];
             			 $mdd = $mot_dia_danh['ma'];
              		echo "<a href='#".$mdd."'><b>".$ten."</b></a><br>";
           			}
            		?>
              </div>
				</td>
				<td style="float: top;vertical-align: top;">
          <img src="">					<?php
            		foreach($mang_dia_danh as $mot_dia_danh)
            		{
	              		$ma = $mot_dia_danh['ma'];
	              		$ten = $mot_dia_danh['ten'];
	              		$hinh = $mot_dia_danh['hinh'];
	              		$hinh_anh = "<img src ='images/$hinh'>";
	              		echo "<div class=i><h3>$ten</h3><br>
	              		<a id=$ma>$hinh_anh</a><br>
	              		<a href=#>Quay về đầu trang</a>
	              		</div>";
           			 }
            		?>
            	</td>
			</tr>
		</table>
</body>
</html>