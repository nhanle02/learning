<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 3 and 4</title>
</head>
<body>
    <h2>3. Viết code PHP để tạo một form đơn giản để nhận và hiển thị tên đăng nhập</h2>
    <br>
    <form action="" method="POST" name="form">
        user: <input type="text" class="user" name="user">
        password: <input type="password" class="pass" name="pass">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $user = isset($_POST['user']) ? $_POST['user'] : '';
            $password = isset($_POST['pass']) ? $_POST['pass'] : '';
            
        }
        echo '<br>' .'<br>';
        echo $user ;
        echo '<br>' .'<br>';
        echo $password;
    ?>

    <h2>4. Lấy địa chỉ Client IP trong PHP</h2>
    <?php 
        if (isset($_SERVER['HTTP_CLIENT_IP']))     
        {  
          $ip_address = $_SERVER['HTTP_CLIENT_IP'];  
        }  
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
            }  

            else {  
                $ip_address = $_SERVER['REMOTE_ADDR'];  
            }  
      echo "Địa chỉ Client IP là: $ip_address"; 
    ?>

</body>
</html>