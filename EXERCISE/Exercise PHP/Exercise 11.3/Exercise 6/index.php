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
                    <input type="text" name="array" class="form-control">
                    <input type="text" name="limit" class="form-control">
                    <button type="submit" class="btn btn-success">CHECK</button>
                </form>
                <?php
                    function cutArray(){
                        $array = $_POST["array"];
                        $limit = $_POST["limit"];
                        $array = explode(",", $array);
                        if (is_numeric($limit) && is_array($array)) {
                            for ($i = 0; $i < count($array); $i += $limit) {
                                echo "[";
                                for ($j = $i; $j <= $i + $limit - 1; $j++) {
                                    if ($j > count($array) -1 ) {
                                        continue;
                                    }
                                    else {
                                        echo $array[$j];
                                    }
                                }
                                echo "]" . " ";
                            }
                        } else {
                            echo "<p class='text-danger'>Value is not correct</p>";
                        }
                    }
                    cutArray();
                ?>
            </div>
        </div>
    </div>
</body>
</html>
