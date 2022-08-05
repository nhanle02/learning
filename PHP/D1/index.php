<?php 

# In dữ liệu trong php
    echo "Hello world!!! <br />"; 
    print_r("Hello Print");
    echo "<br />";
    var_dump(123);

#1. Khai báo biến số trong php
#Biến là một định danh, nó dùng để lưu trữ các giá trị và nó có thể dùng phép gán để thay đổi giá trị. Cú pháp của biến bắt đầu bằng dấu đô la $ và tiếp theo là các chữ, số, dấu gạch dưới. Ký tự đầu tiên của tên biến phải là chữ hoặc là dấu gạch dưới, không được là số.
#PHP là một ngôn ngữ có phân biệt chữ hoa chữ thường. Ví dụ: $sinhvien khác $SinhVien
    echo "<br />";
    $sinhvien90 = 90;
    echo $sinhvien90;

#2. Khai báo hằng: define(‘ten_hang’, ‘gia_tri’);
    # Chỉ khai báo 1 lần trong quá trình chạy chương trình
    define('HANG_1', 'Xin Chào PHP');
    echo HANG_1;

#3. Các kiểu dữ liệu trong php
#Trong php có tổng cộng 7 kiểu dữ liệu:
    # Kiểu INT
    # Kiểu Boolean
    # Kiểu Số Thực (float, double)
    # Kiểu Chuỗi
    # Kiểu Mảng (array)
    # Kiểu NULL
    # Kiểu Đối Tượng (object)

#3.1. Kiểu dữ liệu INT
    echo '<br/ >';
    $str = "120dsadsa";
    $int = (int) $str;

    var_dump($int);

    echo '<br />';
    $a = '123';  // Biến $a là kiểu chuỗi có giá trị bằng '123'
    $b = 123; // Biến $b là kiểu INT có giá trị bằng 123
    $c = $a + $b; // Biến C là kết quả của phép toán $a + $b và sẽ có giá trị là 246 nên nó là kiểu INT
    var_dump(is_int($c)); // hàm is_int($tenbien) dùng để kiểm tra một biến có phải là kiểu INT hay không
    var_dump(is_int($a)); // kết quả là false vì biến $a là kiểu string

    #Kiểm tra dữ liệu có phải kiểu INT: is_int(), is_integer()
    # Kết quả trả về giá trị True nếu là kiểu INT và False nếu không phải kiểu INT.

#3.2. Kiểu dữ liệu boolean
    # nó chỉ chứa 2 giá trị là đúng hoặc sai (TRUE hoặc FALSE).
    #Ép dữ liệu sang kiểu boolean.
    $bool = 1;
    $bool = (bool) $bool; # Hoặc (boolean) $bool;

    $a = 123; // TRUE
    $b = 0; // FALSE
    $c = '0'; // FALSE
    $d = 'a123b'; // TRUE
    $e = null; // FALSE
    $f = ''; // FALSE

    #Kiểm tra một biến kiểu boolean: is_bool($bien);

#3.3. Kiểu số thực
    #Ép dữ liệu sang kiểu số thức.
    $a = 123; // biến $a kiểu int
    $a = (float)$a; // Biến $a lúc này kiểu số thực (float)
    $a = (double)$a; // Biến $a lúc này kiểu ố thực (double)

    #Kiểm tra một biến kiểu số thực. is_float($bien), is_double($bien)

#3.4 Kiểu chuỗi
    # Các kiểu dữ liệu trong php thì kiểu chuỗi mình gồm kiểu string (chuỗi) và char (ký tự), mỗi ký tự là 1 byte và là một trong 256 ký tự khác nhau, để khai báo báo các bạn chỉ việc khai báo một biến và gán giá trị chuỗi cho nó, chuỗi phải được bao quanh bằng dấu nháy đơn ‘ hoặc dấu nháy kép “. Ép kiểu cũng như trên ta dùng (string) để chuyển sang kiểu chuỗi.
    $a = 123; // khai báo biến $a kiểu int có giá trị 123
    $a = (string)$a; //Chuyển biến $a thành kiểu chuỗi và có giá trị là '123'

    #Kiểm tra một biến kiểu string
    #Để kiểm tra một biến kiểu chuỗi (string) ta dùng hàm is_string($bien), kết quả hàm này trả về TRUE nếu đúng và FALSE nếu không đúng.

