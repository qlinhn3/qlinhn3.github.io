<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bài 3</title>
	<style type="text/css">
		.style1 {font-family: "Lucida Handwriting"; background-color: #000099; color: white}
	</style>
</head>
<body>
<?php
    $hoten = trim($_POST["hoten"]);
    $mang = explode(" ",$hoten);
    $ho = $mang[0];
    $n = count($mang);
    $tendem = "";
    for ($i=1;$i<$n-1;$i++){
        $tendem = $tendem . $mang[$i] . " ";
    }
    $ten = $mang[$n-1];

?>
  <form name="form1" method="post" action="">
  	<table width="400" style="border-style: none;" align="center" bgcolor="#0099ff">
  	<tr>
      	<td colspan="2"><div align="center" class="style1">TÁCH HỌ VÀ TÊN</div></td>
    </tr>
    <tr>
    	<td>Họ và tên:</td>
    	<td>	
    		<input name="hoten" type="text" id="hoten" value="<?php echo $hoten?>" size="40">
    	</td>
    <tr>
    	<td>Họ:</td>
    	<td>    	
    		<input name="ho" type="text" id="ho" value="<?php echo $ho?>" size="20">
    	</td>
    </tr>
    <tr>
    	<td>Tên đệm:</td>
    	<td>
    		<input name="tendem" type="text" id="tendem" value="<?php echo $tendem?>" size="20">
    	</td>
    </tr>
    <tr>
    	<td>Tên:</td>
    	<td>
    		<input name="ten" type="text" id="ten" value="<?php echo $ten?>" size="20">
    	</td>
   	<tr>
    	<td colspan="2">
    		<center><input name="xemkq" type="submit" id="xemkq" value="Tách Họ Tên"></center>
    	</td>
    </tr>
  	</table>
  </form>
</body>
</html>