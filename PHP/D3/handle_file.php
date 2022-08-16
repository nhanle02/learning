<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP function handle file</title>
</head>
<body>
    <h1>Các hàm xử lý file trong php</h1>

    <h4>1. Mở file
        Để mở một file ta dùng cú pháp sau: fopen($path, $option). Trong đó $path là đường dẫn đến file cần mở, $option là quyền cho phép thao tác trên file.
    </h4>
    <table border="" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">Mode</th>
                <th scope="col">Diễn giải</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>r</td>
                <td>Read only</td>
            </tr>
            <tr>
                <td>r+</td>
                <td>Read + Write</td>
            </tr>
            <tr>
                <td>w</td>
                <td>Write only</td>
            </tr>
            <tr>
                <td>w+</td>
                <td>Write + Read. Nếu file này tồn tại thì nội dung cũ sẽ bị xóa đi và ghi lại nội dung mới, còn nếu file chưa tồn tại thì nó tạo file mới</td>
            </tr>
            <tr>
                <td>a</td>
                <td>Mở dưới dạng append dữ liệu, chỉ có write và nếu file tồn tại nó sẽ ghi tiếp nội dung phía dưới, ngược lại nếu file không tồn tại nó tạo file mới</td>
            </tr>
            <tr>
                <td>a+</td>
                <td>Mở dưới dạng append dữ liệu, bao gồm write và read.&nbsp;<span style="line-height: 20.7999992370605px;">Nếu file tồn tại nó sẽ ghi tiếp nội dung phía dưới, ngược lại nếu file không tồn tại nó tạo file mới</span></td>
            </tr>
            <tr>
                <td>b</td>
                <td>Mở dưới dạng chế độ binary</td>
            </tr>
        </tbody>
    </table>

    <?php
        $pathFile = './text.text';
        $open = @fopen($pathFile, 'r');
        if ($open) {
            echo 'Oke';
        } else {
            echo 'Not Oke';
        }
    ?>

    <h4>2. Đọc file</h4>
    <p>
        Có 3 cách đọc file thông thường trong PHP đó là đọc từng dòng, đọc từng ký tự và đọc hết file.

        Ta dùng hàm fgetc($fp) để đọc theo từng ký tự, dùng fgets($fp) để đọc theo từng dòng. Đối với đọc từng dòng và đọc từng ký tự ta phải dùng hàm feof($fp) đặt trong vòng lặp while để sau khi đọc xong nó sẽ chuyển sang dòng mới hoặc ký tự mới.

        Để đọc hết tất cả file ta dùng hàm fread($fp, $size), trong đó $fp là đối tượng lúc mở file còn $size là kích cỡ của file cần đọc. Để lấy kích cỡ của file cần đọc ta dùng hàm filesize($path).
    </p>
    <?php
        if (!$open) {
            echo 'Mo file khong thanh cong!!!';
        } else {
            // while (!feof($open)) {
            //     // echo fgetc($open) . '<br>';
                
            //     echo fgets($open) . '<br>';
            // }
            $fileSize = filesize($pathFile);
            $fread = fread($open, $fileSize);
            print_r($fread);
        }
    ?>
    <h4>3. Ghi file</h4>
    <p>
        Để ghi nội dung vào file ta dùng hàm fwrite($fp, $content) trong đó $fp là đối tượng trả về lúc mở file, còn $content là nội dung muốn ghi vào.

        Việc ghi file phụ thuộc vào lúc bạn mở file như thế nào. Ví dụ lúc bạn mở file ghi đè thì lúc ghi file nó sẽ ghi đè, lúc bạn mở file ghi kiểu append thì lúc ghi file nó sẽ thêm xuống cuối file, nếu bạn mở file chỉ cho đọc thì bạn không thể ghi file được.
    </p>
    <?php
        $path = './text.text';
        $open = @fopen($path, 'w');
        if ($open) {
            $abc = 'Nhan 123';
            fwrite($open, $abc);
            fclose($open);
        }
    ?>
    <h4>4. file_exists($path)
        <small>Ta dùng hàm file_exists($path), trong đó $path là đường dẫn đến file cần kiểm tra</small>
    </h4>
    <?php
        if (file_exists($path)) {
            echo 'File tồn tại';
        } else {
            echo 'Deo co file';
        }
    ?>

    <h4>5. file_get_contents($path)
        <small>
        Ta dùng hàm  file_get_contents($path) để lấy nội dung của một file, trong đó $path là đường dẫn đến file cần lấy. $path có thể là đường link đến một trang web trên internet thì nó sẽ trả về nội dung html của trang web đó.
        </small>
    </h4>
    <?php
        $pathFile = './text.text';
        $content = file_get_contents($pathFile);
        echo $content;
    ?>

    <h4>6. file_put_contents($path, $noidung)</h4>
    <p>
        Trước khi dùng hàm này bạn nên dùng hàm is_writable để kiểm tra file có được phép ghi không.

        Ta dùng hàm file_put_contents($path, $noidung) để ghi nội dung cho một file, trong đó $path là đường dẫn đến file cần ghi, $noidung là nội dung bạn muốn ghi vào file.
    </p>
    <?php
        $content = 'Trước khi dùng hàm này bạn nên dùng hàm is_writable để kiểm tra file có được phép ghi không.
        Ta dùng hàm file_put_contents($path, $noidung) để ghi nội dung cho một file, trong đó $path là đường dẫn đến file cần ghi, $noidung là nội dung bạn muốn ghi vào file.';
        file_put_contents($pathFile, $content);
    ?>

    <h4>7. rename($oldname, $newname)</h4>
    <?php
        $oldName = './text_1.text';
        $newName = './text_123.text';
        //rename($oldName, $newName);
    ?>

    <h4>8. copy($source, $dest)</h4>
    <?php
        $file = 'text_123.text';
        $newFile = 'text_1.text';
        copy($file, $newFile);
    ?>

    <h4>Xóa file: Ta dùng hàm unlink($path) để xóa file, trong đó $path là đường dẫn đến file cần xóa, ví dụ:</h4>
    <?php
        $file = './text_1.text';
        if (file_exists($file))
        {
            unlink($file);
        }
    ?>

    <h4>9. is_dir($filename)
        <small>Ta dùng hàm is_dir($filename), trong đó $filename là đường dẫn đến folder cần kiểm tra.</small>
    </h4>
    <?php
        $folder = '../D2/images/';
        if(is_dir($folder)){
            echo 'Folder Tồn Tại';
        } else {
            echo 'Khong ton tai folder';
        }
    ?>

    <h4>10. mkdir($path)
        <small>Ta dùng hàm mkdir($path) để tạo folder mới, trong đó $path là đường dẫn đến folder cần tạo. Bạn lưu ý folder cuối cùng chính là tên folder bạn cần tạo và tất cả các folder trước nó bạn chắc chắn là phải có, nếu không sẽ bị lỗi.</small>
    </h4>

    <?php
        $folder = '../D2/images';
        if (!is_dir($folder)) {
            mkdir($folder);
        }
    ?>
</body>
</html>