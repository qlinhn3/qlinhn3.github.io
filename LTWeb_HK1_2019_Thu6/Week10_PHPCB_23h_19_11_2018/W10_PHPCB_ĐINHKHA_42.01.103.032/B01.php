<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
  .style1 {font-family: "Lucida Handwriting"; background-color: #e65c00; color: white}
  .style2 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; }
  .style3 {color: red; background-color: white; font-style: italic; font-weight: bold;}
</style>
</head>

<body>
<?php
  $nd = $mnen = $mchu = "";
  if(isset($_POST["nd"]) && isset($_POST["maunen"]) && isset($_POST["mauchu"])){
    $nd = $_POST["nd"];
    $mnen = $_POST["maunen"];
    $mchu = $_POST["mauchu"];
?>
<form name="form1" method="post" action="">
  <table width="559" border="1" align="center" bgcolor="#ffb3b3" style="border-collapse: collapse;">
    <tr>
      <td colspan="2" bgcolor="#ffcc66"><div align="center" class="style1">ĐỊNH MÀU CHỮ - MÀU NỀN</div></td>
    </tr>
    <tr>
      <td width="197"><span class="style12">Nội dung: </span></td>
      <td width="346"><label>
      <input name="nd" type="text" id="nd" value="<?php echo $nd?>" size="20">
      </label></td>
    </tr>
    <tr>
      <td><span class="style2">Màu nền: </span></td>
      <td><label>
        <input name="maunen" type="text" id="maunen" value="<?php echo $mnen?>" size="20">
      </label></td>
    </tr>
    <tr>
      <td><span class="style2">Màu chữ: </span></td>
      <td><label>
        <input name="mauchu" type="text" id="mauchu" value="<?php echo $mchu?>" size="20">
      </label></td>
    </tr>
	 <tr>
      <td colspan="2"><label><center>
      <input name="xemkq" type="submit" id="xemkq" value="Xem kết quả" style="background-color:#FFFF99">
      </center></label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style3">Kết quả sau khi Xem kết quả </div></td>
    </tr>
    <tr>
      <td colspan="2" ><font  align="center">
        <?php echo $nd 
        //bgcolor='#".$mnen"' color='#".$mchu"'
        ?>
      </font></td>
    </tr>
  </table>
</form>
</body>
</html>