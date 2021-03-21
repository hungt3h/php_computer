<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bai tap 3</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 my-5 border mx-auto text-center">
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                    <input type="text" name="month" class="form-control" placeholder="Enter the month ">
                    <button type="submit" class="btn btn-danger">Check</button>
                </form>
                <?php
                    $month = $_POST['month'];

                    switch ($month) {
                        case '1':
                            echo "31 days";
                            break;
                        case '2':
                            echo "28 days";
                            break;
                        case '3':
                            echo "31 days";
                            break;
                        case '4':
                            echo "30 days";
                            break;
                        case '5':
                            echo "31 days";
                            break;
                        case '6':
                            echo "30 days";
                            break;
                        case '7':
                            echo "31 days";
                            break;
                        case '8':
                            echo "31 days";
                            break;
                        case '9':
                            echo "30 days";
                            break;
                        case '10':
                            echo "31 days";
                            break;
                        case '11':
                            echo "30 days";
                            break;
                        case '12':
                            echo "31 days";
                            break;
                        
                        default:
                            echo "No that month";
                            break;
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
