<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 23 and 24</title>
</head>
<body>
    <h2>23. Chuyển đổi mảng thành chữ hoa - chữ thường</h2>
    <?php
        $array = [
            'Green',
            'red',
            'blue',
            'white',
            'yellow',
            'black',
        ];

        
        $string1 = strtolower(implode(' ',$array));
        $array = explode(' ', $string1);
        echo '<pre>';
        echo print_r($array);
        echo '</pre>';

        $string = strtoupper(implode(' ', $array));
        $array = explode(' ', $string);
        echo '<pre>';
        echo print_r($array);
        echo '</pre>';
    ?>


    <h2>24. Tìm độ dài ngắn/dài nhất của các phần tử (dạng chuỗi) trong mảng</h2>

    <?php
        $array = [
            'Green',
            'red',
            'blue',
            'white',
            'yellow',
            'black',
        ];

        foreach ($array as $key => $value) {
            $string = $value;
            echo strlen($string) . '<br>';
            
        }
    ?>
</body>
</html>