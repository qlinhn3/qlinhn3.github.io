<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 8</title>
	<style>
		.btn-file {
		  position: relative;
		  overflow: hidden;
		}
		.btn-file input[type=file] {
		  position: absolute;
		  top: 0;
		  right: 0;
		  min-width: 100%;
		  min-height: 100%;
		  font-size: 100px;
		  text-align: right;
		  filter: alpha(opacity=0);
		  opacity: 0;
		  outline: none;
		  background: white;
		  cursor: inherit;
		  display: block;
		}
		.wrap{
			width: 500px;
			margin: auto;
		}
		.header{
			background: #fd7b92;
			color: white;
		}
		.content{
			background: #fdf2f4;
		}
	</style>
</head>
<body>
	<form action="thuoc_tinh_file.php" method="post" enctype="multipart/form-data">
		<div class="wrap" align="center">
			<div class="header">THUỘC TÍNH CỦA TẬP TIN</div>
			<div class="content">
				<div>
					<span>Tập tin: </span>
					<input type="text" name="_file">
					<button class="btn-file">Browse...<input type="file" name="fileUpload" onchange="_file.value = this.value"></button>
				</div>
				<div>
					<button type="submit">Thuộc tính của tập tin</button>
				</div>
			</div>
		</div>
	</form>
</body>
</html>