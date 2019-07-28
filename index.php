<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style type="text/css">
    table {
        margin: 10px;
        border-collapse: collapse;
        width: 100%;
        background-color: lightblue;
    }

    tr, th {
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid #091acc;
        height: 50px;
    }

    th {
        color: #ff281e;
        width: 10px;
        height: 50px;
    }

    img {
        height: 100px;
        width: 100px;

    }

    body {
        background-color: saddlebrown;
    }
    h1{
        color: whitesmoke;
    }
</style>
<body>
<table border="3">
    <caption><h1>Danh Sach Khach Hang</h1></caption>
    <tr>
        <th>STT</th>
        <th>Ten</th>
        <th>Ngay sinh</th>
        <th>Dia chi</th>
        <th>Hinh anh</th>
    </tr>
    <?php
    $customerlist = array("1" => array("ten" => "Vu Xuan Diem", "ngay sinh" => "30-11-1996", "dia chi" => "Nam Dinh",
        "hinh anh" => "image/image1.jpg"),
        "2" => array("ten" => "Nguyen Van A", "ngay sinh" => "11-7-1996", "dia chi" => "Ha Nam", "hinh anh" => "image/image2.jpg"),
        "3" => array("ten" => "Nguyen Thi B", "ngay sinh" => "20-11-1997", "dia chi" => "Ha Noi", "hinh anh" => "image/image3.jpg"),
        "4" => array("ten" => "Nguye Ngoc Han", "ngay sinh" => "8-3-2000", "dia chi" => "Ha Long", "hinh anh" => "image/image3.jpg"),
        "5" => array("ten" => "Do Duy Manh", "ngay sinh" => "30-5-1997", "dia chi" => "Ha Noi", "hinh anh" => "image/image2.jpg"));
    foreach ($customerlist as $number => $value) {
        echo "<tr><td>$number</td>
                  <td>" . $value['ten'] . "</td>
                  <td>" . $value['ngay sinh'] . "</td>
                  <td>" . $value['dia chi'] . "</td>
                  <td><div><img src=" . $value['hinh anh'] . "></div></td>
                  
              </tr>";


    }

    ?>

</table>
</body>
</html>
