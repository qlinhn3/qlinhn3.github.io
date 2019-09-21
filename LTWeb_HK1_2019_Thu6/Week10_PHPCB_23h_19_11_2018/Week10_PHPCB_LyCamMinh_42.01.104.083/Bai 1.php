<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai01</title>
	<style type="text/css">
		body{
			width: 25%;
			margin: auto;
			margin-top:50px; 
		}
		table,th{
			border:1px solid black;
			border-collapse: collapse;
		
		}
		tr,th{	
			height: 35px;
			margin: 3px;
		}
		th{
			color: #1d50e2;;
			background-color: #c8b3b3;
		}
		td{
			background-color: #CFCFCF;
			text-align: center;
		}
		#id1{
			text-align: center;
			background-color: white;*/
			color: red;font-style: italic;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php
		$kq="<td colspan=2></td>";
		$noidung="";
		 if (isset($_POST['submit'])){//&&$_POST['noidung']!=""&&$_POST['maunen']!=""&&$_POST['mauchu']!=""){
			 $noidung=trim($_POST['noidung']);
			 $maunen="#".trim($_POST['maunen']);
			 $mauchu="#".trim($_POST['mauchu']);
			 $kq="<p style='color:$mauchu;background-color:$maunen;text-align:center'>$noidung</p>";
		}
	?>
	<form name="form1" method="post" action="">
		<table style="width: 100%;">
			<tr>
				<th colspan="2">ĐỊNH MÀU CHỮ MÀU NỀN</th>
			</tr>
			<tr>
				<td>Nội dung</td>
				<td><input type="text" name="noidung"></td>
			</tr>
			<tr>
				<td>Màu nền</td>
				<td><input type="text" name="maunen"></td>
			</tr>
			<tr>
				<td>Màu chữ</td>
				<td><input type="text" name="mauchu"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Xem kết quả" name="submit" style="background-color: #6d6dbe;color: white"></td>
			</tr>
		</table>
						
	</form>
	<?php echo $kq; ?>

</body>
</html>