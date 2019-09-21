<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tách họ và tên</title>
    <style media="screen">
      table,td,tr{
        margin: auto;
        border-collapse: collapse;
      }
      tr:nth-child(1) > td  {
        background-color: #1e20bc;
        color: white;
        font-size: 32px;
        font-family: cursive;
      }
      tr > td:nth-child(1) {
        text-align:center;
      }
      td {
        background-color: lightblue;
        min-width: 100px;
        padding: 10px 0px;
      }
      h3,p{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php
      $Ho = $Ten = $Lot = "";
      if(isset($_POST["Ten"] )&& $_POST["Ten"] != ""){
        $tmp = explode(" ",trim($_POST["Ten"]));
        $Ho = $tmp[0];
        $Ten = $tmp[count($tmp)-1];
        for ($i=1; $i <count($tmp)-1 ; $i++) {
          $Lot .= ($tmp[$i]." ");
        }
      }
     ?>
    <form action="" method="post">
      <table>
        <tr>
          <td colspan="2" style="text-align:center">Tách Họ Và Tên</td>
        </tr>
        <tr>
          <td><label>Họ và Tên</label></td>
          <td><input type="text" name="Ten" size="40"></td>
        </tr>
        <tr>
          <td><label>Họ</label></td>
          <td><input type="text" value="<?php echo $Ho ?>" disabled></td>
        </tr>
        <tr>
          <td><label>Tên Lót</label></td>
          <td><input type="text" name="" value="<?php echo $Lot ?>" disabled></td>
        </tr>
        <tr>
          <td><label>Tên</label></td>
          <td><input type="text" name="" value="<?php echo $Ten ?>" disabled></td>
        </tr>
        <tr>
          <td colspan="2">
            <button type="submit">Tách Họ Tên</button>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
