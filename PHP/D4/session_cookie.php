<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning session and cookie</title>
</head>
<body>
    <h1>Session và cookie trong php</h1>
    <h4>1. Session trong PHP</h4>
    <?php
        session_start();
        if (isset($_POST['submit'])) {
            if (empty($_POST['username'])) {
                echo 'Khong ton tai username';
            } else {
                $_SESSION['session_username'] = $_POST['username'];
                $_SESSION['session_username_1'] = $_POST['username'];
                echo 'Luu session thanh cong!!!';
            }
        }
        // unset($_SESSION['session_username']);
        //session_destroy();
    ?>

    <form action="" method="POST">
        Username: <input type="text" name="username" /> <br><br>
        <input type="submit" name="submit" value="SUBMIT" />
    </form>
    <p>Get session: <?php echo $_SESSION['session_username'] ?? ''; ?> </p>
    <p>Get session 1: <?php echo $_SESSION['session_username_1'] ?? ''; ?> </p>
    
    <h4>2. Cookie trong PHP</h4>
    <p>Để lưu trữ Cookie ta dùng cú pháp sau và phải đặt trước thẻ html: setcookie($name, $value, $expire, $path, $domain).</p>
    <?php
        if (isset($_POST['save_cookie'])) {
            if (empty($_POST['username'])) {
                echo 'Khong ton tai username';
            } else {
                setcookie('cookie_username', $_POST['username'], time() + 60);
                echo 'Luu cookie thanh cong!!!';
            }
        }
        //setcookie("cookie_username", "", time() - 60);
    ?>
    <form action="" method="POST">
        Username: <input type="text" name="username" /> <br><br>
        <input type="submit" name="save_cookie" value="SUBMIT" />
    </form>
    <p>Get cookie: <?php echo $_COOKIE['cookie_username'] ?? ''; ?> </p>
</body>
</html>