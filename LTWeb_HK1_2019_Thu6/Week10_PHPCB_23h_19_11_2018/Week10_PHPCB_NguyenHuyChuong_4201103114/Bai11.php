<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body{
        text-align:center;
      }
      input{
        margin-right: 10px
      }
      h1{
        background-color:red;
        color:yellow;
      }
    </style>
  </head>
  <body>
    <h1>Thông tin đặt chổ</h1>
    <form action="dat_cho.php" method="post">
      <div>
        <label for="">Số khách tham dự bữa tiệc của quý khách:</label>
        <input type="text" name="num" size=10>
        <label for="">Ngày</label>
        <input type="date" name="day">
      </div>
      <div>
        <label>Loại tiệc</label>
        <input type="checkbox" name="sang" value="sáng">   <label>Tiệc sáng</label>
        <input type="checkbox" name="trua" value="trưa"> <label>Tiệc trưa</label>
        <input type="checkbox" name="toi" value="tối"> <label>Tiệc tối</label>
      </div>
      <div>
        <label>Địa điểm</label>
        <input type="radio" name="VT" value="Trong nhà"> <label>Trong nhà</label>
        <input type="radio" name="VT" value="Ngoài trời"> <label>Ngoài trời</label>
      </div>
      <div>
        <label>Tên khách</label>
        <input type="text" name="Name">
        <label>Địa chỉ liên lạc</label>
        <input type="text" name="Diachi">
      </div>
      <div>
        <label>Độ tuổi</label>
        <select name="Old">
          <option value="A">Từ 19 đến 34</option>
          <option value="B">Từ 35 đến ...</option>
        </select>
        <label>Giới tính : </label>
        <input type="radio" name="Sex" value="Nam"> <label>Nam</label>
        <input type="radio" name="Sex" value="Nu"> <label>Nữ</label>
      </div>
      <div>
        <label>Quý khách biết nhà hàng chúng tôi qua : </label>
        <select name="Info[]" multiple>
          <option value="Báo chí">Báo chí</option>
          <option value="Đài phát thanh">Đài phát thanh</option>
          <option value="Tivi">Tivi</option>
        </select>
      </div>
      <div>
        <label>Các yêu cầu khác</label> <br>
        <textarea name="order" rows="2" cols="80"></textarea>
      </div>
      <button type="submit">Đặt chổ</button>
    </form>
  </body>
</html>
