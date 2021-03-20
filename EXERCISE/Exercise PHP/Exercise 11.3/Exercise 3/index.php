<?php
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 my-5 border mx-auto text-center">
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                    <input type="text" name="month" class="form-control" placeholder="Enter your strings">
                    <button type="submit" class="btn btn-danger">Check</button>
                </form>
                <?php
                    function daysIsMonths($month){
                        if (empty($month)){
                            echo "<p class='text-danger'>Is not enter value</p>";
                        }
                        else {
                            if (strtotime($month)){
                                $month = str_replace(" ","",$month);
                                $value = strtotime($month);
                                $value = date("value", $value);
                                echo cal_days_in_month(CAL_GREGORIAN, $value, 2021);
                            }
                            else {
                                echo "Value is not month";
                            }
                        }
                    }
                    echo daysIsMonths($_POST["month"]);
                ?>
            </div>
        </div>
    </div>
</body>
</html>
