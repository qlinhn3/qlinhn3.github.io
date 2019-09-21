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
      tr:first-child > td  {
        background-color: red;
      }
      td {
        min-width: 300px;
        background-color: pink;
      }
      h1,h3{
        text-align: center;
      }
      img{
        margin: auto;
        width: 200px;
      }
      tr > td:first-child{
        vertical-align: top;
      }
      .i{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php
    $mang_dia_danh = array(
      array("ma"=>"nt","ten"=>"Biển Nha Trang", "hinh"=>"nha_trang.jpg"),
    array("ma"=>"dl", "ten"=>"Thành phố Đà Lạt", "hinh"=>"da_lat.jpg"),
    array("ma"=>"vt","ten"=>"Biển Vũng Tàu", "hinh"=>"vung_tau.jpg"),
    array("ma"=>"hl","ten"=>"Vịnh Hạ Long", "hinh"=>"vinh_ha_long.jpg"),
    array("ma"=>"pt","ten"=>"Biển Phan Thiết", "hinh"=>"phan_thiet.jpg"),
    array("ma"=>"ht","ten"=>"Biển Hà Tiên", "hinh"=>"ha_tien.jpg"),
     array("ma"=>"pq","ten"=>"Đảo Phú Quốc", "hinh"=>"phu_quoc.jpg"));
     ?>
     <table>
       <tr>
         <td colspan=2><h1>Danh lam thắng cảnh</h1></td>
       </tr>
       <tr>
         <td>
           <h4>Danh sách địa danh</h4>
           <?php
           foreach($mang_dia_danh as $mot_dia_danh)
            {
              $ten = $mot_dia_danh['ten'];
              $mdd = $mot_dia_danh['ma'];
              echo "<a href='#".$mdd."'><b>".$ten."</b></a><br>";
            }
            ?>
         </td>
         <td>
            <?php
            foreach($mang_dia_danh as $mot_dia_danh)
            {
              $ma = $mot_dia_danh['ma'];
              $ten = $mot_dia_danh['ten'];

              $hinh = $mot_dia_danh['hinh'];
              $hinh_anh = "<img src = 'ThangCanh-images/$hinh'>";

              echo "<div class=i><h3>$ten</h3><br>
              <a id=$ma>$hinh_anh</a><br>
              <a href=#>Quay về đầu trang</a>
              </div>
              ";
            }
            ?>
         </td>
       </tr>
     </table>
  </body>
</html>
