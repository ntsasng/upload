<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload Form</title>
</head>
<body>
	<form action="index.php" method="post" enctype="multipart/form-data">
		Image : <input type="file" name="img" /><br />
		<input type="submit" name="ok" value="Upload" />
	</form>
	<?php
		if (isset($_POST['ok'])) {
			require "upload.php";
			$up = new Upload($_FILES['img']);
			if ($up->uploadImg() == true) {
				$image = $up->getTmp().$up->getName();
				echo "<img src='$image' />";
			} else {
				echo "Upload fail";
			}
		}
	?>
</body>
</html>