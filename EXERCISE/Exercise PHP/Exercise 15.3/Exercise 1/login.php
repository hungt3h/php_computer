<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bai tap 2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        setcookie("username", "admin", time() + 60, "/");
        setcookie("password", "Iamnotarobot@Mis2022", time() + 60, "/");
        $err = "";
        if (isset($_POST["submit"])) {
            if ($_POST["password"] != $_COOKIE["password"]) {
                $err = "Mật khẩu không chính xác";
            }
        }
    ?>
    <div class="container">
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="email1">Username</label>
                <input type="text" class="form-control" placeholder="Username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <?php echo $err; ?>
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Login</button>
        </form>
    </div>
</body>
</html>