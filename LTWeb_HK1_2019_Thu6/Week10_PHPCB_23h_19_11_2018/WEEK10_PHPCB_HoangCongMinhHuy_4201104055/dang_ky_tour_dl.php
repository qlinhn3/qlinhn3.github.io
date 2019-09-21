<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      ._{
        background-color: #d1be34
      }.__{
        background-color: #39aece
      }h1{
        text-align: center;
        background-color: blue;
        color: yellow;
      }
    </style>
  </head>
  <body>
    <?php
      $Tour = array(
        array("name"=>"Hà Nội - Hạ Long - Sapa","money"=>"6000000"),
        array("name"=>"Hà Nội - Hải Phòng","money"=>"5500000"),
        array("name"=>"Hà Nội - Điện Biên","money"=>"5500000"),
        array("name"=>"Huế - Bạch Mã - Đà Nẵng","money"=>"5000000"),
        array("name"=>"Nha Trang - Đà Lạt","money"=>"3000000"),
        array("name"=>"Buôn Mê Thuộc - Gia Lai - Kontum","money"=>"3500000"),
        array("name"=>"TP.HCM - Phú Quốc","money"=>"4000000"),
        array("name"=>"TP.HCM - Cần Thơ - Cà Mau","money"=>"4500000"),
        array("name"=>"TP.HCM - Mỹ Tho","money"=>"3000000"),
      );
      $Cars = array(
        array("name"=>"Máy bay","per"=>"1"),
        array("name"=>"Tàu hoả","per"=>"0.95"),
        array("name"=>"Xe hơi","per"=>"0.9"),
        array("name"=>"Tàu thuỷ","per"=>"0.9"),
        array("name"=>"Xe máy","per"=>"0.8"),
      )
     ?>
    <?php
      $display = false;
      $TenTour = $_POST["TenTour"];
      $Ngay = $_POST["Ngay"];
      $Car = $_POST["Car"];
      $Num = $_POST["Num"];
      $Ten = $_POST["Ten"];
      $DiaChi = $_POST["DiaChi"];
      $SoDienThoai = $_POST["SoDienThoai"];
      $Order = $_POST["Order"] ==""? array():explode('-',$_POST["Order"]);
      $Money = 0;
      $SumMoney = 0;
      if($Ngay !="" && $Car!="" && $Num!="" && $Ten!="" && $DiaChi!="" && $SoDienThoai!=""){
        $display = true;
        $Money = $Tour[$TenTour-1]["money"] * $Cars[$Car-1]["per"];
        $SumMoney = $Money * $Num * ($Num > 9 ? ($Num > 19 ? ($Num > 49 ? 0.8:0.9):0.95):1);

      }
     ?>
    <div style="font-size: 32px;font-weight: bold;color:red;text-align: center;display: <?php echo $display ? 'none':'' ?>">
      Đăng Ký Thất Bại
    </div>
    <div style="display: <?php echo $display ? '':'none' ?>" >
      <h1>Thông tin đặt Tour</h1>
      <div class="_">
        Khách hàng đã chọn Tour : <b><?php echo $Tour[$TenTour-1]["name"] ?></b> <br>
        Ngày Khởi Hành : <?php echo $Ngay ?> <br>
        Phương Tiện : <?php echo $Cars[$Car-1]["name"] ?>
      </div>
      <div class="__">
        Số lượng đăng ký : <b><?php echo $Num ?></b> <br>
        Giá Tour/khách : <?php echo $Money ?> <br>
        Tổng số tiền cho <?php echo $Num ?> khách : <?php echo $SumMoney ?>
      </div>
      <div class="_">
        Thông tin khách hàng: <br>
        Họ tên: <b><?php echo $Ten ?></b> - Đia chỉ: <?php echo $DiaChi ?> <br>
        Số điện thoại: <?php echo $SoDienThoai ?>
      </div>
      <div class="__">
        Các yêu cầu kèm theo: <br>
        <?php for ($i=1; $i < count($Order) ; $i++) {
          echo "-".$Order[$i]."<br>";
        } ?>
      </div>
    </div>
  </body>
</html>
