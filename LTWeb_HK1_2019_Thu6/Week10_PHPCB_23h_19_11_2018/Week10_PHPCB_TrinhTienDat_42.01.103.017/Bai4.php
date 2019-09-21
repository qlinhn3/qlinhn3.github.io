<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bài 4</title>
	<style type="text/css">
		.style1 {font-family: "Tahoma"; background-color: #009999; color: white; font-weight: bold}
	</style>
</head>
<body>
<?php
    $n = "";
    if (isset($_POST["n"]) && $_POST['n'] > 0){
        $n=$_POST["n"];
    }
    $chuoi = "";
    for ($i=1;$i<=10;$i++){
        $chuoi = $chuoi . $n . " x " . $i . " = " . $n*$i . "<br>";
    }

?>
  <form name="form1" method="post" action="">
  	<table width="400" style="border-style: none;" align="center" bgcolor="#00ffff">
  	<tr>
      	<td><div align="center" class="style1">BẢNG CỬU CHƯƠNG</div></td>
    </tr>
    <tr>
    	<td>Cửu chương:&nbsp;
    	<input name="n" type="text" id="n" value="<?php echo $n?>" size="10">&nbsp;
        <input name="thuchien" type="submit" id="thuchien" value="Thực hiện">
    	</td>
    </tr>
    <tr>
        <td><div align="center" class="style1">KẾT QUẢ</div></td>
    </tr>
    <tr>
       <td align="center">
           <?php echo $chuoi ?>
       </td> 
    </tr>
  	</table>
  </form>
</body>
</html>