<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai 07</title>
    <style>
        .header{
            background: #e65c00;
            font-size: 30px;
            color: white;   
            font-family: "Lucida Handwriting"
        }
        .content{
            background-color: #f67d94;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }
        .wrap{
            width: 450px;
            background: black;
            margin: auto;
        }
    </style>
</head>
<body>
    <form method="GET" action="dang_ky_phong_day.php">
        <div class="wrap" align="center">
            <div class="header">ĐĂNG KÝ PHÒNG DẠY</div>
            <div class="content">
                <div>
                    <span>Phòng số </span>
                    <select name="room">
                        <?php
                            for($i=1; $i<10; ++$i){
                                echo '<option>A00'.$i.'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <span>Giáo sư giảng dạy:</span> <input type="text" name="nameTeacher">
                </div>
                <div>
                    <span>Ngày / Tháng / Năm</span> 
                    <input type="date" name="date">
                </div>
                <div>
                    <button type="submit">Ghi Nhận</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>