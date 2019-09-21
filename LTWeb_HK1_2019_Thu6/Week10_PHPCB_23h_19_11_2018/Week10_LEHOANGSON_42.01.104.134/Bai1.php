<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai1</title>
	<link rel="stylesheet" type="text/css" href="Bai1.css">
	<style type="text/css" src="Bai1.css"></style>
</head>

<body>
	<?php 
	$kq=$phrase=$bkgColor=$fntColor="";
	if(isset($_POST['submit'])){
		$phrase=trim($_POST['phrase']);
		$bkgColor='#'.trim($_POST['bkgColor']);
		$fntColor='#'.trim($_POST['fntColor']);
		$kq='<div>
		<p style="background-color: white;color: red;text-align: center;font-size: 25px;font-weight: bold;">Kết quả sau khi nhấn xem</p>
		<p style="background-color: '.$bkgColor.';color: '.$fntColor.';text-align: center;">'.$phrase.'</p>
		</div>';
	}
	?>
	<form name="form1" method="post" action="">
		<table style="width: 100%;">
			<tr>
				<th colspan="2">ĐỊNH MÀU CHỮ MÀU NỀN</th>
			</tr>
			<tr>
				<td>Nội dung</td>
				<td><input type="text" name="phrase" value="<?php echo $phrase; ?>"></td>
			</tr>
			<tr>
				<td>Màu nền</td>
				<td><input type="text" name="bkgColor" value="<?php echo $bkgColor; ?>"></td>
			</tr>
			<tr>
				<td>Màu chữ</td>
				<td><input type="text" name="fntColor" value="<?php echo $fntColor; ?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Xem kết quả" name="submit" style="background-color: #ff751a;"></td>
			</tr>
		</table>
	</form>
	<?php echo $kq; ?>

</body>
</html>