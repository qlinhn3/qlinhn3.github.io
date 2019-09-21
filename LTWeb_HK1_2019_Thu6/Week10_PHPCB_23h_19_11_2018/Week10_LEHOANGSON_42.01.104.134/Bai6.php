 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style>	
 	table,td,tr,p{
 		margin:auto;
 		border-collapse: collapse;
 	}
 	tr:first-child > td  {
 		background-color: #71772a;
 	}
 	td {
 		width: 300px;
 		background-color: #bdc37e;
 	}
 	h1{
 		text-align: center;
 		color: white;	
 	}
 	img{
 		width: 200px;
 	}
 	tr > td:first-child{
 		vertical-align: top;
 	}
 	.i{
 		text-align: center;
 	}
 	.content{
 		background: #71772a;
 	}
 </style>
</head>
<body>

	<table>
		<tr>
			<td colspan="2">
				<h1> DANH LAM THẮNG CẢNH </h1>
			</td>
		</tr>
		<div class="content">
			<tr>
				<?php 
				$arr=array(
					array("ma"=>"nt","ten"=>"Biển Nha Trang", "hinh"=>"nha_trang.jpg"),
					array("ma"=>"dl", "ten"=>"Thành phố Đà Lạt", "hinh"=>"da_lat.jpg"),
					array("ma"=>"vt","ten"=>"Biển Vũng Tàu", "hinh"=>"vung_tau.jpg"),
					array("ma"=>"hl","ten"=>"Vịnh Hạ Long", "hinh"=>"vinh_ha_long.jpg"),
					array("ma"=>"pt","ten"=>"Biển Phan Thiết", "hinh"=>"phan_thiet.jpg"),
					array("ma"=>"ht","ten"=>"Biển Hà Tiên", "hinh"=>"ha_tien.jpg"),
					array("ma"=>"pq","ten"=>"Đảo Phú Quốc", "hinh"=>"phu_quoc.jpg")
				);

				?>
				<td>
					<div style="background: white;">
						<b>Danh sách địa danh</b><br>
						<?php
						$mang = "";
						foreach($arr as $dia_danh)
						{
							$ten = $dia_danh['ten'];
							$mdd = $dia_danh['ma'];
							$mang= $mang."<br><a href='#$mdd'><b>$ten</b></a>";
						}
						echo $mang;  

						?>
					</div>

				</td>
				<td>
					<div style="background: white;">
						<?php
						$noi_dung ="";
						foreach($arr as $dia_danh){
							$mdd = $dia_danh['ma'];
							$link = "<a name='$mdd'></a>";
							$ten = $dia_danh['ten'];
							$hinh = $dia_danh['hinh'];
							$hinh_anh = "<img src = 'ThangCanh-images/$hinh'>";
							$noi_dung = $noi_dung . "<p align='center'>$link<b>$ten</b><br>
							$hinh_anh<br><a href='#top'>Quay về đầu
							trang</a></p><br>";
						}
						echo $noi_dung;
						?>
					</div>
				</td>
			</tr>


		</div>

	</table>
</body>
</html>