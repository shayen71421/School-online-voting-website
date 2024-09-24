<!DOCTYPE html>
<html>
<head>
	<title>Upload Candidate Photos</title>
	<style>
		body {
			background-image: url('mps.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			font-family: Arial, sans-serif;
		}
		form {
			max-width: 420px;
			margin-top: 16%;
			margin-left: 35%;
			padding: 20px;
			background-color: rgba(100, 100, 100, 0.8);
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
			
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: red;
		}
	</style>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<h2>Upload Candidate Details</h2>
		<label for="name1">Candidate 1 Name:</label>
		<input type="text" name="name1" required><br><br>
		<label for="admission_number1">Candidate 1 Admission Number:</label>
		<input type="text" name="admission_number1" required><br><br>
		<label for="class1">Candidate 1 Class:</label>
		<input type="text" name="class1" required><br><br>
		<label for="photo1">Candidate 1 Photo:</label>
		<input type="file" name="photo1" required><br><br>
		<label for="name2">Candidate 2 Name:</label>
		<input type="text" name="name2" required><br><br>
		<label for="admission_number2">Candidate 2 Admission Number:</label>
		<input type="text" name="admission_number2" required><br><br>
		<label for="class2">Candidate 2 Class:</label>
		<input type="text" name="class2" required><br><br>
		<label for="photo2">Candidate 2 Photo:</label>
		<input type="file" name="photo2" required><br><br>
        <input type="submit" value="Submit">
	</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name1 = $_POST['name1'];
    $admission_number1 = $_POST['admission_number1'];
    $class1 = $_POST['class1'];
    $photo1 = $_FILES['photo1']['name'];

    $name2 = $_POST['name2'];
    $admission_number2 = $_POST['admission_number2'];
    $class2 = $_POST['class2'];
    $photo2 = $_FILES['photo2']['name'];

 
    // Save data to text file
    $file = fopen("schoolassileadercandetails.txt", "a");
    fwrite($file, "Candidate 1\n");
    fwrite($file, "Name: " . $name1 . "\n");
    fwrite($file, "Admission Number: " . $admission_number1 . "\n");
    fwrite($file, "Class: " . $class1 . "\n");
    fwrite($file, "Photo: " . $photo1 . "\n\n");

    fwrite($file, "Candidate 2\n");
    fwrite($file, "Name: " . $name2 . "\n");
    fwrite($file, "Admission Number: " . $admission_number2 . "\n");
    fwrite($file, "Class: " . $class2 . "\n");
    fwrite($file, "Photo: " . $photo2 . "\n\n");

   

    fclose($file);

    // Save photos to server
    $target_dir = "schoolassileadphoto/";
    $target_file1 = $target_dir . basename($_FILES["photo1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["photo2"]["name"]);
  
    move_uploaded_file($_FILES["photo1"]["tmp_name"], $target_file1);
    move_uploaded_file($_FILES["photo2"]["tmp_name"], $target_file2);
    

    
}
?>
