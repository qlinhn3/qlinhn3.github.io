<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 9</title>
<style type="text/css">
<!--
.style1 {font-family: "Lucida Handwriting"}
.style5 {color: #FF9933}
.style12 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style13 {color: #FF0000}
-->
</style>
</head>
<body>
<?php
	$strA = $_POST["a"];
	$mangA = explode(" ",$strA);
	$strB = $_POST["b"];
	$mangB = explode(" ",$strB);
	$nA = count($mangA);
	$nB = count($mangB);
	$mangC = array_merge($mangA,$mangB);
	$mangCtang = sort($mangC);
	$mangCgiam = rsort($mangC);
?>
<form name="form1" method="post" action="">
  <table width="559" border="1" align="center" bgcolor="ffebca">
    <tr>
      <td colspan="2" bgcolor="#ffcc66"><div align="center" class="style1 style5">ĐẾM PHẦN TỬ, GHÉP MẢNG VÀ SẮP XẾP</div></td>
    </tr>
    <tr>
      <td width="197"><span class="style12">Mảng A: </span></td>
      <td width="346"><label>
      <input name="a" type="text" id="a" value="<?php echo $mangA?>" size="30">
      </label></td>
    </tr>
    <tr>
      <td width="197"><span class="style12">Mảng B: </span></td>
      <td width="346"><label>
      <input name="b" type="text" id="b" value="<?php echo $mangB?>" size="30">
      </label></td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td><label>
      <input name="Thuchien" type="submit" id="Thuchhien" value="Thực hiện" style="background-color:#FFFF99">
      </label></td>
    </tr>
	<tr>
      <td><span class="style12">Số phần tử mảng A: </span></td>
      <td><label>
      <input name="soptA" type="text" id="soptA" value="<?php echo $nA?>" size="20" style="background-color:#FFCCCC">
      </label></td>
    </tr>
    <tr>
      <td><span class="style12">Số phần tử mảng B: </span></td>
      <td><label>
      <input name="soptB" type="text" id="soptB" value="<?php echo $nB?>" size="20" style="background-color:#FFCCCC">
      </label></td>
    </tr>
    <tr>
      <td><span class="style12">Mảng C:</span></td>
      <td><label>
        <input name="mangC" type="text" id="mangC" value="<?php echo $mangC?>" size="50" style="background-color:#FFCCCC">
      </label></td>
    </tr>
	<tr>
      <td><span class="style12">Mảng C tăng dần:</span></td>
      <td><label>
        <input name="mangCtang" type="text" id="mangCtang" value="<?php echo $mangCtang?>" size="50" style="background-color:#FFCCCC">
      </label></td>
    </tr>
    <tr>
      <td><span class="style12">Mảng C giảm dần:</span></td>
      <td><label>
        <input name="mangCgiam" type="text" id="mangCgiam" value="<?php echo $mangCgiam?>" size="50" style="background-color:#FFCCCC">
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
