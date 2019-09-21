<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bài 10</title>
	<style type="text/css">
		.style1 {font-family: "Lucida Handwriting"; background-color: #cc0066; color: white}
	</style>
</head>
<body>
<?php 
	$chuoi = $_POST["chuoi"];
	$tutim = $_POST["tutim"];
	$kq = strpos($chuoi, $tutim);
	if ($kq != false){
		$ketqua = "Tìm thấy từ '" . $tutim . "' trong chuỗi tại vị trí số " . $kq;
	}
	else {
		$ketqua = "Không tìm thấy từ trong chuỗi";
	}
?>
	<form name="form1" method="post" action="">
  		<table width="500" border="0" align="center" bgcolor="#00ffff">
			<tr>
      			<td bgcolor="#cc0066" colspan="2"><div align="center" class="style1">TÌM TỪ TRONG CHUỖI</div></td>
   			</tr>
   			<tr>
   				<td>Chuỗi:</td> 
   				<td><input name="chuoi" type="text" id="chuoi" value="<?php echo $chuoi?>" size="50"></td>
   			</tr>
   			<tr>
   				<td>Từ cần tìm:</td> 
   				<td><input name="tutim" type="text" id="tutim" value="<?php echo $tutim?>" size="25"></td>
   			</tr>
   			<tr>
   				<td colspan="2">
   					<center><input name="timkiem" type="submit" id="timkiem" value="Tìm kiếm" style="background-color:#ffccff"></center>
   				</td>
   			</tr>
   			<tr>
   				<td></td>
   				<td>
   					<input name="ketqua" type="text" id="ketqua" value="<?php echo $ketqua?>" size="50" style="background-color:#ffffcc;color: red">
   				</td>
   			</tr>
  		</table>
  	</form>
</body>
</html>