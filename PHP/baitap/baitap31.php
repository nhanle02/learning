<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 31 and 32</title>
</head>
<body>
    <h2>31. Kiểm tra xem các giá trị trong mảng có phải là chuỗi không</h2>
    <?php
        $array = [
            'Hoang' => 17,
            'Nam' => 9,
            'Minh' => 4,
            '1' => 'Green',
            'b' => 'Red',
            '3' => 'Blue',
            'D' => 'White',
            'e' => 'Black',
            'Hoa' => 20,
            'nhan' => 18,
            '5' => 'Yellow',
        ];
        // echo '<pre>';
        // echo var_dump($array);
        // echo '</pre>';
        foreach ($array as $key => $value) {
            if (is_string($value)) {
                echo '<span style="color: red;">' . $value . '</span>' . ' la kieu string tai key: ' . $key . '<br>';
            } 
            // else {
            //     echo '<span style="color: red;">' . $value . '</span>' . ' la kieu chu so tai key: ' . $key . '<br>';
            // }
        }
    ?>

    <h2>32. Tìm giá trị lớn nhất, nhỏ nhất của một tập hợp các mảng số nguyên</h2>
    <?php
        $array = [
            5, 15, 7, 3 , 4,
        ];
        
        echo 'gia tri nho nhat cua mang la: ' . min($array) . '<br>';
        echo 'gia tri nho nhat cua mang la: ' . max($array) . '<br>';
    ?>
</body>
</html>