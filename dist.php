<?php
include("trainer.php");
error_reporting(0);
$query="Select * From trainer";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
    ?>
    <h3 align="center">Displaying Records of Booking Form</h3>
    <center><table border="4" cellspacing="7">
        <tr>
        <th width="5%">name</th>
        <th width="5%">email</th>
        <th width="5%">phone</th>
        <th width="5%">date</th>
        <th width="5%">time</th>
        <th width="5%">trainingType</th>
        <th width="4%">Edit</th>
</tr>
<?php
while($result=mysqli_fetch_assoc($data))
{
    echo " <tr>
    <td>$result[name]</td>
    <td>$result[email]</td>
    <td>$result[phone]</td>
    <td>$result[date]</td>
    <td>$result[time]</td>
    <td>$result[trainingType]</td>
    <td><a href='udbooking.php?id=$result[id]&name=$result[name]&email=$result[email]&
    phone=$result[phone]&email=$result[email]&date=$result[date]&time=$result[time]&trainingType=$result[trainingType]'><input type='submit' value='Update' id='editbtn'></a>
    <a href='dtbooking.php?id=$result[id]&name=$result[name]&email=$result[email]&
    phone=$result[phone]&email=$result[email]&date=$result[date]&time=$result[time]&trainingType=$result[trainingType]'><input type='submit' value='Delete' id='editbtn'  onclick ='return checkdeleted()'></a></td>
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