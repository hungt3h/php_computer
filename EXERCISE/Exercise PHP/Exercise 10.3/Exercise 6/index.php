<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Bai tap 6</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row border">
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 mt-3">
                <h4>Search String</h4>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-3">
                <form action="#" method="POST">
                    <input class="form-control" type="text" name="string" placeholder="Nhập chuổi để tìm kiếm nguyên âm">
                    <br>
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                </form>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        $lower="";
                        $word = $_POST["string"];
                        if (!isset($word)){
                            echo "<p class='text-danger'>Is not enter value</p>";
                        }else{
                            echo "Đổi thành chữ thường: ". strtolower($word). ".<br>";
                            $lower = strtolower($word);
                            echo "Số nguyên âm xuất hiện: ";
                            for ($i = 0; $i < strlen($lower); $i++){
                                if ($lower[$i] == "a" || $lower[$i] == "e" || $lower[$i] == "i" || $lower[$i] == "u" || $lower[$i] == "o"){    
                                    echo $lower[$i];
                                }
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
