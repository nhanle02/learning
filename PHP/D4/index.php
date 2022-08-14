<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Bai tap voi co so du lieu</title>
</head>
<body>
    <?php
        try {
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'shops';
            // Kết nối
            $conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);

            //Thiết lập chế độ lỗi
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Kết nối thất bại: " . $e->getMessage();
        }
    ?>
    <h4>Thực hiện chức năng CRUD với table users</h4>
    <?php
        $mysql = "SELECT * FROM users";

        // Sử dụng Prepare 
        $stmt = $conn->prepare($mysql);

        // Thực thi câu truy vấn
        $stmt->execute();

        // Khai báo fetch kiểu mảng kết hợp
        $stmt->setFetchMode(PDO::FETCH_ASSOC); 

        $results = $stmt->fetchAll();
        // echo '<pre>';
        // echo print_r($results, true);
        // echo '</pre>'
    ?>
    <a href="" class="btn btn-success mb-1">Create +</a>
    <table class="table" style="width: 1000px;">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Full name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Status</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (!empty($results)) { 
                foreach ($results as $result) {
            ?>
                <tr>
                    <td><?php echo $result['id'] ?></td>
                    <td><?php echo $result['full_name'] ?></td>
                    <td><?php echo $result['email'] ?></td>
                    <td><?php echo $result['phone'] ?></td>
                    <td><?php echo $result['address'] ?></td>
                    <td>
                        <?php
                            $status = '<span class="badge badge-success">Kich hoat</span>';
                            if ((int) $result['status'] === 2) {
                                $status = '<span class="badge badge-danger">Chua Kich hoat</span>';
                            }
                            echo $status;
                        ?>
                    </td>
                    <td>
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php 
                }
            } 
            ?>
        </tbody>
    </table>
</body>
</html>