<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 8</title>
	<style>
	body{
		width: 30%;
		margin: auto;
		text-align: center;
		margin-top:20px;
	}
	table{
		width: 400px;
		border-collapse: collapse;
	}
	th{
		background: #fd7b92;
		color: white;
	}
	td{
		background: #fdf2f4;
		height: 30px;
	}
</style>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<?php
			
			$kq=$name=$type=$size="";
		if(isset($_FILES['fileUpload'])){
			$name=$_FILES['fileUpload']['name'];
			$type=$_FILES['fileUpload']['type'];
			$size=((int)$_FILES['fileUpload']['size'] / 1024);
		}
		if(isset($_POST['up'])){
			$kq="<tr>
			<td>
			<div>
			<p style='background-color: white;color: red;text-align: center;font-size: 20px;font-weight: bold;''>Kết quả sau khi nhấn thuộc tín của tập tin</p>
			<p style='background-color: #f67d94;text-align: center;'>
			Tên file: upload/ $name <br> 
			Loại file: $type <br>
			Kích cỡ: $size Kb
			</p>
			</div>
			</td>
			</tr>";
		}

		?>
		<table>
			<tr>
				<th>
					THUỘC TÍNH CỦA TẬP TIN
				</th>
			</tr>
			<tr>
				<td>
					<span>Tập tin: </span>
					<input type="text" name="_file"><input type="file" name="fileUpload" onchange="_file.value = this.value" >
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" name="up">Thuộc tính của tập tin</button>
				</td>
			</tr>
			<?php echo $kq; ?>
		</table>
	</form>
</body>
</html>