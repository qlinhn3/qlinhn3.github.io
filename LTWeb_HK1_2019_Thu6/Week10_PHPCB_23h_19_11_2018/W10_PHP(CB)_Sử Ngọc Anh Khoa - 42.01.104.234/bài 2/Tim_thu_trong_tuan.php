<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tim thu trong tuan</title>
<style type="text/css">
<!--
.style1 {
	font-family: "Lucida Handwriting";
	color: #FFFFFF;
}
-->
</style>
</head>

<body>
<?php
	if(isset($_POST["ngay"]) && isset($_POST["thang"]) && isset($_POST["nam"])){
		$ngay = $_POST["ngay"];
		$thang = $_POST["thang"];
		$nam = $_POST["nam"];
		
		$jd = cal_to_jd(CAL_GREGORIAN,$thang,$ngay,$nam);
		$day = jddayofweek($jd,0);
		
		switch($day)
		{
			case 0:
				$thu = "Chủ nhật";
				break;
			case 1:
				$thu = "Thứ hai";
				break;
			case 2:
				$thu = "Thứ ba";
				break;
			case 3:
				$thu = "Thứ tư";
				break;
			case 4:
				$thu = "Thứ năm";
				break;
			case 5:
				$thu = "Thứ sáu";
				break;
			case 6:
				$thu = "Thứ bảy";
				break;
		}
		$chuoi = "Ngày $ngay tháng $thang năm $nam là ngày $thu";
	}
?>

<form id="form1" name="form1" method="post" action="Tim_thu_trong_tuan.php">
  <table width="647" border="1" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#CC0000"><span class="style1">TÌM THỨ TRONG TUẦN </span></td>
    </tr>
    <tr>
      <td width="499" bgcolor="#CC3366">Ngày/tháng/năm:
        <label>
        <input name="textfield" type="text" value="<?php echo $ngay;?>" size="10" />
        /
        <input name="textfield2" type="text" value="<?php echo $thang;?>" size="10" />
      /
      <input name="textfield3" type="text" value="<?php echo $nam;?>" size="10" />
        </label></td>
      <td width="132" bgcolor="#CC3366"><input type="submit" name="Submit" value="Tìm thứ trong tuần" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FF33CC"><label>
	  
        <input name="textfield4" type="text" value="<?php echo $chuoi;?>" size="50" bgcolor="#FFFFCC" />
      </label></td>
    </tr>
  </table>
</form>

</body>
</html>
