<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
  <style>
    body {
      font-family: cursive;
      background-image: url("./Image/op1.jpg");
      background-position: center;
      background-size: cover;
      width: 100%;
      height: 100vh;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    input, select {
            width: 50%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
    .login-container {
      margin-top: 20%;
      background-color: darkslateblue;    
      padding: 20px;
      border-radius: 8px;
      box-shadow: 10px #AE6600;
    }

    .login-container h1 {
      text-align: center;
      color: rgb(249, 247, 247);
    }

    .login-form {
      display: flex;
      flex-direction: column;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid wheat;
      border-radius: 4px;
    }

    .alien input {
      padding: 10px;
      background-color: black;
      color: goldenrod;
      border: dotted;
      border-radius: 10px;
      cursor: pointer;
    }
    .login-container a {
      text-decoration: none;
      font-weight: bolder;
      color: whitesmoke;
    }
  </style>
</head>
<body>
  <div class="login-container">
  <?php
    include 'Login.php';
    if (isset($_POST['submit'])){
      $Username=$_POST['Username']; 
      $Password=$_POST['Password'];
      $sql="INSERT INTO `form` (`id`, `Username`, `Password`) VALUES (NULL, '$Username', '$Password')";
if($conn->query($sql)==True)
{
  echo 'new record inserted';
  echo "<script>window.open('LoginForm.php','_self')</script>";
}
else{
  echo "error:";
}
$conn->close();
    }
    ?>
    <h1>Login Form</h1>
    <form class="login-form" method="post">
      <div class="form-group">
        <label for="Username">Username:</label>
        <input type="text" id="Username" name="Username" required>
      </div>

      <div class="form-group">
        <label for="Password">Password:</label>
        <input type="Password" id="Password" name="Password" required>
      </div>

      <div class="alien">
      <input type="submit" name="submit" value="Login">
        <a href="RegistrationForm.php">Register</a>
      </div>
      <a href="disl.php">Record Display</a>
    </form>
  </div>
  <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    function LoginForm() {
      var uUername = document.getElementById('Username').value;
      var Password = document.getElementById('Password').value;
      if (username.trim() !== '' && password.trim() !== '') {

        window.location.href = 'index.php';
      } else {
        alert('Please enter both username and password.');
      }
    }
  </script>
</body>
</html>