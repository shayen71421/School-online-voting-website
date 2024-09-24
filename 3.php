<!DOCTYPE html>
<html>
  <head>
    <title>Save Name and Password</title>
    <style>
      /* styles for the form and error message */
      body {
        background-image: url('mps.jpg');
        background-size: cover;
        font-family: Arial, sans-serif;
      }
      h2 {
        color: black;
        text-align: center;
        margin-top: 190px;
      }
      h3 {
        color: black;
        text-align: center;
        margin-top: 20px;
      }
      form {
  position: absolute;
  top: 58%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 250px;
  padding: 50px;
  background-color: rgba(100, 100, 100, 0.8);
  border-radius: 3px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
      }
      label {
        display: block;
        margin-bottom: 10px;
        color: white;
      }
      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      }
      input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: black;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: red;
      }
      .success {
        color: #008000;
        margin-top: 20px;
        text-align: center;
      }

    </style>
  </head>
  <body>
    <h2>Welcome Coadmin</h2>
    <h3>Enter Voter Details</h3>
    <form method="post" action="">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Save">
    </form>
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $file = fopen("users.txt", "a");
        fwrite($file, $name . "," . $password . "\n");
        fclose($file);
       
      }
    ?>
  </body>
</html>
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['name'];
    $password = $_POST['password'];
    $user_line = $username . ',' . $password . PHP_EOL;
    file_put_contents('voters.txt', $user_line, FILE_APPEND);
  
  }
?>
