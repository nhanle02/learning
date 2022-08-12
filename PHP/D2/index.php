<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP D2</title>
</head>
<body>
    <h2>1. Phương thức GET và POST trong php</h2>
    <?php
        //print_r($_GET);

        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $title = isset($_GET['title']) ? $_GET['title'] : '';

        echo $id . ' --- ' . $title;
    ?>
    <br> <br>
    <?php
        print_r($_POST);
        $fullName = '';
        $phone = '';
        if (isset($_POST['submit'])) {
            $fullName = isset($_POST['full_name']) ? $_POST['full_name'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            echo $fullName . ' --- ' . $email . ' --- ' . $phone;
        }
    ?>
    <form method="POST" action="">
        Full name: <input type="text" name="full_name" value="<?php echo $fullName; ?>" /> <br> <br>
        Email: <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"> <br> <br>
        Phone: <input type="text" name="phone" value="<?php echo $phone; ?>" > <br> <br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <h2>2. Các hàm xử lý chuỗi trong php</h2>

    <?php
        $str = 'Test';
        echo "This is $str" . '<br />';
        echo 'This is ' . $str . '<br />';

        echo 'This is \'test\' oke';
    ?>

    <h3>2.1. Các hàm xử lý chuỗi hay sử dụng</h3>
    <?php
        $str = 'Hom nay la thu 3';
        echo 'Them dau \ vao chuoi: ';
        echo addcslashes($str, 'a..z0..9A..Z');
        echo '<br />';
        echo 'Chuyen chuoi thanh mang: ';
        $exp = explode(' ', $str);
        print_r($exp);
        echo '<br />';
        echo 'Chuyen mang thanh chuoi: ';
        $imp = implode('-', $exp);
        echo $imp; echo '<br />';

        echo 'Tinh tong ky tu trong chuoi<br />';
        echo strlen($str); echo '<br />';

        echo  'Tinh tong so tu trong chuoi<br />'; 
        echo str_word_count($str);

        echo '<h4> Lap lai chuoi theo so lan </h4>';
        echo str_repeat('Hello', 2);

        echo '<h4> Hàm này tìm kiếm và thay thế chuỗi. </h4>';
        echo str_replace('3', '4', $str);

        echo '<h4> Hàm này mã hóa chuỗi thành một dãy 32 ký tự (mã hóa md5). </h4>';
        echo md5($str);

        echo '<h4> Hàm này chuyển các thể html trong chuỗi $str sang  dạng thực thể của chúng (html sẽ ko còn tác dụng nên bạn có thể echo ra bên ngoài).</h4>';
        echo htmlentities('<p> This is test htmlentities</p>');
        echo html_entity_decode('<p> This is test htmlentities</p>');

        echo '<h4>strip_tags( $string, $allow_tags ): Hàm này bỏ các thẻ html trong chuỗi $string được khai báo ở $allow_tags. </h4>';
        echo strip_tags('<b>Test strip tags</b> <p>This is test strip tag p</p>', ['b']);

        echo '<h4> substr( $string,  $start, $length ): Hàm này lấy một chuỗi con nằm trong chuỗi $str bắt đầu từ ký tự thứ $start và chiều dài $length. </h4>';
        echo substr($str, 0, 5);

        echo '<h4> strstr( $string, $ky_tu_cho_truoc ): Tách một chuỗi bắt đầu từ  $ky_tu_cho_truoc cho đến hết chuỗi. </h4>';
        echo strstr($str, 'la');

        echo '<h4> strpos($str, $chuoi_tim ): Tìm vị trí của chuỗi $chuoi_tim trong chuỗi $str, kết quả trả về false nếu không tìm thấy. </h4>';
        echo strpos($str, 'la');

        echo '<h4> strtolower($str): Chuyển tất cả các ký tự chuỗi $str sang chữ thường. </h4>';
        echo strtolower('CHU HOA TO CHU THUONG');

        echo '<h4> strtoupper($str): Chuyển tất cả các ký tự chuỗi $str sang chữ hoa. </h4>';
        echo strtoupper('chu thuong thanh chu hoa');

        echo '<h4> trim($string, $ky_tu): Xóa ký tự $ky_tu nằm ở đầu và cuối chuỗi $str, nếu ta không nhập $ky_tu thì mặc định nó hiểu là xóa khoảng trắng. </h4>';
        echo trim('$This is test trim$', '$');

        echo '<h4> nl2br($string): Chuyển các ký tự xuống dòng “\n” thành thẻ. </h4>';
        $strNl2br = 'a
        b
        c
        d
        e';
        echo nl2br($strNl2br);

        echo '<h4> json_decode($json, $is_array): Dùng để chuyển chuỗi dạng JSON sang các đối tượng mảng hoặc object. Nếu $is_array có giá trị false thì hàm sẽ chuyển một chuỗi $json thành một Class (object),  ngược lại nếu $is_array có giá trị true thì sẽ chuyển chuỗi $json thành một mảng.. </h4>';
        $json = '{
            "array": [
              1,
              2,
              3
            ],
            "boolean": true,
            "color": "gold",
            "null": null,
            "number": 123,
            "object": {
              "a": "b",
              "c": "d"
            },
            "string": "Hello World"
        }';
        $decode = json_decode($json);
        echo $decode->color; // Doi voi truong hop object
        //echo $decode['color']; // Doi voi truong hop array

        echo '<h4> json_encode($array_or_object): Chuyển một mảng hoặc mội đối tượng (classs) sang chuỗi dạng JSON. </h4>';
        echo json_encode($decode);
    ?>
</body>
</html>