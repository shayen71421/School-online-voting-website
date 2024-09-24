<!DOCTYPE html>
<html>
<head>
	<title>Enter Number of Candidates</title>
	<style>
		body {
			background-image: url('mps.jpg');
			background-size: cover;
			font-family: Arial, sans-serif;
		}

		h1 {
			text-align: center;
			margin-top: 200px;
			color: black;
		}

		form {
            position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 250px;
  padding: 50px;
  color: white;
  background-color: rgba(100, 100, 100, 0.8);
  border-radius: 3px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
}

		input[type="number"] {
			padding: 10px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			margin-top: 10px;
			background-color:white;
		}

		input[type="submit"] {
			padding: 10px 20px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			background-color: black;
			color: white;
			margin-top: 10px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color:red;
		}
	</style>
</head>
<body>
	<h1>Enter Number of Candidates</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" style="margin-top: 100px;">
		<label for="number">Number of Candidates:</label>
		<input type="number" name="number" id="number" required>
		<input type="submit" value="Submit">
	</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$number = $_POST["number"];

	// Check if the input is 2, 3 or 4
	if ($number == 2 || $number == 3 ) {
		// Open the text file for writing
		$file = fopen("sportsassicaptainnumber.txt", "w") or die("Unable to open file!");
		
		 // Write the number to the file
		   fwrite($file, $number);

		  // Close the file
		  fclose($file);
		  

		  // Redirect to the appropriate page based on the number
		  if ($number == 2) {
			header("Location: 2-3-4-1.php");
			exit();
		 } else if ($number == 3) {
			header("Location: 2-3-4-2.php");
			exit();
		 }
	 else {
		echo "Invalid number.";
	} }}
 
?>
