<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 1</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-5 mx-auto">
            	<form action="#" method="post" enctype="multipart/form-data" class="border p-2">
            		<strong>Select a file to upload</strong>
            		<br>
            		<input type="file" name="image">
            		<p class="text-muted">Only jpg, jpeg, png, and gif file with maximum size of 1 MB is allowed.</p>
            		<button class="btn btn-primary" type="submit" name="upload">Upload</button>
            	</form>
            	<?php
            		
					if (isset($_POST['upload'])) {
						$file = $_FILES['image'];

						$fileName = $_FILES['image']['name'];
						$fileSize = $_FILES['image']['size'];

						$fileExt = explode('.', $fileName);
						$fileAtualExt = strtolower(end($fileExt));

						$allowed = array('jpg', 'jpeg', 'png', 'gif');
						if ($_FILES['image']['error'] > 0) {
						        echo "Chọn file để upload!";
						}
						else if (in_array($fileAtualExt, $allowed)) {
							if ($fileSize < 1024) {
								$fileNameNew = uniqid('', true). ".". $fileAtualExt;
							}
						    else {
						        echo "Upload thành công <br/>";
						        echo "Tên file: ". $_FILES['image']['name'] . '<br>';
						        echo 'Dung lượng: ' . ((int)$_FILES['image']['size'] / 1024) . 'KB';
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