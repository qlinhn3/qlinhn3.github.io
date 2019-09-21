<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 2</title>
	<style type="text/css">
		body{

			width: 50%;
			margin: auto;
			margin-top:50px; 
		}
		
		table{
			text-align: center;
			border: 1px solid black;
			border-collapse: collapse;
		}
		th{
			background-color: #EE1289;
			color: white;
		}
		#id1{
			background-color: #B5B5B5;
		}
		#id2{
			background-color: #CFCFCF;
		}
	</style>
</head>
<body>
	<?php
		$kq="";
		if (isset($_POST['submit'])){
			$ngay=$_POST['ngay'];
			$thang=$_POST['thang'];
			$nam=$_POST['nam'];
			//echo "$nam-$thang-$ngay";
			$date=date_create("$nam-$thang-$ngay");
			$name= date_format($date,'l');
			 $thu=layThu($name);
			$kq="Ngày $ngay tháng $thang năm $nam là ngày $thu";
		}

		function layThu($name){// lấy thứ trong tuần
			switch ($name) {
				case "Sunday":
					return "Chủ nhật";
				case 'Saturday':
					return "Thứ bảy";
				case 'Friday':	
					return "Thứ sáu";
				case 'Thursday':
					return "Thứ năm";
				case 'Wednesday':
					return "Thứ tư";
				case 'Tuesday':
					return "Thứ ba";
				default:
					return "Thứ hai";
				
			}
			return "Moday";
		}
	
	?>
	<form  method="post" action="">
		<table>
			<tr>
				<th>TÌM THỨ TRONG TUẦN</th>
			</tr>
			<tr id="id1">
				<td>
					Ngày/tháng/năm
					<input type="text" name="ngay" style="width: 10%">
					/
					<input type="text" name="thang" style="width: 10%">
					/
					<input type="text" name="nam" style="width: 10%">
					<input type="submit" name="submit" value="Tìm thứ trong tuần">
				</td>
			</tr>
			<tr id="id2">
				<td>
					<input type="text" name="ketqua" value="<?php echo $kq; ?>" style="width: 60%;background-color: #FFF68F;color: red">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>