<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 03</title>
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
			border: 1px solid black;
			border-collapse: collapse;
		}
		th{
			background-color: #1212cc;
			color: white;
		}
		tr{
			background-color: #53b1ff;
			height: 35px;
		}
		td{
			color: blue;
		}
	</style>
</head>
<body>
	<?php
		$fullName=$ho=$tendem=$ten="";
		if (isset($_POST['submit'])){
			$fullName=$_POST['hoten'];
			$arr=explode(" ", $fullName);
			$ho=$arr[0];
			for ($i=1;$i<count($arr)-1;++$i){
				$tendem=$tendem.$arr[$i]." ";
			}
			$ten=$arr[count($arr)-1];
		}
	?>
	<form method="post" action="">
		<table>
			<tr>
				<th colspan="2">
					TÁCH HỌ VÀ TÊN
				</th>
			</tr>
			<tr>
				<td>
					Họ và tên:
				</td>
				<td>
					<input type="text" name="hoten" value="<?php echo $fullName ?>">
				</td>
			</tr>
			<tr>
				<td>
					Họ:
				</td>
				<td>
					<input type="text" name="ho" value="<?php echo $ho; ?>">
				</td>
			</tr>
			<tr>
				<td>
					Tên đệm:
				</td>
				<td>
					<input type="text" name="tendem" value="<?php echo $tendem; ?>">
				</td>
			</tr>
			<tr>
				<td>
					Tên:
				</td>
				<td>
					<input type="text" name="ten" value="<?php echo $ten; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" name="submit" value="Tách Họ Và Tên">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>