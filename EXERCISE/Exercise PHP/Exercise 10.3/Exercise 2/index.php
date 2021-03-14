<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 2</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        $error = array();
        $data = array();
        if (!empty($_POST['contact_action'])) {
            $data['fname'] = isset($_POST['fname']) ? $_POST['fname'] : '';
            $data['lname'] = isset($_POST['lname']) ? $_POST['lname'] : '';
            $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
 
            if (empty($data['fname'])){
                $error['fname'] = '<p class="text-danger">Không được để trống</p>';
            }
            if (empty($data['lname'])){
                $error['lname'] = '<p class="text-danger">Không được để trống</p>';
            }
            if (empty($data['email'])){
                $error['email'] = '<p class="text-danger">Email không được để trống</p>';
            }
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                <h3 class="p-3 registration">Registration Form</h3>
                <form action="#" method="post">
                    <div class="p-2">
                        <label>Firt name</label><br>
                        <input class="information border" type="text" name="fname" id="fname"><br>
                        <?php echo isset($error['fname']) ? $error['fname'] : ''; ?>
                    </div>
                    <div class="p-2">
                        <label>Last name</label><br>
                        <input class="information border" type="text" name="lname" id="lname"><br>
                        <?php echo isset($error['lname']) ? $error['lname'] : ''; ?>
                    </div>
                    <div class="p-2">
                        <label>Email</label><br>
                        <input class="information border" type="email" name="email" id="email"><br>
                        <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                    </div>                  
                    <div class="p-2">
                        <label for="male">Gender:</label>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="female">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="other">Female</label><br>
                    </div>
                    <div class="p-2">
                        <label for="state">State</label><br>
                        <select id="state" name="state" class="information border">
                            <option>Johor</option>
                            <option>Massachusetts</option>
                            <option>Washington</option>
                        </select><br>
                    </div>
                    <div class="p-2">
                        <label>Hobbies</label><br>
                        <input type="checkbox" name="badminton">
                        <label>Badminton</label>
                        <input type="checkbox" name="football">
                        <label>Football</label>
                        <input type="checkbox" name="bicyle">
                        <label>Bicyle</label><br>
                    </div>                    
                    <button class="btn btn-primary mt-3" type="submit" name="contact_action" value="submit">Save record</button>
                    <button class="btn border mt-3" type="reset">Reset</button>
                </form>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                <h3 class="p-3 registration">Featured</h3>
                <div class="p-3">
                    <h3>Special title treatment</h3>
                    <p>
                    With supporting text below as a natural lead-in to additional content.
                    </p>
                    <button class="btn btn-primary">Go somewhere</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>