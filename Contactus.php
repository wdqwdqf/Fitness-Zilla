<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./Css/contact.css">
  <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
</head>
<body>
  <div class="potato">
    <form method="POST">
    <?php
    include 'Contact.php';
    if (isset($_POST['submit'])){
      $Fullname=$_POST['Fullname']; 
      $Address=$_POST['Address'];
      $Number=$_POST['Number'];
      $Email=$_POST['Email'];
      $sql="INSERT INTO `Contact` (`id`, `Fullname`, `Address`,`Number`,`Email`) 
      VALUES (NULL, '$Fullname', '$Address','$Number','$Email')";
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
      <h1>Contact Us</h1>
      <div class="form-group">
        <label for="Fullname">Fullname:</label>
        <input type="text" id="Fullname" name="Fullname" required>
      </div>

      <div class="form-group">
        <label for="Address">Address:</label>
        <input type="text" id="Address" name="Address" required>
      </div>
      <div class="form-group">
        <label for="Number">Number:</label>
        <input type="Number" id="Number" name="Number" required>

      </div>  <div class="form-group">
        <label for="Email">Email:</label>
        <input type="email" id="Email" name="Email" required>
      </div>

        <div class="col">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
      <input type="submit" name="submit" value="Submit">
          <p>Any query then you can contact us.
        </p>
      <a class="btn btn-primary" href="https://scavenger190power@gmail.com"role="button"><img src="./Image/gmail-google-logo-rebrand-workspace-design_dezeen_2364_col_0.webp"></a>
      <a class="btn btn-primary" href="http://Wa.me/+9779811802916" role="button">9811802916</a>
      <div class="area">
        <a href="displayco.php" style="border: 10px;border-radius: 10px;color:green;background-color:black;text-decoration:none"
        class="area">Record Display</a>
    </div>
    </form>
    <script>
      function Contactus() {
        var Fullname = document.getElementById('Fullname').value;
        var Address = document.getElementById('Address').value;
        var PhoneNumber  = document.getElementById('PhoneNumber').value;
        var Email = document.getElementById('Email').value;
        if (Fullname.trim() !== '' && Address.trim() !== '' && PhoneNumber.trim() !== '' && Email.trim() !== '') {
  
          window.location.href = 'index.php';
        } else {
          alert('Please enter all Fullname,Address,Phone and Email.');
        }
      }
    </script>
      <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>