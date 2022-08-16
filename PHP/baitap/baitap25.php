<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 25 and 26</title>
</head>
<body>
    <h2>25. Tìm key lớn nhất trong mảng PHP</h2>
    <?php
        $array = [
            '1' => 'Green',
            'b' => 'Red',
            '3' => 'Blue',
            'D' => 'White',
            'e' => 'Black',
            '5' => 'Yellow',
        ];

        $max_key = max(array_keys($array));
        echo 'key lớn nhất trong mảng: ' . $max_key;
    ?>

    <h2>26. Tìm giá trị nhỏ nhất trong mảng PHP</h2>
    <?php
        $array = [
            'Hoang' => '17',
            'Nam' => '-9',
            'Minh' => '4',
            'Hoa' => '20',
            'nhan' => '-18',
        ];

        echo 'giá trị nhỏ nhất trong mảng: ' . min($array);
    ?>
</body>
</html>