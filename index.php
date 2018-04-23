<?php
	if (isset($_POST['upload'])){
		$file_name = $_FILES['file']['name'];
		$file_type = $_FILES['file']['type'];
		$file_size = $_FILES['file']['size'];
		$file_tem_Loc = $_FILES['file']['tmp_name'];
		$file_store = "upload/".$file_name;

		if (move_uploaded_file($file_tem_Loc, $file_store)){
			echo "Files are Uploaded";
		}
	}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>ICC High School- Batch '85</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-color:powderblue;">
<center>	<form action = "?" method = "POST" enctype = "multipart/form-data">
		<label>Uploading Files</label>
		<p><input type="file" name="file"></p>
		<p><input type="submit" name="upload" value = "Upload Image"></p>
	</form>
</center>
</body>
</html>

<?php

	$folder = "upload/";

	if (is_dir($folder)){

		if ($open = opendir($folder)){

			while (($file = readdir($open)) !=false){

				if ($file =='.' || $file =='..') continue;

				echo ' <img src ="upload/'.$file.'" width = "150" height = 150 >';
				}
				closedir($open);
			}

		}


?>