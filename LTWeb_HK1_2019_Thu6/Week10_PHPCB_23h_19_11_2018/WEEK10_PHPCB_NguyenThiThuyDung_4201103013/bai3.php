<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		form{
			margin: auto;
			width: 260px;
			height: 152px;
		}
		table{
			width: 255px;
			height: 150px;
			background-color: lightblue;
		}
	</style>
</head>
<body>
		<?php
	$Ho=$Ten=$Dem="";
	if(isset($_POST["fullname"]) && $_POST["fullname"]!="")
	{
		$tmp=explode(" ", trim($_POST["fullname"]));
		$Ho=$tmp[0];
		$Ten=$tmp[count($tmp)-1];
		for($i=1;$i<count($tmp)-1;$i++)
		{
			$Dem .=($tmp[$i]." ");
		}
	}
	?>
	<form action="" method="post">
		<table >
			<tr>
				<td colspan="2" style="text-align: center;color: white;background-color: #1428C0">TÁCH HỌ VÀ TÊN</td>
			</tr>
			<tr>
				<td>Họ và tên</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td>Họ</td>
				<td><input type="text" name="ho" value="<?php echo $Ho ?>"></td>
			</tr>
			<tr>
				<td>Tên đệm</td>
				<td><input type="text" name="tendem" value="<?php echo $Dem ?>" size="20"></td>
			</tr>
			<tr>
				<td>Tên</td>
				<td><input type="text" name="ten" value="<?php echo $Ten ?>" size="20"></td>
			</tr>
			<tr>
				<td colspan="3" style="text-align: center;"><input type="submit" name="" value="Tách Họ Tên" size=""20></td>
			</tr>
		</table>
	</form>
</body>
</html>