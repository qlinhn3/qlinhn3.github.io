<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 07</title>
	<style>
	body{
		width: 25%;
		margin: auto;
		margin-top:50px; 
	}
	table{
		border-collapse: collapse;
	}
	th{
		background-color: #da294a;
		color: white;
		font-size: 25px;
	}
	tr{
		background-color: #f67d94;
		height: 35px;
	}
</style>
</head>
<body>
	<?php 
	$kq=$tenGV=$date=$phong="";
	if(isset($_POST['submit'])){
		$phong = $_POST['phong'];
		$tenGV = $_POST['tenGV'];
		$date = $_POST['date'];
		$kq="<tr>
				<td>
					<div>
						<p style='background-color: white;color: red;text-align: center;font-size: 25px;font-weight: bold;''>Kết quả sau khi nhấn Ghi nhận</p>
						<p style='background-color: #f67d94;text-align: center;'>Ngày $date <br> Giáo sư $tenGV sẽ dạy tại phòng : $phong</p>
					</div>
				</td>
			</tr>";
	}
	?>
	
	<form method="post" action="">
		<table style="width: 100%;">
			<tr>
				<th>ĐĂNG KÝ PHÒNG DẠY</th>
			</tr>
			<tr align="center" class="content">
				<td>
					<span>Phòng số</span>
					<select name="phong">
						<?php
						for($i=1; $i<10; ++$i){
							echo '<option>A00'.$i.'</option>';
						}
						?>
					</select>
				</td>
			</tr>
			<tr align="center" class="content">
				<td>
					<span>Giáo sư giảng dạy:</span> <input type="text" name="tenGV" value="<?php echo $tenGV ?>">
				</td>
			</tr>
			<tr align="center" class="content">
				<td>
					<span>Ngày / Tháng / Năm</span> 
					<input type="date" name="date" value="<?php echo $date ?>">
				</td>
			</tr>
			<tr align="center" class="content">
				<td>
					<input type="submit" name="submit" value="Ghi nhận">
				</td>
			</tr>
			<?php echo $kq; ?>
		</table>
		
	</form>
</body>
</html>