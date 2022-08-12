<!DOCTYPE html>
<html>
    <head>
        <title>Giải phương trình bậc nhất</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('input').change(function() {
                    var $a = parseFloat($('.text').val());
                    var $b = parseFloat($('.text2').val());
                    var $x = parseFloat(-($b) / $a);
                    $('span').html('kq: ' + $x );
                });
            });
        </Script>
    </head>
    <body>
        <?php 
                $result = '';       
                if (isset($_POST['calculate'])) {
                    // Bước 1: Lấy tham số
                    $a = isset($_POST['a']) ? $_POST['a'] : '';
                    $b = isset($_POST['b']) ? $_POST['b'] : '';

                    if ($a == ''){
                        $result = 'Bạn chua nhập số a';
                    }
                    else if ($b == ''){
                        $result = 'Bạn chưa nhập số b';
                    }
                    else if ($a == 0){
                        $result = 'Số a phải nhập khác 0';
                    }
                    else {
                        $result = -($b) / $a;
                    }
                }
        ?>
        <h1>Giải phương trình bậc nhất</h1>
        <form method="post" action="">
            <input class="text" type="text" style="width: 40px" name="a" value=""/>x 
            +
            <input class="text2" type="text" style="width: 40px" name="b" value=""/> = 0
            <br> <br>
            <input type="submit" name="calculate" value="tinh" />
        </form>
        <!-- <span>kq: </span> -->
        <br>
        <br>
        <?php echo $result; ?>
    </body>
</html>