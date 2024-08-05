<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <style>
    body {
      font-family: 'cursive';
      background-image: url("./Image/op.2.png");
      background-position: center;
      background-size: cover;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    .aalu{
      max-width: 600px;
      margin: 9px auto;
      padding: 20px;
    }
    .aalu h1 {
      color: wheat;
      text-align: center;
      font-weight: bolder;
      font-size: xx-large;
    }
    form {
      display: flex;
      flex-direction: column;
      background: transparent;
      border: 2px solid rgba(255, 255, 255, 0.2);
    }

    label {
      margin-bottom: 8px;
      font-size: x-large;
      font-weight: 600;
      font-family: 'cursive';
      color: rgb(180, 136, 66);
      text-align: center;
    }

    input,select {
      padding: 10px;
      margin-bottom: 16px;
      border: 1px solid #543333;
      color: blue;
      border-radius: 10px;
      font-size: 18px;
      background: transparent;
      backdrop-filter: blur(4px) saturate(100%);
    }

    input[type="submit"] {
      background-color: rgb(47, 47, 111);
      color: #000000;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #204d23;
    }
    .container option{
      background-color: rgb(57, 57, 85);
    }
    .button-container {
    display: flex;
    justify-content: space-around;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: black;
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #1E5966;
}

@media screen and (max-width: 600px) {
    .button {
        padding: 8px 16px;
        font-size: 14px;
    }
}

    @media (max-width:600px) {
      body {
        background-position: center;
        background-size: cover;
        height:100vh;
      }
    .aalu{
      max-width: 600px;
      margin: 9px auto;
      padding: 20px;
    }
    .aalu h1 {
      font-size: x-large;
    }
    label {
      margin-bottom: 8px;
      font-size: large;
    }
    }
  </style>
</head>
<body>
  <div class="aalu">
  <?php
    include 'Database.php';
    if (isset($_POST['submit'])){
      $Firstname=$_POST['Fisrtname']; 
      $Lastname=$_POST['Lastname']; 
      $Password=$_POST['Password'];
      $phone=$_POST['phone']; 
      $email=$_POST['email']; 
      $Edit=$_POST['Edit'];
      $sql="INSERT INTO `details`(`id`,`Firstname`,`Lastname`,`Password`,`phone`,`email`,`Edit`) VALUES (NULL, '$Firstname', '$Lastname',
      '$Password','$phone', '$email', '$Edit')"; 
 if($conn->query($sql)==True)
 {
   echo 'new record inserted';
 }
 else{
   echo "error:";
 }
 $conn->close();
     }
     ?>
    <h1>Register</h1>
    <form action="insert.php" method="post">
      <label for="Firstname">FirstName:</label>
      <input type="text" id="Firstname" name="Firstname" required>

      <label for="Lastname">LastName:</label>
      <input type="text" id="Lastname" name="Lastname" required>

      <label for="Password">Password:</label>
      <input type="text" id="Password" name="Password" required>

      <label for="phone">Phone:</label>
      <input type="number" id="phone" name="phone" required>

      <label for="Email">Email:</label>
      <input type="email" id="Email" name="email" required>

      <input type="submit" name="submit" value="Book Now">
      
      <div class="button-container">
    <div class="kp">
        <a href="disr.php" class="button">Record Display</a>
    </div>
</div>
    </form>
    </div>
</body>
</html>