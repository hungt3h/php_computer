<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bai tap 2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        session_start();
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $_SESSION['username'] = $_POST['username'];
        }
        if(isset($_SESSION['username'])){
            $username= $_SESSION['username'];
            echo "Đăng nhập thành công! <br>";
            echo 'xin chào '.$username. "<br>";
            echo "Thời gian hiện tại đang login: " . date("d/m/Y"). " -- ". date("d:m:Y");
        }else{
            echo '<script>location.assign("login.php")</script>';
        }
    ?>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>