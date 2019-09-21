<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
		$n=$min=$max=$tong=$mangKQ="";
		if (isset($POST["n"]) && $_POST["n"]>0) {
			$n=$_POST["n"];
			$mang= taoMang($n);
			$mangKQ= xuatMang($mang);
			$min = timMin($mang);
			$max= timMax($mang);
			$tong= tinhTong($mang);
		}
		else $mang= array();
echo $n;
		function taoMang($n){
			for($i=0; $i<$n;$i++)
				$mang[$i]= rand(0,20);
			return $mang;
		}

		function xuatMang($mang){
			$chuoi = "";
			$n = count($mang);
			if($n!=0){
				for($i=0;$i<$n;$i++)
					$chuoi=$chuoi.$mang[$i]." ";
			}
			else $chuoi="Invalid number!";
			return $chuoi;
		}

		function timMin($mang){
			$min=$mang[0];
			$n=count($mang);
			for ($i=1; $i<$n; $i++) { 
			
				if ($mang[$i]<$min) {
				
					$min=$mang[$i];
				}
			}
			return $min;
		}

		function timMax($mang){
			$max=$mang[0];
			$n=count($mang);
			for ($i=1; $i<$n; $i++) { 
				
				if ($mang[$i]>$max) {
				
					$max=$mang[$i];
				}
			}
			return $max;
		}

		function tinhTong($mang){
			$tong=$mang[0];
			$n=count($mang);
			for ($i=1; $i<$n; $i++) { 
				$tong+=$mang[$i];			
			}
			return $tong;
		}
	?>
<form name="form1" method="post" action="">
  <table width="559" border="1" align="center" bgcolor="ffebca">
    <tr>
      <td colspan="2" bgcolor="#ffcc66"><div align="center" class="style1 style5">PHÁT SINH MANG VÀ TÍNH TOÁN </div></td>
    </tr>
    <tr>
      <td width="197"><span class="style12">Nhập số phần tử </span></td>
      <td width="346"><label>
      <input name="n" type="text" id="n" value="<?php echo $n ?>" size="20">
      </label></td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td><label>
      <input name="Tinh" type="submit" id="Tinh" value="Phát sinh và tính toán" style="background-color:#FFFF99">
      </label></td>
    </tr>
	 <tr>
      <td><span class="style12">Mảng</span></td>
      <td><label>
      <input name="mangKQ" type="text" id="mangKQ" value="<?php echo $mangKQ ?>" size="40" style="background-color:#FFCCCC">
      </label></td>
    </tr>
    <tr>
      <td><span class="style12">GTLN (Max) trong mảng </span></td>
      <td><label>
        <input name="max" type="text" id="max" value="<?php echo $max ?>" size="20" style="background-color:#FFCCCC">
      </label></td>
    </tr>
    <tr>
      <td><span class="style12">GTNN (Min) trong mảng </span></td>
      <td><label>
        <input name="min" type="text" id="min" value="<?php echo $min ?>" size="20" readonly="true" style="background-color:#FFCCCC">
      </label></td>
    </tr>
	 <tr>
      <td><span class="style12">Tổng mảng </span></td>
      <td><label>
        <input name="tong" type="text" id="tong" value="<?php echo $tong ?>" size="20" readonly="true" style="background-color:#FFCCCC">
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">(<span class="style13">Ghi chú</span>: Các phần tử trong mảng sẽ có giá trị từ 0 đến 20) </div></td>
    </tr>
  </table>
</form>
</body>
</html>
