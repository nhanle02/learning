<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homeWork 5 and 6</title>
</head>
<body>
    <h2>5. Viết PHP script để lấy tên file hiện tại</h2>

    <?php 
        $NameFile = basename($_SERVER['PHP_SELF']);
        echo 'tên file php hiện tại là: ' . '<span style="color: blue;">' .$NameFile . '</span>';
    ?>
    <br> <br>
    <h2>6. Lấy URL trong PHP</h2>
    <?php
        $URL = $_SERVER['REQUEST_URI'];
        echo $URL;

        // $query = $_SERVER['QUERY_STRING'];
        // echo $query; //Outputs: Query String

        // $domain = $_SERVER['HTTP_HOST'];
        // echo $domain; //Outputs: HOST

        // $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

        // $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        // echo $url; //Outputs: Full URL
    ?>
</body>
</html>