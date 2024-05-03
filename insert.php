<?php
    include 'database.php';
    if (isset($_POST['submit'])){
      $Firstname=$_POST['Firstname']; 
      $Lastname=$_POST['Lastname'];
      $Password=$_POST['Password'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];   
$sql= "INSERT INTO `details` (`id`, `Firstname`, `Lastname`, `Password`, `phone`, `email`) 
 VALUES (NULL, '$Firstname', '$Lastname', '$Password', '$phone', '$email')";
if($conn->query($sql)==True)
{
  echo 'new record inserted';
  echo "<script>window.open('RegistrationForm.php','_self')</script>";
}
else{
  echo "error:";
}
$conn->close();
    }
    ?>