<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tìm thứ trong tuần</title>
    <style media="screen">
    table,td,tr{
      margin:auto;
      border-collapse: collapse;
    }
    tr:nth-child(1) > td  {
      background-color: red;
    }
    td {
      background-color: pink;
    }
    h3,p{
      text-align: center;
    }
    </style>
  </head>
  <body>
    <?php
    $arr = ["Chủ nhật","Thứ Hai","Thứ Ba","Thứ Tư","Thứ Năm","Thứ Sáu","Thứ Bảy"];
      if(isset($_POST["day"]) && isset($_POST["month"]) && isset($_POST["year"])){
        $thang = $_POST["month"];
        $ngay = $_POST["day"];
        $nam = $_POST["year"];
        $jd=cal_to_jd(CAL_GREGORIAN,$thang,$ngay,$nam);
        $day = jddayofweek($jd,0);

        $KQ =  "ngày ".$ngay."/".$thang."/".$nam." là ngày ".$arr[$day];
      }
     ?>
    <form class="" action="" method="post">
      <table>
        <tr>
          <td><h3>Tìm Thứ Trong Tuần</h3></td>
        </tr>
        <tr>
          <td>
            <label>ngày/tháng/năm : </label>
            <input type="text" name="day" value="<?php echo date("d") ?>" size=5>/
            <input type="text" name="month" value="<?php echo date("m") ?>" size=5>/
            <input type="text" name="year" value="<?php echo date("Y") ?>" size=5>
            <button type="submit">Tìm Thứ Trong Tuần</button>
          </td>
        </tr>
        <tr>
          <td style="text-align:center">
            <input type="text" value="<?php echo $KQ ?>"  size=40>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
