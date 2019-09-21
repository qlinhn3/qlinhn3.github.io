<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		form{
			width: 340px;
			height: 66px;
			margin: auto;
		}
		table{
			background-color: #94D8B7 ;
			text-align: center;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<?php
		$display="none";
		$text="";
		if(isset($_POST["n"]) && $_POST["n"]>0 && is_numeric($_POST["n"]))
		{
			$display="";
			$n=$_POST["n"];
			for($i=1;$i<=10;$i++)
			{
				$text.=$n . "x" . $i . "=" . ($n*$i) .  "<br/>";
			}
		}
	?>
	<form action="" method="post">
		<table>
			<tr>
				<td colspan="2" style="text-align: center;background-color:#59C5BF;color: white">BẢNG CỬU CHƯƠNG</td>
			</tr>
			<tr>
				<td>Cửu Chương</td>
				<td><input type="text" name="n"><input type="submit" name="" value="Thực hiện"></td>
			</tr>
			<tr style="display: <?php echo $display?>;">
				<td class="h" colspan="2" style="background-color: #59C5BF;color: white">Kết quả</td>
			</tr>
			<tr style="display: <?php echo $display ?>">
				<td class="s" colspan="2"><?php echo $text?></td>
			</tr>
		</table>
	</form>
</body>
</html>