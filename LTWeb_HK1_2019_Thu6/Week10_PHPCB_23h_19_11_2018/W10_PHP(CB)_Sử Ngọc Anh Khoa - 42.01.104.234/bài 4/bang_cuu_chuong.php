<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
<title>bang cuu chuong</title>
</head>

<body>
<?php
	if(isset($_POST["a"]))
	{
		$so = $_POST["a"];
		$chuoi = "";
		for($i=1;$i<=10;$i++){
			$tich = $so * $i;
			$chuoi = $chuoi.$so."x".$i."=".$tich."\n";
		}
	}
?>
<form id="form1" name="form1" method="post" action="bang_cuu_chuong.php">
  <table width="400" border="1" align="center">
    <tr>
      <td colspan="4" align="center" bgcolor="#006666">BẢNG CỬU CHƯƠNG </td>
    </tr>
    <tr>
      <td width="78" height="32" bgcolor="#00FFFF"><label>Cửu chương: </label></td>
      <td width="179" bgcolor="#00FFFF"><label>
        <input name="textfield" type="text" value="<?php echo $_POST["a"];?>" />
      </label></td>
      <td width="226" bgcolor="#00FFFF"><label>
        <input type="submit" name="Submit" value="Thực hiện" />
      </label></td>
    </tr>
    <tr>
      <?php if(isset($_POST["a"])){ echo "<br>";?>
      <td height="25" colspan="2"><label> </label>
          <table width="416" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#009999" bgcolor="#009999">
            <tr bgcolor="#009999">
              <td colspan="4" align="center" bgcolor="#CCCCCC">KẾT QUẢ </td>
            </tr>
            <tr>
              <td colspan="4" bgcolor="#CCCCCC"><?php echo nl2br($chuoi)."<br>";?></td>
            </tr>
          </table>
        <?php }?>
      </tr>
  </table>
</form>
</body>
</html>
