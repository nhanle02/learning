<?php
    require "./common/header.php";
?>
    <div class="container mt-4">
        <h4>Edit Users</h4>
        <?php
            if (empty($_GET['id'])) {
                header('Location: index.php');
            }

            $sqlEdit = "SELECT * FROM users where id = ?";
            $prepare = $conn->prepare($sqlEdit);
            $prepare->execute([$_GET['id']]);
            $prepare->setFetchMode(PDO::FETCH_ASSOC);
            $user = $prepare->fetch();


            function isUniqueEmail($email) {
                global $conn;
                $sql = "SELECT id from users where email = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$email]);
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $result = $stmt->fetchAll();
                return $result;
            }

            $errors = [];
            if (isset($_POST['submit'])) {
                $fullName = $_POST['full_name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $passwordConfirm = $_POST['password_confirm'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $avatar = $_FILES['avatar'];
                $status = $_POST['status'] ?? 0;
                if (empty($fullName)) {
                    $errors['full_name'] = 'Họ tên là bắt buộc nhập';
                } else if (strlen($fullName) > 100) {
                    $errors['full_name'] = 'Vui lòng nhập nhỏ hơn hoặc bằng 100 ký tự';
                }
                if (empty($email)) {
                    $errors['email'] = 'Email là bắt buộc nhập';
                } else if (strlen($email) > 100) {
                    $errors['email'] = 'Vui lòng nhập nhỏ hơn hoặc bằng 100 ký tự';
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = 'Email chưa đúng định dạng';
                } else if (isUniqueEmail($email)) {
                    $errors['email'] = 'Email đã có người sử dụng';
                }

                if (empty($password)) {
                    $errors['password'] = 'Mật khẩu là bắt buộc nhập';
                } else if (strlen($password) > 32 || strlen($password) < 8) {
                    $errors['password'] = 'Vui lòng nhập mật khẩu từ 8 đến 32 ký tự';
                } else if ($password !== $passwordConfirm) {
                    $errors['password_confirm'] = 'Xác nhận mật khẩu chưa khớp';
                }
                if ($avatar['error'] === 0) {
                    $types = [
                        'image/png', 'image/jpg', 'image/jepg',
                    ];
                    if (!in_array($avatar['type'], $types) ) {
                        $errors['avatar'] = 'File đã chọn chưa đúng định dạng';
                    } else if ($avatar['size'] > 2048) {
                        $errors['avatar'] = 'Vui lòng chọn file không quá 2MB';
                    }
                }

                if (empty($errors)) {
                    // Xử lý update
                }
            }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Full name</label>
                <input type="text" name="full_name" value="<?php echo $fullName ?? $user['full_name'] ?>" class="form-control" />
                <?php if (!empty($errors['full_name'])) { ?>
                    <span class="text-danger"><?php echo $errors['full_name']; ?></span>
                <?php
                    }
                ?>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" value="<?php echo $email ?? $user['email'] ?>" class="form-control" />
                <?php if (!empty($errors['email'])) { ?>
                    <span class="text-danger"><?php echo $errors['email'] ?></span>
                <?php } ?>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" value="" class="form-control" />
                <?php if (!empty($errors['password'])) { ?>
                    <span class="text-danger"><?php echo $errors['password'] ?></span>
                <?php } ?>
            </div>

            <div class="form-group">
                <label for="">Password Confirm</label>
                <input type="password" name="password_confirm" value="" class="form-control" />
                <?php if (!empty($errors['password_confirm'])) { ?>
                    <span class="text-danger"><?php echo $errors['password_confirm'] ?></span>
                <?php } ?>
            </div>

            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" value="<?php echo $phone ?? $user['phone'] ?>" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" value="<?php echo $address ?? $user['address'] ?>" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" name="avatar" value="<?php echo $avatar ?? $user['avatar'] ?>" class="form-control" />
                <?php if (!empty($errors['avatar'])) { ?>
                    <span class="text-danger"><?php echo $errors['avatar'] ?></span>
                <?php } ?>
                <div class="preview-image">
                    <img style="object-fit: contain;" width="200" height="200" src="../../PHP/D4/uploads/<? echo $user['avatar'] ?>" alt="" />
                </div>
            </div>

            <div class="form-group">
                <label for="">Status</label> <br>
                Active:<input type="radio" name="status" <?php echo ($status ?? $user['status']) == 1 ? 'checked' : '' ?> value="1" />
                Deactive<input type="radio" name="status" <?php echo ($status ?? $user['status']) == 2 ? 'checked' : '' ?>  value="2" />
            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Create" class="btn btn-success" />
                <a href="index.php" class="btn btn-light">Back</a>
            </div>
        </form>
    </div>
<?php
    require "./common/footer.php";
?>