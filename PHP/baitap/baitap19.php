<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 19 and 20</title>
</head>
<body>
    <h2>19. Viết PHP script để chèn phần tử vào mảng</h2>
    <form action="" method="POST">
        <input type="text" name="index" placeholder="enter">
        <input type="text" name="value">
        <input type="submit" name="submit" value="next">
    </form>
    <?php
        $color = [
            'green', 'yellow', 'red', 'black', 'white',
        ];

        if (isset($_POST['submit'])) {
            $index = isset($_POST['index']) ? $_POST['index'] : '';
            $value = isset($_POST['value']) ? $_POST['value'] : '';

            array_splice($color, $index, 0, $value);

            echo '<pre>';
            echo print_r($color);
            echo '</pre>';
        }
    ?>

    <h2>20. Xử lý JSON string trong PHP</h2>
    <?php

    ?>
</body>
</html>