<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
<title>Thiet ke form Tach ho va ten</title>
<style type="text/css">
<!--
.style1 {font-family: "Lucida Handwriting"; color:#FFFFFF;}
.style3 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>
 
<body>
<?php
    $ho_ten = trim($_POST["ho_ten"]);
    $mang = explode(" ",$ho_ten);
    $ho = $mang[0];
    $n = count($mang);
    $ten = $mang[$n-1];
    for($i=1;$i<$n-1;$i++)
        $ten_dem = $ten_dem.$mang[$i]." ";
?>
<form id="form1" name="form1" method="post" action="tach_ho_ten.php">
 
  <table width="400" border="1" align="center">
    <tr>
      <th colspan="2" align="center" bgcolor="#0000FF"  ><h2><span class="style1">TÁCH HỌ VÀ TÊN</span> </h2></th>
    </tr>
    <tr>
      <td width="104" bgcolor="#0099FF"><span class="style3">Họ và tên: </span></td>
      <td width="280" bgcolor="#0099FF"><span class="style3">
        <label>
        <input name="textfield" type="text" value="<?php echo $_POST["ho_ten"];?>"" size="40" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#0099FF"><span class="style3">Họ:</span></td>
      <td bgcolor="#0099FF"><span class="style3">
        <label>
        <input name="textfield2" type="text" value="<?php echo $ho;?>" size="20" bgcolor="#00FFFF" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#0099FF"><span class="style3">Tên đệm </span></td>
      <td bgcolor="#0099FF"><span class="style3">
        <label>
        <input name="textfield3" type="text" value="<?php echo $ten_dem;?>" size="20" bgcolor="#00FFFF" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#0099FF"><span class="style3">Tên</span></td>
      <td bgcolor="#0099FF"><span class="style3">
        <label>
        <input name="textfield4" type="text" value="<?php echo $ten;?>" size="20" bgcolor="#00FFFF" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#0099FF"><span class="style3">
        <label>
        <input type="submit" name="Submit" value="Tách Họ Tên" bgcolor="#00FFFF" />
        </label>
      </span></td>
    </tr>
  </table>
</form>
</body>
</html>