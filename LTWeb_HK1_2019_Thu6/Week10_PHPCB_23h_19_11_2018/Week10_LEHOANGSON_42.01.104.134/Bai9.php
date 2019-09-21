<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
  table{
    margin:auto;
    border-collapse: collapse;
  }
  th{
    background-color: red;
  }
  .top {
    min-width: 200px;
    background-color: pink;
  }
  th,td{
    padding: 10px;margin: 10px;height: 25px;
  }
  h3,p{
    text-align: center;
  }
</style>
</head>
<body>
  <?php
  $kq =$mangAString=$mangAString="";
  if(isset($_POST["A"]) && $_POST["A"]!="" && isset($_POST["B"]) && $_POST["B"]!=""){
    $mangA = explode(',',$_POST["A"]);
    $mangAString=join(',',$mangA);
    $mangACount=count($mangA);

    $mangB = explode(',',$_POST["B"]);
    $mangBString=join(',',$mangB);
    $mangBCount=count($mangB);

    $mangC=array_merge($mangA,$mangB);
    $mangCString=join(',',$mangC);

    sort($mangC);
    
    $mangCTangString=join(',',$mangC);

    rsort($mangC);
    $mangCGiamString=join(',',$mangC);
    $kq="
        <tr>
        <td>Số phần tử mảng A :</td>
        <td><input type=text value='$mangACount'></td>
      </tr>
      <tr>
        <td>Số phần tử mảng B :</td>
        <td><input type=text value='$mangBCount'></td>
      </tr>
      <tr>
        <td>Mảng C :</td>
        <td><input type=text value='$mangCString'></td>
      </tr>
      <tr>
        <td>Mảng C tăng dần :</td>
        <td><input type=text value='$mangCTangString'></td>
      </tr>
      <tr>
        <td>Mảng C giảm dần:</td>
        <td><input type=text value='$mangCGiamString'></td>
      </tr>
    ";
  }
  ?>
  <form action="" method="post">
    <table>
      <tr>
        <th colspan="2">Đếm phần tử và sắp xếp</td>
      </tr>
      <tr class="top">
        <td>Mảng A : </td>
        <td><input type="text" name="A" value="<?php echo $mangAString; ?>"></td>
      </tr>

      <tr class="top">
        <td>Mảng B : </td>
        <td><input type="text" name="B" value="<?php echo $mangAString; ?>"></td>
      </tr>

      <tr class="top">
        <td></td>
        <td><input type="submit" value="Thực hiện" style="background-color: yellow;"></td>
      </tr>
      <?php echo $kq; ?>
      
    </table>
  </form>
</body>
</html>
