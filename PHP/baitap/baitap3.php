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
                    var $a = parseFloat($('.t1').val());
                    var $b = parseFloat($('.t2').val());
                    var $c = parseFloat($('.t3').val());
                    // var $x = parseFloat(-($b) / $a);
                    // $('span').html('kq: ' + $x );
                });
            });
        </Script>
    </head>
    <body>
    <?php 
            $result = '';
            if (isset($_POST['calculate'])) {
                $a = isset($_POST['a']) ? $_POST['a'] : '';
                $b = isset($_POST['b']) ? $_POST['b'] : '';
                $c = isset($_POST['c']) ? $_POST['c'] : '';


                $delta = (float)($b*$b - 4*$a*$c);
                if($delta<0){
                    $result = 'Phương trình vô nghiệp';
                }
                else if($delta==0){
                    $result = 'Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);
                }
                else{
                    // $delta = sqrt($delta);
                    // echo $result = (-$b + $delta) / (2*$a);
                    // echo $result = (-$b - $delta) / (2*$a);
                    $result = 'Phương trình có hai nghiệp phân biệt: x1 = ' . ((-$b + sqrt($delta))/2*$a);
                    $result .= ', x2 = ' . ((-$b - sqrt($delta))/2*$a);
                }
            }
        ?>
        <h1>Giải phương trình bậc hai</h1>
        <form method="post" action="">
            <input clas="t1" type="text" style="width: 20px" name="a" value=""/>x<sup>2</sup>
            +
            <input class="t2" type="text" style="width: 20px" name="b" value=""/>x
            + 
            <input class="t3" type="text" style="width: 20px" name="c" value=""/>
            = 0
            <br/><br/>
            <input type="submit" name="calculate" value="Tính" />
        </form>
        <?php echo $result; ?>
        <br> <br>
        <!-- <span>kq: </span> -->
    </body>
</html>