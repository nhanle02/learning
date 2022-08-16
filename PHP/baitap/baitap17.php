<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 17 and 18</title>
</head>
<body>
    <h2>17. Xóa phần tử mảng trong PHP</h2>
    <form action="" method="POST">
        <input type="text" name="enter" placeholder="enter">
        <input type="submit" name="submit" value="next">
    </form>
    <?php
        $array = [
            'nhan', 'le', 'nghia', 'le',
        ];
        if (isset($_POST['submit'])) {
            $index = isset($_POST['enter']) ? $_POST['enter'] : '';
            $array1 = array_values($array);
            unset($array[$index]);
            if (count($array) == count($array1)) {
                echo 'phần tử bạn cần xóa không tồn tại';
            }

            echo '<pre>';
            echo print_r($array);
            echo '</pre>';
        }
    ?>
    <h2>18. Viết PHP script để lấy phần tử đầu tiên trong mảng</h2>
    <?php
        $array = [
            'nhan', 'le', 'nghia', 'le',
        ];
        echo '<pre>';
        echo print_r($array);
        echo '</pre>';
        echo reset($array);
    ?>
</body>
</html>