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
        font-size: 32px;
        background-color: red;
        font-weight: bold;
        font-family: cursive;
      }
      td {
        text-align: center;
        min-width: 500px;
        background-color: pink;
      }
      td > div{
        margin: 10px;
      }
    </style>
  </head>
  <body>
    <form class="" action="./Dang_ky_phong_day.php" method="get">
      <table>
        <tr>
          <td>Đăng Ký Phòng Dạy</td>
        </tr>
        <tr>
          <td>
            <div>
              <label>Phòng số</label>
              <select class="" name="Phong">
                <?php for ($i=1; $i <= 10; $i++) {
                  printf("<option value='A%02d'>A%02d</option>",$i,$i);
                } ?>
              </select>
            </div>
            <div>
              <label>Giáo sư giảng dạy</label>
              <input type="text" name="Ten">
            </div>
            <div>
              <label>Ngày / Tháng / Năm</label>
              <input type="date" name="Ngay">
            </div>
            <div>
              <button type="submit">Ghi Nhận</button>
            </div>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
