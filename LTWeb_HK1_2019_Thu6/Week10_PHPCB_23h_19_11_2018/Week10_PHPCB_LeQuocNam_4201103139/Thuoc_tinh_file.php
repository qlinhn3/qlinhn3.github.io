<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $path = pathinfo($_GET["_file"]);
      echo "tên file : ". $path['filename'] . "<br>";
      echo "loại file : ". $path['extension'] ."<br>";
      // echo "file size : ". filesize($path);
      ?>
  </body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $path = pathinfo($_GET["_file"]);
      echo "tên file : ". $path['filename'] . "<br>";
      echo "loại file : ". $path['extension'] ."<br>";
      // echo "file size : ". filesize($path);
      ?>
  </body>
</html>
