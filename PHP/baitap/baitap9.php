<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 9 and 10</title>
</head>
<body>
    <h2>Email Validation trong PHP</h2>
    <form action="" method="POST">
        <input type="text" name="email" placeholder="hãy nhập email" style="font-style:italic" value="<?php echo $email = isset($_POST['email']) ? $_POST['email'] : '';?>">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo 'bạn đã nhập đúng email: ' . $email;
            } else {
                echo 'bạn đã nhập sai định dạng của email, bạn vui lòng hãy nhập lại';
            }
        }
    ?>

    <h2>Viết PHP script để đếm số dòng trong một file</h2>

    <?php 
        $FileName = '../D1/index.php';
        $NumberLine = count(file($FileName));
        echo "có $NumberLine dòng trong file $FileName";
    ?>
</body>
</html>