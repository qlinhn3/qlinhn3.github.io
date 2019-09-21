<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>dinh dang mau chu mau nen</title>
<style type="text/css">
<!--
.style4 {
	font-family: "Lucida Handwriting";
	font-size: 20px;
	color: #FFFFFF;
}
.style7 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="dinh_dang_mau_chu_mau_nen.php">
  <table width="400" border="1" align="center">
    <tr>
      <td colspan="2" align="center" bordercolor="#CCCCCC" bgcolor="#FF3300"><label><span class="style4">ĐỊNH DẠNG MÀU CHỮ - MÀU NỀN</span> </label></td>
    </tr>
    <tr>
      <td width="91" bgcolor="#FF66FF"><span class="style7">Nội dung: </span></td>
      <td width="293" bgcolor="#FF66FF"><label>
        <input name="noi_dung" type="text" id="noi_dung" value="<?php echo $_POST["noi_dung"];?>" size="40" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FF66FF"><span class="style7">Màu chữ: </span></td>
      <td bgcolor="#FF66FF"><label>
        <input name="mau_chu" type="text" id="mau_chu" value="<?php echo $_POST["mau_chu"];?>" size="20" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FF66FF"><span class="style7">Màu nền: </span></td>
      <td bgcolor="#FF66FF"><label>
        <input name="mau_nen" type="text" id="mau_nen" value="<?php echo $_POST["mau_nen"];?>" size="20" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FF66FF"><label>
        <input type="submit" name="Submit" value="Xem kết quả" bgcolor="#FF9900" />
      </label></td>
    </tr>
  </table>
</form>
<?php
	$mau_chu = $_POST["mau_chu"];
	$mau_nen = $_POST["mau_nen"];
	$noi_dung = $_POST["noi_dung"];
?>
<table width="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="<?php echo $mau_nen;?>">
	<tr>
		<td align="center"><font color="<?php echo $mau_chu;?>"><?php echo $noi_dung;?></font></td>
	</tr>
</table>
</body>
</html>
