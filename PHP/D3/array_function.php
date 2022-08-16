<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP array function</title>
</head>
<body>
    <h1>Danh sách các hàm xử lý mảng trong PHP</h1>

    <h4>1. array_change_key_case($array, $case)</h4>

    <?php
        $array = [
            'key_1' => 'Value 1',
            'key_2' => 'Value 2',
            'key_3' => 'Value 3',
        ];
        $arrayUpper = array_change_key_case($array, 1);
        print_r($arrayUpper);
        $arrayLower = array_change_key_case($arrayUpper, 0);
        echo '<br />';
        print_r($arrayLower);
    ?>

    <h4>2. array_combine($array_keys, $array_values)</h4>
    <?php
        $arrayKeys = [
            'a', 2, 3, 4,
        ];

        $arrayValues = [
            'Value 1', 'Value 2', 'value 3', 'Value 4',
        ];

        $arrayCombine = array_combine($arrayKeys, $arrayValues);
        print_r($arrayCombine);
    ?>

    <h4>3. array_count_values ( $array )</h4>
    <small>Đếm số lần xuất hiện của các phần tử giống nhau trong mảng $array và trả về một mảng kết quả.</small>
    <br>
    <?php
        $array = [
            'key_1' => 'Value 1',
            'key_2' => 'Value 2',
            'key_3' => 'Value 3',
            'key_4' => 'Value 1',
            'key_5' => 'Value 3',
            'key_6' => 'Value 3',
        ];
        $arrayCountValue = array_count_values($array);
        print_r($arrayCountValue);
    ?>
    <h4>4. array_push(&$array, $add_value1, $add_value2, $add_value…)</h4>
    <small>Thêm vào cuối mảng $array một hoặc nhiều phần tử với các giá trị tương ứng biến $add_value truyền vào.</small>
    <br>

    <?php
        $array = [
            'Value 1',
        ];
        array_push($array, 'Value 2', 'Value 3');
        print_r($array);
    ?>

    <h4>5. array_pop(&$array)</h4>
    <small>Xóa trong mảng $array phần tử cuối cùng và trả về phần tử đã xóa.</small>
    <br>
    <?php
        $array = [
            'Value 1', 'Value 2', 'Value 3',
        ];
        $pop = array_pop($array);
        echo $pop; echo '<br>';
        print_r($array);
    ?>
    <h4>7. array_shift(&$array)
        <small>Xóa phần tử đầu tiên ra khỏi mảng $array và trả về phần tử vừa xóa đó.</small>
    </h4>
    <br>
    <?php
        $array = [
            'Value 1', 'Value 2', 'Value 3',
        ];
        $shift = array_shift($array);
        echo $shift;
        print_r($array);
    ?>

    <h4>8. array_unshift(&$array, $value1, $value2, …)
        <small>Thêm các giá trị $value1, $value2, … vào đầu mảng $array.</small>
    </h4>
    <br>
    <?php
        $array = [
            'Value 1',
        ];
        $items = [
            'a', 'b', 'c',
        ];
        array_unshift($array, 'Value 2', $items);
        echo "<pre>" . print_r($array, true) . "</pre>";
    ?>

    <h4>10. in_array($needle, $haystackarray)
        <small>Kiểm tra giá trị $needle có nằm trong mảng $haystackarray không. trả về true nếu có và flase nếu không có.</small>
    </h4>
    <?php
        $array = [
            'a',
            'key_b' => 'b',
            'c',
        ];
        $b = 'b';
        var_dump(in_array($b, $array));
    ?>

    <h4>11. array_key_exists($key, $searcharray)
        <small>Kiểm tra key $key có tồn tại trong mảng $searcharray không, trả về true nếu có và false nếu không có.</small>
    </h4>
    <?php
        $array = [
            'a',
            'key_b' => 'b',
            'c',
        ];
        $check = array_key_exists('key_b12', $array);
        var_dump($check);
    ?>

    <h4>12 .array_unique( $array )
        <small>Loại bỏ giá trị trùng trong mảng $array.</small>
    </h4>
    <?php
        $array = [
            'a',
            'key_b' => 'b',
            'c',
            'a',
        ];
        $result = array_unique($array);
        print_r($result);
    ?>

    <h4>13. array_values ($array )
        <small>Chuyển mảng $array sang dạng mảng chỉ mục.</small>
    </h4>

    <?php
        $array = [
            'a',
            'key_b' => 'b',
            'key_c' => 'c',
        ];
        $arrayValues = array_values($array);
        print_r($arrayValues);
    ?>

    <h4>14. end($array)
        <small>Lấy giá trị cuối cùng của mảng</small>
    </h4>
    <?php
        $array = [
            'a',
            'key_b' => 'b',
            'key_c' => 'c',
        ];
        $end = end($array);
        echo $end;
    ?>

    <h4>15. count($array )
        <small>Trả về tổng các phần tử  của mảng</small>
    </h4>
    <?php
        $array = [
            'a',
            'key_b' => 'b',
            'key_c' => 'c',
        ];
        $count = count($array);
        echo $count;
    ?>

    <h4>16. array_sum($array)
        <small>Tính tổng các giá trị trong mảng</small>
    </h4>
    <?php
        $array = [
            '10',
            'key_b' => '5',
            'key_c' => 'c',
        ];
        echo array_sum($array);
    ?>

    <h4>17. array_merge($array)
        <small>Hàm array_merge() sử dụng để nối hai hay nhiều mảng lại thành một mảng. Nếu trong các mảng truyền vào có những phần tử có cùng khóa, phần tử của mảng cuối cùng được truyền vào sẽ được chọn để nối vào mảng kết quả.</small>
    </h4>
    <?php
        $array1 = [
            '10',
            'key_b' => '5',
            'key_c' => 'c',
        ];

        $array2 = [
            'key_b' => '6',
            'key_c' => '10',
        ];

        $arrayMerge = array_merge($array2, $array1);
        echo "<pre>" . print_r($arrayMerge, true) . "</pre>";
    ?>

</body>
</html>