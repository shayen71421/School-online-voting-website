<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>

	<style>
  body {
    background-image: url('mps.jpg');
    background-size: cover;
    background-position: center top;
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
    background-color: rgba(100, 100, 100, 0.8);
    color: white;
    padding: 14px 20px;
    border: none;
    cursor: pointer;
    border-radius: 12px;
    font-size: 16px; /* reduce font size to fit longer text */
    font-weight: bold;
    width: 100%; /* ensure buttons are all the same width */
    box-sizing: border-box; /* include padding in width */
  }

  button:hover {
    background-color: red;
  }

  h1 {
    text-align: center;
    margin-top: 300px;
  }

  /* style for last two buttons */
  .button-grid > button:nth-child(4) {
    grid-column: 1 / span 1; /* place the button in columns 2 and 3 */
  }

  .button-grid > button:nth-child(5) {
    grid-column: 3/ span 1; /* place the button in columns 2 and 3 */
   
  }
</style>

</head>
<body>
	<h1>Welcome Admin</h1>
	<div class="button-grid">
		<button onclick="window.location.href='2-3-1-0.php'">School Leader</button>
		<button onclick="window.location.href='2-3-2-0.php'">Assistant School Leader</button>
		<button onclick="window.location.href='2-3-3-0.php'">Sports Captain</button>
		<button onclick="window.location.href='2-3-4-0.php'">Assistant Sports Captain</button>
		<button onclick="window.location.href='2-3-5-0.php'">Arts Secretary</button>
	</div>
</body>
</html>
