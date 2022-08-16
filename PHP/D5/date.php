<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Handle date</title>
</head>
<body>
    <h1>1. Thiết lập time_zone</h1>
    <?php
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        echo date('Y/m/d H:i:s');
        echo '<br>';
        echo date_default_timezone_get();
    ?>

    <h4>2. Định dạng ngày tháng với hàm date() trong PHP</h4>
    <p>Hàm date dùng để chuyển đổi thời gian theo format mà lập trình viên mong muốn, cú pháp như sau:</p>
    <pre>date ($format, $timestamp = 'time()')</pre>
    <?php
        $date = '2022-03-20 10:20:20';
        $strtotime = strtotime($date);
        echo $strtotime; echo '<br>';
        echo date('d-m-Y', $strtotime);
    ?>

    <h4>Xử lý cộng trừ ngày tháng với hàm mktime()</h4>
    <code>mktime ($hour, $minute, $second, $month, $day , $year);</code><br>

    <?php
        $mkTime = mktime('20', '01', '10', '08', (16 + 4), (2022 + 3));
        echo date('Y-m-d H:i:s', $mkTime);
    ?>
</body>
</html>