<?php
include("Contact.php");
error_reporting(0);
$query="Select * From contact";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
    ?>
    <h3 align="center">Displaying Records for Contact Page</h3>
    <center><table border="4" cellspacing="7">
        <tr>
        <th width="5%">id</th>
        <th width="5%">Fullname</th>
        <th width="5%">Address</th>
        <th width="5%">Number</th>
        <th width="5%">Email</th>
        <th width="5%">Edit</th>
</tr>
<?php
while($result=mysqli_fetch_assoc($data))
{
    echo " <tr>
    <td>$result[id]</td>
    <td>$result[Fullname]</td>
    <td>$result[Address]</td>
    <td>$result[Number]</td>
    <td>$result[Email]</td>
    <td><a href='update.php?id=$result[id]&Fullname=$result[Fullname]&Address=$result[Address]&Number=$result[Number]&
    Email=$result[Email]'><input type='submit' value='Update' id='editbtn'></a>
    <a href='delete.php?id=$result[id]&Fullname=$result[Fullname]&Address=$result[Address]&Number=$result[Number]&
    Email=$result[Email]'><input type='submit' value='Delete' id='editbtn'  onclick ='return checkdeleted()'></a></td>
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