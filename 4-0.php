<!DOCTYPE html>
<html>
<head>
	<title>Candidate Details</title>
	<style>
		body {
			background-image: url('mps.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			font-family: Arial, sans-serif;
		}
		table {
			border-collapse: collapse;
			width: 80%;
			margin: 50px auto;
			margin-top: 200px;
			background-color: rgba(100, 100, 100, 0.8);
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
		}
		th, td {
			padding: 12px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #4CAF50;
			color: white;
		}
		tr:hover {
			background-color: #f5f5f5;
		}
		.button {
			display: inline-block;
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border-radius: 5px;
			text-decoration: none;
			margin-left: 20px;
		}
		.next-button {
			display: block;
			background-color: #333;
			color: white;
			padding: 10px 20px;
			border-radius: 5px;
			text-decoration: none;
			margin: 50px auto;
		}
	</style>
</head>
<body>
	<h2>Candidate Details</h2>
	<table>
		<tr>
			<th>Candidate</th>
			<th>Name</th>
			<th>Admission Number</th>
			<th>Class</th>
			<th>Photo</th>
		</tr>
		<form method="post">
    <input type="submit" name="next" value="Next">
</form>

		<?php
			$file = fopen("schoolleadercandetails.txt", "r");

			$candidate_count = 0;

			while(!feof($file)) {
				$line = fgets($file);
				if (strpos($line, "Candidate") !== false) {
					$candidate_count++;
					echo "<tr><td>Candidate " . $candidate_count . "</td>";
				} else if (strpos($line, "Name") !== false) {
					echo "<td>" . substr($line, 6) . "</td>";
				} else if (strpos($line, "Admission Number") !== false) {
					echo "<td>" . substr($line, 18) . "</td>";
				} else if (strpos($line, "Class") !== false) {
					echo "<td>" . substr($line, 7) . "</td>";
				} else if (strpos($line, "Photo") !== false) {
					$photo_url = "schoolleadphoto/" . substr($line, 7);
					$candidate_num = $candidate_count; // assign candidate number to a variable
					echo "<td><img src='" . $photo_url . "' width='100'><a href='slvote.php?candidate_num=" . $candidate_num . "' class='button'>vote</a></td></tr>";

				}
			}

			fclose($file);	
		?>
	</table>
	<a href="nullvote.php" class="next-button">Next</a>
</body>
</html>

