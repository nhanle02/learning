<?php
    require "./common/connect.php";
?>

<?php
    if (!empty($_POST['submit'])) {
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([$id]);
        //  $conn->exec($sql);
        header('Location: index.php');
    }
?>