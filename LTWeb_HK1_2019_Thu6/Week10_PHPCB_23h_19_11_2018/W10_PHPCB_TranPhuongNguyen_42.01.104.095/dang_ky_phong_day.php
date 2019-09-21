<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dang Ky Phong Day</title>
</head>
<body>
	<div style="width: 450px; background: #f67d94; text-align: center; margin: auto;">
		<?php
			if(isset($_GET['room']) && isset($_GET['nameTeacher']) && isset($_GET['date'])){
				$room = $_GET['room'];
				$nameTeacher = $_GET['nameTeacher'];
				$date = $_GET['date'];
				echo "Ngày $date <br> Giáo sư $nameTeacher sẽ dạy tại phòng : $room";
			}
		?>
	</div>
</body>
</html>