<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning function header</title>
</head>
<body>
    <h1>Tìm hiểu hàm header trong PHP</h1>
    <pre>header ($string, $replace = true, $http_response_code = null) {}</pre>

    <h4>1. Header điều hướng trang</h4>
    <p>header('Location: https://www.google.com/')</p>
    <?php
        // header('Location: date.php');
    ?>
    <h4>2. Khắc phục lỗi font với hàm header</h4>
    <p>Bạn có thể sử dụng hàm header để khắc phục tình trạng lỗi font khi trả kết quả về không có định dạng thẻ meta utf8 bằng cách đặt đoạn code sau ở đầu file.</p>
    <pre>header('Content-Type: text/html; charset=utf-8');</pre>

    <h4>Header Request và Header Response</h4>
    <p>
        Client (User, browser)
            -> Header Request
                -> Server (Handle)
                    -> Header Response (Client, User, browser)
    </p>
</body>
</html>