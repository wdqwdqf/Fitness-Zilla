<?php
    include 'member.php';
    error_reporting(0);
   $id=$_GET['id'];
$query="DELETE FROM member WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
  echo "<script>alert('Record Deleted')</script>";
  ?>
     <meta http-equiv="refresh" content ="0;url= http://localhost/bootstrapproject/dism.php"/>
  <?php
 }
  else
{
  echo "<script>alert('Failed to Delete')</script>";
}
$conn->close();
    ?>