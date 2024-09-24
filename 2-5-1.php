<!DOCTYPE html>
<html>
<head>
	<title>Usernames and Passwords</title>
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
			margin-top: 180px;
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
		.pagination {
			margin-top: 20px;
			text-align: center;
		}
		.pagination a {
			display: inline-block;
			padding: 8px 16px;
			background-color: #f1f1f1;
			border: 1px solid #ddd;
			color: black;
			cursor: pointer;
		}
		.pagination a.active {
			background-color: #4CAF50;
			color: white;
		}
		.pagination a.disabled {
			background-color: #ddd;
			color: #aaa;
			cursor: default;
		}
	</style>
</head>
<body>
	<h2>Usernames and Passwords</h2>
	<?php
$file = fopen('voters.txt', 'r');
$num_rows = count(file('voters.txt'));
fclose($file);
$rows_per_table = 10;
$num_tables = ceil($num_rows / $rows_per_table);
if (isset($_GET['table']) && $_GET['table'] <= $num_tables) {
    $current_table = $_GET['table'];
} else {
    $current_table = 1;
}
$start_row = ($current_table - 1) * $rows_per_table;
$end_row = $start_row + $rows_per_table - 1;
$file = fopen('voters.txt', 'r');
$current_row = 0;
echo '<table>';
echo '<tr><th>Username</th><th>Password</th></tr>';
while (($line = fgets($file)) !== false) {
    if ($current_row >= $start_row && $current_row <= $end_row) {
        $user_pass = explode(',', $line);
        if (count($user_pass) >= 2) {
            echo '<tr><td>' . $user_pass[0] . '</td><td>' . $user_pass[1] . '</td></tr>';
        }
    }
    if ($current_row > $end_row) {
        break;
    }
    $current_row++;
}

echo '</table>';
fclose($file);
echo '<div class="pagination">';
for ($i = 1; $i <= $num_tables; $i++) {
    if ($i == $current_table) {
        echo '<span>' . $i . '</span>';
    } else {
        echo '<a href="?table=' . $i . '">' . $i . '</a>';
    }
}
echo '</div>';

	?>
</body>
</html>
