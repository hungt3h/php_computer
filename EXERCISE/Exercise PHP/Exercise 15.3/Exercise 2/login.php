<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bai tap 2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        $username = $password = "";
        $usernameErr = $passwordErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["username"])) {
                $usernameErr = "<p class='text-danger'>Trường text không được để trống</p>";
            } else {
                $username = $_POST['text'];
            }
            if (!isset($_POST['password'])) {
                $passwordErr = "<p class='text-danger'>Cần check ít nhất 1 trường checkbox</p>";
            } else {
                $password = $_POST['password'];
            }
        }
    ?>
    <div class="container">
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="email1">Username</label><?php echo $usernameErr; ?>
                <input type="text" class="form-control" placeholder="Username" name="username">
            </div>
            <div class="form-group">
                <label for="password1">Password</label><?php echo $passwordErr; ?>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <input type="checkbox" name="remember">
            <label>Remember me</label><br>
            <button type="submit" class="btn btn-primary mt-3" name="submit" value="submit">Login</button>
        </form>
    </div>
</body>
</html>