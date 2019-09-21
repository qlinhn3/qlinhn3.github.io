<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $Old =array("A"=>"Từ 19 đến 34","B"=>"Từ 35 đến ...");
      $order = explode('-',$_POST["order"])
     ?>
    <h1>Thông tin đặt chổ</h1>
    <div>
      <p><b>Thông tin khách hàng</b></p>
      Họ tên: <?php echo $_POST["Name"] ?> - Độ tuổi : <?php echo $Old[$_POST['Old']] ?> / Giới tính : <?php echo $_POST["Sex"] ?> <br>
      Địa chỉ : <?php echo $_POST["Diachi"] ?>
    </div>
    <div>
      <p><b>Thông tin đặt chổ</b></p>
      Số khách tham gia <?php echo $_POST["num"] ?> - Ngày đặt <?php echo $_POST["day"] ?> <br>
      Loại tiệc : <?php
       $sang = isset($_POST["sang"])? $_POST["sang"] :"";
       $trua = isset($_POST["trua"])? $_POST["trua"] :"";
       $toi = isset($_POST["toi"])? $_POST["toi"] :"";
       echo $sang.($trua !=""?" - ":"").$trua.($toi !=""?" - ":"").$toi;
       ?> /
       Địa điểm : <?php echo $_POST["VT"] ?>
    </div>
    <div>
      <p><b>Các yêu cầu kèm theo :</b></p>
      <?php for ($i=1; $i < count($order); $i++) {
        echo "- ".$order[$i]."<br>";
      } ?>
    </div>
    <div style="text-align:center">
      Quý khách biết nhà hàng chúng tôi qua: <?php
       // $Info = isset($_POST["Info"])? $_POST["Info"] : "Khác";
       // echo join(', ',$Info);
      if (isset($_POST["Info"])) {
         echo join(', ',$_POST["Info"]);
      }
      else echo "Khác";
       ?> <br>
      Chúng tôi nhận được thông tin đặt chỗ vào lúc <?php echo date("Y/m/d h:i:s") ?>
    </div>
  </body>
</html>
