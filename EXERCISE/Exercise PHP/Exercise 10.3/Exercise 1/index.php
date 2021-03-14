<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 1</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        $username = $password = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $username = test_input($_POST["username"]);
          $password = test_input($_POST["password"]);
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        $error = array();
        $data = array();
        if (!empty($_POST['contact_action'])) {
            $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
            $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
 
            if (empty($data['username'])){
                $error['username'] = '<p class="text-danger">You not enter username</p>';
            }
 
            if (empty($data['password'])){
                $error['password'] = '<p class="text-danger">You are not enter a password</p>';
            }
        }
    ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-8 col-lg-8 mx-auto box">
                <form action="#" method="post" class="text-center">
                    <div class="sign p-4">
                        <b>Sign in</b>
                    </div>
                    <div class="information">
                        <input class="mt-4 name" type="text" id="username" name="username" placeholder="Username">
                        <br>
                        <input class="mt-4 password" type="password" id="password" name="password" placeholder="Password">
                        <br>
                        <button class="my-4 login" type="submit" name="contact_action" value="submit">Login</button>
                    </div> 
                </form>  
            </div>
        </div>
    </div>
    <?php 
        echo "<b>Username: </b>". "<p class='text-success'>$username</p>";
        echo isset($error['username']) ? $error['username'] : '';
        echo "<b>Password: </b>". "<p class='text-success'>$password</p>";
        echo isset($error['password']) ? $error['password'] : '';
    ?>
</body>
</html>