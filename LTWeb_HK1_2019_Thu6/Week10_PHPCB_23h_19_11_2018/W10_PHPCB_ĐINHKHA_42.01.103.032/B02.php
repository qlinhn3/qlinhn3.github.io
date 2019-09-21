<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 2</title>
	<style type="text/css">
		.style1 {font-family: "Lucida Handwriting"; background-color: #cc0066; color: white}
	</style>
</head>
<?php
	$ngay = $_POST["ngay"];
	$thang = $_POST["thang"];
	$nam = $_POST["nam"];
	$jd = cal_to_jd(CAL_GREGORIAN, $thang, $ngay, $nam);
	$day = JDDayOfWeek($jd,0);
	switch ($day) {
		case '0':
			$thu = 'Chủ nhật';
			break;
		case '1':
			$thu = 'thứ hai';
			break;
		case '2':
			$thu = 'thứ ba';
			break;
		case '3':
			$thu = 'thứ tư';
			break;
		case '4':
			$thu = 'thứ năm';
			break;
		case '5':
			$thu = 'thứ sáu';
			break;
		case '6':
			$thu = 'thứ bảy';
			break;
	}
	$ketqua = "Ngày " . $ngay . " tháng " . $thang . " năm " . $nam . " là ngày " . $thu;
?>
<body>
	<form name="form1" method="post" action="">
		<table width="700" border="1" align="center" style="border-collapse: collapse;">
			<tr>
      			<td bgcolor="#cc0066"><div align="center" class="style1">TÌM THỨ TRONG TUẦN</div></td>
   			</tr>
   			<tr>
   				Ngày/tháng/năm: 
   				<input name="ngay" type="text" id="ngay" value="<?php echo $ngay?>" size="5">
   				/
   				<input name="thang" type="text" id="thang" value="<?php echo $thang?>" size="5">
   				/
   				<input name="nam" type="text" id="nam" value="<?php echo $nam?>" size="5">&nbsp;
   				<input name="xemkq" type="submit" id="xemkq" value="Tìm thứ trong tuần" style="background-color:#ffccff">
   			</tr>
   			<tr>
   				<td><label>
        			<center><input name="ketqua" type="text" id="ketqua" value="<?php echo $ketqua?>" size="50" style="background-color:#ffffcc;color: red"></center>
      			</label></td>
   			</tr>
		</table>
	</form>
</body>
</html>