<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 21 and 22</title>
</head>
<body>
    <h2>21. Sắp xếp mảng liên hợp trong PHP</h2>
    <?php
        $array = [
            'Hoang' => '17',
            'Nam' => '9',
            'Minh' => '4',
            'Hoa' => '20',
            'nhan' => '18',
        ];
        echo 'sap xep tang dan theo value';
        asort($array);
        echo '<pre>';
        echo print_r($array);
        echo '</pre>';

        echo 'nguoc lai';
        arsort($array);
        echo '<pre>';
        echo print_r($array);
        echo '</pre>';

        // echo 'sap xep tang dan theo key';
        // ksort($array);
        // echo '<pre>';
        // echo print_r($array);
        // echo '</pre>';

        // echo 'nguoc lai';
        // krsort($array);
        // echo '<pre>';
        // echo print_r($array);
        // echo '</pre>';
    ?>

    <h2>22. Viết PHP script để tìm giá trị trung bình của các phần tử mảng và hiển thị 5 phần tử nhỏ nhất và lớn nhất</h2>
    <?php
        $string = "1, 4, 5, 3, 15, 11, 10, 9, 8, 6, 2, 13, 20, 30";
        
        $array = explode(', ', $string);
        $count = count($array);
        $total = 0;
        foreach ($array as $value) {
            $total = $total + $value;
        } 
        echo 'gia tri trung binh: ' . ($total / $count);
        echo '<br>';

        sort($array);
        echo 'in ra 5 so nho nhat: ';
        for ($i = 0; $i <= 5; $i++) {
                echo $array[$i] . ', ';
        }

        echo '<br>';

        echo 'in ra 5 so lon nhat: ';
        for ($i = $count - 5; $i < $count; $i++) {
                echo $array[$i] . ', ';
        }
    ?>
</body>
</html>