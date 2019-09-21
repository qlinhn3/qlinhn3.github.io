<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php
     $display = false;
     if(isset($_GET["Phong"]) && isset($_GET["Ten"]) && $_GET["Ten"]!="" && isset($_GET["Ngay"])){
       $Phong = $_GET["Phong"];$Ten = $_GET["Ten"];$Ngay = $_GET["Ngay"];
       $display = true;
     }else {
       $Phong = $Ten = $Ngay = "";
     }
    ?>
    <div style="display: <?php echo $display ? 'none' : 'block'?>">
      <h1>Không đăng ký được</h1>
    </div>
    <div style="display: <?php echo $display ? 'block' : 'none'?>">
      <?php
        echo "Ngày $Ngay <br> Giáo sư $Ten sẽ dạy tại phòng : $Phong";
       ?>
    </div>
  </body>
</html>
