<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai 04</title>
    <style type="text/css">
        body{
            width: 30%;
            margin: auto;
            margin-top:50px;
        }
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th{
            background-color: #6E7B8B;
            color: white;
        }
        tr{
            background-color: #BFEFFF;
        }
    </style>
</head>
<body>
    <?php
        $kq="";
        if (isset($_POST['submit'])){
            $n=$_POST['cuuchuong'];
            for ($i=1;$i<=10;++$i){
                $kq=$kq."$n x $i =".$n*$i. "<br>";
            }
        }
    ?>
    <form method="post" action="">
        <table>
            <tr>
                <th colspan="2">BẢNG CỬU CHƯƠNG
                </th>
            </tr>
            <tr>
                <td>
                    Cửu chương <input type="text" name="cuuchuong">
                </td>
                <td>
                    <input type="submit" name="submit" value="Thực hiện">
                </td>
            </tr>
            <tr>
                <th colspan="2">KẾT QUẢ</th>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <?php
                        echo $kq;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>