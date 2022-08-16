<?php
    try {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'shops';
        // Kết nối
        $conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);

        //Thiết lập chế độ lỗi
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
    }
?>