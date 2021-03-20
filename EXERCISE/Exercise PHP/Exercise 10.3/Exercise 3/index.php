<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 3</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        $nameErr = $emailErr = $phoneErr = $websiteErr = $messageErr = "";
        $name = $email = $phone = $website = $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Không được để trống các trường";
            }
            else {
                $name = test_input($_POST["name"]);
            }
            if (empty($_POST["email"])) {
                $emailErr = "Không được để trống các trường";
            }
            else {
                $email = test_input($_POST["email"]);
            }
            if (empty($_POST["phone"])) {
                $phoneErr = "Không được để trống các trường";
            }
            else {
                $phone = test_input($_POST["phone"]);
            }
            if (filter_var($website, FILTER_VALIDATE_URL)) {
                $websiteErr = "Trường website cần phải có định dạng URL";
            }
            else {
                $website = test_input($_POST["website"]);
            }
            if (empty($_POST["message"])) {
                $messageErr = "Không được để trống các trường";
            }
            else {
                $message = test_input($_POST["message"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 mx-auto">
                <form action="#" method="post" class="border text-center mt-3">
                    <div class="my-4">
                        <span class="text-danger"><?php echo $nameErr ?></span>
                        <input class="information" type="text" name="name" placeholder="Your name">
                        <span class="text-danger"><?php echo $emailErr ?></span>
                        <input class="my-3 information" type="email" name="email" placeholder="Your Email Address">
                        <span class="text-danger"><?php echo $phoneErr ?></span>
                        <input class="information" type="text" name="phone" placeholder="Your Phone Number">
                        <span class="text-danger"><?php echo $websiteErr ?></span>
                        <input class="my-3 information" type="text" name="wedsite" placeholder="Your Wed Site starts with http://">
                        <span class="text-danger"><?php echo $messageErr ?></span>
                        <input class="message" type="text" name="message" placeholder="Type your Message Here...">
                        <button type="submit" name="submit" value="Submit" class="information border bg-danger text-white mt-3"><b>SUBMIT</b></button>
                    </div>   
                </form>
                <?php 
                    echo "Send contact thành công!". "<br>";
                    echo "Your name: ". $name. "<br>";
                    echo "Your email: ". $email. "<br>";
                    echo "Your phone number: ". $phone. "<br>";
                    echo "Your Website: ". $website. "<br>";
                    echo "Your message: ". $message;
                ?>
            </div>
        </div>
    </div>
</body>
</html>