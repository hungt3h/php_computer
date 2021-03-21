<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 2</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php
		$nameErr = $emailErr = $error = "";
		$name = $email = $password = $cfpassword = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

		    if (empty($_POST["name"])) {
		        $nameErr = "<p class='text-danger'>Username không được để trống</p>";
		    } else {
		        $name = input_data($_POST["name"]);
		        // check if name only contains letters and whitespace
		        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		            $nameErr = "<p class='text-danger'>Only alphabets and white space are allowed</p>";
		        }
		    }

		    if (empty($_POST["email"])) {
		        $emailErr = "<p class='text-danger'>Email không được để trống</p>";
		    } else {
		        $email = input_data($_POST["email"]);
		        // check that the e-mail address is well-formed
		        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		            $emailErr = "<p class='text-danger'>Email không đúng định dạng</p>";
		        }
		    }
		    if ($_FILES['avatar']['error'] > 0) {
				$error = "<p class='text-danger'>Vui lòng chon file!</p>";
			}
		}
		function input_data($data) {
		    $data = trim($data);
		    $data = stripslashes($data);
		    $data = htmlspecialchars($data);
		    return $data;
		}
	?>
    <div class="container">
        <div class="row border bg-info">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-5 mx-auto">
            	<form action="#" method="post" enctype="multipart/form-data">
            		<h2>Create an account</h2>
            		<input class="form-control mt-3" type="text" name="name" placeholder="User Name"><br>
            		<span class="error"><?php echo $nameErr;?> </span>
            		<input class="form-control mt-3" type="email" name="email" placeholder="Email"><br>
            		<span class="error"><?php echo $emailErr;?> </span>
            		<input class="form-control mt-3" type="password" name="password" placeholder="Password">
            		<input class="form-control mt-3" type="password" name="cfpassword" placeholder="Confirm Password">
            		<strong>Select your avatar:</strong>
            		<input class="mt-4" type="file" name="avatar"><br>
            		<span><?php echo $error ?></span>
            		<button class="form-control btn btn-primary mt-3" type="submit" name="submit">Register</button>
            	</form>
            	<?php
					if(isset($_POST['submit'])) {
					    $file = $_FILES['avatar'];

						$fileName = $_FILES['avatar']['name'];
						$fileSize = $_FILES['avatar']['size'];

						$fileExt = explode('.', $fileName);
						$fileAtualExt = strtolower(end($fileExt));

						$allowed = array('jpg', 'jpeg', 'png', 'gif');
						if ($_FILES['avatar']['error'] > 0) {
						        echo "<p class='text-danger'>Yêu cầu nhập đầy đủ thông tin!</p>";
						}
						else if (in_array($fileAtualExt, $allowed)) {
							if ($fileSize < 1024) {
								$fileNameNew = uniqid('', true). ".". $fileAtualExt;
							}
						    else {
						    	echo "<h3 class='text-white'><b>Đăng ký thành công</b></h3>";
							    echo "username: " .$name;
							    echo "<br>";
							    echo "Email address: " .$email;
							    echo "<br>";
						        echo "Tên file: ". $_FILES['avatar']['name'] . '<br>';
						        echo 'Dung lượng: ' . ((int)$_FILES['avatar']['size'] / 1024) . 'KB';
					    	}
						}
						else {
							echo "Cần upload file có định dạng ảnh!";
						}
					 }
				?>
            </div>
        </div>
    </div>
</body>
</html>