<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>

	<style>
    body {
      background-image: url('mps.jpg');
      background-size: cover;
      background-position: center top ;
      font-family: Arial, sans-serif;
    } 
	
    .button-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(2, 1fr);
      gap: 10px;
      margin-top: 50px;
      justify-content: center; /* center horizontally */
      align-items: center; /* center vertically */
    }
	
    button {
      background-color:  rgba(100, 100, 100, 0.8);;
      color: white;
      padding: 14px 20px;
      border: none;
      cursor: pointer;
      border-radius: 12px;
      font-size: 18px;
      font-weight: bold;
    }
	
    button:hover {
      background-color: red;
    }

    h1 {
      text-align: center;
      margin-top: 300px;
    }
	</style>
</head>
<body>
	<h1>Welcome Admin</h1>
	<div class="button-grid">
		<button onclick="window.location.href='2-1.php'">Coadmin Data Entry</button>
		<button onclick="window.location.href='2-2.php'">Coadmin Details</button>
		<button onclick="window.location.href='2-3-0.php'">Candidate Data Entry</button>
		<button onclick="window.location.href='2-4.php'">Candidate Details</button>
		<button onclick="window.location.href='2-5.php'">Voters Info</button>
		<button onclick="window.location.href='2-6.php'">Results</button>
	</div>
</body>
</html>
