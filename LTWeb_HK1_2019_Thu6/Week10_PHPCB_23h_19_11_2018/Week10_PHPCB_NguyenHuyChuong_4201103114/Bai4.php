<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bảng cửu chương</title>
    <style media="screen">
    table,td,tr{
      margin: auto;
      border-collapse: collapse;
    }
    .h {
      text-align: center;
      background-color: #0dabba;
      color: #Fff;
      font-size: 20px;
      font-weight: bold;
    }
    .s{
      text-align: center;
      background-color: #01baad;
    }
    tr > td {
      min-width: 200px;
      height: 30px;
      background-color: #4de2e0;
    }
    </style>
  </head>
  <body>
    <?php
      $display = "none";$text="";
      if(isset($_POST["n"])&& $_POST["n"] >0 && is_numeric($_POST["n"])){
        $display = "";
        $n = $_POST["n"];
        for ($i=1; $i <=10 ; $i++) {
          $text.= $n . "x" . $i . "=" . ($n*$i) . "<br/>";
        }
      }
    ?>
    <form action="" method="post">
      <table>
        <tr>
          <td colspan="2" class=h>Bảng Cửu Chương</td>
        </tr>
        <tr>
          <td>
            <label>Cửu Chương</label>
            <input type="text" name="n" size="10">
          </td>
          <td>
            <button type="submit">Thực hiện</button>
          </td>
        </tr>
        <tr style="display:<?php echo $display?>">
          <td class=h colspan="2">
            Kết quả
          </td>
        </tr>
        <tr style="display:<?php echo $display?>">
          <td class=s colspan="2">
            <?php echo $text ?>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
