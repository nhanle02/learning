<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 7 and 8</title>
</head>
<body>
    <h2>7. Đổi màu kí tự đầu tiên của từ trong PHP</h2>
    <?php
        $text = 'which company do you work at?';  
        //$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
        $startWord = substr($text, 0, 1);
        $exp = explode($startWord, $text);
        array_shift($exp);
        $text = implode('', $exp);
        echo '<span style="color:red;">' . $startWord . '</span>' . $text;
    ?>

    <h2>8. Viết PHP script để kiểm tra xem trang là được gọi từ https hay http</h2>

    <?php
        if(isset($_SERVER['HTTPS'])) {
            echo 'trang được gọi từ https';
        }
        echo 'trang này được gọi từ http';
    ?>
</body>
</html>