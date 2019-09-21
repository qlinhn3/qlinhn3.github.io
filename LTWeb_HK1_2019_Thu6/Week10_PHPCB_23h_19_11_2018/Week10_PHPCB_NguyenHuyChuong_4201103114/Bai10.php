<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    $Text = "";
      if($_POST["Str"]!=""&&$_POST["Word"]!=""){
        $Word = $_POST["Word"];
        $Str = $_POST["Str"];
        $n = strpos($Str,$Word);
        if($n != "" )
          $Text = "Tìm thấy từ '$Word' trong chuỗi tại vị trí số $n";
        else $Text = "Không tìm thấy từ trong chuỗi";
      }
     ?>
     <form class="" action="" method="post">
       <table>
         <tr>
           <td>Tìm kiếm từ trong chuỗi</td>
         </tr>
         <tr>
           <td>
             <label>Chuỗi : </label>
             <input type="text" name="Str" size=30>
           </td>
         </tr>
         <tr>
           <td>
             <label> Từ cần tìm </label>
             <input type="text" name="Word" size=30>
           </td>
         </tr>
         <tr>
           <td style="text-align:center">
             <button type="submit">Tìm kiếm</button>
           </td>
         </tr>
         <tr>
           <td style="text-align:center">
             <input type="text" value="<?php echo $Text ?>" size=30 disabled>
           </td>
         </tr>
       </table>
     </form>
  </body>
</html>
