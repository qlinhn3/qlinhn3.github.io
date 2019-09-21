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
        font-size: 20px;
        background-color: #E86565;
        font-weight: bold;
        font-family: segoe ui light;
        color: white;
      }
      form{
        margin:auto;
        width: 503px;
        height: 76px;
      }
      td {
        text-align: center;
        min-width: 500px;
        background-color: #A7C1E5;
      }
      td > div{
        margin: 10px;
      }
    </style>
  </head>
  <body>
    <form class="" action="thuoc_tinh_file.php" method="get">
       <table>
        <tr>
          <td>
            Thuộc tính tập tin
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="_file" value="">
            <input type="file" name="__file" onchange="file.value = this.value">
          </td>
        </tr>
        <tr>
          <td><button type="submit">Thuộc tính của tập tin</button></td>
        </tr>
      </table>

      </script>
    </form>
  </body>
</html>
