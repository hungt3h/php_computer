<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Bai tap 2</title>
    <style>
        table td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 my-5 border mx-auto text-center">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" class="my-3">
                    <input type="text" name="string" placeholder="Enter your strings"><br>
                    <button type="submit" class="btn btn-primary mt-3">CHECK</button>
                </form>
                <?php
                    function countWord($str) {
                        $result = array();
                        if (empty($str)) {
                            echo "<p class='text-danger'>Is not enter value</p>";
                        }
                        $str = explode(" ", $str);
                        for ($i = 0; $i < count($str); $i++) {
                            $count = 0;
                            for ($j = 0; $j < $i + 1; $j++) {
                                if ($str[$i] == $str[$j]) {
                                    ++$count;
                                    $result["$str[$i]"] = "$count";
                                }
                            }
                        }?>
                    <table class="mx-auto">
                    <?php
                        for ($i = 0; $i <2; $i++) {
                            echo "<tr>";
                            foreach ($result as $value =>$value_value){
                                if (empty($value)){
                                    echo "";
                                }
                                elseif ($i==0){
                                        echo "<td>$value</td>";
                                    }
                                    else{
                                        echo "<td>$value_value</td>";
                                    }
                                }
                            echo"</tr>";
                        }
                    ?>     
                    </table>
                    <?php
                    }
                    echo countWord($_POST["string"]);
                ?>
            </div>
        </div>
    </div>
</body>
</html>
