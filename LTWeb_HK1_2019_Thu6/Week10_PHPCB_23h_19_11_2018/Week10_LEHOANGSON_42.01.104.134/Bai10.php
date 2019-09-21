<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 10</title>
	<style type="text/css">
	body{
		width:30%;
		margin: auto;
		margin-top:50px; 
	}
	table{
		width: 100%;
		padding: 10px;
	}
	table,th{
		border-collapse: collapse;
	}
	th{
		background-color: #ffbf80;
		color: #ff3300;
		font-size: 25px;
	}
	tr{
		background-color: #b3ffb3;
		height: 35px;
	}
	input[type="text"]{
		width: 250px;
	}
</style>
</head>
<body>
	<?php 
	$chuoi=$tu=$kq="";
	if(isset($_POST['submit'])){
		$chuoi=$_POST['chuoi'];
		$tu=$_POST['tu'];
		$kq=strpos($chuoi,$tu);
		if(is_numeric($kq)){
			$kq="Tìm thấy từ $tu trong chuỗi tại vị trí $kq";
		}
		else $kq="Không tìm thấy";
	}
	?>
	<form method="post" action="">
		<table>
			<tr>
				<th colspan="2">
				TÌM TỪ TRONG CHUỖI</th>
			</tr>
			<tr>
				<td>Chuỗi</td>
				<td>
					<input type="text" name="chuoi" value="<?php echo $chuoi ?>">
				</td>
			</tr>
			<tr>
				<td>Từ cần tìm:</td>
				<td>
					<input type="text" name="tu" value="<?php echo $tu; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" name="submit" value="Tìm kiếm" style="background-color: green;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="text" name="" value="<?php echo $kq; ?>">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>