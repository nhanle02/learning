<?php
    require "./common/header.php";
?>
    <div class="container mt-4">
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
                
        <a href="create.php" class="btn btn-success mb-1">Create +</a>
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
                        <td class="box">
                            <a href="edit.php?id=<?php echo $result['id'] ?>" class="btn btn-info">Edit</a>
                            <a href="javascript:void(0)" class="delete btn btn-danger">Delete</a>
                            <form action="delete_users.php" class="d-none js-form" method="POST">
                                <input type="text" name="id" value="<?php echo $result['id'] ?>">
                                <input type="submit" name="submit" class="submit">
                            </form>
                        </td>
                    </tr>
                <?php 
                    }
                } 
                ?>
                
            </tbody>
            <script>
                $(function(){
                    $('.delete').click(function(){
                        if(confirm("bạn có chắc chắn muôn xóa không?")) {
                            $(this).closest('.box').find('.js-form .submit').click();
                        } else {
                            return false;
                        }
                    });
                });
            </script>
        </table>
    </div>
<?php
    require "./common/footer.php";
?>