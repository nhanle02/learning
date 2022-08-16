<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 29 and 30</title>
</head>
<body>
    <h2>29. Tìm giá trị trong một mảng liên hợp</h2>
    <form action="" method="POST">
        <input type="text" placeholder="enter" name="enter">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        $array = [
            "part1" => "PHP array", 
            "part2" => "PHP String", 
            "part3" => "PHP Math",
        ];
        $string = '';
        if(isset($_POST['submit'])) {
            $string = isset($_POST['enter']) ? $_POST['enter'] : '';
        }

        foreach ($array as $key => $value) {
            if($value == $string) {
                echo '<span style="color: red;">' . $string . '</span>' . ' duoc tim thay tai key: ' . $key;
            }
        }
    ?>

    <h2>30. Xóa bản sao giá trị trong mảng(kh biet lam - note:khong hieu de)</h2>
    <?php

    ?>
</body>
</html>