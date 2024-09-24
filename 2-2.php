<!DOCTYPE html>
<html>
<head>
	<title>CoAdmin Details</title>
	<style>
		body {
			background-image: url('mps.jpg');
			background-size: cover;
			font-family: Arial, sans-serif;
		}
		h2 {
			color: white;
			text-align: center;
			margin-top: 50px;
		}
		table {
			margin: auto;
			margin-top: 190px;
			border-collapse: collapse;
			width: 50%;
			background-color: rgba(255,255,255,0.7);
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
		}
		th, td {
			padding: 10px;
			text-align: center;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #333;
			color: white;
		}
	</style>
</head>
<body>
	<h2>Usernames and Passwords</h2>
	<table>
		<tr>
			<th>Username</th>
			<th>Password</th>
		</tr>
		<?php
			$file = fopen('coadmin.txt', 'r');
			while (($line = fgets($file)) !== false) {
			    $user_pass = explode(',', $line);
			    echo "<tr><td>" . $user_pass[0] . "</td><td>" . $user_pass[1] . "</td></tr>";
			}
			fclose($file);
		?>
	</table>
</body>
</html>
