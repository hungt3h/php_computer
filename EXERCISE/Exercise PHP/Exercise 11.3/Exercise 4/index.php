<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Bai tap 4</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 my-5 border mx-auto text-center">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                    <input type="text" name="string" class="form-control" placeholder="Enter your strings">
                    <button type="submit" class="btn btn-primary">Check</button>
                </form>
                <?php
                    function isPalindrome($str) {
                        if (empty($str)) {
                            echo "<p class='text-danger'>Is not enter value</p>";
                        }
                        else {
                            $str = strtolower($str);
                           return $str === strrev($str);
                        }
                    }
                    function main(){
                        if (isPalindrome($_POST["string"])) {
                            echo "String is Palinprome";
                        }
                        else {
                            echo "String is not Palinprome";
                        }
                    }
                    main();
                ?>
            </div>
        </div>
    </div>
</body>
</html>
