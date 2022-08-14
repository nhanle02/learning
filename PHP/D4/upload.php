<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Upload File To Server</title>
</head>
<body>
    <h1>Upload file lên server với php</h1>
    <p>
        Để upload file lên Server thì ban phải sử dụng form có thuộc tính enctype="multipart/form-data" và phương thức POST, thẻ input sẽ có type="file".

        Khi bạn upload một file lên thì trên Server sẽ nhận được 5 thông số cho một file, và PHP sẽ dựa vào các thông số đó để tiến hành upload, các thông số đó là:

        name: Tên của file bạn upload
        type: Kiểu file mà bạn upload (hình ảnh, word, …)
        tmp_name: Đường dẫn đến file upload ở client
        error: Trạng thái của file bạn upload, 0 => không có lỗi
        size: Kích thước của file bạn upload
    </p>
    <?php
        if (isset($_POST['submit'])) {
            $files = $_FILES['file_upload'];
            if (empty($files['name'])) {
                echo 'File not found';
            } else {
                if ($files['error'] !== 0) {
                    echo 'File error!!!';
                } else {

                    $pathSave = '../../PHP/' . $files['name'];
                    move_uploaded_file($files['tmp_name'], $pathSave);
                    echo 'Upload successfully!!!';
                }
            }

            //$files = isset($_FILES['file_upload']) ? $_FILES['file_upload'] : '';
            // echo '<pre>';
            // echo print_r($files, true);
            // echo '</pre>';
        }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        File: <input type="file" name="file_upload" /> <br> <br>
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>