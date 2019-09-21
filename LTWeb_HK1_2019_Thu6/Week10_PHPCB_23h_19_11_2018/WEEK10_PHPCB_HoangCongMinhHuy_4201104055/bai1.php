<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		form{
			margin: auto;
			padding: 10px;
			width: 247px;
			height: 130px;
			text-align: center;
		}
		table{
			background-color: lightblue;
		}
		h3{
			color: red;
			font-style: italic;
			text-align: center;
			top: 80px;
		}
		p{
			text-align: center;
			width: 300px;
			margin: auto;
		}
	</style>
</head>
<body>
	<form action="" method="post">
	<table>
		<tr>
			<td colspan="2" style="text-align: center;color: white; background-color: #D42E2E; font-family: segoe ui light">ĐỊNH DẠNG MÀU CHỮ - MÀU NÊN</td>
		</tr>
		<tr>
			<td>Nội dung:</td>
			<td><input type="text" name="noidung" ></td>
		</tr>
		<tr>
			<td>Màu nền:</td>
			<td><input type="text" name="maunen"></td>
		</tr>
		<tr>
			<td>Màu chữ</td>
			<td><input type="text" name="mauchu"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="" value="Xem kết quả" style="background-color: #31E58E; "></td>
		</tr>
	</table>
	</form>
	    <?php
        	if(isset($_POST["noidung"]) && $_POST["noidung"] != ""){
        	$maunen = "#".$_POST['maunen'];
        	$mauchu = "#".$_POST['mauchu'];
       	 	$noidung = $_POST['noidung'];
        	echo "<h3 >kết quả sau khi nhấn Xem kết quả</h3>";
        	echo "<p style='background:$maunen; color:$mauchu'>$noidung</p>";
       		}
       ?>
</body>
</html>