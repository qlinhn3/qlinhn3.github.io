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
      background-color: #EC6565;
      color: white;
      font-size: 25px;
      font-family: segoe ui light;
    }
    tr > td:nth-child(1) {
      text-align:center;
    }
    td {
      background-color: #E8D478;
      min-width: 200px;
      padding: 10px 0px;
    }
    h3,p{
      text-align: center;
    }
    </style>
  </head>
  <body>
    <form class="" action="dang_ky_tour_dl.php" method="post">
      <table>
      <tr><td colspan=2>Đăng ký tour du lịch</td></tr>
      <!-- // TenTour -->
      <tr>
        <td><label>Tên tour : </label></td>
        <td>
          <select name="TenTour">
          <optgroup label="Miền Bắc">
            <option value="1">Hà Nội - Hạ Long - Sapa</option>
            <option value="2">Hà Nội - Hải Phòng</option>
            <option value="3">Hà Nội - Điện Biên</option>
          </optgroup>
          <optgroup label="Miền Trung">
            <option value="4">Huế - Bạch Mã - Đà Nẵng</option>
            <option value="5">Nha Trang - Đà Lạt</option>
            <option value="6">Buôn Mê Thuộc - Gia Lai - Kontum</option>
          </optgroup>
          <optgroup label="Miền Nam">
            <option value="7">TP.HCM - Phú Quốc</option>
            <option value="8">TP.HCM - Cần Thơ - Cà Mau</option>
            <option value="9">TP.HCM - Mỹ Tho</option>
          </optgroup>
        </select>
        </td>
      </tr>
      <!-- // Ngay -->
      <tr>
        <td><label>Ngày khởi hành</label></td>
        <td><input type="date" name="Ngay"></td>
      </tr>
      <!-- // Car -->
      <tr>
        <td><label>Phương tiện đi chuyển</label></td>
        <td>
          <select name="Car">
            <option value="1">Máy bay</option>
            <option value="2">Tàu hoả</option>
            <option value="3">Xe hơi</option>
            <option value="4">Tàu thuỷ</option>
            <option value="5">Xe máy</option>
          </select>
        </td>
      </tr>
      <!-- // Num -->
      <tr>
        <td><label>Số lượng đăng ký: </label></td>
        <td><input type="text" name="Num"></td>
      </tr>
      <!-- // Ten -->
      <tr>
        <td><label>Tên khách hàng: </label></td>
        <td><input type="text" name="Ten"></td>
      </tr>
      <!-- // DiaChi -->
      <tr>
        <td><label>Liên hệ địa chỉ</label></td>
        <td><input type="text" name="DiaChi"></td>
      </tr>
      <!-- // SoDienThoai -->
      <tr>
        <td><label>Số điện thoại</label></td>
        <td><input type="text" name="SoDienThoai"></td>
      </tr>
      <!-- // Order -->
      <tr>
        <td  colspan=2>
          <label style="text-align: center;margin: auto">Những yêu cầu kèm theo</label> <br>
          <textarea name="Order" rows="2" cols="40"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan=2><button type="submit">Đăng ký Tour</button></td>
      </tr>
    </table>
    </form>
  </body>
</html>
