<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 3</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php
		$textErr = $checkboxErr = $textareaErr = $radioErr = $selectErr = $error = $imgErr = "";
		$text = $checkbox = $textarea = $radio = $select = $image = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

		    if (empty($_POST["text"])) {
		        $textErr = "<p class='text-danger'>Trường text không được để trống</p>";
		    } else {
		    	$text = $_POST['text'];
		    }
		    if (!isset($_POST['checkbox'])) {
				$checkboxErr = "<p class='text-danger'>Cần check ít nhất 1 trường checkbox</p>";
			} else {
		    	$checkbox = $_POST['checkbox'];
		    }
			if (empty($_POST["textarea"])) {
		        $textareaErr = "<p class='text-danger'>Trường textarea không được để trống</p>";
		    } else {
		    	$textarea = $_POST['textarea'];
		    }
		    if (!isset($_POST['radio'])) {
				$radioErr = "<p class='text-danger'>Cần check ít nhất 1 trường radio</p>";
			} else {
		    	$radio = $_POST['radio'];
		    }
		    if (empty($_POST["select"])) {
		        $selectErr = "Bạn cần chọn select";
		    } else {
		        $select = $_POST['select'];
		    }

			$file = $_FILES['image'];
			$fileName = $_FILES['image']['name'];
			$fileSize = $_FILES['image']['size'];

			$fileExt = explode('.', $fileName);
			$fileAtualExt = strtolower(end($fileExt));

			$allowed = array('jpg', 'jpeg', 'png', 'gif');
			if ($_FILES['image']['error'] > 0) {
		        $error = "Vui lòng chọn file!";
			}
			else if (in_array($fileAtualExt, $allowed)) {
				if ($fileSize < 1024) {
					$fileNameNew = uniqid('', true). ".". $fileAtualExt;
				}
				else {
					$file = $_FILES['image'];
				}
			}
			else {
				$imgErr = "Cần upload ảnh!";
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
        <div class="row">
            <div class="col-12 col-sm col-md col-lg">
            	<form action="#" method="post" enctype="multipart/form-data" class="form-control">
            		Text
            		<input class="form-control" type="text" name="text" placeholder="placeholder">
            		<?php echo $textErr; ?>
            		Checkbox<br>
            		<input type="checkbox" name="checkbox" value="box 1">
            		<label>Checkbox 1</label><br>
            		<input type="checkbox" name="checkbox" value="box 2">
            		<label>Checkbox 2</label><br>
            		<input type="checkbox" name="checkbox" value="box 3">
            		<label>Checkbox 3</label><br>
            		<?php echo $checkboxErr; ?>
            		Textarea<br>
            		<textarea class="form-control" name="textarea" rows="3"></textarea>
            		<?php echo $textareaErr; ?>
            		Radio button<br>
            		<input type="radio" name="radio" value="Yep">
            		Yed
            		<input type="radio" name="radio" value="Nope">
            		Nope
            		<input type="radio" name="radio" value="None">
            		None<br>
            		<?php echo $radioErr; ?><br>
            		Select
            		<select class="form-control" name="select">
            			<option value="">--Chọn--</option>
            			<option value="Option 1">Option 1</option>
            			<option value="Option 2">Option 2</option>
            			<option value="Option 3">Option 3</option>
            		</select>
            		<?php echo $selectErr; ?>
            		<br>
            		Upload files<br>
            		<input type="file" name="image"><br>
            		<span class="text-danger"><?php echo $error. $imgErr; ?></span>
            		<button class="form-control mt-3" type="submit" name="submit">Submit</button>
            	</form>
            	<?php
            		if (isset($_POST['submit'])) {
            			echo "Text: ". $text. "<br>";
            			echo "Checkbox: ". $checkbox. "<br>";
            			echo "Textarea: ". $textarea. "<br>";
            			echo "Radio: ". $radio. "<br>";
            			echo "Select: ". $select. "<br>";
            			echo "Upload files: ". $_FILES['image']['name'];
            		}
            	?>
            </div>
        </div>
    </div>
</body>
</html>