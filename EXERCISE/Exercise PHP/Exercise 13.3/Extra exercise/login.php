<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        .row {
            background-image: url('image/background2.jpg');
            background-size: cover;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    <?php
        setcookie("name", "admin", time() + 60, "/");
        setcookie("password", "Iamnotarobot@Mis2022", time() + 60, "/");
        $err = "";
        if (isset($_POST["submit"])) {
            if ($_POST["password"] != $_COOKIE["password"]) {
                $err = "Mật khẩu không chính xác";
            }
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6"></div>
            <div class="col-12-6 col-sm-6 col-md-6 col-lg-6 ">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="form-control border bg-white mt-5 ">
                    <p class="text-center m-3">Đăng nhập với</p>
                    <div class="form-group d-flex justify-content-around">
                        <a href="#" class="form-control btn btn-primary">Facebook</a>
                        <a href="#" class="form-control btn btn-danger ">Google</a>
                        <a href="#" class="form-control btn btn-success ">Phone</a>
                    </div>
                    <p class="text-center m-3">Hoặc</p>
                    <input class="form-control" type="text" name="name" required="">
                    <input class="form-control mt-3" type="password" name="password" required="">
                    <span class="text-danger"><?php echo $err; ?></span><br>
                    <input type="checkbox" name="rmbpass">
                    <label>Nhớ mật khẩu</label>
                    <a href="#" class="float-right">Quên mật khẩu?</a>
                    <p class="mt-3">Cần email xác minh mới <a href="#">Gửi lại</a></p>
                    <input href="index.php" type="submit" name="submit" class="form-control btn-primary" value="Đăng nhập">
                    <p class="text-center m-3">Bạn chưa có tài khoản</p>
                    <a href="#" class="form-control btn btn-info">Đăng ký</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>