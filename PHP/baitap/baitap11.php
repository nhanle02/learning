<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 11 and 12</title>
</head>
<body>
    <h2>11. In phiên bản PHP hiện tại</h2>
    <?php
        echo 'phiên bản php hiện tại là: ' . '<span style="color: red;">' . phpversion() . '</span>'; 
    ?>
    <br> <br>
    <h2>12. Sử dụng toán tử tam phân kiểm tra một số là lớn hơn 10, 15 hay 20</h2>
    <form action="" method="POST">
        <input type="text" name="enter" placeholder="hãy nhập một số!!!">
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <?php
        if(isset($_POST['submit'])) {
            $Number = isset($_POST['enter']) ? $_POST['enter'] : '';
            $result = $Number > 20 ? 'số vừa nhập lớn hơn 20!'
            : ($Number > 15 ?  'số vừa nhập lớn hơn 15!'
            : ($Number > 10 ?  'số vừa nhập lớn hơn 10!'
            : 'số bạn vừa nhập không thuộc 3 trường hợp trên!'));
        }

        echo $result;
    ?>
</body>
</html>