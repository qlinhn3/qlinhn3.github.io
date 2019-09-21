<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dang Ky Phong Day</title>
</head>
<body>
	<div style="width: 450px; background: #f67d94; text-align: center; margin: auto;">
		<?php
			
			if(isset($_FILES['fileUpload'])){
			    echo 'Tên file: upload/' . $_FILES['fileUpload']['name'] . '<br>';
			    echo 'Loại file: ' . $_FILES['fileUpload']['type'] . '<br>';
			    echo 'Kích cỡ: ' . ((int)$_FILES['fileUpload']['size'] / 1024) . ' Kb';
	 		}
		 	
		?>
	</div>
</body>
</html>	