<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    table,td,tr{
      margin:auto;
      border-collapse: collapse;
    }
    tr:nth-child(1) > td  {
      background-color: red;
    }
    td {
      min-width: 200px;
      background-color: pink;
    }
    h3,p{
      text-align: center;
    }
    </style>
  </head>
  <body>
    <?php
      $display = false;
      if(isset($_POST["A"]) && $_POST["A"]!="" && isset($_POST["B"]) && $_POST["B"]!=""){
        $A = explode(', ',$_POST["A"]);$B = explode(', ',$_POST["B"]);
        $SC = $RC = $C = array_merge($A,$B);sort($SC);rsort($RC);
        $display = true;
      }else {
        $SC = $RC = $C = array();
      }

     ?>
    <form action="" method="post">
      <table>
        <tr>
          <td colspan="2">Đếm phần tử và sắp xếp</td>
        </tr>
        <tr>
          <td>Mảng A : </td>
          <td>
            <input type="text" name="A" size=20>
          </td>
        </tr>
        <tr>
          <td>Mảng B : </td>
          <td><input type="text" name="B" size=20></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Thực hiện"></td>
        </tr>
          <tr style="display:<?php echo $display ? '': 'none'?>">
            <td>Số phần tử mảng A :</td>
            <td><input type=text value=<?php echo count($A) ?>></td>
          </tr>
          <tr style="display:<?php echo $display ? '': 'none'?>">
            <td>Số phần tử mảng B :</td>
            <td><input type=text value=<?php echo count($B) ?>></td>
          </tr>
          <tr style="display:<?php echo $display ? '': 'none'?>">
            <td>Mảng C :</td>
            <td><input type=text value="<?php echo join(", ",$C)?>"></td>
          </tr>
          <tr style="display:<?php echo $display ? '': 'none'?>">
            <td>Mảng C tăng dần :</td>
            <td><input type=text value="<?php echo join(", ",$SC)?>"></td>
          </tr>
          <tr style="display:<?php echo $display ? '': 'none'?>">
            <td>Mảng C giảm dần:</td>
            <td><input type=text value="<?php echo join(", ",$RC)?>"></td>
          </tr>
      </table>
    </form>
  </body>
</html>
