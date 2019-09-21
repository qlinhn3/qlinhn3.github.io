<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		form{
			margin: auto;
			padding: 10px;
			width: 775px;
			height: 60px;
			text-align: center;
		}
		table{
			border-collapse: collapse;
			width: 774px;
			height: 48px;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td colspan="5" style="color: white;text-align: center; background-color: #DD1084">TÌM THỨ TRONG TUẦN</td>
			</tr>
			<tr style="background-color: #E68383">
				<td>Ngày/tháng/năm:</td>
				<td><input type="text" name="ngay"></td>
				<td><input type="text" name="thang"></td>
				<td><input type="text" name="nam"></td>
				<td><input type="submit" name="" value="Tìm thứ trong tuần"></td>
			</tr>
			<tr>
				<td colspan="5" style="text-align: center;size: 20px;"><input type="text" name="" value="<?php echo $kq?>" >
				</td>
			</tr>
		</table>
	</form>
	<?php
	$arr=["Chủ nhật","Thứ Hai","Thứ Ba","Thứ Tư","Thứ Năm","Thứ Sáu","Thứ Bảy"];
	if(isset($_POST["ngay"]) && isset($_POST["thang"]) && isset($_POST["nam"]))
	{
		$ngay=$_POST["ngay"];
		$thang=$_POST["thang"];
		$nam=$_POST["nam"];
		$jd=cal_to_jd(CAL_GREGORIAN,$thang,$ngay,$nam);
		$ngayf=jddayofweek($jd,0);
		$kq="ngày ".$ngay."/".$thang."/".$nam."là ngày ".$arr[$ngayf];
	}
	?>
</body>
</html>