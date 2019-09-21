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
        background-color: pink;
      }
      h3,p{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <form action="" method="post">
      <table>
        <tr>
          <td colspan="2" style="text-align:center"><h3>Định dạng màu chữ - Màu nền</h3></td>
        </tr>
        <tr>
          <td>
              <label>Nội dung :</label>
              <input type="text" name="text" size="30">
          </td>
        </tr>
        <tr>
          <td>
            <label>Màu nền</label>
            <input type="text" name="n" value="FFFFFF" size=5>
          </td>
        </tr>
        <tr>
          <td>
            <label>Màu chữ</label>
            <input type="text" name="c" value="000000" size=10>
          </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center"><input type="submit" value="Xem kết quả"></td>
          </tr>
      </table>
    </form>
    <?php
      if(isset($_POST["text"]) && $_POST["text"] != ""){
        $n = "#".$_POST['n'];
        $c = "#".$_POST['c'];
        $text = $_POST['text'];
        echo "<h3>kết quả sau khi nhấn xem kết quả</h3>";
        echo "<p style='background:$n; color:$c'>$text</p>";
      }
     ?>
  </body>
</html>
