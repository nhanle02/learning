<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 27 and 28</title>
</head>
<body>
    <h2>27. Sắp xếp mảng trong PHP (theo thứ tự tự nhiên và không phân biệt kiểu chữ)</h2>
    <?php
        $array = [
            'a' => 'Green1',
            'c' => 'green3',
            'd' => 'Green5',
            'e' => 'Green2',
            'b' => 'green4',
        ];

        sort($array, SORT_NATURAL | SORT_FLAG_CASE);

        echo '<pre>';
        echo print_r($array);
        echo '</pre>';
    ?>

    <h2>28. Sắp xếp mảng theo chiều đảo ngược (còn gọi là đảo mảng)</h2>

    <?php
        $array = [
            'Green1',
            'green3',
            'Green5',
            'Green2',
            'green4',
        ];

        krsort($array);

        echo '<pre>';
        echo print_r($array);
        echo '</pre>';
    ?>
</body>
</html>