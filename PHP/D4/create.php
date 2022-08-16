<?php
    require "./common/header.php";
?>
    <div class="container pt-2">
        <h4>Create Users</h4>
        <?php
            $errors = [];
            if (isset($_POST['submit'])) {
                $fullName = $_POST['full_name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $avatar = $_FILES['avatar'];
                $status = $_POST['status'];
                if (empty($fullName)) {
                    $errors['full_name'] = 'Full name is required';
                }
            }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Full name</label>
                <input type="text" name="full_name" value="" class="form-control" />
                <?php if (!empty($errors['full_name'])) { ?>
                    <span class="text-danger"><?php echo $errors['full_name']; ?></span>
                <?php
                    }
                ?>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" value="" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" value="" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" value="" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" value="" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" name="avatar" value="" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Status</label> <br>
                Active:<input type="radio" name="status" value="1" />
                Deactive<input type="radio" name="status" value="0" />
            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Create" class="btn btn-success" />
            </div>
        </form>
    </div>
<?php
    require "./common/footer.php";
?>