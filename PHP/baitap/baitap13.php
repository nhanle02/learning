<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 13 and 14</title>
</head>
<body>
    <h2>13. Viết PHP script để lấy thư mục gốc</h2>
    <?php
        $FolderRoot = getenv('DOCUMENT_ROOT');
        echo $FolderRoot;
    ?>

    <br> <BR>

    <h2>14. Lấy thông tin Hệ điều hành mà PHP đang chạy trên</h2>
    <?php
        echo 'phiên bạn server đang chạy là: '. '<span style="color: red;">' . php_uname() . '</span>' . '<br>' . '<br>';
        echo PHP_OS . '<br>' . '<br>';
        
        if(strtoupper(substr(PHP_OS, 0,3)) === 'WIN') {
            echo 'server bạn đáng sử dụng là windows!';
        } else echo 'server bạn đang sử dụng không phải windows!';
    ?>
</body>
</html>