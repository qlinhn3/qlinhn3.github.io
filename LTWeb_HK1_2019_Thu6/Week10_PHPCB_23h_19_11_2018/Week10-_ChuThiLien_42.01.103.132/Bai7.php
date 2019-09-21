<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bài 7</title>
	<style type="text/css">
		.style1 {font-family: "Lucida Handwriting"; background-color: #e65c00; color: white}
  		.style2 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; }
	</style>
</head>
<body>
	<form name="form1" method="get" action="">
		<table width="559" border="1" align="center" bgcolor="#ffb3b3" style="border-collapse: collapse;">
		    <tr>
		      <td colspan="2" bgcolor="#ffcc66"><div align="center" class="style1">ĐĂNG KÝ PHÒNG DẠY</div></td>
		    </tr>
		    <tr>
		      <td width="197"><span class="style12">Phòng số: </span></td>
		      <td width="346">
		      	<select>
		      		<option id="A001">A001</option>
		      		<option id="A002">A002</option>
		      		<option id="A003">A003</option>
		      		<option id="A004">A004</option>
		      	</select>
		      </td>
		    </tr>
		    <tr>
		      <td><span class="style2">Giáo sư giảng dạy: </span></td>
		      <td><label>
		        <input name="giaosu" type="text" id="giaosu" value="<?php echo $giaosu?>" size="20">
		      </label></td>
		    </tr>
		    <tr>
		      <td><span class="style2">Ngày / tháng / năm: </span></td>
		      <td><label>
		        <select>
		        	<option value=""></option>
		        </select>
		      </label></td>
		    </tr>
			 <tr>
		      <td colspan="2"><label><center>
		      <input name="ghinhan" type="submit" id="ghinhan" value="Ghi nhận">
		      </center></label></td>
		    </tr>
		    <tr>
		      <td colspan="2"><div align="center" class="style3">Kết quả sau khi <b>Ghi nhận</b></div></td>
		    </tr>
		    <tr>
		      <td colspan="2" ><font  align="center">
		        <?php echo $ketqua ?>
		      </font></td>
		    </tr>
		  </table>
	</form>
</body>
</html>