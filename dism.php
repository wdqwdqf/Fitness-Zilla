<?php
include("member1.php");
error_reporting(0);
$query="Select * From member";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
    ?>
    <h3 align="center">Displaying Records of Membership Form</h3>
    <center><table border="4" cellspacing="7">
        <tr>
        <th width="8%">Name</th>
        <th width="8%">Email</th>
        <th width="8%">Phone</th>
        <th width="8%">membership</th>
        <th width="5%">Edit</th>
</tr>
<?php
while($result=mysqli_fetch_assoc($data))
{
    echo " <tr>
    <td>$result[Name]</td>
    <td>$result[Email]</td>
    <td>$result[Phone]</td>
    <td>$result[membership]</td>
    <td><a href='udmember.php?id=$result[id]&Name=$result[Name]&Email=$result[Email]&
    Phone=$result[Phone]&membership=$result[membership]'><input type='submit' value='Update' id='editbtn'></a>
    <a href='dtmember.php?id=$result[id]&Name=$result[Name]&Email=$result[Email]&
    Phone=$result[Phone]&membership=$result[membership]'><input type='submit' value='Delete' id='editbtn'  onclick ='return checkdeleted()'></a></td>
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