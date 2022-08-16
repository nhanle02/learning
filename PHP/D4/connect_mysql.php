<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect MYSQL</title>
</head>
<body>
    <h1>Xử lý truy vấn dữ liệu MySQL với PHP</h1>
    <h4>Kết nối PHP với MySQL</h4>
    <h4>Kết nối MySQL bằng MySQLi Object-Oriented:</h4>
    <?php
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'shops';
        $conn = new mysqli($host, $username, $password);
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }
        echo "Kết nối thành công";
    ?>

    <h4>Kết nối MySQL bằng MySQLi Procedural:</h4>
    <?php
        $conn = mysqli_connect($host, $username, $password);
        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }
        echo "Kết nối thành công";
    ?>

    <h4>Kết nối MySQL bằng  PDO:</h4>
    <?php
        try {
            // Kết nối
            $conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);

            //Thiết lập chế độ lỗi
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

             // Thông báo thành công
            echo "Kết nối thành công";
        } catch (PDOException $e) {
            echo "Kết nối thất bại: " . $e->getMessage();
        }
    ?>
</body>
</html>