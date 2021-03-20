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
        $username = 'hung';
        $password = '12345';
        if (isset($_POST['username'])) {
            
        }
    ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-8 col-lg-8 mx-auto">
                <form action="#" method="post" class="text-center">
                    <div class="sign p-4">
                        <b>Sign in</b>
                    </div>
                    <div class="information border">
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
</body>
</html>