#3.5 Kiểu mảng (array)

    $array = []; // Hoặc $array = array();

    echo '<br>';
    $array = [
        'Giá trị 1', 'Giá trị 2',
    ];

    $array['gia_tri_3'] = "Giá trị 3";
    var_dump($array);
    print_r($array);

    echo '<br>';
    echo $array['gia_tri_3'];

    #Mảng nhiều chiều

    $mangNhieuChieu = [
        'key_1' => 'Value 1',
        'key_2' => [
            'Value 2.1', 'Value 2.2',
            'key_2_3' => [
                'Giá trị 1', 'Giá trị 2'
            ],
        ],
    ];

    echo '<br>';
    echo $mangNhieuChieu['key_2'][1];

    #Kiểm tra một biến kiểu mảng: is_array($bien)
    # Trả về giá trị true hoặc false

#3.6. Kiểu giá trị Null
    #Đây là kiểu đặc biệt trong PHP và cũng như các ngôn ngữ lập trình khác, nó mang giá trị rỗng.

    #Lúc bạn khởi tạo một biến và bạn gán = NULL thì sẽ hệ thông sẽ không tốn bộ nhớ để lưu trữ, nên việc sử dụng nó rất có lợi.

    #Kiểu NULL khi ép kiểu sang kiểu INT thì bằng 0, khi ép kiểu sang kiểu chuỗi thì = rỗng, và khi ép sang kiểu boolean thì mang giá trị FALSE.

    #Kiểm tra một biến có giá trị null: is_null($bien)


    $sinhvien = [
        'Nguyễn A',
        'Nguyễn B',
        'Nguyễn C',
        'Nguyễn D',
        'Nguyễn E',
        'Nguyễn F'
    ];

    echo "<br /> <br />";
    $count = count($sinhvien);
    for ($i = 0; $i < $count; $i++) {
        echo $sinhvien[$i] . "<br />";
    }

    echo "<br /> <br />";
?>
<h2>
    <?php echo "Vòng lặp foreach"; ?>
</h2>
<?php
foreach ($sinhvien as $key => $value) {
    echo 'Chỉ mục: ' . $key . ' Giá trị: ' . $value . '<br />';
}
echo "<br /> <br />";

$array = [
    'key_1' => 'Value 1',
    'key_2' => 'Value 2',
    'key_4' => [
        'Student 1',
        'Student 2',
        'Student 3',
        'Student 4',
        'Student 5',
    ],
    'key_3' => 'Value 3',
];
foreach ($array as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $valueSub) {
            echo '--- Giá trị: ' . $valueSub . '<br />';
        }
    } else {
        echo 'Chỉ mục: ' . $key . ' Giá trị: ' . $value . '<br />';
    }
}

echo "<br /> <br />";
echo "<h2>Function trong PHP</h2>";
function myFunction() {
    return 'This is test function';
}

echo myFunction();
echo "<br /> <br />";

function kiemTraSoChan($number) {
    if ($number % 2 === 0) {
        return true;
    }
    return false;
}

$number = 99;

if (kiemTraSoChan($number)) {
    echo $number . ' la so chan';
} else {
    echo $number . ' la so le';
}

echo "<br /> <br />";
echo "<h2>Ky thuat dat linh canh</h2> <br />";
echo "Tim so lon nhat trong mang da cho.";

function timMax($mang) {
    $count = count($mang);
    $max = $mang[0];
    for ($i = 1; $i < $count; $i++) {
        if ($mang[$i] > $max) {
            $max = $mang[$i];
        } else {
            $max = $max;
        }
    }
    return $max;
}
$mang = [
    2, 5, 7, 10, 1, 29, 15,
];
echo '<br />' . timMax($mang);

// <script language = php></script>