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
		border-collapse: collapse;
	}
	th{
		background-color: #EE1289;
		color: white;
	}
	#id1{
		background-color: #ff99ff;
	}
	#id2{
		background-color: #ffccff;
	}
</style>
</head>
<body>
	<?php
	$kq=$day=$month=$year="";
	if (isset($_POST['submit'])){
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$date=date_create("$year-$month-$day");
		$name= date_format($date,'l');
		$t=getDay($name);
		$kq="Ngày $day tháng $month năm $year là ngày $t";
	}

		function getDay($name){// lấy thứ trong tuần
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
						<input type="text" name="day" value="<?php echo $day; ?>" style="width: 10%">
						/
						<input type="text" name="month" value="<?php echo $month; ?>" style="width: 10%">
						/
						<input type="text" name="year" value="<?php echo $year; ?>" style="width: 10%">
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