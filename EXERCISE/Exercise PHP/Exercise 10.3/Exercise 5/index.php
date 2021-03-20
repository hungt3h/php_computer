<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 5</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 mx-auto border mt-4">
                <form action="#" method="post">
                    <div class="text-center my-2 border">
                        <h4>Thực hành toán tử</h4>
                    </div>
                    <div class="my-5">
                        <input class="mb-4" type="text" name="numbera"><br>
                        <input class="mb-4" type="text" name="numberb"><br>
                        <button class="btn btn-success" type="submit" name="plus">Cộng</button>
                        <button class="btn btn-primary" type="submit" name="minus">Trừ</button>
                        <button class="btn btn-danger" type="submit" name="multiply">Nhân</button>
                        <button class="btn btn-warning" type="submit" name="divide">Chia</button>  
                    </div>
                    <p>
                        Kết quả:
                        <?php
                            $numbera = $numberb = "";
                            if (isset($_POST['plus'])) {
                                echo "a + b = ". $_POST['numbera'] + $_POST['numberb'];
                            }
                            if (isset($_POST['minus'])) {
                                echo "a - b = ". $_POST['numbera'] - $_POST['numberb'];
                            }
                            if (isset($_POST['multiply'])) {
                                echo "a * b = ". $_POST['numbera'] * $_POST['numberb'];
                            }
                            if (isset($_POST['divide'])) {
                                echo "a / b = ". $_POST['numbera'] / $_POST['numberb'];
                            }
                        ?>
                    </p>  
                </form>
            </div>
        </div>
    </div> 
</body>
</html>