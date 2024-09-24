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
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
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
		<button onclick="window.location.href='2-5-1.php'">username and passwords</button>
		<button onclick="window.location.href='2-5-2.php'">logins</button>
	</div>
</body>
</html>
