<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 15 and 16</title>
</head>
<body>
    <h2>15. Hiển thị tất cả các số nằm trong khoảng (200, 250) mà chia hết cho 4</h2>
    <?php
        $i = 200;
        $n = 255;
        for($i; $i < $n; $i++) {
            if($i % 4 === 0) {
                echo $i . '<br>';
            }
        }
    ?>

    <h2>16. Viết PHP script để tạo mảng liên hợp hiển thị tên các quốc gia và thủ đô</h2>
    <?php
        $array = [
            "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",  
			"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",  
			"Finland"=>"Helsinki", "France" => "Paris",  
			"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",  
			"Germany" => "Berlin", "Greece" => "Athens",  
			"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
			"Austria" => "Vienna", "Poland"=>"Warsaw",
        ];

        asort($array);
        foreach ($array as $key => $value) {
            echo 'Thủ đô của ' . $key . ' là ' . $value . '<br>';
        }
    ?>
</body>
</html>