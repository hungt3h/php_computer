<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 5</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 my-5 border mx-auto text-center">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                    <input type="text" name="data" class="form-control" placeholder="Enter your strings">
                    <button type="submit" class="btn btn-success">CHECK</button>
                </form>
                <?php
                    function reverse($str) {
                        if (is_numeric($str)) {
                            $num = "";
                            $str = strval($str);
                            for ($i = strlen($str) - 1; $i >= 0; $i--) {
                                if (intval($str) < 0) {
                                    $num .= $str[$i];
                                    $num = str_replace("-", "", $num);
                                }
                                else {
                                    echo $str[$i];
                                }
                            }
                            if (intval($num)) {
                                echo "-". $num;
                            }
                        }
                        else {
                            echo "<p class='text-danger'>Value is not number</p>";
                        }
                    }
                    echo reverse($_POST['data']);
                ?>
            </div>
        </div>
    </div>
</body>
</html>
