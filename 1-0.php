<!DOCTYPE html>
<html>
  <head>
    <title>Login System</title>
    <style>
      /* styles for the form and error message */
      body {
  background-image: url('mps.jpg');
  background-size: cover;
  background-position: center top ;

  font-family: Arial, sans-serif;
}

      h2 {
        color: #fff;
        text-align: center;
        margin-top: 50px;
      }
      form {
  position: absolute;
  top: 55%;
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
        color: rgb(255,255,255);
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
        width: 107%;
        padding: 10px;
        background-color: black;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: red;
      }
      .error {
        color: #ff0000;
        margin-top: 20px;
        text-align: center;
      }

    </style>

  </head>
  <body>
    <h2>Login</h2>
    <form method="post" action="">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Login">
    </form>
    <?php
           if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
          
            // check if user is admin
            $admin_password = file_get_contents('admin.txt');
            if ($username === 'admin' && $password === $admin_password) {
              file_put_contents('logins.txt', 'admin,' . "\n", FILE_APPEND);
              file_put_contents('file1.txt', $username . "\n", FILE_APPEND);
              file_put_contents('file2.txt', $username . "\n", FILE_APPEND);
              file_put_contents('file3.txt', $username . "\n", FILE_APPEND);
              file_put_contents('file4.txt', $username . "\n", FILE_APPEND);
              file_put_contents('file5.txt', $username . "\n", FILE_APPEND);
              header("Location: 2-0.php");
              exit;
            }
          
            // check if user is coadmin
            $coadmin = file('coadmin.txt', FILE_IGNORE_NEW_LINES);
            foreach ($coadmin as $coadmin) {
              list($stored_username, $stored_password) = explode(',', $coadmin);
              if ($username === $stored_username && $password === $stored_password) {
                file_put_contents('logins.txt', $username . ',' . "\n", FILE_APPEND);
                file_put_contents('file1.txt', $username . "\n", FILE_APPEND);
                file_put_contents('file2.txt', $username . "\n", FILE_APPEND);
                file_put_contents('file3.txt', $username . "\n", FILE_APPEND);
                file_put_contents('file4.txt', $username . "\n", FILE_APPEND);
                file_put_contents('file5.txt', $username . "\n", FILE_APPEND);
                header("Location: 3-0.php");
                exit;
              }
            }
          
            // check if user is regular user
            $users = file('voters.txt', FILE_IGNORE_NEW_LINES);
            foreach ($users as $user) {
              list($stored_username, $stored_password) = explode(',', $user);
              if ($username === $stored_username && $password === $stored_password) {
                file_put_contents('logins.txt', $username . ',' . "\n", FILE_APPEND);
                file_put_contents('file1.txt', $username . "\n", FILE_APPEND);
                file_put_contents('file2.txt', $username . "\n", FILE_APPEND);
                file_put_contents('file3.txt', $username . "\n", FILE_APPEND);
                file_put_contents('file4.txt', $username . "\n", FILE_APPEND);
                file_put_contents('file5.txt', $username . "\n", FILE_APPEND);
                header("Location: 4-0.php");
                exit;
              }
          
            }
          
          }
          
    ?>
  </body>
</html>

