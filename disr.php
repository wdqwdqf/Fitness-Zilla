<?php
include("Database.php");
error_reporting(0);
$query="Select * From details";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
    ?>
    <h3 align="center">Displaying Records of Registration Form</h3>
    <center><table border="4" cellspacing="7">
        <tr>
        <th width="5%">Firstname</th>
        <th width="5%">Lastname</th>
        <th width="5%">Password</th>
        <th width="5%">phone</th>
        <th width="5%">email</th>
        <th width="4%">Edit</th>
</tr>
<?php
while($result=mysqli_fetch_assoc($data))
{
    echo " <tr>
    <td>$result[Firstname]</td>
    <td>$result[Lastname]</td>
    <td>$result[Password]</td>
    <td>$result[phone]</td>
    <td>$result[email]</td>
    <td><a href='udregister.php?id=$result[id]&Firstname=$result[Firstname]&Lastname=$result[Lastname]&
    Password=$result[Password]&phone=$result[phone]&email=$result[email]&'><input type='submit' value='Update' id='editbtn'></a>
    <a href='dtregister.php?id=$result[id]&Firstname=$result[Firstname]&Lastname=$result[Lastname]&
    Password=$result[Password]&phone=$result[phone]&email=$result[email]&'><input type='submit' value='Delete' id='editbtn'  onclick ='return checkdeleted()'></a></td>
    </tr>
    ";
}
?>
</table>
</center>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Records</title>
<style>
    body {
    background-color: #1D5765;
}
@media screen and (max-width: 600px) {
    th, td {
        padding: 4px;
    }
}
</style>
</head>
<body>
<script>
        function checkdeleted()
        {
            return confirm('Are U sure!');
        }
    </script>